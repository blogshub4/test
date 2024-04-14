<?php include("header4.php");?>

<section class="page-title1 mentoring-bg-title1 overlay-dark1" >
	<div class="container1" style=" width:100%; border-bottom:#FF0000">
		<div class="row">
			<div class="col-12 text-center1" ><br /><Br /><br /><br><br>
				<img src="images/2022/esg_certify_img.jpeg" alt="esg certify" style="width:100%">
			</div>
		</div>
	</div>
</section>

<style>.topright {position: absolute;top:0px;right: 16px;font-size: 18px; z-index:9999999999 !important;}</style>
<!--====  End of Page Title  ====-->
<!--===================     About ===============-->
<section class="section about">
	
<style>

/*.container {
  padding: 20px;
}*/

input[type=text], input[type=submit] {
  width: 100%;
  padding: 12px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box; background-color:#fff;color: white;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  border: none;
}

input[type=submit]:hover {
  opacity: 0.8;
}
</style>
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 align-self-center">
				<div class="content-block1">	
				<div class="description-one2">
					<p style="text-align:justify;">

<!--<h3 style='text-align:center'>Coming  Soon ! </h3>-->
<p style='text-align:center;font-weight:bold;color:black;font-size:18px;'>

<h4>WILL Women on Corporate Boards Series <br>
WOMEN. BOARDS & ESG <br>
Certification Program <br>
December 3, 2022<br><br>
<span style="color:#A020F0;font-size:22px;">India International Centre, New Delhi:<br>
Register your seat!</span>
</h4><br>

