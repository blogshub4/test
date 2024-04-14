<?php include("header4.php");?>
<style>.topright {position: absolute;top:0px;right: 16px;font-size: 18px; z-index:9999999999 !important;}
::placeholder { color: #000 !important; opacity: 1;}:-ms-input-placeholder { color: #000 !important;}::-ms-input-placeholder { color: #000 !important;}
option { color: #000 !important;} select { color: #000 !important;}input { color: #000 !important;}
p{ color:#000000!important}
table{ color:#000000!important; font-weight:bold;}
</style>
<!--====  End of Page Title  ====-->
<section class="section about">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-6 align-self-center">
				<div class="content-block1">
					<div class="description-one2" style="margin-top:150px;">
<?php 
/*$servername = "localhost";
$username = "root";
$password = "";
$dbname = "will";*/

$servername = "localhost";
$username = "dslqhzwy_willforumuser";
$password = "%A~jd_yM=F-x";
$dbname = "dslqhzwy_willforum";
if(!isset($_REQUEST['id'])) { ?>							
<div style="text-align:center;">
<p>
<h4>WILL Benchmarking: 2021<br /> "Best Employers for Women Companies"</h4></p>
<p><h4 style="color:#000080;">Applied Materials India Pvt Ltd</h4></p>
<h6>Phase 1- WILL Benchmarking Questionnaire</h6>
</div>	

<h5><u>Mission and Mandate:</u></h5>

<p>Given the rising talent and increasing role of women in business success, it is the appropriate time to put into place an institutional set of criteria that will become an authentic reference point for benchmarking the "Best Employer Companies for Women"  -- as a critical guidance to  the organizations commitment for building inclusive and "Balanced leadership".</p>

<p><br />
The "WILL Benchmarking Survey Questionnaire" will help to understand how key executive men and women view the entire eco-system of best practices for women in the workplace, corporate disclosures on women in leadership positions, the value of inclusive leadership assessment tool- kits, and the critical importance for mentoring women for advanced management positions and boardrooms - in your organization
</p>
<p><br>
The WILL Questionnaire will require responses from at least 60 women and men executives in your company and survey responses will be received directly at : <a href='mailto:Willforum@willforumindia.com'>Willforum@willforumindia.com</a>
</p>
<p><br>
All responses to the questionnaire will remain confidential, and we are committed to the privacy of all our stakeholders.
<br>
Thank you for your time and inspiration on building “balanced  leadership” for best  rewards to business & society!
</p>





<br />



<p style="font-weight:bold;">Poonam Barua<br />

Founder Chairman<br />

Forum for Women in Leadership</p>



<p style="text-align:center;"><b>*******************************************</b></p><br />



<?php  

if(isset($_REQUEST['srvsubmit'])){



$empoyeename=$_REQUEST['username'];

$Designation=$_REQUEST['Designation'];

$Organization=$_REQUEST['Organization'];

$Gender=$_REQUEST['Gender'];

$mstatus=$_REQUEST['mstatus'];

$experience=$_REQUEST['experience'];

$location=$_REQUEST['location'];

date_default_timezone_set("Asia/Calcutta"); 

$cdate=date("Y-m-d h:i:s");



try {

    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    // set the PDO error mode to exception

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "INSERT INTO user (name, desgnationn, orgazition,gender,maritalstatus,expereince,location,regdate,companyname)

    VALUES ('$empoyeename', '$Designation', '$Organization','$Gender','$mstatus','$experience','$location','$cdate','AppliedMaterialsIndia')";

    // use exec() because no results are returned

    $conn->exec($sql);

	$last_id = $conn->lastInsertId();

    ?>

<script>window.location="AppliedMaterialsIndia.php?s=y&id=<?php echo $last_id; ?>&p=1";</script>

	<?php 

	}

catch(PDOException $e)

    {

    echo $sql . "<br>" . $e->getMessage();

    }

$conn = null;

}

?>



<form method="post" name="surveyfrm" action="#">



<div class="col-md-12">

				<input type="text" class="form-control main col-md-6" name="username" id="username" placeholder="Name of the Participant " >

			</div>

			<!--<div class="col-md-6"></div>-->

			<div class="col-md-12">

				<input type="text" class="form-control main col-md-6" name="Designation" id="Designation" placeholder="Designation or Functional Area " >

			</div>



<div class="col-md-12">

				<input type="text" class="form-control main col-md-6" name="Organization" id="Organization" placeholder="Organization " required>

			</div>



			<div class="col-md-12">

				<select name="Gender" id="Gender" class="form-control main col-md-6" required>

				<option value="">Select Gender</option>

				<option>Male</option>

				<option>Female</option>

				</select>

			</div>

		

			<div class="col-md-12">

				<select name="mstatus" id="mstatus" class="form-control main col-md-6" required>

				<option value="">Select Marital Status</option>

				<option>Married</option>

				<option>Unmarried</option>

				</select>

			</div>

		

	<div class="col-md-12">

				<input type="text" class="form-control main col-md-6" name="experience" id="experience" placeholder="Total work experience" required>

			</div>

			<!--<div class="col-md-6"></div>-->

			<div class="col-md-12">

				<input type="text" class="form-control main col-md-6" name="location" id="location" placeholder="Location/ City " required>

			</div>



	<div class="col-md-6"></div>

			<div class="col-6 text-center">

				<button type="submit" class="btn btn-main-md" name="srvsubmit" id="srvsubmit"> NEXT</button>

			</div>				

</form>



<?php } if(isset($_REQUEST['id']) and $_REQUEST['id']!='') { ?>

<style>input[type="radio"] {

  margin-right: 5px; margin-left:5px;

}</style>



<!--<form action="#" method="post" enctype="#">-->



<script type="text/javascript">

function validateForm(daForm) {

	// check all rb radio buttons

	for (var i = 1; i <= 25; i++) {

		if (! getCheckedRadioValue(daForm["selectedAnswer"+i])) {

			alert ("Please select a value for question " + i)

			return false

		}

	}// add other checks here...

	return true

}

function getCheckedRadioValue(radio) {

	for (var i=0; i < radio.length; i++) {

		if (radio[i].checked) return radio[i].value

	}

	return false

}

//////////////////////////////////////



function validateForm2(daForm) {

	// check all rb radio buttons

	for (var i = 26; i <= 50; i++) {

		if (! getCheckedRadioValue2(daForm["selectedAnswer"+i])) {

			alert ("Please select a value for question " + i)

			return false

		}

	}// add other checks here...

	return true

}

function getCheckedRadioValue2(radio) {

	for (var i=0; i < radio.length; i++) {

		if (radio[i].checked) return radio[i].value

	}

	return false

}

/////////////////////////////////////////



function validateForm3(daForm) {

	// check all rb radio buttons

	for (var i = 51; i <= 75; i++) {

		if (! getCheckedRadioValue3(daForm["selectedAnswer"+i])) {

			alert ("Please select a value for question " + i)

			return false

		}

	}// add other checks here...

	return true

}

function getCheckedRadioValue3(radio) {

	for (var i=0; i < radio.length; i++) {

		if (radio[i].checked) return radio[i].value

	}

	return false

}

////////////////////////////////

function validateForm4(daForm) {

	// check all rb radio buttons

	for (var i = 76; i <= 85; i++) {

		if (! getCheckedRadioValue4(daForm["selectedAnswer"+i])) {

			alert ("Please select a value for question " + i)

			return false

		}

	}// add other checks here...

	return true

}

function getCheckedRadioValue4(radio) {

	for (var i=0; i < radio.length; i++) {

		if (radio[i].checked) return radio[i].value

	}

	return false

}

</script>



<?php if($_REQUEST['p']==1){?>

<form action="#" method="post" enctype="#" onsubmit="return validateForm(this)">

<?php }  if($_REQUEST['p']==2){?>

<form action="#" method="post" enctype="#" onsubmit="return validateForm2(this)">

<?php } if($_REQUEST['p']==3){?>

<form action="#" method="post" enctype="#" onsubmit="return validateForm3(this)">

<?php } if($_REQUEST['p']==4){?>

<form action="#" method="post" enctype="#" onsubmit="return validateForm4(this)">

<?php } ?>



<?php

//////////////////////////1-25////////////////

if(isset($_REQUEST['ansqstsubmit25'])){

for($i=1;$i<=25;$i=$i+1)

{

date_default_timezone_set("Asia/Calcutta"); 

$cdate=date("Y-m-d h:i:s");

$selectedans=$_REQUEST["selectedAnswer$i"];

$qst=$_REQUEST["q$i"]; echo "<br>";

$userID=$_REQUEST['id'];

try {

    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    // set the PDO error mode to exception

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "INSERT INTO survey (userid, answer, sdate, question)

    VALUES ('$userID', '$selectedans', '$cdate','$qst')";

    $conn->exec($sql);

    ?>

<script>window.location="AppliedMaterialsIndia.php?s=y&id=<?php echo $userID; ?>&p=2";</script>	

	<?php 

	}

catch(PDOException $e)

    {

    echo $sql . "<br>" . $e->getMessage();

    }

$conn = null;



}

}



///////////////////////26-50

if(isset($_REQUEST['ansqstsubmit50'])){

for($i=26;$i<=50;$i=$i+1)

{

date_default_timezone_set("Asia/Calcutta"); 

$cdate=date("Y-m-d h:i:s");

$selectedans=$_REQUEST["selectedAnswer$i"];

$qst=$_REQUEST["q$i"];

$userID=$_REQUEST['id'];



if($i==31){ $otherans=$_REQUEST['otherans31'];}

elseif($i==33){$otherans=$_REQUEST['otherans33'];}

else{$otherans='';}



try {

    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    // set the PDO error mode to exception

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "INSERT INTO survey (userid, answer, sdate, question,other)

    VALUES ('$userID', '$selectedans', '$cdate','$qst','$otherans')";

    // use exec() because no results are returned

    $conn->exec($sql);

    ?>

<script>window.location="AppliedMaterialsIndia.php?s=y&id=<?php echo $userID; ?>&p=3";</script>		

	<?php 

	}

catch(PDOException $e)

    {

    echo $sql . "<br>" . $e->getMessage();

    }

$conn = null;



}

}



///////////////////////////////51-75////////



if(isset($_REQUEST['ansqstsubmit75'])){

for($i=51;$i<=75;$i=$i+1)

{

date_default_timezone_set("Asia/Calcutta"); 

$cdate=date("Y-m-d h:i:s");

$selectedans=$_REQUEST["selectedAnswer$i"];

$qst=$_REQUEST["q$i"];

$userID=$_REQUEST['id'];



if($i==64){ $otherans=$_REQUEST['otherans64'];}else{$otherans='';}



try {

    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    // set the PDO error mode to exception

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "INSERT INTO survey (userid, answer, sdate, question,other)

    VALUES ('$userID', '$selectedans', '$cdate','$qst','$otherans')";

    // use exec() because no results are returned

    $conn->exec($sql);

    ?>

<script>window.location="AppliedMaterialsIndia.php?s=y&id=<?php echo $userID; ?>&p=4";</script>		

	<?php 

	}

catch(PDOException $e)

    {

    echo $sql . "<br>" . $e->getMessage();

    }

$conn = null;



}

}



///////////////////////////////////////75-85///

if(isset($_REQUEST['ansqstsubmit'])){

for($i=76;$i<=85;$i=$i+1)

{

date_default_timezone_set("Asia/Calcutta"); 

$cdate=date("Y-m-d h:i:s");

$selectedans=$_REQUEST["selectedAnswer$i"];

$qst=$_REQUEST["q$i"];

$userID=$_REQUEST['id'];



if($i==76){ $otherans=$_REQUEST['otherans76'];}else{$otherans='';}



try {

    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    // set the PDO error mode to exception

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "INSERT INTO survey (userid, answer, sdate, question,other)

    VALUES ('$userID', '$selectedans', '$cdate','$qst','$otherans')";

    // use exec() because no results are returned

    $conn->exec($sql);

    ?>

<script>window.location="thankyou.php";</script>

	<?php 

	}

catch(PDOException $e)

    {

    echo $sql . "<br>" . $e->getMessage();

    }

$conn = null;



}



}





if($_REQUEST['p']==1){

?>

<h5>A.	Enabler Policies - Building the Eco-System for Women:     </h5>

<table class="table">

<!--<tr><td> Question :1 Does your company Identify and Designate an independent Diversity Officer, who does not report to corporate HR?</td></tr> <tr><td> Answer<input type="radio" name="selectedAnswer1" value="YES" value="YES"> Yes<input type="radio" name="selectedAnswer1" value="No" value="No"> No

<input type="hidden" name="q1" value="1"/>

</td></tr>

 <tr><td> Question :2 Do you have Internal Women Forums and Diversity Programs - as women are unable to break through the male-networks?</td></tr> <tr><td> Answer<input type="radio" name="selectedAnswer2" value="YES" value="YES"> Yes<input type="radio" name="selectedAnswer2" value="NO" value="No"> No

 <input type="hidden" name="q2" value="2"/></td></tr>

 <tr><td> Question :3 Does your company have a Healthy respect for Women - as an important part of the Organization Work Culture and "stated company policy and code of conduct for employees"?</td></tr> <tr><td> Answer<input type="radio" name="selectedAnswer3" value="YES" value="YES"> Yes<input type="radio" name="selectedAnswer3" value="NO" value="No"> No

 <input type="hidden" name="q3" value="3"/></td></tr>

 <tr><td> Question :4 Does your company have a "stated Policy" of Part-time and flexible Assignments made available for Women in the organization?</td></tr> <tr><td> Answer<input type="radio" name="selectedAnswer4" value="YES" value="YES"> Yes<input type="radio" name="selectedAnswer4" value="NO" value="No"> No

 <input type="hidden" name="q4" value="4"/></td></tr>

 <tr><td> Question :5 Does your Company arrange Breakfast and Tea discussion meetings for CEO and Managing Director to meet with senior women in the organization, during the year?</td></tr> <tr><td> Answer<input type="radio" name="selectedAnswer5" value="YES" value="YES"> Yes<input type="radio" name="selectedAnswer5" value="NO" value="No"> No

 <input type="hidden" name="q5" value="5"/></td></tr>

--> 

 

 

 

 

    <tr>

        <td> Question :1 Does your company Identify and Designate an independent Diversity Officer, who does not report to corporate HR?</td>

    </tr>

    <tr>

        <td> Answer

            <input type="radio" name="selectedAnswer1" value="YES" > Yes

            <input type="radio" name="selectedAnswer1" value="No"> No

			<input type="hidden" name="q1" value="1"/></td>

			

    </tr>





    <tr>

        <td> Question :2 Do you have Internal Women Forums and Diversity Programs - as women are unable to break through the male-networks?</td>

    </tr>

    <tr>

        <td> Answer

            <input type="radio" name="selectedAnswer2" value="YES"> Yes

            <input type="radio" name="selectedAnswer2" value="No"> No

			<input type="hidden" name="q2" value="2"/></td>

    </tr>





    <tr>

        <td> Question :3 Does your company have a Healthy respect for Women - as an important part of the Organization Work Culture and "stated company policy and code of conduct for employees"?</td>

    </tr>

    <tr>

        <td> Answer

            <input type="radio" name="selectedAnswer3" value="YES"> Yes

            <input type="radio" name="selectedAnswer3" value="No"> No

			<input type="hidden" name="q3" value="3"/></td>

    </tr>





    <tr>

        <td> Question :4 Does your company have a "stated Policy" of Part-time and flexible Assignments made available for Women in the organization?</td>

    </tr>

    <tr>

        <td> Answer

            <input type="radio" name="selectedAnswer4" value="YES"> Yes

            <input type="radio" name="selectedAnswer4" value="No"> No

			<input type="hidden" name="q4" value="4"/></td>

    </tr>





    <tr>

        <td> Question :5 Does your Company arrange Breakfast and Tea discussion meetings for CEO and Managing Director to meet with senior women in the organization, during the year?</td>

    </tr>

    <tr>

        <td> Answer

            <input type="radio" name="selectedAnswer5" value="YES"> Yes

            <input type="radio" name="selectedAnswer5" value="No"> No

			<input type="hidden" name="q5" value="5"/></td>

    </tr>







    <tr>

        <td> Question :6 Does your Company have a "stated Policy" of Conscious Recruitment of women for open positions at all levels?</td>

    </tr>

    <tr>

        <td> Answer

            <input type="radio" name="selectedAnswer6" value="YES"> Yes

            <input type="radio" name="selectedAnswer6" value="No"> No

			<input type="hidden" name="q6" value="6"/></td>

    </tr>





    <tr>

        <td> Question :7 Does your Company celebrate International Women's Day?</td>

    </tr>

    <tr>

        <td> Answer

            <input type="radio" name="selectedAnswer7" value="YES"> Yes

            <input type="radio" name="selectedAnswer7" value="No"> No

			<input type="hidden" name="q7" value="7"/></td>

    </tr>





    <tr>

        <td> Question :8 In your view, do you feel that your Company has a "Supportive & Inclusive Culture" within the organization?</td>

    </tr>

    <tr>

        <td> Answer

            <input type="radio" name="selectedAnswer8" value="YES"> Yes

            <input type="radio" name="selectedAnswer8" value="No"> No

			<input type="hidden" name="q8" value="8"/></td>

    </tr>





    <tr>

        <td> Question :9 Does your Company propose to have Gender Sensitization programs for male-colleagues?</td>

    </tr>

    <tr>

        <td> Answer

            <input type="radio" name="selectedAnswer9" value="YES"> Yes

            <input type="radio" name="selectedAnswer9" value="No"> No

			<input type="hidden" name="q9" value="9"/></td>

    </tr>





    <tr>

        <td> Question :10 Does your company have a "stated Anti- Sexual Harassment policy" available and accessible or all employees in the organization?</td>

    </tr>

    <tr>

        <td> Answer

            <input type="radio" name="selectedAnswer10" value="YES"> Yes

            <input type="radio" name="selectedAnswer10" value="No"> No

			<input type="hidden" name="q10" value="10"/></td>

    </tr>





    <tr>

        <td> Question :11 Does your company conduct Routine Gender Audits by the chief Diversity Officer?</td>

    </tr>

    <tr>

        <td> Answer

            <input type="radio" name="selectedAnswer11" value="YES"> Yes

            <input type="radio" name="selectedAnswer11" value="No"> No

			<input type="hidden" name="q11" value="11"/></td>

    </tr>





    <tr>

        <td> Question :12 Does your company have a Women's Empowerment Cell - for support and guidance at factory level, plant-sites, shop-floor, on the market-fields, and at workshops where women are in a minority?</td>

    </tr>

    <tr>

        <td> Answer

            <input type="radio" name="selectedAnswer12" value="YES"> Yes

            <input type="radio" name="selectedAnswer12" value="No"> No

			<input type="hidden" name="q12" value="12"/></td>

    </tr>

<tr><td colspan="2"><h5>B. Career Advancement Policies:     </h5></td></tr>



    <tr>

        <td> Question :13 In your view: Does your company provide clear indicators and commitment from the management and CEO for having women on company boards?</td>

    </tr>

    <tr>

        <td> Answer

            <input type="radio" name="selectedAnswer13" value="YES"> Yes

            <input type="radio" name="selectedAnswer13" value="No"> No

			<input type="hidden" name="q13" value="13"/></td>

    </tr>





    <tr>

        <td> Question :14 Does your Company provide clear career-graphs for "fast-track" women to reach CEO, President, Senior VP, and Board positions - to ensure that they stay with the company and get the best performance from them?</td>

    </tr>

    <tr>

        <td> Answer

            <input type="radio" name="selectedAnswer14" value="YES"> Yes

            <input type="radio" name="selectedAnswer14" value="No"> No

			<input type="hidden" name="q14" value="14"/></td>

    </tr>





    <tr>

        <td> Question :15 Does your Company have "Second-Career Internship Program" for women returning to work after family roles?</td>

    </tr>

    <tr>

        <td> Answer

            <input type="radio" name="selectedAnswer15" value="YES"> Yes

            <input type="radio" name="selectedAnswer15" value="No"> No

			<input type="hidden" name="q15" value="15"/></td>

    </tr>





    <tr>

        <td> Question :16 Does your Company provide opportunities for cross-industry Mentoring and Executive Coaching Programs for Women - from external benchmarking global organizations like the WILL Forum? </td>

    </tr>

    <tr>

        <td> Answer

            <input type="radio" name="selectedAnswer16" value="YES"> Yes

            <input type="radio" name="selectedAnswer16" value="No"> No

			<input type="hidden" name="q16" value="16"/></td>

    </tr>





    <tr>

        <td> Question :17 Does your company provide access and interactions with Role Model and Successful Women across Business and industry for developing leadership skills and overcoming confidence challenges?</td>

    </tr>

    <tr>

        <td> Answer

            <input type="radio" name="selectedAnswer17" value="YES"> Yes

            <input type="radio" name="selectedAnswer17" value="No"> No

			<input type="hidden" name="q17" value="17"/></td>

    </tr>



<tr><td colspan="2"><h5>C.	Family Friendly Policies     </h5></td></tr>

    <tr>

        <td> Question :18 Do your Company have a full time Day Care Centre at the workplace?</td>

    </tr>

    <tr>

        <td> Answer

            <input type="radio" name="selectedAnswer18" value="YES"> Yes

            <input type="radio" name="selectedAnswer18" value="No"> No

			<input type="hidden" name="q18" value="18"/></td>

    </tr>





    <tr>

        <td> Question :19 Does your Company have a "stated Adoption Policies"?</td>

    </tr>

    <tr>

        <td> Answer

            <input type="radio" name="selectedAnswer19" value="YES"> Yes

            <input type="radio" name="selectedAnswer19" value="No"> No

			<input type="hidden" name="q19" value="19"/></td>

    </tr>





    <tr>

        <td> Question :20 In your view: Does your company promote opportunities for spouses - as a key Retention Strategy?</td>

    </tr>

    <tr>

        <td> Answer

            <input type="radio" name="selectedAnswer20" value="YES"> Yes

            <input type="radio" name="selectedAnswer20" value="No"> No

			<input type="hidden" name="q20" value="20"/></td>

    </tr>



<tr><td colspan="2"><h5>D.	Work Life Balance     </h5></td></tr>

    <tr>

        <td> Question :21 Does your Company have a "stated policy" for providing flexible working options - Flexible working hours, Work from home?</td>

    </tr>

    <tr>

        <td> Answer

            <input type="radio" name="selectedAnswer21" value="YES"> Yes

            <input type="radio" name="selectedAnswer21" value="No"> No

			<input type="hidden" name="q21" value="21"/></td>

    </tr>





    <tr>

        <td> Question :22 Does your company have a "stated policy" of Extended Sabaticals--- Sabatical after 7 years of work?</td>

    </tr>

    <tr>

        <td> Answer

            <input type="radio" name="selectedAnswer22" value="YES"> Yes

            <input type="radio" name="selectedAnswer22" value="No"> No

			<input type="hidden" name="q22" value="22"/></td>

    </tr>





    <tr>

        <td> Question :23 Does your company have a "stated policy" of Paternity Leave?</td>

    </tr>

    <tr>

        <td> Answer

            <input type="radio" name="selectedAnswer23" value="YES"> Yes

            <input type="radio" name="selectedAnswer23" value="No"> No

			<input type="hidden" name="q23" value="23"/></td>

    </tr>





    <tr>

        <td> Question :24 Does your company provide a Work Life Balance - 5 Day Week?</td>

    </tr>

    <tr>

        <td> Answer

            <input type="radio" name="selectedAnswer24" value="YES"> Yes

            <input type="radio" name="selectedAnswer24" value="No"> No

			<input type="hidden" name="q24" value="24"/></td>

    </tr>





    <tr>

        <td> Question :25 Does your Company Provide laptops to work from home when required?</td>

    </tr>

    <tr>

        <td> Answer

            <input type="radio" name="selectedAnswer25" value="YES"> Yes

            <input type="radio" name="selectedAnswer25" value="No"> No

			<input type="hidden" name="q25" value="25"/></td>

    </tr>

	<tr><td>

	<div class="col-6" >

				<button type="submit" class="btn btn-main-md" name="ansqstsubmit25" id="ansqstsubmit25"> Next</button>

			</div>	

	</td></tr>

</table>

<?php } 

if($_REQUEST['p']==2){

?>





<table class="table">

    <tr>

        <td> Question :26 Are Transfers/ Re-location made easy for spouses and married women?</td>

    </tr>

    <tr>

        <td> Answer

            <input type="radio" name="selectedAnswer26" value="YES"> Yes

            <input type="radio" name="selectedAnswer26" value="No"> No

			<input type="hidden" name="q26" value="26"/></td>

    </tr>



<tr><td colspan="2"><h5>Policies relating to Maternity Roles for Women   </h5></td></tr>

    <tr>

        <td> Question :27 Does your company have a "stated policy" of Internal Transfers based on need during Pregnancy of women employees?</td>

    </tr>

    <tr>

        <td> Answer

            <input type="radio" name="selectedAnswer27" value="YES"> Yes

            <input type="radio" name="selectedAnswer27" value="No"> No

			<input type="hidden" name="q27" value="27"/></td>

    </tr>





    <tr>

        <td> Question :28 In your view: Is your company providing flexibility on Maternity Leave related issues?</td>

    </tr>

    <tr>

        <td> Answer

            <input type="radio" name="selectedAnswer28" value="YES"> Yes

            <input type="radio" name="selectedAnswer28" value="No"> No

			<input type="hidden" name="q28" value="28"/></td>

    </tr>





    <tr>

        <td> Question :29 Does your company has or is contemplating to have "Resting Rooms" for "expecting-mothers?"</td>

    </tr>

    <tr>

        <td> Answer

            <input type="radio" name="selectedAnswer29" value="YES"> Yes

            <input type="radio" name="selectedAnswer29" value="No"> No

			<input type="hidden" name="q29" value="29"/></td>

    </tr>





    <tr>

        <td> Question :30 Does your company provide "Infancy Benefit" - Additional 15 days of leave for young mothers?</td>

    </tr>

    <tr>

        <td> Answer

            <input type="radio" name="selectedAnswer30" value="YES"> Yes

            <input type="radio" name="selectedAnswer30" value="No"> No

			<input type="hidden" name="q30" value="30"/></td>

    </tr>



<tr><td colspan="2"><h5>E.	Diversity Initiatives - Tapping "Innovative-thinking"   </h5></td></tr>

    <tr>

        <td> Question :31 Does your company provide opportunities to participate in cross-industry Diversity Initiatives - like the WILL Forum - and exchange views, insights and perspective from other women and how they respond to their challenges and opportunities?</td>

    </tr>

    <tr>

        <td> Answer

            <input type="radio" name="selectedAnswer31" value="YES"> Yes

            <input type="radio" name="selectedAnswer31" value="No"> No

			<input type="hidden" name="q31" value="31"/>

		<br /><br>How many have you attended yourself over the past 2 years?<br /><br />

		<input type="radio" name="otherans31" value="&gt;2"> &gt;2

		<input type="radio" name="otherans31" value="&gt;5"> &gt;5

		<input type="radio" name="otherans31" value="None"> None			

			</td>

    </tr>





    <tr>

        <td> Question :32 Does your company have a "stated policy" of Institutionalization of Diversity and Inclusivity standards in the organization-that is circulated to each and every employee, and placed on the company website?</td>

    </tr>

    <tr>

        <td> Answer

            <input type="radio" name="selectedAnswer32" value="YES"> Yes

            <input type="radio" name="selectedAnswer32" value="No"> No

			<input type="hidden" name="q32" value="32"/></td>

    </tr>





    <tr>

        <td> Question :33 Does your company arrange Open forum meetings to discuss the diversity issues in the company - between male and women colleagues?</td>

    </tr>

    <tr>

        <td> Answer

            <input type="radio" name="selectedAnswer33" value="YES"> Yes

            <input type="radio" name="selectedAnswer33" value="No"> No

			<input type="hidden" name="q33" value="33"/>

			<br /><bR />How many times a year?<br /><br />

			<input type="radio" name="otherans33" value="&gt;1"/>&gt;1

			<input type="radio" name="otherans33" value="1-2times"/>1-2 times

			<input type="radio" name="otherans33" value="&lt;5"/>&lt;5

			</td>

    </tr>





    <tr>

        <td> Question :34 Has your company created a Diversity Portal & Newsletter, that is accessible to all employees?</td>

    </tr>

    <tr>

        <td> Answer

            <input type="radio" name="selectedAnswer34" value="YES"> Yes

            <input type="radio" name="selectedAnswer34" value="No"> No

			<input type="hidden" name="q34" value="34"/></td>

    </tr>





    <tr>

        <td> Question :35 Does your company arrange "Women Focused Group" Meetings, to discuss internal challenges for women?</td>

    </tr>

    <tr>

        <td> Answer

            <input type="radio" name="selectedAnswer35" value="YES"> Yes

            <input type="radio" name="selectedAnswer35" value="No"> No

			<input type="hidden" name="q35" value="35"/></td>

    </tr>



<tr><td colspan="2"><h5>F. Equal Employment Opportunity: Gender Assessment   </h5></td></tr>

    <tr>

        <td> Question :36 In your view: Are Promotion Policies gender-neutral in your organization?</td>

    </tr>

    <tr>

        <td> Answer

            <input type="radio" name="selectedAnswer36" value="YES"> Yes

            <input type="radio" name="selectedAnswer36" value="No"> No

			<input type="hidden" name="q36" value="36"/></td>

    </tr>





    <tr>

        <td> Question :37 In your view: Does your company encourage "at least 25% applications from women candidates" for all posts at all levels of the organization, including top-management, President and CEO?</td>

    </tr>

    <tr>

        <td> Answer

            <input type="radio" name="selectedAnswer37" value="YES"> Yes

            <input type="radio" name="selectedAnswer37" value="No"> No

			<input type="hidden" name="q37" value="37"/></td>

    </tr>





    <tr>

        <td> Question :38 Does your company have "at least one women on the Interview Panel" for all posts, at all levels in the organization?</td>

    </tr>

    <tr>

        <td> Answer

            <input type="radio" name="selectedAnswer38" value="YES"> Yes

            <input type="radio" name="selectedAnswer38" value="No"> No

			<input type="hidden" name="q38" value="38"/></td>

    </tr>





    <tr>

        <td> Question :39 In your view: Does your company have a "Transparent and Fairness Code of Conduct "established for Corporate Group HR Head to follow?</td>

    </tr>

    <tr>

        <td> Answer

            <input type="radio" name="selectedAnswer39" value="YES"> Yes

            <input type="radio" name="selectedAnswer39" value="No"> No

			<input type="hidden" name="q39" value="39"/></td>

    </tr>





    <tr>

        <td> Question :40 In your view: Does your company Strive to be an Equal Employment Opportunity Employer?</td>

    </tr>

    <tr>

        <td> Answer

            <input type="radio" name="selectedAnswer40" value="YES"> Yes

            <input type="radio" name="selectedAnswer40" value="No"> No

			<input type="hidden" name="q40" value="40"/></td>

    </tr>





    <tr>

        <td> Question :41 Does your company provide "Employee Rewards" and Recruitment Rewards Scheme, for more women to be launched in the organization?</td>

    </tr>

    <tr>

        <td> Answer

            <input type="radio" name="selectedAnswer41" value="YES"> Yes

            <input type="radio" name="selectedAnswer41" value="No"> No

			<input type="hidden" name="q41" value="41"/></td>

    </tr>





    <tr>

        <td> Question :42 In your view: Is "Loyalty to the firm" an important component of the assessment dashboard for men and women in the organization?</td>

    </tr>

    <tr>

        <td> Answer

            <input type="radio" name="selectedAnswer42" value="YES"> Yes

            <input type="radio" name="selectedAnswer42" value="No"> No

			<input type="hidden" name="q42" value="42"/></td>

    </tr>

<tr><td colspan="2"><h5>G. Employee Welfare   </h5></td></tr>



    <tr>

        <td> Question :43 Does your company provide "Employee Support Helplines" for women?</td>

    </tr>

    <tr>

        <td> Answer

            <input type="radio" name="selectedAnswer43" value="YES"> Yes

            <input type="radio" name="selectedAnswer43" value="No"> No

			<input type="hidden" name="q43" value="43"/>

			</td>

    </tr>





    <tr>

        <td> Question :44 Does your company provide Regular Staff surveys and Feedback that are shared across the organization, for women and men?</td>

    </tr>

    <tr>

        <td> Answer

            <input type="radio" name="selectedAnswer44" value="YES"> Yes

            <input type="radio" name="selectedAnswer44" value="No"> No

			<input type="hidden" name="q44" value="44"/>

			</td>

    </tr>





    <tr>

        <td> Question :45 Does your company Department Meetings/Off site meetings, where women are equally invited to engage in strategy?</td>

    </tr>

    <tr>

        <td> Answer

            <input type="radio" name="selectedAnswer45" value="YES"> Yes

            <input type="radio" name="selectedAnswer45" value="No"> No

			<input type="hidden" name="q45" value="45"/></td>

    </tr>





    <tr>

        <td> Question :46 Does your company provide Tie-ups with Healthy Restaurants for discounted prices for working mothers?</td>

    </tr>

    <tr>

        <td> Answer

            <input type="radio" name="selectedAnswer46" value="YES"> Yes

            <input type="radio" name="selectedAnswer46" value="No"> No

			<input type="hidden" name="q46" value="46"/></td>

    </tr>





    <tr>

        <td> Question :47 Does your company provide additional Concierge Services for working mothers?</td>

    </tr>

    <tr>

        <td> Answer

            <input type="radio" name="selectedAnswer47" value="YES"> Yes

            <input type="radio" name="selectedAnswer47" value="No"> No

			<input type="hidden" name="q47" value="47"/></td>

    </tr>





    <tr>

        <td> Question :48 Does your company provide Employee Well Being -- Executive Health Check-ups, Insurance Coverage for all employees?</td>

    </tr>

    <tr>

        <td> Answer

            <input type="radio" name="selectedAnswer48" value="YES"> Yes

            <input type="radio" name="selectedAnswer48" value="No"> No

			<input type="hidden" name="q48" value="48"/></td>

    </tr>





    <tr>

        <td> Question :49 Does your company provide gender-inclusive Fun at work-women-friendly recreation!</td>

    </tr>

    <tr>

        <td> Answer

            <input type="radio" name="selectedAnswer49" value="YES"> Yes

            <input type="radio" name="selectedAnswer49" value="No"> No

			<input type="hidden" name="q49" value="49"/></td>

    </tr>





    <tr>

        <td> Question :50 In your view: Do your company feel that Recognition and support to women is vital to their well-being?</td>

    </tr>

    <tr>

        <td> Answer

            <input type="radio" name="selectedAnswer50" value="YES"> Yes

            <input type="radio" name="selectedAnswer50" value="No"> No

			<input type="hidden" name="q50" value="50"/></td>

    </tr>



<tr><td>

	<div class="col-6" >

				<button type="submit" class="btn btn-main-md" name="ansqstsubmit50" id="ansqstsubmit50"> Next</button>

			</div>	

	</td></tr>

</table>



<?php } 

if($_REQUEST['p']==3){

?>



<table class="table">



<tr><td colspan="2"><h5>H. Safety for Women </h5></td></tr>

    <tr>

        <td> Question :51 Does your company have a "stated policy" of Women Friendly Policies - particularly for safety during travel and out-station hotels?</td>

    </tr>

    <tr>

        <td> Answer

            <input type="radio" name="selectedAnswer51" value="YES"> Yes

            <input type="radio" name="selectedAnswer51" value="No"> No

			<input type="hidden" name="q51" value="51"/></td>

    </tr>





    <tr>

        <td> Question :52 Does your company have a "stated policy" of Taxi-expenses available for Women associates working late --and providing phone numbers to the security to call and confirm on reaching home safely?</td>

    </tr>

    <tr>

        <td> Answer

            <input type="radio" name="selectedAnswer52" value="YES"> Yes

            <input type="radio" name="selectedAnswer52" value="No"> No

			<input type="hidden" name="q52" value="52"/></td>

    </tr>

<tr><td colspan="2"><h5>I. Gender Leadership Assessment</h5></td></tr>



    <tr>

        <td> Question :53 Does your organization have a "stated policy" of empowerment of women and men? </td>

    </tr>

    <tr>

        <td> Answer

            <input type="radio" name="selectedAnswer53" value="YES"> Yes

            <input type="radio" name="selectedAnswer53" value="No"> No

			<input type="hidden" name="q53" value="53"/></td>

    </tr>





    <tr>

        <td> Question :54 Does your organization have a "stated policy" against harassment at the work place? Is every employee aware of whom he/she should report a harassment case to?</td>

    </tr>

    <tr>

        <td> Answer

            <input type="radio" name="selectedAnswer54" value="YES"> Yes

            <input type="radio" name="selectedAnswer54" value="No"> No

			<input type="hidden" name="q54" value="54"/></td>

    </tr>





    <tr>

        <td> Question :55 Is attention paid to gender sensitive language and images in the policy documents of your organization?</td>

    </tr>

    <tr>

        <td> Answer

            <input type="radio" name="selectedAnswer55" value="YES"> Yes

            <input type="radio" name="selectedAnswer55" value="No"> No

			<input type="hidden" name="q55" value="55"/></td>

    </tr>





    <tr>

        <td> Question :56 Is attention paid to gender sensitive language in day-to-day interactions among the employees?</td>

    </tr>

    <tr>

        <td> Answer

            <input type="radio" name="selectedAnswer56" value="YES"> Yes

            <input type="radio" name="selectedAnswer56" value="No"> No

			<input type="hidden" name="q56" value="56"/></td>

    </tr>





    <tr>

        <td> Question :57 Are employees rewarded for getting engaged in driving gender equality issues?</td>

    </tr>

    <tr>

        <td> Answer

            <input type="radio" name="selectedAnswer57" value="YES"> Yes

            <input type="radio" name="selectedAnswer57" value="No"> No

			<input type="hidden" name="q57" value="57"/></td>

    </tr>





    <tr>

        <td> Question :58 Does the organization address work-life balance issues?</td>

    </tr>

    <tr>

        <td> Answer

            <input type="radio" name="selectedAnswer58" value="YES"> Yes

            <input type="radio" name="selectedAnswer58" value="No"> No

			<input type="hidden" name="q58" value="58"/></td>

    </tr>





    <tr>

        <td> Question :59 Are there training programs to increase gender sensitization of employees?</td>

    </tr>

    <tr>

        <td> Answer

            <input type="radio" name="selectedAnswer59" value="YES"> Yes

            <input type="radio" name="selectedAnswer59" value="No"> No

			<input type="hidden" name="q59" value="59"/></td>

    </tr>





    <tr>

        <td> Question :60 Is it mandatory for first time managers to undergo any gender awareness/sensitization training programs?</td>

    </tr>

    <tr>

        <td> Answer

            <input type="radio" name="selectedAnswer60" value="YES"> Yes

            <input type="radio" name="selectedAnswer60" value="No"> No

			<input type="hidden" name="q60" value="60"/></td>

    </tr>





    <tr>

        <td> Question :61 Does the organization have a special program or dedicated team to enhance gender equality at the workplace? </td>

    </tr>

    <tr>

        <td> Answer

            <input type="radio" name="selectedAnswer61" value="YES"> Yes

            <input type="radio" name="selectedAnswer61" value="No"> No

			<input type="hidden" name="q61" value="61"/></td>

    </tr>





    <tr>

        <td> Question :62 Has the effectiveness of this program been measured? </td>

    </tr>

    <tr>

        <td> Answer

            <input type="radio" name="selectedAnswer62" value="YES"> Yes

            <input type="radio" name="selectedAnswer62" value="No"> No

			<input type="hidden" name="q62" value="62"/></td>

    </tr>





    <tr>

        <td> Question :63 Are there programs to create a women advancement pipeline & increase the representation of women at senior management positions? </td>

    </tr>

    <tr>

        <td> Answer

            <input type="radio" name="selectedAnswer63" value="YES"> Yes

            <input type="radio" name="selectedAnswer63" value="No"> No

			<input type="hidden" name="q63" value="63"/></td>

    </tr>





    <tr>

        <td> Question :64 Is a special budget allocated towards gender mainstreaming activities? </td>

    </tr>

    <tr>

        <td> Answer

            <input type="radio" name="selectedAnswer64" value="YES"> Yes

            <input type="radio" name="selectedAnswer64" value="No"> No

			<input type="hidden" name="q64" value="64"/>

			<br /><br />If yes, who owns and disburses the budget?<br /><br />

			<input type="radio" name="otherans64" value="CEO"> CEO

            <input type="radio" name="otherans64" value="HR"> HR

			<input type="radio" name="otherans64" value="Other"> Other

			

			</td>

    </tr>

<tr><td colspan="2"><h5>J. Leadership Commitment to Gender Mainstreaming</h5></td></tr>



    <tr>

        <td> Question :65 What percentage of CEO's time is spent on gender-related activities?</td>

    </tr>

    <tr>

        <td> Answer

            <input type="radio" name="selectedAnswer65" value="&lt;10%"> &lt;10%

            <input type="radio" name="selectedAnswer65" value="&gt;10%"> &gt;10%

			<input type="hidden" name="q65" value="65"/></td>

    </tr>





    <tr>

        <td> Question :66 Are projects evaluated/ audited from gender perspective?</td>

    </tr>

    <tr>

        <td> Answer

            <input type="radio" name="selectedAnswer66" value="YES"> Yes

            <input type="radio" name="selectedAnswer66" value="No"> No

			<input type="hidden" name="q66" value="66"/></td>

    </tr>





    <tr>

        <td> Question :67 How much time is each employee allowed to spend on increasing his/her gender expertise?</td>

    </tr>

    <tr>

        <td> Answer

            <input type="radio" name="selectedAnswer67" value="&gt;2%"> &gt;2%

            <input type="radio" name="selectedAnswer67" value="&lt;2%"> &lt;2%

			<input type="hidden" name="q67" value="67"/></td>

    </tr>





    <tr>

        <td> Question :68 Is there a "stated policy" by top-management to enhance capacity building from a gender perspective?</td>

    </tr>

    <tr>

        <td> Answer

            <input type="radio" name="selectedAnswer68" value="YES"> Yes

            <input type="radio" name="selectedAnswer68" value="No"> No

			<input type="hidden" name="q68" value="68"/></td>

    </tr>





    <tr>

        <td> Question :69 Does the CEO and top-management leaders sign-off on gender equity goals?</td>

    </tr>

    <tr>

        <td> Answer

            <input type="radio" name="selectedAnswer69" value="YES"> Yes

            <input type="radio" name="selectedAnswer69" value="No"> No

			<input type="hidden" name="q69" value="69"/></td>

    </tr>

<tr><td colspan="2"><h5>K. Human Resource Policy Framework</h5></td></tr>



    <tr>

        <td> Question :70 Are recruitment and selection procedures transparent and gender-sensitive for all types of jobs?</td>

    </tr>

    <tr>

        <td> Answer

            <input type="radio" name="selectedAnswer70" value="YES"> Yes

            <input type="radio" name="selectedAnswer70" value="No"> No

			<input type="hidden" name="q70" value="70"/></td>

    </tr>





    <tr>

        <td> Question :71 Is the employee salary distribution in the organization, sex-disaggregated according to level?</td>

    </tr>

    <tr>

        <td> Answer

            <input type="radio" name="selectedAnswer71" value="YES"> Yes

            <input type="radio" name="selectedAnswer71" value="No"> No

			<input type="hidden" name="q71" value="71"/></td>

    </tr>





    <tr>

        <td> Question :72 Do all employees have equal opportunity to advanced-training programs being offered? </td>

    </tr>

    <tr>

        <td> Answer

            <input type="radio" name="selectedAnswer72" value="YES"> Yes

            <input type="radio" name="selectedAnswer72" value="No"> No

			<input type="hidden" name="q72" value="72"/></td>

    </tr>





    <tr>

        <td> Question :73 In your view: Is the performance evaluation process fair and bias free?</td>

    </tr>

    <tr>

        <td> Answer

            <input type="radio" name="selectedAnswer73" value="YES"> Yes

            <input type="radio" name="selectedAnswer73" value="No"> No

			<input type="hidden" name="q73" value="73"/></td>

    </tr>





    <tr>

        <td> Question :74 In your view: Is the career progression process gender neutral in nature?</td>

    </tr>

    <tr>

        <td> Answer

            <input type="radio" name="selectedAnswer74" value="YES"> Yes

            <input type="radio" name="selectedAnswer74" value="No"> No

			<input type="hidden" name="q74" value="74"/></td>

    </tr>





    <tr>

        <td> Question :75 Are there programs made available to employees to encourage career-life-fit?</td>

    </tr>

    <tr>

        <td> Answer

            <input type="radio" name="selectedAnswer75" value="YES"> Yes

            <input type="radio" name="selectedAnswer75" value="No"> No

			<input type="hidden" name="q75" value="75"/></td>

    </tr>





<tr><td>

	<div class="col-6" >

				<button type="submit" class="btn btn-main-md" name="ansqstsubmit75" id="ansqstsubmit75"> Next</button>

			</div>	

	</td></tr>

	

</table>

<?php } if($_REQUEST['p']==4){?>

<table class="table">



    <tr>

        <td> Question :76 Does the organization have a gender policy? </td>

    </tr>

    <tr>

        <td> Answer

            <input type="radio" name="selectedAnswer76" value="YES"> Yes

            <input type="radio" name="selectedAnswer76" value="No"> No

			<input type="hidden" name="q76" value="76"/>

			

			<br /><br />If yes, who is involved in making the gender policy?<br /><br />

			<input type="radio" name="otherans76" value="CEO"> CEO

            <input type="radio" name="otherans76" value="HR Head"> HR Head

			<input type="radio" name="otherans76" value="Diversity Officer"> Diversity Officer 

			<input type="radio" name="otherans76" value="Board directors"> Board directors </td>

    </tr>



<tr><td colspan="2"><h5>L. Public Image & Monitoring System</h5></td></tr>

    <tr>

        <td> Question :77 In your view, is your organizations benchmarked with the best companies on gender-advancement issues?</td>

    </tr>

    <tr>

        <td> Answer

            <input type="radio" name="selectedAnswer77" value="YES"> Yes

            <input type="radio" name="selectedAnswer77" value="No"> No

			<input type="hidden" name="q77" value="77"/></td>

    </tr>





    <tr>

        <td> Question :78 Does the marketing and communication material of the firm reflect gender mainstreaming?</td>

    </tr>

    <tr>

        <td> Answer

            <input type="radio" name="selectedAnswer78" value="YES"> Yes

            <input type="radio" name="selectedAnswer78" value="No"> No

			<input type="hidden" name="q78" value="78"/></td>

    </tr>





    <tr>

        <td> Question :79 Is your company perceived as a "best employer for women" by your peers, clients, and stakeholders, and community at large?</td>

    </tr>

    <tr>

        <td> Answer

            <input type="radio" name="selectedAnswer79" value="YES"> Yes

            <input type="radio" name="selectedAnswer79" value="No"> No

			<input type="hidden" name="q79" value="79"/></td>

    </tr>





    <tr>

        <td> Question :80 Are metrics around gender mainstreaming a part of the organizations score card?</td>

    </tr>

    <tr>

        <td> Answer

            <input type="radio" name="selectedAnswer80" value="YES"> Yes

            <input type="radio" name="selectedAnswer80" value="No"> No

			<input type="hidden" name="q80" value="80"/></td>

    </tr>





    <tr>

        <td> Question :81 Are gender-disaggregated data collected and used systematically in planning and reporting?</td>

    </tr>

    <tr>

        <td> Answer

            <input type="radio" name="selectedAnswer81" value="YES"> Yes

            <input type="radio" name="selectedAnswer81" value="No"> No

			<input type="hidden" name="q81" value="81"/></td>

    </tr>



<tr><td colspan="2"><h5>Corporate Disclosure on Gender Profiling </h5></td></tr>

    <tr>

        <td> Question :82 Does your company release Number of Women on the Company Board, and target plan of women as Board Directors?</td>

    </tr>

    <tr>

        <td> Answer

            <input type="radio" name="selectedAnswer82" value="YES"> Yes

            <input type="radio" name="selectedAnswer82" value="No"> No

			<input type="hidden" name="q82" value="82"/></td>

    </tr>





    <tr>

        <td> Question :83 Does your company release percentage of women in senior positions within their Organization, e</td>

    </tr>

    <tr>

        <td> Answer

            <input type="radio" name="selectedAnswer83" value="YES"> Yes

            <input type="radio" name="selectedAnswer83" value="No"> No

			<input type="hidden" name="q83" value="83"/></td>

    </tr>





    <tr>

        <td> Question :84 Does your company release data on existence of mentoring program fpr women, with the level of "Sponsor" at the helm (ideally should be a senior level sponsor</td>

    </tr>

    <tr>

        <td> Answer

            <input type="radio" name="selectedAnswer84" value="YES"> Yes

            <input type="radio" name="selectedAnswer84" value="No"> No

			<input type="hidden" name="q84" value="84"/></td>

    </tr>





    <tr>

        <td> Question :85 Does your company release data on any targeted leadership development programs specific to women and percentage of women covered?</td>

    </tr>

    <tr>

        <td> Answer

            <input type="radio" name="selectedAnswer85" value="YES"> Yes

            <input type="radio" name="selectedAnswer85" value="No"> No

			<input type="hidden" name="q85" value="85"/></td>

    </tr>



 </table>



			<div class="col-6" >

				<button type="submit" class="btn btn-main-md" name="ansqstsubmit" id="ansqstsubmit"> Submit</button>

			</div>				



 <?php } ?>

</form>



<?php } ?>







					</div>									

				</div>

			</div>

		</div>

	</div>

</section>

<?php //include("related_services.php");?>

<?php include("footer.php");?>