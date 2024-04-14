<?php include("header4.php");?>
<?php include('Crypto.php')?>
<?php  echo "<br><br><br><br><br>";

	error_reporting(E_ALL);
	ini_set('display_errors', 1);
	
	$workingKey='7A157EB80BEB089C016CABED7B1E3437';		//Working Key should be provided here.
	$encResponse=$_POST["encResp"];			//This is the response sent by the CCAvenue Server
	$rcvdString=decrypt($encResponse,$workingKey);		//Crypto Decryption used as per the specified working key.
	$order_status="";
	$decryptValues=explode('&', $rcvdString);
	$dataSize=sizeof($decryptValues);
	echo "<center>";
	
	for($i = 0; $i < $dataSize; $i++) 
	{
		$information=explode('=',$decryptValues[$i]);
		if($i==3)	$order_status=$information[1];
		if($i==10)	$amount=$information[1];
		if($i==11)	$billing_name=$information[1];
		if($i==17)	$billing_tel=$information[1];
		if($i==18)	$billing_email=$information[1];
		if($i==26)	$merchant_param1=$information[1];
		if($i==27)	$merchant_param2=$information[1];
	}

	if($order_status==="Success")
	{ 
					echo "<br><br><br><br><br><br><br>";
					echo "<br><b>Thank you your transaction is successful.</b>";
					
				//	mail for admin
				require_once "/home4/dslqhzwy/php/Mail.php";
				$from = "WillForumonline <admin@willforumonline.com>";
				$to = "WillForumOnline <pamasia@gmail.com>";
				//$to = "WillForumOnline <dsrana4@gmail.com>";
				$subject = "Success Payment Detail-willforumonline.com";
				$message = '<html><body>';
						$message .= '<table width="80%"; rules="all" style="border:2px solid #ff8100;" cellpadding="10">';
						$message .= "<tr><td> <strong>Amount</strong>  </td><td>$amount</td></tr>";
						$message .= "<tr><td> <strong>Name</strong>  </td><td>$billing_name</td></tr>";
						$message .= "<tr><td> <strong>Contact Number</strong>  </td><td>$billing_tel</td></tr>";
						$message .= "<tr><td> <strong>Email</strong>  </td><td>$billing_email</td></tr>";
						if($merchant_param1!=''){$message .= "<tr><td> <strong>Designation</strong>  </td><td>$merchant_param1</td></tr>";}
						if($merchant_param2!=''){$message .= "<tr><td> <strong>Compnay</strong>  </td><td>$merchant_param2</td></tr>";}
						
						$message .= "</table>";
						$message .= "</body></html>";
				$body = $message;
				$host = "mail.willforumonline.com";
				$port = "25";
				$username = "admin@willforumonline.com";
				$password = "m2aAfRX$7YNl";
				$headers = array (
				'MIME-Version' => '1.0rn',
				'Content-Type' => "text/html; charset=ISO-8859-1rn",
				'From' => $from,
				'To' => $to,
				'Subject' => $subject);
				$smtp = Mail::factory('smtp',
				array ('host' => $host,
				'port' => $port,
				'auth' => true,
				'username' => $username,
				'password' => $password));
				$mail = $smtp->send($to, $headers, $body);
				if (PEAR::isError($mail)) {
				echo("<p>" . $mail->getMessage() . "</p>");
				} else {//echo("<p>Message successfully sent!</p>");
				}
	
		//echo "<br>Thank you for shopping with us. Your credit card has been charged and your transaction is successful. We will be shipping your order to you soon.";
		
	}
	else if($order_status==="Aborted")
	{
		echo "<br><br><br><br><br>";echo "<br><br>";
		//echo "<br>Thank you for shopping with us.We will keep you posted regarding the status of your order through e-mail";
		echo "<br>Thank you for register with us, Contact at willforumindia@pamasiaglobal.com for any query";
	
	}
	else if($order_status==="Failure")
	{
		echo "<br><br><br><br><br>";echo "<br><br>";
		echo "<br>Thank you for register with us.However,the transaction has been declined.";
	}
	else
	{
		echo "<br><br><br><br><br>";echo "<br><br>";
		//echo "<br>Security Error. Illegal access detected";
		echo "<br>Thank you for register with us, Contact at willforumindia@pamasiaglobal.com for any query";
	
	}

	echo "<br><br>";

	echo "<table cellspacing=4 cellpadding=4>";
	for($i = 0; $i < $dataSize; $i++) 
	{
		$information=explode('=',$decryptValues[$i]);
	    	//echo '<tr><td>'.$information[0].'</td><td>'.$information[1].'</td></tr>';
	}

	echo "</table><br>";
	echo "</center>";
	echo "<br><br><br><br><br>";echo "<br><br><br><br><br>";
?>
<?php include("footer.php");?>