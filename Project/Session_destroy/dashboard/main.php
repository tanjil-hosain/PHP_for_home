<?php 
 session_start();

 if(!isset($_SESSION["email"])){
	 header("location:login.php");
     exit();
  }
?>
<?php
 $save = "img/";
if(isset($_POST['submit'])){
    $filename= $_FILES['file']['name'];
    $tmp = $_FILES['file']['tmp_name'];
    $typ = pathinfo($filename, PATHINFO_EXTENSION);
   

    if($typ == "jpg" || $typ == "png"){
        $destination = $save . $filename;
        move_uploaded_file("$tmp", "$destination");
    } else{
        echo " Only jpg and png uploaded";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dash-board</title>
</head>
<body>
    <?php
    require_once("heder.php");
    ?>

    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="file"> 
        <input type="submit" name="submit" value="Submit">

    </form>
    <hr>
    <h2>All Uploaded Images</h2>
    <div style="display: flex; flex-wrap: wrap; gap: 10px;">
        <?php
        // Folder er sob image scan kore dekhano
        $images = glob($save . "*.{jpg,jpeg,png}", GLOB_BRACE);
        
        foreach($images as $image) {
            echo "<div>
                    <img src='$image' width='200px' style='border:1px solid #ccc; border-radius:10px;'>
                    <p>".basename($image)."</p>
                  </div>";
        }
        ?>
    </div>
</body>
</html>

