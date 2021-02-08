<?php
session_start();
$_SESSION['nom']='judith';
?>
<!DOCTYPE html>
<html>
   <head>
   	 <meta charset="utf8_8"/>
   	</head>
   	<body> 
   		<?php
   		echo 'Bonjour M.' .$_SESSION['nom'];?>
          <p>aller aux <a
           href="page3a.php">information</a></p>
   	</body>
  </html>