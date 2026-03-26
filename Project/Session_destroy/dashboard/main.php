<?php
if(isset($_POST['submit'])){
    $filename= $_FILES['file']['name'];
    $tmp = $_FILES['file']['tmp_name'];
    $typ = pathinfo($filename, PATHINFO_EXTENSION);
    $save = "img/";

    if($typ == "jpg" || $typ == "png"){
        move_uploaded_file("$tmp", "$save.$filename");
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
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="file"> 
        <input type="submit" name="submit" value="Submit">

    </form>
</body>
</html>

<?php
if(isset($_POST['submit'])){
    echo"<img src= '$save.$filename' alt='image' width='400px'>";
}
?>