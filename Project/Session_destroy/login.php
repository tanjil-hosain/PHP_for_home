<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
    body {
      /* background: linear-gradient(135deg, #544a5f, #252e3c); */
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
      <h3 class="text-center mb-4">User Login</h3>

      <form method="post">

        <div class="mb-3">
          <label class="form-label">Email address</label>
          <input type="email" class="form-control" placeholder="Enter your email" name="email" required>
        </div>

        <div class="mb-3">
          <label class="form-label">Password</label>
          <input type="password" class="form-control" placeholder="Enter password" name="password" required>
        </div>

        <button type="submit" class="btn btn-primary w-100" name="loginbtn">Login</button>
      </form>

      <p class="text-center mt-3 mb-0">
       You don't have an account? <a href="registration.php">Register</a>
      </p>
    </div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