<a href="Brochure_Women_on_Boards _WSG.pdf" target="_blank" style="color:#A020F0;font-size:22px;">Download Brochure Women on Boards  WSG</a>

		<!--////////////////////////Register Form/////////////////-->
		<style>.frmimpect{background-color:#fff !important;color:#000 !important;}</style>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

		<section class="section about">

<div class="container"  >
<div class="row">
		<div class="content-block1">
			<div class="description-one2">
					<div style="text-align:center;" >
						<div style="margin-top:2%;float:left;" class='col-md-2'> </div>
						<div style="margin-top:2%;float:left;" class='col-md-8'> 
							<div class="col-lg-12 col-md-12 align-self-center" style="background-color:#008000; padding: 30px;">	
										<p style="text-align:left; color:#fff;"><strong >

										Corporate Board Series:<br>Program Fee: Rs. 10,000 per participant + GST
										</strong></p>
										<form action="ccavRequestHandler.php" class="row" method="post" enctype="multipart/form-data" id='form'>
											<input type="hidden" name="tid" id="tid" readonly />
											<input type="hidden" name="merchant_id" value="119389"/>
											<input type="hidden" name="order_id" value="<?php echo(rand(10,10000));?>"/>
											<input type="hidden" name="amount" value="11800.00" class="amount"/> 
											<input type="hidden" name="currency" value="INR" class="currency"/>
											<input type="hidden" name="redirect_url" value="http://willforumonline.com/ccavResponseHandler.php"/>
											<input type="hidden" name="cancel_url" value="http://willforumonline.com/ccavResponseHandler.php"/>
											<input type="hidden" name="language" value="EN"/>
											<input type="hidden" name="integration_type" value="iframe_normal"/>	
											<input type="hidden" name="pagename" id="pagename" value="ESG CERTIFY" /> 
											<input type="hidden" name="sessionnamename" id="sessionnamename" class="sessionnamename" value="ESG CERTIFY" />
											<div class="col-md-12" style="text-align:left;">
											<script>
											$(document).ready(function(){
											$('.rad1').change(function(){
												var totalval= $(this).val();
												$(".amount").val(totalval);
											});
											});
											</script>

													

											</div>
											<div class="col-md-12">
											<input type="text" class="form-control main frmimpect" name="billing_name" id="billing_name" placeholder="Name" required>
											</div>
											<div class="col-md-12">
											<input type="text" class="form-control main frmimpect" name="designation" id="designation" placeholder="Designation" required>
											</div>
											<div class="col-md-12">
											<input type="text" class="form-control main frmimpect" name="companyname" id="companyname" placeholder="Company Name" required>
											</div>
											<div class="col-md-12">
											<input type="text" class="form-control main frmimpect" name="billing_city" id="billing_city" placeholder="City" required>
											</div>
											<div class="col-md-12">
											<input type="text" class="form-control main frmimpect" name="billing_zip" id="billing_zip" placeholder="Pincode" required>
											</div>
											<div class="col-md-12">
											<input type="text" class="form-control main frmimpect" name="billing_state" id="billing_state" placeholder="State" required>
											</div>
											<div class="col-md-12">
											<input type="text" class="form-control main frmimpect" name="billing_country" id="billing_country" placeholder="Country" required>
											</div>
											<div class="col-md-12">
											<input type="text" class="form-control main frmimpect" name="billing_tel" id="billing_tel" placeholder="Mobile Number" maxlength="15" required>
											</div>
											<div class="col-md-12">
											<input type="text" class="form-control main frmimpect" name="billing_email" id="billing_email" placeholder="Email" required>
											</div>
											<div class="col-md-12">
											<textarea name="billing_address" id="billing_address" class="form-control main frmimpect" rows="2" placeholder="Address"></textarea>
											</div>

											<div class="col-6 text-center">
											<button type="submit" class="btn btn-main-md" name="benchRegister" id="benchRegister1"> Register</button>
											</div>



										</form>
							</div>		
						</div>
					</div>
			</div>
		</div>
</div>



</section>

<script>
	$("#benchRegister").click(function(){
		var billing_name = $('#billing_name').val();
		if(billing_name==''){ alert("Please fill Name");return false;}
		var designation = $('#designation').val();
		if(designation==''){ alert("Please fill designation");return false;}
		var companyname = $('#companyname').val();
		if(companyname==''){ alert("Please fill company name");return false;}
		var billing_city = $('#billing_city').val();
		if(billing_city==''){ alert("Please fill city");return false;}
		var billing_zip = $('#billing_zip').val();
		if(billing_zip==''){ alert("Please fill pincode");return false;}
		var billing_state = $('#billing_state').val();
		if(billing_state==''){ alert("Please fill state");return false;}
		var billing_country = $('#billing_country').val();
		if(billing_country==''){ alert("Please fill country");return false;}

		var billing_tel = $('#billing_tel').val();
		if(billing_tel==''){ alert("Please fill contact number");return false;}
		var billing_email = $('#billing_email').val();
		if(billing_email==''){ alert("Please fill Email");return false;}
if(confirm (` Conference Registration Fee: \n Rs. 8,000 \n Award Registration Fee: \n Rs. 8,000 \n GST 18% \n Total Fee to be Paid: \n Rs. 18,800  \n \n Please Confirm Agreed:`))
    $("#form")[0].submit();
});
</script>
<!--////////////////////////Register Form End/////////////////-->


<br />
<style>
@media(min-width:992px) and (max-width:2100px) {.columnimg {float: left;width: 33.3%;margin-bottom: 16px;padding: 0 2px;}}
@media(min-width:168px) and (max-width:991px) { .columnimg {float: left;width: 100%;margin-bottom: 6px;padding: 0 2px;}}
@media screen and (max-width: 650px) {.columnimg {display: block;}} 
.columnimg{font-style: italic;} .columnimg .card{ border:none !important;}
</style>
  







<style>







@media(min-width:168px) and (max-width:991px) {







.cimgwidth {width:100%}







}







@media(min-width:992px) and (max-width:2100px) {







.cimgwidth {width:65%}







}







</style>









<div><br /><bR />



<div style="text-align:center;" >



<style>@media(min-width:168px) and (max-width:991px) { .imgtespons{width:100%} } </style>



</div>



</p>











<style>







@media(min-width:992px) and (max-width:2100px) {.column {float: left;width: 25%;margin-bottom: 16px;padding: 0 6px;}}







/*@media(min-width:168px) and (max-width:991px) { .column {float: left;width: 33.3%;margin-bottom: 6px;padding: 0 6px; height:255px;}}*/







@media(min-width:168px) and (max-width:991px) { .column {float: left;width: 100%;margin-bottom: 6px;padding: 0 6px;}}







@media screen and (max-width: 650px) {.column {display: block;}} 







.column{font-style: italic;}







</style>







































  <div class="table-responsive">          







  <table class="table">







      <tr><th></th></tr>







  </table>







  </div>























<div style=";" class="col-md-12" >























</div>







<script>







	window.onload = function() {







		var d = new Date().getTime();







		document.getElementById("tid").value = d;







	};







</script>















		







</div>























						</p>







					</div>







				







					







				</div>







			</div>







		</div>







	</div>







</section>















<?php //include("related_services.php");?>







<?php include("footer.php");?>