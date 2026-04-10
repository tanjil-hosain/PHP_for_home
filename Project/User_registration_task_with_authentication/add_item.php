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
      <div class="d-flex justify-content-center align-items-center vh-100">
    <div class="form-container">
      <h3 class="text-center mb-4">ADD BIRDS/h3>

      <form method="post">

        <div class="mb-3">
          <label class="form-label">Id</label>
          <input type="text" class="form-control" placeholder="Id" name="id" required>
        </div>

        <div class="mb-3">
          <label class="form-label">Name</label>
          <input type="text" class="form-control" placeholder="Name" name="name" required>
        </div>
        <input type="file" name="img_file" required> 

        <button type="submit" class="btn btn-primary w-100" name="add_birds">Add birds</button>
      </form>
    </div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>