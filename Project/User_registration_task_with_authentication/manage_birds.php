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
        <tbody>
    <?php
    if (file_exists("birds_info.txt")) {
        // FILE_SKIP_EMPTY_LINES use korle blank line gula PHP nijei bad diye dey
        $lines = file("birds_info.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        
        foreach ($lines as $line) {
            $line = trim($line); // Ashpashe extra space remove kora
            if (empty($line)) continue; // Jodi line purapuri khali hoy skip korbe

            $data = explode("|", $line);

            // Check koro thikmoto ID, Name, r Image ache kina
            if (count($data) < 3) continue; 

            $id   = $data[0];
            $name = $data[1];
            $img  = $data[2];

            echo "<tr>";
            echo "<td>$id</td>";
            echo "<td><img src='$img' width='50' class='rounded'></td>";
            echo "<td>$name</td>";
            echo "<td>
                    <a href='edit_birds.php?id=$id' class='btn btn-sm btn-info text-white'>Edit</a>
                    <a href='delete_birds.php?id=$id' class='btn btn-sm btn-danger' onclick='return confirm(\"Are you sure?\")'>Delete</a>
                  </td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='4'>No data found!</td></tr>";
    }
    ?>
</tbody>
</table>

</body>
</html>