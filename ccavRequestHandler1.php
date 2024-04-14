<html>
<head>
<title> Iframe</title>
</head>
<body>
<center>
<?php include('Crypto.php'); 
include("config.php");
include("blockmail.php");
///////////////////////

if(isset($_REQUEST['pagename'])){$pagename = $_REQUEST['pagename'];}else{$pagename = '';}
if(isset($_REQUEST['sessionnamename'])){$sessionnamename = $_REQUEST['sessionnamename'];}else{$sessionnamename = '';}
if(isset($_REQUEST['tid'])){$tid = $_REQUEST['tid'];}else{$tid = '';}
if(isset($_REQUEST['order_id'])){$order_id = $_REQUEST['order_id'];}else{$order_id = '';}
if(isset($_REQUEST['amount'])){$amount = $_REQUEST['amount'];}else{$amount = '';}
if(isset($_REQUEST['billing_name'])){$billing_name = $_REQUEST['billing_name'];}else{$billing_name = '';}
if(isset($_REQUEST['designation'])){$designation = $_REQUEST['designation'];}else{$designation = '';}
if(isset($_REQUEST['companyname'])){$companyname = $_REQUEST['companyname'];}else{$companyname = '';}
if(isset($_REQUEST['billing_city'])){$billing_city = $_REQUEST['billing_city'];}else{$billing_city = '';}
if(isset($_REQUEST['billing_zip'])){$billing_zip = $_REQUEST['billing_zip'];}else{$billing_zip = '';}
if(isset($_REQUEST['billing_state'])){$billing_state = $_REQUEST['billing_state'];}else{$billing_state = '';}
if(isset($_REQUEST['billing_country'])){$billing_country = $_REQUEST['billing_country'];}else{$billing_country = '';}
if(isset($_REQUEST['billing_tel'])){$billing_tel = $_REQUEST['billing_tel'];}else{$billing_tel = '';}
if(isset($_REQUEST['billing_email'])){$billing_email = $_REQUEST['billing_email'];}else{$billing_email = '';}
if(isset($_REQUEST['billing_address'])){$billing_address = $_REQUEST['billing_address'];}else{$billing_address = '';}

// $sql = "INSERT INTO payment (pagename,sessionnamename,tid,order_id,amount,billing_name,designation,companyname,billing_city,billing_zip,billing_state,billing_country,billing_tel,billing_email,billing_address)

// VALUES ('$pagename','$sessionnamename','$tid','$order_id','$amount','$billing_name','$designation','$companyname','$billing_city','$billing_zip','$billing_state','$billing_country','$billing_tel','$billing_email','$billing_address')";

// $conn->exec($sql);

$checkmail = $billing_email;

