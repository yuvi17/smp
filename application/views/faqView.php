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
				  <ul class="nav navbar-nav navbar-right ">
					 <li ><a href="<?php echo base_url();?>Welcome"><h3><i class="fa fa-home"></i> Home</h3></a></li>
					 <li ><a href="<?php echo base_url();?>Welcome"><h3><i class="fa fa-bookmark"></i> About Us</h3></a></li>
					 <li ><a href="<?php echo base_url();?>Welcome"><h3><i class="fa fa-group"></i> The Team</h3></a></li>
					 <li ><a href="<?php echo base_url();?>Welcome"><h3><i class="fa fa-envelope"></i> Contact Us</h3></a></li>
					 <li class="active" ><a href="<?php echo base_url();?>question/showFaq"><h3><i class="fa fa-question"></i> F.A.Q</h3></a></li>
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
	<br>
	<br>
	<br>
	<br>
	<br>
		<b><h2 class="text-center" > SOME FREQUNTLY ASKED QUESTIONS </h2></b>
		
		<div class="container" id="home">
			<a href="<?php echo base_url();?>question/ask" class="btn btn-success btn-sm pull-right" >
			<i class="fa fa-question"></i> ASK A QUESTION
			</a>
			<br>
			<br>
		</div>
		<br>
		
		<div id="container-fluid" >
			<div id="body" >
					<?php
					//if($result){
					foreach($result as $row) {
					?>
					<div class="container">
						<b><p><?php if($row->name !=''){
							echo $row->name;
						}
						else echo "BIT Student"; ?> 
						:<?php echo $row->question ?></p><b>
						
					</div>
				
					<div class="well" style="width:80%; margin-left:auto; margin-right:auto; ">
						<h5><?php echo $row->answer ?></h5>
					</div>
						<?php } ?>
				<div class="pagination"	>	</div>
<nav>
      <h4 class="text-center"><?php echo $links;  ?> </h4>   
</nav>
			</div>
            <!-- #Nav Ends -->
		<br>
		<br>
		<br>
		<br>
		<br>
		</div>
	</body>
</html>
<!-- Footer Starts -->
<div class="footer text-center spacer">
<p class="wowload flipInX"><a href="https://www.facebook.com/SMPBITMesra?fref=ts"><i class="fa fa-facebook fa-2x"></i></a> <a title="smp official mail" href="#"><i class="fa fa-envelope fa-2x"></i></a> <a href="#"><i class="fa fa-twitter fa-2x"></i></a> </p>
<h4>Designed & Developed By : <a href="https://www.facebook.com/yuvrajjaiswal17">Yuvraj Jaiswal</a></h4>
</div>
<!-- # Footer Ends -->
<a href="#home" class="gototop "><i class="fa fa-angle-up  fa-3x"></i></a>





<!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">
    <!-- The container for the modal slides -->
    <div class="slides"></div>
    <!-- Controls for the borderless lightbox -->
    <h3 class="title">Title</h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <!-- The modal dialog, which will be used to wrap the lightbox content -->    
</div>


<script>
$(document).ready(function() {
    $(".dropdown-toggle").dropdown();
});
</script>
<!-- jquery -->
<script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>

<!-- wow script -->
<script src="<?php echo base_url(); ?>assets/css/wow.min.js"></script>


<!-- boostrap -->
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js" type="text/javascript" ></script>

<!-- jquery mobile -->
<script src="<?php echo base_url(); ?>assets/js/touchSwipe.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/respond.js"></script>

<!-- gallery -->
<script src="<?php echo base_url(); ?>assets/js/jquery.blueimp-gallery.min.js"></script>

<!-- custom script -->
<script src="<?php echo base_url(); ?>assets/js/script.js"></script>
	<script>
		$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').focus()
})
	</script>
<!-- #Header Starts -->