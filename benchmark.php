<?php include("header4.php");?>

<!--================================
=            Page Title            =

=================================-->

<section class="page-title1 mentoring-bg-title1 overlay-dark1" >

	<div class="container1" style=" width:100%; border-bottom:#FF0000">

		<div class="row">

			<div class="col-12 text-center1" ><br /><Br /><br /><Br /><br /><br />

<img src="images/slider/benchmark.png" alt="4" style="width:100%">

			</div>

		</div>

	</div>

</section>

<!--====  End of Page Title  ====-->

<!--===========================  About============================-->

<section class="section about">

	<div class="container">

		<div class="row">

			<!--<div class="col-lg-4 col-md-6 align-self-center1" >

				<div class="image-block bg-about">

					<img class="img-fluid1" src="images/slider/poonam.jpg" alt="">

				</div>

			</div>-->

			<div class="col-lg-12 col-md-6 align-self-center">

				<div class="content-block1">

					<h4> WILL Best Employers For Women: Benchmarking</h4>

					<h4 style="color:#c00000;">Awards & Certification 2020-21 </h4>

					<div class="description-one2">

						<p style="text-align:justify;">

							<h5>Benchmarking Companies For Diversity, Equal Opportunity, and Balanced leadership</h5>

							

							



<br /><br /><h4>Vision and Mandate</h4>

<h4>WILL Best Employers for Women: Benchmarking</h4>



<p>

It is now clear that women define Best Employer Companies --quite differently from their male counterparts. Companies who wish to attract, retain, and nurture women for advanced management positions in their companies will need to take a hard look at "what women want in their organizations" -- rather than use minor interventions to keep women engaged in the vision of the company business success.

</p>

<p>

While most enlightened business leaders and companies fully  understand  the need to  address the best practices for women in the workplace -- they have not been able to articulate how this translates into the corporate code of conduct, best HR practices in the organizations, equal opportunity policies, and gender-neutral assessments and leadership.

<br /><br />

The "WILL Best Employers for Women: Benchmarking" will be devoted to inspiring companies and providing them with the tool-kit to benchmark their eco-systems for nurturing and retaining women and their talents in the organization, for best business success and rewards to society.

We invite you to join us on this important mission.

Poonam Barua, Founder Chairman, Forum for Women in Leadership WILL Forum India



</p>



<?php

		if(isset($_POST['benchRegister111'])){

		$name=$_REQUEST['myname']; $email=$_REQUEST['email'];$phone=$_REQUEST['mobile'];

		$Designation=$_REQUEST['Designation'];$cname=$_REQUEST['cname'];$city=$_REQUEST['city'];$pincode=$_REQUEST['pincode'];$state=$_REQUEST['state'];$country=$_REQUEST['country'];

		//$message1=$_REQUEST['message'];

		require_once "/home4/dslqhzwy/php/Mail.php";

		$from = "WILLForumonline <admin@willforumonline.com>";

		$to = "WillForumonline <pamasia@gmail.com>";

		//$to = "WILLForumonline <dsrana4@gmail.com>";

		$subject = "BenchMark Form Message-Willforumonine.com!";

		$message = '<html><body>';

		$message .= '<table width="80%"; rules="all" style="border:2px solid #ff8100;" cellpadding="10">';

		$message .= "<tr><td> <strong>Name</strong>  </td><td>$name</td></tr>";

		$message .= "<tr><td> <strong>Email</strong>  </td><td>$email</td></tr>";

		$message .= "<tr><td> <strong>Contact Number</strong>  </td><td>$phone</td></tr>";

		$message .= "<tr><td> <strong>Designation</strong>  </td><td>$Designation</td></tr>";

		$message .= "<tr><td> <strong>Company</strong>  </td><td>$cname</td></tr>";

		$message .= "<tr><td> <strong>City</strong>  </td><td>$city</td></tr>";

		$message .= "<tr><td> <strong>Pincode</strong>  </td><td>$pincode</td></tr>";

		$message .= "<tr><td> <strong>State</strong>  </td><td>$state</td></tr>";

		$message .= "<tr><td> <strong>Country</strong>  </td><td>$country</td></tr>";

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

if (PEAR::isError($mail)) {

echo("<p>" . $mail->getMessage() . "</p>");

} else {

echo("<p>Thanks For your interested !</p>");

}



		

		}

		

		

		?>

		<br />