/////////////

	error_reporting(E_ALL);
	ini_set('display_errors', 1);
	require_once "/home4/dslqhzwy/php/Mail.php";
	$from = "WillForumonline <admin@willforumonline.com>";
	// $to = "Payment Registration Form <pamasia@gmail.com>";
	$to = "Payment Registration Form <dsrana4@gmail.com>";
	$subject = "Payment Registration Form - willforumonline.com";
	$message = '<html><body>';
	$message .= '<table width="80%"; rules="all" style="border:2px solid #ff8100;" cellpadding="10">';
	if(isset($_POST['sessionnamename'])){$message .= "<tr><td> <strong>Session </strong>  </td><td>".$_POST['sessionnamename']."</td></tr>";}
	if(isset($_POST['billing_sem_date'])){$message .= "<tr><td> <strong>Date</strong>  </td><td>".$_POST['billing_sem_date']."</td></tr>";}
	if(isset($_POST['pagename'])){$message .= "<tr><td> <strong>Request Page</strong>  </td><td>".$_POST['pagename']."</td></tr>";}
	if(isset($_POST['amount'])){$message .= "<tr><td> <strong>Amount</strong>  </td><td>".$_POST['amount']."</td></tr>";}
	if(isset($_POST['billing_name'])){$message .= "<tr><td> <strong>Name</strong>  </td><td>".$_POST['billing_name']."</td></tr>";}
	if(isset($_POST['billing_tel'])){$message .= "<tr><td> <strong>Contact Number</strong>  </td><td>".$_POST['billing_tel']."</td></tr>";}
	if(isset($_POST['billing_email'])){$message .= "<tr><td> <strong>Email</strong>  </td><td>".$_POST['billing_email']."</td></tr>";}
	if(isset($_POST['designation'])){$message .= "<tr><td> <strong>Designation</strong>  </td><td>".$_POST['designation']."</td></tr>";}
	if(isset($_POST['companyname'])){$message .= "<tr><td> <strong>Compnay</strong>  </td><td>".$_POST['companyname']."</td></tr>";}

	if(isset($_POST['billing_city'])){$message .= "<tr><td> <strong>City</strong>  </td><td>".$_POST['billing_city']."</td></tr>";}
	if(isset($_POST['billing_address'])){$message .= "<tr><td> <strong>Address</strong>  </td><td>".$_POST['billing_address']."</td></tr>";}
	if(isset($_POST['billing_zip'])){$message .= "<tr><td> <strong>Pincode</strong>  </td><td>".$_POST['billing_zip']."</td></tr>";}
	if(isset($_POST['billing_state'])){$message .= "<tr><td> <strong>State</strong>  </td><td>".$_POST['billing_state']."</td></tr>";}
	if(isset($_POST['billing_country'])){$message .= "<tr><td> <strong>Country</strong>  </td><td>".$_POST['billing_country']."</td></tr>";}
	if($_POST['amount']!='' and $_POST['billing_name']!='' and $_POST['billing_email']!=''){

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
		if (in_array("$checkmail", $allmails)) 
		{ 
			//echo "found"; 
		} 
		elseif ($billing_address=='Minsk') 
		{ 
			//echo "found"; 
		} 
		elseif ($billing_city=='Minsk') 
		{ 
			//echo "found"; 
		} 
		else
		{ 
			$mail = $smtp->send($to, $headers, $body);
		}

	
		function RemoveSpecialChar($str) {
			$res = str_replace( array( '\'', '"',
			',' , ';', '<', '>','.','-','=','/'  ), ' ', $str);
			return $res;
			}

		$_POST['billing_name'] = RemoveSpecialChar($_POST['billing_name']);
		$_POST['designation'] = RemoveSpecialChar($_POST['designation']);
		$_POST['companyname'] = RemoveSpecialChar($_POST['companyname']);
		$_POST['billing_city'] = RemoveSpecialChar($_POST['billing_city']);
		$_POST['billing_zip'] = RemoveSpecialChar($_POST['billing_zip']);
		$_POST['billing_state'] = RemoveSpecialChar($_POST['billing_state']);
		$_POST['billing_country'] = RemoveSpecialChar($_POST['billing_country']);
		$_POST['billing_address'] = RemoveSpecialChar($_POST['billing_address']);
		$_POST['billing_tel'] = preg_replace("/[^0-9]/", "", $_POST['billing_tel']);

		$phcount = strlen($_POST['billing_tel']);
		if($phcount>10){
		$extnum = $phcount - 10;
		$_POST['billing_tel'] = substr($_POST['billing_tel'], $extnum);	
		}

		
	// print_r($_POST);
	$merchant_data='2';
	$working_key='7A157EB80BEB089C016CABED7B1E3437';//Shared by CCAVENUES
	$access_code='AVME80FI61CA54EMAC';//Shared by CCAVENUES
	
	foreach ($_POST as $key => $value){
		$merchant_data.=$key.'='.$value.'&';
	}

	}

	$encrypted_data=encrypt($merchant_data,$working_key); // Method for encrypting the data.



	$production_url='https://secure.ccavenue.com/transaction/transaction.do?command=initiateTransaction&encRequest='.$encrypted_data.'&access_code='.$access_code;

?>

<iframe src="<?php echo $production_url?>" id="paymentFrame" width="482" height="450" frameborder="0" scrolling="No" ></iframe>



<script type="text/javascript" src="jquery-1.7.2.js"></script>

<script type="text/javascript">

    	$(document).ready(function(){

    		 window.addEventListener('message', function(e) {

		    	 $("#paymentFrame").css("height",e.data['newHeight']+'px'); 	 

		 	 }, false);

	 	 	

		});

</script>

</center>

</body>

</html>



