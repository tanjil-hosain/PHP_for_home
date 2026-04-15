<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bird Gallery</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .bird-img { width: 80px; height: 80px; object-fit: cover; border-radius: 8px; border: 1px solid #ddd; }
        .table-container { margin-top: 50px; background: #fff; padding: 20px; border-radius: 10px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); }
    </style>
</head>
<?php
require_once("header.php");
?>
<body class="bg-light">

<div class="container table-container">
    <h2 class="text-center mb-4">Available Birds</h2>
    <div class="d-flex justify-content-between mb-3">
        <a href="add_birds.php" class="btn btn-primary">+ Add New Bird</a>
        <a href="manage_birds.php" class="btn btn-warning">Manage (Edit/Delete)</a>
    </div>

    <table class="table table-hover align-middle">
        <thead class="table-dark text-center">
            <tr>
                <th>ID</th>
                <th>Image</th>
                <th>Bird Name</th>
            </tr>
        </thead>
        <tbody class="text-center">
            <?php
            $file_path = "birds_info.txt";
            if (file_exists($file_path)) {
                $lines = file($file_path, FILE_IGNORE_NEW_LINES);
                foreach ($lines as $line) {
                    $data = explode("|", $line);
                    // $data[0] = ID, $data[1] = Name, $data[2] = Image Path
                    echo "<tr>";
                    echo "<td><b>" . htmlspecialchars($data[0]) . "</b></td>";
                    echo "<td><img src='" . htmlspecialchars($data[2]) . "' class='bird-img shadow-sm'></td>";
                    echo "<td>" . htmlspecialchars($data[1]) . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='3'>No birds found! Add some first.</td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>

</body>
</html>