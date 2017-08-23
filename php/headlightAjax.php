<?php
  if($_GET['action'] == 'TURN_ON_HEADLIGHT'){
    // for sudo to work we will need to add apache username to sudoers file
    // sudo echo "apache_username ALL=(ALL) NOPASSWD: ALL" >> /etc/sudoers
    $command=escapeshellcmd("sudo ../pyscripts/headlight.py 1");
    $output=shell_exec($command);
    echo $output;
  } else if ($_GET['action'] == 'TURN_OFF_HEADLIGHT') {
      $command=escapeshellcmd("sudo ../pyscripts/headlight.py 0");
      $output=shell_exec($command);
      echo $output;
    } else {
      echo "Something went wrong!";
    }
?>
