<?php session_start();$current=basename($_SERVER['SCRIPT_FILENAME']); 
include("config.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- SITE TITTLE -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php 
  if($current=="conference.php"){ 
    echo '<title>14th WILL Annual Conference</title><meta name="image" property="og:image" content="[http://willforumonline.com/images/slider/coference_Newsep.png]">';
  }
elseif($current=="webmontering_series.php"){ echo "<title> WILL WebMentoring Series:2021</title>";}
elseif($current=="mentoring_programs.php"){ echo "<title>WILL 5 Day Leadership Program : 2019</title>";}
elseif($current=="board.php"){ echo "<title>5th WILL Women on Boards Registration Open</title>";}
elseif($current=="webmentoring.php") { 
  echo '<title>14 WILL Women in Leadership:2021, Online!</title><meta name="image" property="og:image" content="[http://www.willforumonline.com/images/popup/march_20/n3.png]">';
  }
elseif($current=="individual.php"){ 
  echo "<title> Will Forum Open up Individual Memberships</title>";
}
elseif($current=="willa-app.php"){ 
  echo "<title> WILLA-A! App</title>";
}
elseif($current=="sattal_leadership_retreat_dis.php"){ 
  echo "<title>Sattal Leadership Retreat</title>";
}
elseif($current=="sattal_leadership_retreat.php"){ 
  echo "<title>Sattal Leadership Retreat</title>";
}
elseif($current=="esg_certify.php") { 
  echo '<title>WOMEN. BOARDS & ESG Certification Program</title><meta name="image" property="og:image" content="[http://willforumonline.com/images/popup/2022/popup_aug_22.jpeg]"><meta property="og:title" content="WOMEN. BOARDS & ESG Certification Program" />';
  }
  elseif($current=="advance_board_certification.php") { 
    echo '<title>ONLINE ADVANCED BOARD CERTIFICATION</title><meta name="image" property="og:image" content="[https://willforumonline.com/images/2022/advance_board_certificate.jpeg]"><meta property="og:title" content="ONLINE ADVANCED BOARD CERTIFICATION" />';
    }
  elseif($current=="annual_leadership_program.php") { 
    echo '<title>16th WILL Annual Women in Leadership Program</title><meta name="image" property="og:image" content="[https://willforumonline.com/images/2023/2/leadership_program_slider.jpg]"><meta property="og:title" content="16th WILL Annual Women in Leadership Program" />';
    }
    elseif($current=="will_forum_online_registration.php") { 
      echo '<title>16th WILL Annual Women in Leadership Program</title><meta name="image" property="og:image" content="[https://willforumonline.com/images/2023/4/online_will_forum_bg.jpeg]"><meta property="og:title" content="16th WILL Annual Women in Leadership Program" />';
      }
      elseif($current=="women_in_leadership_next_frontier.php") { 
        echo '<title>Women in Leadership: The Next Frontier</title><meta name="image" property="og:image" content="[https://www.willforumonline.com/images/2023/5/2.png]"><meta property="og:title" content="Women in Leadership: The Next Frontier" />';
        }
      elseif($current=="advance_board_certification_mumbai.php") { 
        echo '<title>Boards Certification Program Mumbai</title><meta name="image" property="og:image" content="[https://willforumonline.com/images/2023/10/slider_popup.jpeg]"><meta property="og:title" content="Boards Certification Program Mumbai" />';
        }
      elseif($current=="leadership_programm.php") { 
        echo '<title>17th WILL Leadership Program</title><meta name="image" property="og:image" content="[https://willforumonline.com/images/slider/2023/12/sl1.jpg]"><meta property="og:title" content="17th WILL Leadership Program" />';
        }
else { 
  echo "<title> Will Forum Open up Individual Memberships</title>";
} ?>

  <!-- PLUGINS CSS STYLE -->

  <!-- Bootstrap -->

  <link href="plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Themefisher Font -->  

  <link href="plugins/themefisher-font/style.css" rel="stylesheet">

  <!-- Font Awesome -->

  <link href="plugins/font-awsome/css/font-awesome.min.css" rel="stylesheet">

  <!-- Magnific Popup -->

  <link href="plugins/magnific-popup/magnific-popup.css" rel="stylesheet">

  <!-- Slick Carousel -->

  <link href="plugins/slick/slick.css" rel="stylesheet">

  <link href="plugins/slick/slick-theme.css" rel="stylesheet">

  <!-- CUSTOM CSS -->

  <link href="css/style4.css" rel="stylesheet">

  <!-- FAVICON -->

<!--  <link href="images/favicon.png" rel="shortcut icon">-->

</head>

<body class="body-wrapper">

<style>

@media(min-width:168px) and (max-width:991px) {
.parent {position: relative;top: 0;left: 0;}.image1 {position: relative;top: 0;left: 0;}.image2 {top: 0px;height: auto; width:85%;
}.logo_class{margin-top:-61px;}
}

@media(min-width:992px) and (max-width:2100px) {
.parent {position: relative;top: 0;left: 0;}.image1 {position: relative;top: 0;left: 0;}
.image2 {position: absolute;top: 0px;left: 440px;}.logo_class{margin-top:-25px;}
  }

  @media(min-width:168px) and (max-width:891px) {
.navbar-expand-lg>.container, .navbar-expand-lg>.container-fluid {
    padding-right: 0; padding-left: 0;width:80% !important;float:left;
}
.logo_class{margin-top:-61px;}
  }
  </style>

<!--========================================

=            Navigation Section            =

=========================================-->

<div class="parent" style="z-index:999999999999999999;width: 100%;height: auto;">

  <img class="image2" src="img/WILL-Band.jpg" />

</div>

<nav class="navbar main-nav border-less fixed-top navbar-expand-lg p-0" style="font-weight:bold;">

  <div class="container-fluid p-0">

      <!-- logo -->

      <a class="navbar-brand" href="index.php">

		<img src="img/logo.jpg" alt="will_forum_logo" class="logo_class">

      </a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">

      <span class="fa fa-bars"></span>

      </button>

      <div class="collapse navbar-collapse" id="navbarNav">

      <ul class="navbar-nav mx-auto">

	  <li class="nav-item">

          <a class="nav-link" href="index.php">Home

		  <span>|</span></a>

        </li>

	    <li class="nav-item dropdown dropdown-slide">
          <a class="nav-link" href="about.php" >Vision
            <span>|</span>
          </a>
		  <div class="dropdown-menu">
      <a class="dropdown-item" href="founder.php">Founder Note</a>
		  <a class="dropdown-item" href="about.php#fmember">Founding Members</a>
		  <a class="dropdown-item" href="about.php#aboard">Advisory Board</a>
		  <a class="dropdown-item" href="about.php#pcompanies">Participating Companies</a>
              <!--<a class="dropdown-item" href="index7.php#UpcomingSoon">Forum Meeting</a>
              <a class="dropdown-item" href="mentoring_programs.php">Mentoring Programs</a>-->
			  <!-- <a class="dropdown-item" href="education.php">Executive Education</a>-->
			  </div>
        </li>
      <!--  <li class="nav-item dropdown dropdown-slide1">
          <a class="nav-link" href="founder.php" data-toggle="dropdown1">Founder Note<span>|</span></a>
        </li>-->

		

		

		 <li class="nav-item dropdown dropdown-slide">

          <a class="nav-link" href="about.php" >Program & Service

            <span>|</span>

          </a>

		  <div class="dropdown-menu">
		  <a class="dropdown-item" href="membership.php">CORPORATE MEMBERSHIP</a>
		  <a class="dropdown-item" href="conference.php">WILL ANNUAL CONFERENCE </a>
		  <a class="dropdown-item" href="mentoring_programs.php">WOMEN LEADERSHIP PROGRAM</a>
			<a class="dropdown-item" href="report.php">WILL RESEARCH REPORT</a>
		<!--	<a class="dropdown-item" href="benchmark.php">BENCH MARK   </a>-->
      <a class="dropdown-item" href="board.php">CORPORATE BOARD SERIES  </a>
      <a class="dropdown-item" href="education.php"> Executive Education  </a>
			  </div>

        </li>

		

		 <li class="nav-item dropdown dropdown-slide1">

		  <a class="nav-link" href="webmontering_series.php" data-toggle="dropdown1">WebMentoring <span>|</span></a>

		</li>

		

		 <!-- <li class="nav-item">

          <a class="nav-link" href="#">Forum Meeting<span>|</span></a>

        </li>

        <li class="nav-item">

          <a class="nav-link" href="#">Mentoring Programs<span>|</span></a>

        </li>

        <li class="nav-item dropdown dropdown-slide">

          <a class="nav-link" href="#"  data-toggle="dropdown">Executive Education

            <span>|</span>

          </a>-->

          <!-- Dropdown list -->

<!--          <div class="dropdown-menu">

            <a class="dropdown-item" href="news.html">News without sidebar</a>

            <a class="dropdown-item" href="news-right-sidebar.html">News with right sidebar</a>

            <a class="dropdown-item" href="news-left-sidebar.html">News with left sidebar</a>

            <a class="dropdown-item" href="news-single.html">News Single</a>

          </div>

-->        </li>

 <li class="nav-item">

          <a class="nav-link" href="conference.php"> Conferences <span>|</span></a>

        </li>

		 <!--<li class="nav-item">

          <a class="nav-link" href="report.php">Research  <span>|</span></a>

        </li>-->

		 <li class="nav-item">

          <a class="nav-link" href="indivisual.php"><!--Individual--> Membership<span>|</span></a>

        </li>

		 <li class="nav-item dropdown dropdown-slide1">

      <!--<a class="nav-link" href="education.php" data-toggle="dropdown1">Executive Education <span>|</span></a>-->
      <a class="nav-link" href="webmentoring.php" data-toggle="dropdown1">Leadership <span>|</span></a>
		</li>

       <li class="nav-item">
          <a class="nav-link" href="benchmark.php">BENCH MARK <span>|</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>

      </ul>

     <!-- <a href="#" class="ticket">

        <img src="images/icon/ticket.png" alt="ticket">

        <span>Buy Ticket</span>

      </a>-->

      </div>

  </div>

</nav><!--====  End of Navigation Section  ====-->

