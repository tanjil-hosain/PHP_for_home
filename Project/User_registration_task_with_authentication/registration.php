<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User_Registration</title>
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
    <div class="d-flex justify-content-center align-items-center vh-100">
    <div class="form-container">
      <h3 class="text-center mb-4">Registation</h3>

      <form method="post">
                <div class="mb-3">
          <label class="form-label">ID</label>
          <input type="text" class="form-control" placeholder="ID" name="id" required>
        </div>
        <div class="mb-3">
          <label class="form-label">Full Name</label>
          <input type="text" class="form-control" placeholder="Enter your name" name="name" required>
        </div>

        <div class="mb-3">
          <label class="form-label">Email address</label>
          <input type="email" class="form-control" placeholder="Enter your email" name="email" required>
        </div>

        <div class="mb-3">
          <label class="form-label">Password</label>
          <input type="password" class="form-control" placeholder="Enter password" name="password" required>
        </div>
        <div class="mb-3">
          <label class="form-label"> Confirm Password</label>
          <input type="password" class="form-control" placeholder=" Confirm your  password" name="password" required>
        </div>
                <div class="mb-3">
          <label class="form-label">Address</label>
          <input type="text" class="form-control" placeholder=" Address" name="address" required>
        </div>
                <div class="mb-3">
          <label class="form-label">Contact Number</label>
          <input type="text" class="form-control" placeholder=" Contact Number" name="contact" required>
        </div>
                <div class="mb-3">
          <label class="form-label">User Name</label>
          <input type="text" class="form-control" placeholder=" User name" name="user_name" required>
        </div>

        <button type="submit" class="btn btn-primary w-100" name="register">Register</button>
      </form>

      <p class="text-center mt-3 mb-0">
        Already have an account? <a href="login.php">Login</a>
      </p>
    </div>
  </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php
if(isset($_POST['register'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password= $_POST['password'];
    $address = $_POST['address'];
    $contact = $_POST['contact'];
    $user_name = $_POST['user_name'];

    $email_pattern = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";

    $pass_pattern = "/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/";

       if(!preg_match($email_pattern,$email)){
        echo "Your email is invalid!!";
    } elseif(!preg_match($pass_pattern, $password)){
        echo "Your Password must be captial or 8 length";
    } else {
        $file= fopen("user.txt", "a");
        $data = $id . "|". $name . "|". $email."|". $password. "|". $address. "|". $contact."|".$user_name . PHP_EOL;
        fwrite($file,$data);
        fclose($file);
        echo "Registration Succesfully";
        header("location:login.php");


    }

 
}
?>