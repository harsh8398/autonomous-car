<html>
 <head>
 <meta name="viewport" content="width=device-width" /> <title>LED Control</title>
 </head>
         <body>
         System Control:
         <form method="get" action="IR_on_off.php">
                 <input type="submit" value="ON" name="on">
                 <input type="submit" value="OFF" name="off">
         </form>
         <?php
         if(isset($_GET['on'])){
                $comm=escapeshellcmd("sudo  /usr/bin/python /var/www/html/IR.py");
         	$op=exec($comm);
	        echo "LED is on";
         }
         else if(isset($_GET['off'])){
                echo '<script type="text/javascript">';
                echo 'alert("please enter correct details");';
                echo 'window.location.href = "http:\/\/169.254.63.191/Login.php";';
                echo '</script>';
         }
         ?>
         </body>
 </html>

