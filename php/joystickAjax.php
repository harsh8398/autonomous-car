<?php
  if($_GET['top'] == 'true' && $_GET['down'] == 'false' && $_GET['right'] == 'false' && $_GET['left'] == 'false'){
    // for sudo to work we will need to add apache username to sudoers file
    // sudo echo "apache_username ALL=(ALL) NOPASSWD: ALL" >> /etc/sudoers
    $command=escapeshellcmd("sudo ../pyscripts/joystick.py 1 0 0 0");
  } else if ($_GET['top'] == 'true' && $_GET['down'] == 'false' && $_GET['right'] == 'true' && $_GET['left'] == 'false') {
      $command=escapeshellcmd("sudo ../pyscripts/joystick.py 1 0 1 0");
    } else if ($_GET['top'] == 'true' && $_GET['down'] == 'false' && $_GET['right'] == 'false' && $_GET['left'] == 'true') {
        $command=escapeshellcmd("sudo ../pyscripts/joystick.py 1 0 0 1");
      } else if ($_GET['top'] == 'false' && $_GET['down'] == 'true' && $_GET['right'] == 'true' && $_GET['left'] == 'false') {
          $command=escapeshellcmd("sudo ../pyscripts/joystick.py 0 1 1 0");
        } else if ($_GET['top'] == 'false' && $_GET['down'] == 'true' && $_GET['right'] == 'false' && $_GET['left'] == 'true') {
            $command=escapeshellcmd("sudo ../pyscripts/joystick.py 0 1 0 1");
          } else if ($_GET['top'] == 'false' && $_GET['down'] == 'true' && $_GET['right'] == 'false' && $_GET['left'] == 'false') {
              $command=escapeshellcmd("sudo ../pyscripts/joystick.py 0 1 0 0");
            } else {
              $command=escapeshellcmd("sudo ../pyscripts/joystick.py 0 0 0 0");
            }
  $output=shell_exec($command);
  echo $output;
?>
