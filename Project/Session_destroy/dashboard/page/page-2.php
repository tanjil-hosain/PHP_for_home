<?php 
 session_start();

 if(!isset($_SESSION["email"])){
	 header("location:../../login.php");
     exit();
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page-2</title>
</head>
<body>
    <?php 
    require_once("../heder.php")
     ?>
    this is 2nd page
</body>
</html>