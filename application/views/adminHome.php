<!DOCTYPE HTML>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, minimum-scale=1.0, maximum-scale=3.0"> 
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
		
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/admin_custom.css">
						<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css">
		<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="<?php echo base_url(); ?>assets/css/bootstrap.min.js"></script>
	      <script src="//cdn.transifex.com/live.js"></script>
		<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/logo.png" type="image/x-icon">
		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
		<link href='http://fonts.googleapis.com/css?family=Quicksand:400,700|Muli|Nunito|Amaranth' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>
		<title>
			SMP ADMIN PANEL
		</title>
	</head>
	<body>
		<header>
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
					 <li><a href="<?php echo base_url(); ?>Welcome"><h3><i class="fa fa-won"></i> Website</h3></a></li>
					 <li class="active"><a href="#"><h3><i class="fa fa-home"></i> Home</h3></a></li>
					<li ><a href="<?php echo base_url(); ?>Faq/openAll"><h3><i class="fa fa-pencil"></i> Answer</h3></a>
					</li>
					<li ><a href="<?php echo base_url(); ?>Faq/edit"><h3><i class="fa fa-pencil-square-o"></i> Manage Answers</h3></a>
					 </li>
					<li class="dropdown">
					  <a class=" dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
					<h3> <i class="fa fa-user"></i> Profile   <i class="fa fa-chevron-down"></i>  </h3>
					 </a>

						<ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
							<li><a href="<?php echo base_url(); ?>AdminPanel/change"><h5><i class="fa fa-sign-out"></i> Change Password</h5></a></li>
							<li><a href="<?php echo base_url(); ?>AdminPanel/logout"><h5><i class="fa fa-sign-out"></i> Log Out</h5></a></li>
						</ul>
					</li>
					</ul>
				</div>
				<!-- #Nav Ends -->

			  </div>
			</div>
		</header>
		<div class="intro row center">
			<img src="<?php echo base_url(); ?>assets/images/<?php echo $username ?>.jpg" alt="img01" class="img-responsive center"  />
			<br>
			<h4 class="text-center">Welcome <?php echo ucfirst($username); ?> </h4>
		</div>
		
		<div class="news">
			<h2 class="text-center">NEWS FEED</h2>
			<h4 class="text-center">********************<br>
				This section will have latest news and info that has to be given to smp members
			<br>
				**************************</h4>
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

</body>
</html>