<?php
  $up = ($_GET['up'] == 'true') ? 1 : 0;
  $down = ($_GET['down'] == 'true') ? 1 : 0;
  $right = ($_GET['right'] == 'true') ? 1 : 0;
  $left = ($_GET['left'] == 'true') ? 1 : 0;

  // python
  // $command=escapeshellcmd("sudo ../pyscripts/joystick.py ".$up." ".$down." ".$right." ".$left);
  // $output=shell_exec($command);
  // install wiring pi by executing following set of commands
  // `git clone git://git.drogon.net/wiringPi`
  // `cd wiringPi`
  // `./build`

  $upOutput=shell_exec("/usr/local/bin/gpio write 8 ".$up);
  $downOutput=shell_exec("/usr/local/bin/gpio write 9 ".$down);
  $rightOutput=shell_exec("/usr/local/bin/gpio write 7 ".$right);
  $leftOutput=shell_exec("/usr/local/bin/gpio write 0 ".$left);
  echo "Up: ".$up.", Down: ".$down.", Right: ".$right.", Left: ".$left;
?>
