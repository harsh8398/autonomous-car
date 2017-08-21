<?php
session_start(); 
$_SESSION['myvar']=$_POST['Name1'];
$_SESSION['myvalue']=$_POST['p1'];
?>

<?php
    if(isset($_SESSION['myvar']))
    {
		if($_SESSION['myvar'] == 'jay' && $_SESSION['myvalue'] == 'sg3112')
		{
?>
			<html>
			<head>
			<link rel = "stylesheet" type="text/css" href="logout.css">
			</head>
			<body id="demo" onload="myFunction()">
			<form>
				<h1>Welcome   <?php echo $_SESSION['myvar']; ?></h1><br><br><br>
				<input type="button" value="Log out" class="button" onclick="reload();"/><br><br>

				<?php
	                        $comm=escapeshellcmd("sudo  /usr/bin/python /var/www/html/IR_off.py");
                                $op=exec($comm);?>

			</form>
			</body>
			</html>
			<script>
				function reload()
				{
					window.location="http:\/\/169.254.63.191/IR_on_off.php";
				}
			</script>
<?php
		}
		else
		{
			echo '<script type="text/javascript">';
			echo 'alert("please enter correct details");';
			echo 'window.location.href = "http:\/\/169.254.63.191/Login.php";';
			echo '</script>';
		}
    }
	else
	{
		echo '<script type="text/javascript">';
		echo 'alert("please enter all details");';
		echo 'window.location.href = "http:\/\/169.254.63.191/Login.php";';
		echo '</script>';
	}
?>
