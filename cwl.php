<<?php
	session_start(); 
 ?>


<html>
<head>

	<title>Penn Rangers</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css"> 
     
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

</head>
<body>
	<div id='top'>
		<div class="container">
			<div class="col-md-12">
				<h3>
					Welcome to the Database of Clan War League of Penn Rangers
				</h3>
				
				
				
			</div>
			
		</div>
	</div>

	<div class="navbar-default" id="navbar"><!-- navbar start-->
		<div class="container"><!-- container start-->
			<div class="navbar-header">
				<a class="navbar-brand home" href="index.php">
					<img src="images/logo.png" alt="bracket" class="hidden-xs"><!-- LOGO-->
					<img src="images/logo3.jpg" alt="bracket" class="visible-xs">

				</a>
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
					<span class="sr-only">Toggle Navigation</span>
					<i class="fa fa-align-justify"></i>
					
				</button>
			</div>
			<div class="navbar-collapse collapse" id="navigation"> <!-- navbar start-->
				<div class="padding-nav"> <!-- padding start-->
					<ul class="nav navbar-nav navbar-left">
						<li class="active">
							<a href="index.php">About</a>
						</li>
						<li>
							<a href="#">Clan wars</a>
						</li>
						<li>
							<a href="cwl.php">Clan War leagues</a>
						</li>


					</ul>
				</div>
			</div>
		</div>
	</div>

	<form action= "#"  method="post"enctype="multipart/form-data">
	<div class="container">
		<div class="col-md-4">
			<div class="box">
				<div class="form-group">
					<label>Year</label>
						<input type="number" name="year" class="form-control" required="">
					
								
				</div>
				<div class="form-group">
					<label>Month</label>
						
							<select name="months" class="form-control" required="">
								<option>select</option>
								<option>January</option>
								<option>February</option>
								<option>March</option>
								<option>April</option>
								<option>May</option>
								<option>June</option>
								<option>July</option>
								<option>August</option>
								<option>September</option>
								<option>October</option>
								<option>November</option>
								<option>December</option>

							</select>
						
								
				</div>
			<center><button type="submit" name="submit" class="btn btn-primary">
								<i class="fa fa-user-md"></i>Submit</button></center>
			</div>
			
		</div>
		<div class="col-md-8">
			<?php
				if (isset($_POST['submit'])){
					include('datashow.php');
				}
			?>
		</div>
		
	</div>
	</form>


	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</body>
</html>