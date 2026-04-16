<?php
if(isset($_POST['add_birds'])){
  $id = $_POST['id'];
  $name= $_POST['name'];

  $image_name= $_FILES['img_file']['name'];
  $image_size = $_FILES['img_file']['size'];
  $tmp_name = $_FILES['img_file']['tmp_name'];

  $type = pathinfo($image_name, PATHINFO_EXTENSION);
  $allowed_type = array('jpg','jpeg', 'png');

  $max_size = 2*1024*1024;

  if(!in_array($type, $allowed_type)){
    $msg = "<div class='alert alert-danger'>Only jpg, jpeg and png suportted!!</div>";
  } elseif($image_size > $max_size){
    $msg = "<div class='alert alert-danger'>Maxmum 2mb file Upload Please!!</div>";

  }else{
    $store_bird_img = "birds/" . "_". $image_name;
    if(move_uploaded_file($tmp_name, $store_bird_img)){

      $data = "$id|$name|$store_bird_img". PHP_EOL;
      file_put_contents("birds_info.txt", $data, FILE_APPEND);
      $msg = "<div class='alert alert-success'>Item Added Successfully!</div>";
    } else{
      $msg = "<div class='alert alert-danger'>Server error during upload!</div>";
    }
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
    body {
      height: 100vh;
    }
    .form-container {
      max-width: 400px;
      width: 100%;
      background: #ffffff;
      padding: 30px;
      border-radius: 15px;
      box-shadow: 0 10px 25px rgba(0,0,0,0.2);
    }
  </style>
</head>
<body>
  <?php
require_once("header.php");
?>
      <div class="d-flex justify-content-center align-items-center vh-100">
    <div class="form-container">
      <h3 class="text-center mb-4">ADD BIRDS</h3>

      <form method="post" enctype="multipart/form-data">

        <div class="mb-3">
          <label class="form-label">Id</label>
          <input type="text" class="form-control" placeholder="Id" name="id" required>
        </div>

        <div class="mb-3">
          <label class="form-label">Name</label>
          <input type="text" class="form-control" placeholder="Name" name="name" required>
        </div>
         <div class="mb-3">
        <input type="file" class="form-control"  name="img_file" required> 
        </div>

        <button type="submit" class="btn btn-primary w-100" name="add_birds">Add birds</button>
      </form>
    </div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>