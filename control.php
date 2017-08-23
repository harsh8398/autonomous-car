<?php
  session_start();
  if(isset($_SESSION['raspi_carauto_admin_name'])) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="theme-color" content="#2C3E50" />

	<!-- favicon.ico -->
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />

	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">

	<!-- Custom fonts for this template -->
	<link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="vendor/devicon/devicon.min.css" rel="stylesheet" type="text/css">

	<!-- Custom styles for this template -->
	<link href="css/custom.css" rel="stylesheet">

	<title>Welcome</title>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
		<a class="navbar-brand" href="#page-top">Control Panel</span></a>
		<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
			Menu
			<i class="fa fa-bars"></i>
		</button>
		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<form class="form-inline my-2 my-lg-0" action="./php/login_session_destroy.php" method="POST">
			      <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Logout</button>
			    </form>
				</li>
			</ul>
		</div>
	</nav>

  <section class="control-switches">
		<div class="container">
			<!-- Rectangular switch -->
			<!-- <div class="row">
				<label class="switch">
				  <input type="checkbox">
				  <span class="slider"></span>
				</label>
				<label>Headlight</label>
			</div> -->

			<!-- Rounded switch -->
			<div class="row">
				<div class="col-md-2 col-8 ml-auto">
					<label class="toggle-label">Head-Lights</label>
				</div>
				<div class="col-md-1 col-4 mr-auto">
					<label class="switch">
						<input type="checkbox" onclick="headlightAjax()" id="headlight">
						<span class="slider round"></span>
					</label>
				</div>
			</div>

			<div class="row">
				<div class="col-md-2 col-8 ml-auto">
					<label class="toggle-label">Door1 Lock</label>
				</div>
				<div class="col-md-1 col-4 mr-auto">
					<label class="switch">
						<input type="checkbox" onclick="doorAjax(1)" id="door1">
						<span class="slider round"></span>
					</label>
				</div>
			</div>

			<div class="row">
				<div class="col-md-2 col-8 ml-auto">
					<label class="toggle-label">Door2 Lock</label>
				</div>
				<div class="col-md-1 col-4 mr-auto">
					<label class="switch">
						<input type="checkbox" onclick="doorAjax(2)" id="door2">
						<span class="slider round"></span>
					</label>
				</div>
			</div>

			<div class="row">
				<div class="col-md-2 col-8 ml-auto">
					<label class="toggle-label">Door3 Lock</label>
				</div>
				<div class="col-md-1 col-4 mr-auto">
					<label class="switch">
						<input type="checkbox" onclick="doorAjax(3)" id="door3">
						<span class="slider round"></span>
					</label>
				</div>
			</div>

			<div class="row">
				<div class="col-md-2 col-8 ml-auto">
					<label class="toggle-label">Door4 Lock</label>
				</div>
				<div class="col-md-1 col-4 mr-auto">
					<label class="switch">
						<input type="checkbox" onclick="doorAjax(4)" id="door4">
						<span class="slider round"></span>
					</label>
				</div>
			</div>
		</div>
  </section>

  <!-- Bootstrap core JavaScript -->
	<script src="vendor/jquery/jquery.min.js"></script>
	<script src="vendor/popper/popper.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

	<!-- Custom scripts for this template -->
	<script src="js/custom.js"></script>

</body>
</html>
<?php
	} else {
		header("Location: ./index.html");
	  exit;
	}
?>
