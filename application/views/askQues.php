<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>SMP | F.A.Q.</title>

<!-- Google fonts -->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>

<!-- font awesome -->
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

<!-- bootstrap -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" />

<!-- animate.css -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/animate.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/set.css" />

<!-- gallery -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/blueimp-gallery.min.css">

<!-- favicon -->
<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/logo1.png" type="image/x-icon">
<link rel="icon" href="<?php echo base_url(); ?>assets/images/logo1.png" type="image/x-icon">


<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">

<script src='/google_analytics_auto.js'></script></head>
		<link href='http://fonts.googleapis.com/css?family=Quicksand:400,700|Muli|Nunito|Amaranth' rel='stylesheet' type='text/css'>

<body data-spy="scroll" data-target=".navbar" data-offset="50">
<div class="topbar animated fadeInLeftBig"></div>

<!-- Header Starts -->
	<div class="navbar-wrapper">
		  <div class="container">
			<div class="navbar navbar-inverse navbar-fixed-top" role="navigation" id="top-nav">
			  <div class="container">
				<div class="navbar-header">
				  <!-- Logo Starts -->
				  <a class="navbar-brand" href="#home"><img src="<?php echo base_url();?>assets/images/logo.jpg" width="70px" alt="logo"></a>
				  <h3>Student Mentorship Programme</h3>
				  <!-- #Logo Ends -->


				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>

				</div>


				<!-- Nav Starts -->
				<div class="navbar-collapse  collapse">
				  <ul class="nav navbar-nav navbar-right scroll">
					 <li ><a href="<?php echo base_url();?>Welcome"><h3><i class="fa fa-home"></i> Home</h3></a></li>
					 <li ><a href="<?php echo base_url();?>Welcome"><h3><i class="fa fa-bookmark"></i> About Us</h3></a></li>
					 <li ><a href="<?php echo base_url();?>Welcome"><h3><i class="fa fa-group"></i> The Team</h3></a></li>
					 <li ><a href="<?php echo base_url();?>Welcome"><h3><i class="fa fa-envelope"></i> Contact Us</h3></a></li>
					 <li class="active" ><a href="#"><h3><i class="fa fa-question"></i> F.A.Q</h3></a></li>
					 <li class="dropdown">
						  <a class=" dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
						<h3>	Your Guides <i class="fa fa-chevron-down"></i> </h3>
						 </a>

							  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
								<li><a href="<?php echo base_url();?>Welcome/campus">Campus Guide</a></li>
								<li><a href="facility">Facilities Guide</a></li>
								<li><a href="#">Academic Guide</a></li>
							  </ul>
					</li>
				  </ul>
				</div>
				
			</div>

		  </div>
		</div>
	</div>
	<br>
	<br>
	
	<?php echo form_open('Question/fill'); ?> 
	<div id="contact" class="spacer">
<!--Contact Starts-->
<br>
<br>
<div class="container contactform center">
<br>
<h2 class="text-center  wowload fadeInUp">Ask A Question</h2>
  <div class="row wowload fadeInLeftBig">      
      <div class="col-sm-6 col-xs-12 form-group">  
	  <form>
        <input type="text" placeholder="Name(Leave the Name blank for asking anonymous)" name ='name' class="form-control">       
        <textarea rows="5" placeholder="Message" name="qs" class="form-control"></textarea>
		<button class="btn btn-info btn-block"><i class="fa fa-paper-plane"></i> Ask IT</button> 
	  </form>
	  </div>
	  <div class ="col-sm-6 col xs-12 social">
		<h2>Reach Us On</h2>
			<div class="btn-group">
			 <a href="#" class="btn btn-info" role="button"><i class="fa fa-facebook"></i> Facebook</a>
			 <button title="smp offical mail" class="btn btn-warning"><i class="fa fa-envelope"></i> Gmail</button>
			</div>
			
	</div>
</div>