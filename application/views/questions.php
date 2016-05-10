<html>
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
		<title>
			NEW QUESTIONS
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
					 <li><a href="<?php echo base_url(); ?>Welcome"><h3><i class="fa fa-won"></i> Website</h3></a></li>
					 <li><a href="<?php echo base_url(); ?>AdminPanel"><h3><i class="fa fa-home"></i> Home</h3></a></li>
					<li class="active" ><a href="<?php echo base_url(); ?>Faq/openAll"><h3><i class="fa fa-pencil"></i> Answer</h3></a>
					<li ><a href="<?php echo base_url(); ?>Faq/edit"><h3><i class="fa fa-pencil-square-o"></i> Manage Answers</h3></a>
					 </li>
					</li>
					<li><a href="<?php echo base_url(); ?>AdminPanel/logout"><h3><i class="fa fa-sign-out"></i> Log Out</h3></a></li>
					<li>
				  </ul>
				</div>
				<!-- #Nav Ends -->

			  </div>
			</div>
		</header>
		<div class="questions">
			<?php
			if($result){
				foreach($result as $row)
				{?>
				<br>
				<div class="container">
					<h4 id="name"><?php echo $row['name'] ?> :</h4>
					<div class="well"><p id="question"><?php echo $row['question'] ?> </p></div>
					
					<a class="btn btn-success btn-default round" href="<?php echo base_url(); ?>Faq/openOne/<?php echo $row['Id']?>">
						<h3>Answer</h3>
					</a>
					<a class="btn btn-info btn-default pull-right round" href="<?php echo base_url(); ?>Faq/delete/<?php echo $row['Id']?>">
						<h3>Delete</h3>
					</a>
				</div>
				<?php } 
			}
			else
			{
			?>
			<h4 class="text-center">No Unanswered Questions</h4>
			<?php } ?>
		</div>
	</body>
</html>