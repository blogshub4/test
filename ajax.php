<?php
if($_REQUEST['type']=='popup'){
$billing_name=$_REQUEST['billing_name'];
$billing_lastname=$_REQUEST['billing_lastname'];
$designation=$_REQUEST['designation'];
$billing_email=$_REQUEST['billing_email'];
$billing_tel=$_REQUEST['billing_tel'];
$mymessage=$_REQUEST['mymessage'];

require_once "/home4/dslqhzwy/php/Mail.php";
$from = "WillForumonline <admin@willforumonline.com>";
$to = "WillForumonline <pamasia@gmail.com>";
//$to = "WillForumonline <dsrana4@gmail.com>";
$subject = "Pop-UP Form Message-Willforumonline.com!";
		$message = '<html><body>';
		$message .= '<table width="80%"; rules="all" style="border:2px solid #ff8100;" cellpadding="10">';
		$message .= "<tr><td> <strong>Name</strong>  </td><td>$billing_name &nbsp;$billing_lastname</td></tr>";
		$message .= "<tr><td> <strong>Email</strong>  </td><td>$billing_email</td></tr>";
		$message .= "<tr><td> <strong>Contact Number</strong>  </td><td>$billing_tel</td></tr>";
		$message .= "<tr><td> <strong>Profile</strong>  </td><td>$designation</td></tr>";
		$message .= "<tr><td> <strong>Message</strong>  </td><td>$mymessage</td></tr>";
		$message .= "<tr><td> <strong>Amount</strong>  </td><td>15000</td></tr>";
		$message .= "</table>";
		$message .= "</body></html>";
		$body = $message; 
$host = "mail.willforumonline.com";
$port = "25";
$username = "admin@willforumonline.com";
$password = "L(VxaAScY*Sn";
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
//$mail = $smtp->send($to, $headers, $body);
}

if($_REQUEST['type']=='regpopup'){
$puname=$_REQUEST['puname'];
$pucompanyname=$_REQUEST['pucompanyname'];
$puemail=$_REQUEST['puemail'];
$puphone=$_REQUEST['puphone'];
$puecity=$_REQUEST['puecity'];

if($puname=='' or $pucompanyname=='' or $puemail=='' or $puphone=='' or $puecity=='')
{
echo "2";exit;
}

require_once "/home4/dslqhzwy/php/Mail.php";
$from = "WillForumonline <admin@willforumonline.com>";
$to = "WillForumonline <pamasia@gmail.com>";
//$to = "WillForumonline <dsrana4@gmail.com>";
$subject = "Pop-UP Form Message-Willforumonline.com!";
		$message = '<html><body>';
		$message .= '<table width="80%"; rules="all" style="border:2px solid #ff8100;" cellpadding="10">';
		$message .= "<tr><td> <strong>Name</strong>  </td><td>$puname </td></tr>";
		$message .= "<tr><td> <strong>Email</strong>  </td><td>$puemail</td></tr>";
		$message .= "<tr><td> <strong>Contact Number</strong>  </td><td>$puphone</td></tr>";
		$message .= "<tr><td> <strong>City</strong>  </td><td>$puecity</td></tr>";
		$message .= "<tr><td> <strong>Company</strong>  </td><td>$pucompanyname</td></tr>";
		$message .= "</table>";
		$message .= "</body></html>";
		$body = $message; 
$host = "mail.willforumonline.com";
$port = "25";
$username = "admin@willforumonline.com";
$password = "L(VxaAScY*Sn";
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


///////////////////Reply/////////////////////
$from = "WillForumonline <admin@willforumonline.com>";
$to = "WillForumonline <$puemail>";
//$to = "WillForumonline <dsrana4@gmail.com>";
$subject = "Willforumonline.com!";
		$message = '<html><body>';
		$message .= '<table width="80%"; rules="all" style="border:2px solid #ff8100;" cellpadding="10">';
		$message .= "<tr><td>Hi $puname</td></tr>";
		$message .= "<tr><td>Thank you for connecting with WILL Forum India!</td></tr>";
		$message .= "<tr><td>Our team will contact you soon with the program details and registration</td></tr>";
		$message .= "<tr><td><strong> Warm Regards </strong>,<br/>
WILL FORUM TEAM<br>Forum for Women in Leadership <br>Get in touch with us : Email <a href='mailto:poonam.barua@pamasiaglobal.com'>poonam.barua@pamasiaglobal.com</a> <br> Phone 981-017-3871</td></tr>";
		$message .= "</table>";
		$message .= "</body></html>";
		$body = $message; 
$host = "mail.willforumonline.com";
$port = "25";
$username = "admin@willforumonline.com";
$password = "L(VxaAScY*Sn";
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
$mailr = $smtp->send($to, $headers, $body);

//////////////////////////////////////////////////

echo "1";exit;
}




///////Reserve Seat Mailer


