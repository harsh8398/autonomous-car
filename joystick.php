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
	<nav class="navbar navbar-expand-lg fixed-top" id="mainNav">
		<a class="navbar-brand" href="http://learningthreejs.com/blog/2011/12/26/let-s-make-a-3d-game-virtual-joystick/">Virtual Joystick</span></a>
		<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
			Menu
			<i class="fa fa-bars"></i>
		</button>
		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <span class="my-2 my-sm-2" id="joy_coords"></span>
				</li>
        <li class="nav-item">
          <form class="form-inline col-2 my-lg-0" action="./control.php" method="POST">
			      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Control Panel</button>
			    </form>
				</li>
        <li class="nav-item">
          <form class="form-inline col-2 my-lg-0" action="./php/login_session_destroy.php" method="POST">
			      <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Logout</button>
			    </form>
				</li>
			</ul>
		</div>
	</nav>

  <!-- Bootstrap core JavaScript -->
	<script src="vendor/jquery/jquery.min.js"></script>
	<script src="vendor/popper/popper.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

  <!-- Custom scripts for this template -->
	<script src="js/custom.js"></script>

  <!-- VirtualJoystick JS -->
	<script src="js/virtualjoystick.js"></script>
  <script src="js/virtualjoystick_custom.js"></script>

</body>
</html>
<?php
	} else {
		header("Location: ./index.html");
	  exit;
	}
?>
