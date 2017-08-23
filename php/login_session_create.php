<?php
  session_start();
  session_regenerate_id(true);
  $_SESSION['raspi_carauto_admin_name']=$_POST['Username'];
  $_SESSION['raspi_carauto_admin_passcode']=$_POST['Password'];

  if(isset($_SESSION['raspi_carauto_admin_name']))
  {
    include 'credentials.php';
  	if($_SESSION['raspi_carauto_admin_name'] == $uname && $_SESSION['raspi_carauto_admin_passcode'] == $passcode)
  	{
      header("Location: ../control.php");
      exit;
    }
    else {
      header("Location: ./login_session_destroy.php");
      exit;
    }
  }
?>