<em style="color:#c00000; font-weight:bold;">Do the WILL Benchmarking for your Company and get your "WILL Gender Quotient Index (GQI)" !</em><br />		

<div style="text-align:center;">







<p style="text-align:left; color:#000000;"><strong >Register Now</strong></p>

		<form action="ccavRequestHandler.php" class="row" method="post" enctype="multipart/form-data">

		<input type="hidden" name="tid" id="tid" readonly />

<input type="hidden" name="merchant_id" value="119389"/>

<input type="hidden" name="order_id" value="<?php echo(rand(10,10000));?>"/>

<input type="hidden" name="amount" value="59000.00" class="amount"/> 

<input type="hidden" name="currency" value="INR" class="currency"/>

<input type="hidden" name="redirect_url" value="http://willforumonline.com/ccavResponseHandler.php"/>

<input type="hidden" name="cancel_url" value="http://willforumonline.com/ccavResponseHandler.php"/>

<input type="hidden" name="language" value="EN"/>

<input type="hidden" name="integration_type" value="iframe_normal"/>	

		<input type="hidden" name="pagename" id="pagename" value="benchmark" /> 

<input type="hidden" name="sessionnamename" id="sessionnamename" class="sessionnamename" value="benchmark" />



		<div class="col-md-12" style="text-align:left;">

			<input type="checkbox" checked/>

			<strong>Yes. we are interested in WILL Benchmarking and Awards:2020-21 <br> &nbsp;&nbsp;&nbsp;&nbsp; Rs. 50,000 (plus GST)</strong>

</div>

			

			<div class="col-md-6">

						<input type="text" class="form-control main" name="billing_name" id="billing_name" placeholder="Name" required>

			</div>

			<div class="col-md-6"></div>

			<div class="col-md-6">

				<input type="text" class="form-control main" name="designation" id="designation" placeholder="Designation" required>

			</div>

			<div class="col-md-6"></div>

			<div class="col-md-6">

				<input type="text" class="form-control main" name="companyname" id="companyname" placeholder="Company Name" required>

			</div>

			<div class="col-md-6"></div>

			<div class="col-md-6">

				<input type="text" class="form-control main" name="billing_city" id="billing_city" placeholder="City" required>

			</div>

			<div class="col-md-6"></div>

			<div class="col-md-6">

				<input type="text" class="form-control main" name="billing_zip" id="billing_zip" placeholder="Pincode" required>

			</div>

			<div class="col-md-6"></div>

			<div class="col-md-6">

				<input type="text" class="form-control main" name="billing_state" id="billing_state" placeholder="State" required>

			</div>

			<div class="col-md-6"></div>

			<div class="col-md-6">

				<input type="text" class="form-control main" name="billing_country" id="billing_country" placeholder="Country" required>

			</div>

			<div class="col-md-6"></div>

			<div class="col-md-6">

				<input type="text" class="form-control main" name="billing_tel" id="billing_tel" placeholder="Mobile Number" maxlength="15" required>

			</div>

			<div class="col-md-6"></div>

			<div class="col-md-6">

				<input type="text" class="form-control main" name="billing_email" id="billing_email" placeholder="Email" required>

			</div>

			<div class="col-md-6"></div>

			<div class="col-md-6">

				<textarea name="billing_address" id="billing_address" class="form-control main" rows="2" placeholder="Address"></textarea>

			</div>

			<div class="col-md-6"></div>

			<div class="col-6 text-center">

				<button type="submit" class="btn btn-main-md" name="benchRegister" id="benchRegister"> Register</button>

			</div>

		</form>

</div>





						</p>

					</div>

				

					

				</div>

			</div>

		</div>

	</div>

</section>



<?php include("related_services.php");?>

<?php include("footer.php");?>