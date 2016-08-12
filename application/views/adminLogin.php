<!DOCTYPE HTML>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, minimum-scale=1.0, maximum-scale=3.0"> 
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
		
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/home_custom.css">
						<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css">
		<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="<?php echo base_url(); ?>assets/css/bootstrap.min.js"></script>
	      <script src="//cdn.transifex.com/live.js"></script>
		<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/logo.png" type="image/x-icon">
		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
		<link href='http://fonts.googleapis.com/css?family=Quicksand:400,700|Muli|Nunito|Amaranth' rel='stylesheet' type='text/css'>
		<title>
			SMP ADMIN LOGIN
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
              <ul class="nav navbar-nav navbar-right scroll">
                 <li class="active"><a href="#home"><h3><i class="fa fa-home"></i> Home</h3></a></li>
                 <li ><a href="#about"><h3><i class="fa fa-bookmark"></i> About Us</h3></a></li>
                 <li ><a href="#works"><h3><i class="fa fa-group"></i> The Team</h3></a></li>
                 <li ><a href="#contact"><h3><i class="fa fa-envelope"></i> Contact Us</h3></a></li>
				 <li ><a href="#register"><h3><i class="fa fa-question"></i> F.A.Q</h3></a></li>
				 <li class="dropdown">
					  <a class=" dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
					<h3>	Your Guides <i class="fa fa-chevron-down"></i> </h3>
					 </a>

						  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
							<li><a href="<?php echo base_url();?>welcome/campus">Campus Guide</a></li>
							<li><a href="facility">Facilities Guide</a></li>
							<li><a href="#">Academic Guide</a></li>
						  </ul>
				</li>
              </ul>
            </div>
            <!-- #Nav Ends -->

          </div>
        </div>
</header>
 <body>
 <div class="container login vcenter">
   <div class="form-group">
   <?php echo form_open('VerifyLogin/index'); ?>
   <?php echo validation_errors();?>
   <center>
   <img src="<?php echo base_url();?>assets/images/logo.jpg" width="70px" alt="logo">
   <h3>Student Mentorship<br>Programme</h3><br>
   </center>
   
     <label for="username"><h4>Username:</h4></label>
     <input type="text" class="form-control" size="40" required="required" id="username" name="username"/>
     <br/>
     <label for="password"><h4>Password</h4></label>
     <input type="password" class="form-control" size="40" required="required" id="passowrd" name="password"/>
     <br/>
     <input class="btn btn-default btn-primary center-align" role="submit" type="submit" value="Login"> 
	 </div>
   </form>
   </div>
 </body>
</html>