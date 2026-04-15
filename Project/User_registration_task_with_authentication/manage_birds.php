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
<body class="bg-light">

<table class="table table-bordered align-middle text-center">
    <thead class="table-secondary">
        <tr>
            <th>ID</th>
            <th>Image</th>
            <th>Name</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if (file_exists("birds_info.txt")) {
            $lines = file("birds_info.txt", FILE_IGNORE_NEW_LINES);
            foreach ($lines as $line) {
                $data = explode("|", $line);
                $id = $data[0];
                $name = $data[1];
                $img = $data[2];

                echo "<tr>";
                echo "<td>$id</td>";
                echo "<td><img src='$img' width='50' class='rounded'></td>";
                echo "<td>$name</td>";
                echo "<td>
                        <a href='edit_bird.php?id=$id' class='btn btn-sm btn-info'>Edit</a>
                        <a href='delete_bird.php?id=$id' class='btn btn-sm btn-danger' onclick='return confirm(\"Are you sure?\")'>Delete</a>
                      </td>";
                echo "</tr>";
            }
        }
        ?>
    </tbody>
</table>

</body>
</html>