if($_REQUEST['type']=='reserveseatmaileract'){
	$reservename=$_REQUEST['reservename'];
	$reservedesignation=$_REQUEST['reservedesignation'];
	$reservecompanyname=$_REQUEST['reservecompanyname'];
	$reservemessage=$_REQUEST['reservemessage'];
	$reserveemail=$_REQUEST['reserveemail'];
	$reservephone=$_REQUEST['reservephone'];
	
	if($reservename=='' or $reservedesignation=='' or $reservecompanyname=='' or $reservemessage=='' or $reserveemail=='' or $reservephone=='')
	{
	echo "2";exit;
	}
	
	require_once "/home4/dslqhzwy/php/Mail.php";
	$from = "WillForumonline <admin@willforumonline.com>";
	$to = "WillForumonline <pamasia@gmail.com>";
	//$to = "WillForumonline <dsrana4@gmail.com>";
	$subject = "Researve Seat -Willforumonline.com!";
			$message = '<html><body>';
			$message .= '<table width="80%"; rules="all" style="border:2px solid #ff8100;" cellpadding="10">';
			$message .= "<tr><td> <strong>Name</strong>  </td><td>$reservename </td></tr>";
			$message .= "<tr><td> <strong>Email</strong>  </td><td>$reserveemail</td></tr>";
			$message .= "<tr><td> <strong>Mobile Number</strong>  </td><td>$reservephone</td></tr>";
			$message .= "<tr><td> <strong>Designation</strong>  </td><td>$reservedesignation</td></tr>";
			$message .= "<tr><td> <strong>Company</strong>  </td><td>$reservecompanyname</td></tr>";
			$message .= "<tr><td> <strong>Message</strong>  </td><td>$reservemessage</td></tr>";
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
	

	//////////////////////////////////////////////////
	
	echo "1";exit;
	}



	//////Reserve Seat Landing Page

	
if($_REQUEST['type']=='lndreserveseatmaileract'){
	$lnd_username=$_REQUEST['lnd_username'];
	$lnd_userphone=$_REQUEST['lnd_userphone'];
	$lnd_companyname=$_REQUEST['lnd_companyname'];
	$lnd_useremail=$_REQUEST['lnd_useremail'];
	
	if($lnd_username=='' or $lnd_userphone=='' or $lnd_companyname=='' or $lnd_useremail=='')
	{
	echo "2";exit;
	}
	
	require_once "/home4/dslqhzwy/php/Mail.php";
	$from = "WillForumonline <admin@willforumonline.com>";
	$to = "WillForumonline <pamasia@gmail.com>";
	//$to = "WillForumonline <dsrana4@gmail.com>";
	$subject = "Researve Seat -Willforumonline.com!";
			$message = '<html><body>';
			$message .= '<table width="80%"; rules="all" style="border:2px solid #ff8100;" cellpadding="10">';
			$message .= "<tr><td> <strong>Name</strong>  </td><td>$lnd_username </td></tr>";
			$message .= "<tr><td> <strong>Email</strong>  </td><td>$lnd_useremail</td></tr>";
			$message .= "<tr><td> <strong>Phone</strong>  </td><td>$lnd_userphone</td></tr>";
			$message .= "<tr><td> <strong>Company</strong>  </td><td>$lnd_companyname</td></tr>";
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
	
	echo "1";exit;
	}

	/// advance board certificate com
if($_REQUEST['type']=='abcc'){
	$billing_name=$_REQUEST['billing_name'];
	$companyname=$_REQUEST['companyname'];
	$billing_city=$_REQUEST['billing_city'];
	$designation=$_REQUEST['designation'];
	$billing_zip=$_REQUEST['billing_zip'];
	$billing_state=$_REQUEST['billing_state'];
	$billing_country=$_REQUEST['billing_country'];
	$billing_tel=$_REQUEST['billing_tel'];
	$billing_email=$_REQUEST['billing_email'];
	$billing_address=$_REQUEST['billing_address'];

	if($billing_name=='' or $companyname=='' or $billing_city=='' or $designation=='' or $billing_zip=='' or $billing_state=='' or $billing_country=='' or $billing_tel=='' or $billing_email=='' or $billing_address=='')
	{
	echo "2";exit;
	}
	
	require_once "/home4/dslqhzwy/php/Mail.php";
	$from = "WillForumonline <admin@willforumonline.com>";
	$to = "WillForumonline <pamasia@gmail.com>";
	// $to = "WillForumonline <dsrana4@gmail.com>";
	$subject = "Advance Board Certificate Complimentary -Willforumonline.com!";
			$message = '<html><body>';
			$message .= '<table width="80%"; rules="all" style="border:2px solid #ff8100;" cellpadding="10">';
			$message .= "<tr><td> <strong>Name</strong>  </td><td>$billing_name </td></tr>";
			$message .= "<tr><td> <strong>Company</strong>  </td><td>$companyname</td></tr>";
			$message .= "<tr><td> <strong>City</strong>  </td><td>$billing_city</td></tr>";
			$message .= "<tr><td> <strong>Designation</strong>  </td><td>$designation</td></tr>";
			$message .= "<tr><td> <strong>Pincode</strong>  </td><td>$billing_zip</td></tr>";
			$message .= "<tr><td> <strong>State</strong>  </td><td>$billing_state</td></tr>";
			$message .= "<tr><td> <strong>Country</strong>  </td><td>$billing_country</td></tr>";
			$message .= "<tr><td> <strong>Mobile</strong>  </td><td>$billing_tel</td></tr>";
			$message .= "<tr><td> <strong>Email</strong>  </td><td>$billing_email</td></tr>";
			$message .= "<tr><td> <strong>Address</strong>  </td><td>$billing_address</td></tr>";
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
	//////////////////////////////////////////////////
	echo "1";exit;
	}
?>