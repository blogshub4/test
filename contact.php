<?php include("header4.php");?>

<!--================================

=            Page Title            =

=================================-->

<section class="page-title bg-title overlay-dark">

	<div class="container">

		<div class="row">

			<div class="col-12 text-center">

				<div class="title">

					<h3>Contact Us</h3>

				</div>

				<ol class="breadcrumb p-0 m-0">

				  <li class="breadcrumb-item"><a href="index.html">Home</a></li>

				  <li class="breadcrumb-item active">Contact Us</li>

				</ol>

			</div>

		</div>

	</div>

</section>



<!--====  End of Page Title  ====-->





<section class="section contact-form">

	<div class="container">

		<div class="row">

		

			<div class="col-lg-12">



			<div class="col-lg-12">

			

			<div class="section-title">

<!--<p>
<strong>Poonam Barua</strong><br>
Founder Chairman<br> Forum for Women in Leadership <br>
Email: <a href="mailto:Poonam.Barua@pamasiaglobal.com">Poonam.Barua@pamasiaglobal.com</a> <br>
Phone: +91 11 26899930,+91 98 101 73871<br>
</p>-->



<div class="col-lg-12"> 

<div class="row">

<div class="col-lg-6">

<!--<hr>
<strong> Joceline Joshy </strong><br>
Executive Programs <br>
Email: <a href="mailto:Jocline.joshy@willforumonline.com">Jocline.joshy@willforumonline.com </a> <br>
 Phone: +91 95823 27923<br>-->
</div>

<div class="col-lg-6">

<!--<hr>
<strong>Yogini Bhramankar</strong><br>
WILL Mission Partner <br>
Email: <a href="mailto:yogini_apex@yahoo.com ">yogini_apex@yahoo.com  </a> <br>
Pune, India<br />-->

</div>

</div>





<div class="row">

<div class="col-lg-12">


<strong>Member and Program Services</strong><br>

For all enquiries related to Member and Program Services, 

Contact WILL Operations Desk <br><br>

<a href="mailto:willforumindia@pamasiaglobal.com" style="font-size:20px;color:black">willforumindia@pamasiaglobal.com</a><br />

</div>



<div class="col-lg-12">

<hr>

</div>



</div>

</div>





				</div>

			</div>

				<div class="section-title">

					<h3>Get in <span class="alternate">Touch</span></h3>

				</div>

			<!--</div>

		</div>-->

		

		<?php

		if(isset($_POST['contactmsg'])){

		$name=$_REQUEST['name']; $email=$_REQUEST['email'];$phone=$_REQUEST['phone'];$message1=$_REQUEST['message'];

		

		require_once "/home4/dslqhzwy/php/Mail.php";

$from = "WillForumonline <admin@willforumonline.com>";

$to = "WillForumonline <pamasia@gmail.com>";

// $to = "WillForumonline <dsrana4@gmail.com>";

$subject = "Contact Form Message-Willforumonine.com!";

		$message = '<html><body>';

		$message .= '<table width="80%"; rules="all" style="border:2px solid #ff8100;" cellpadding="10">';

		$message .= "<tr><td> <strong>Name</strong>  </td><td>$name</td></tr>";

		$message .= "<tr><td> <strong>Email</strong>  </td><td>$email</td></tr>";

		$message .= "<tr><td> <strong>Contact Number</strong>  </td><td>$phone</td></tr>";

		$message .= "<tr><td> <strong>Message</strong>  </td><td>$message1</td></tr>";

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

} else {

echo("<p>Thanks For Contact Us !</p>");

}



		

		}

		

		

		?>

		

		<form action="#" class="row" method="post">

			<div class="col-md-6">

				<input type="text" class="form-control main" name="name" id="name" placeholder="Name" required>

			</div>

			<div class="col-md-6">

				<input type="email" class="form-control main" name="email" id="email" placeholder="Email" required>

			</div>

			<div class="col-md-12">

				<input type="text" class="form-control main" name="phone" id="phone" placeholder="Phone" required>

			</div>

			<div class="col-md-12">

				<textarea name="message" id="message" class="form-control main" rows="5" placeholder="Your Message" required></textarea>

			</div>

			<div class="col-12 text-center">

				<button type="submit" class="btn btn-main-md" name="contactmsg">Send Message</button>

			</div>

		</form>

		</div>

		

	



</div>

	</div>

		</div>

</section>



<!--================================

=            Google Map            =

=================================-->



<!--<div class="address-block" style=" height:400px;">

	<iframe src="https://maps.google.com/maps?q=regus%20business%20center%2C%20vasant%20kunj&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

</div>-->



<!--</section>-->

<!--====  End of Google Map  ====-->



<!--============================

=            Footer            =

=============================-->



<?php include("footer.php");?>