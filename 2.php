<?php
if(isset($_REQUEST['testt'])){

$name="Dharmender"; $empyeemail ="dsrana4@gmail.com";
require_once "/home4/dslqhzwy/php/Mail.php";
//$from = "WillForumonline <admin@willforumonline.com>";
$from = "WILLForumonline <willforumindia@pamasiaglobal.com>";
$to = "WILLForumonline <dsrana4@gmail.com>";
//$to = "WILLForumonline <pamasia@gmail.com>";
$subject = "WILL Forum: Calendar of Programs: 2019";

$message = '<html><body>
<style>.table tr{border:1px solid #ddd!important; font-family:calibri !important;}</style>
<table width="80%" cellpadding="28" cellspacing="28" style=" max-width:660px; text-align:center;background-image:url(http://willforumonline.com/images/background/spaeker-background.jpg)">
<tr style="color:#FFFFFF;"><td style="line-height:42px;"> <img src="http://willforumonline.com/img/mailerlogo.jpg" style="float:left;border:#6d5811 solid 4px;" height="100"/>
<a style="padding:2% 0 0 0; font-size:32px; color:#FFFFFF;"> Forum for Women in Leadership</a><br><a style="font-size:28px; font-family:calibri; text-align:center; margin-top:5px;color:#FFFFFF;">Calender Of Programs: 2019 </a><br>
<a href="#" style="color:#FFFFFF; text-decoration:none; font-size:23px; color:red; font-weight:bold;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i>#WILL MeetUP!&nbsp; #WILL SpeakUP!</i></a></td></tr>
<tr style="color:#FFFFFF;"><td>
<img src="http://willforumonline.com/img/file.png" alt="speaker" class="img-fluid" width="90%">
<table width="100%" border="0" style="text-align:center; color:#FFFFFF; margin-top:2%; font-size:18px; margin-left:4%;" cellpadding="5" cellspacing="12">
<tr valign="top">
<td>February 9</td>
<td>February end</td>
<td>February 22</td>
<td>March</td>
</tr>
<tr valign="top">
<td>New Delhi</td>
<td>Mumbai</td>
<td>Chennai</td>
<td>Banglore</td>
</tr>
<tr valign="top">
<td>India International Center (IIC) </td>
<td>Taj Lands End, Mumbai</td>
<td><img src="http://willforumonline.com/images/ashokley.png" style=""/></td>
<td><img src="http://willforumonline.com/images/bosch.png" style=""/></td>
</tr>
<tr valign="top">
<td colspan="4">
<a href="http://www.willforumonline.com" style="color:#FFFFFF; font-weight:bold; text-decoration:none;">Register your interest here</a>
</td></tr>
</table>
<tr style=""><td><hr style="height:12px; background-color:#FFFFFF;"></td></tr>
<tr style="color:#FFFFFF;">
<td>
<img src="http://willforumonline.com/images/IMG_4493.JPG" alt="speaker" class="img-fluid"width="90%" >
<br /><br /><br><br><hr style="height:12px; background-color:#FFFFFF;"><br><br><br><br><img src="http://willforumonline.com/img/mentoringcoming.png" alt="speaker" class="img-fluid" width="100%">
<h1 style="font-size:27px;">WILL WorldClass Women in Leadership Program: 2019</h1>
<h2 style="font-size:24px;">5- Day Residential Leadership Program </h2>
<h2 style="color:#FF0000;font-size:24px; "><em>Celebrating 800 WILL Mentees since 2007!</em></h2>
<h3>New Delhi, Mumbai</h3><a href="http://www.willforumonline.com" style="color:#FFFFFF; font-weight:bold; text-decoration:none;">Register your interest here</a>
</td>
</tr>
<tr style=" height:4px;"><td><hr style="height:12px; background-color:#FFFFFF;"></td></tr>
<tr style="background-color:#fff;" valign="top";><td>
<table width="100%;" border="0" >
<tr valign="top";>
<td style="width:40%"><h3>"Leadership by Proxy" <br>- buy your copy now </h3><p><strong></strong><a href="http://goo.gl/3NZJXf"></a></p><br /><img src="http://willforumonline.com/images/book.png" />
<p style="color:#9b379b">
Support Women in Leadership! <br>
Order the Book "Leadership by Proxy" Online <br> @Amazon  <a href="http://goo.gl/3NZJXf">http://goo.gl/3NZJXf</a>
</p>
</td>
<td>
<h4 style="text-align:left;">Poonam Barua <br>Founder Chairman | Forum for Women in Leadership <br>CEO, WILL Forum India</h4>
<strong>Watch Thought Leaderhip Videos</strong>
<br><br>
<ul style="text-align:left;">
<li><a href="https://www.youtube.com/watch?v=ZA2Djv6bNIw">WILL Mentees 2018</a></li>
<li><a href="https://www.youtube.com/watch?v=T8yBwaTNou8">Strategic Networking</a></li>
<li><a href="https://www.youtube.com/watch?v=1gedjv3XGVw">Keynote Address to WILL Mentees 2018: Find your Inner Power!</a></li>
</ul><br><br>
Contact Us : 
<a href="mailto:Poonam.Barua@pamasiaglobal.com ">Poonam.Barua@pamasiaglobal.com </a>
<a href="www.willforumonline.com">www.willforumonline.com</a>
</td>
</tr>
</table>
<hr>
<a href="https://twitter.com/poonambaruaWILL"><img src="http://www.willforumonline.com/images/twitter.png" height="40" width="40"/></a>&nbsp;<a href="https://www.youtube.com/channel/UCCqJedzEBXsNtSqjnz_A3hQ"><img src="http://www.willforumonline.com/images/youtube.png"/></a>&nbsp;<a href="https://www.linkedin.com/in/poonam-barua-60a76910/"><img src="http://www.willforumonline.com/images/linkedin.png" height="40" width="40"/></a>
<img src="http://willforumonline.com/img/WILL-Band.jpg">
</td></tr>
</table>
</body></html>';

echo $message;

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
} 
?>

<form action="#" method="post" enctype="multipart/form-data" >
<input type="submit" name="testt" value="Send"/>
</form>