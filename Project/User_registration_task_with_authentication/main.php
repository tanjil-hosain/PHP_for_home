<?php 
 session_start();

 if(!isset($_SESSION["user_name"])){
	 header("location:login.php");
     exit();
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Bird Gallery</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .bird-img {
            width: 80px;
            height: 80px;
            object-fit: cover;
            border-radius: 8px;
            border: 1px solid #ddd;
        }

        .table-container {
            margin-top: 50px;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>


<body class="bg-light">
    <?php
require_once("header.php");
?>

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
                    // FILE_SKIP_EMPTY_LINES dileo khali line ignore hoy
                    $lines = file($file_path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

                    foreach ($lines as $line) {
                        // Line er ashpashe extra space ba enter thakle seta remove kora
                        $line = trim($line);
                        if (empty($line)) continue;

                        $data = explode("|", $line);

                        // Jodi kono karone data-te ৩ ti part na thake, tokhon error thakate skip korbe
                        if (count($data) < 3) continue;

                        $id = htmlspecialchars($data[0]);
                        $name = htmlspecialchars($data[1]);
                        $img_path = htmlspecialchars($data[2]);

                        echo "<tr>";
                        echo "<td><b>" . $id . "</b></td>";
                        echo "<td><img src='" . $img_path . "' class='bird-img shadow-sm' width='80'></td>";
                        echo "<td>" . $name . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='3' class='text-center'>No birds found! Add some first.</td></tr>";
                }
                ?>

            </tbody>
        </table>
    </div>
    <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="searchModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header bg-success text-white">
        <h5 class="modal-title" id="searchModalLabel">Search Result Found</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center">
        <?php
        if (isset($_GET['search']) && !empty(trim($_GET['search']))) {
            $search_term = trim($_GET['search']);
            $file_path = "birds_info.txt";
            $found = false;

            if (file_exists($file_path)) {
                $lines = file($file_path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
                foreach ($lines as $line) {
                    $data = explode("|", $line);
                    if (count($data) < 3) continue;

                    // Match logic: ID ba Name-e search term thakle show korbe
                    if (stripos($data[0], $search_term) !== false || stripos($data[1], $search_term) !== false) {
                        echo "<div class='card mb-3 shadow-sm p-3'>";
                        echo "<img src='{$data[2]}' class='card-img-top rounded mx-auto' style='max-width: 150px;'>";
                        echo "<div class='card-body'>";
                        echo "<h6 class='text-muted'>ID: {$data[0]}</h6>";
                        echo "<h4 class='card-title text-primary'>{$data[1]}</h4>";
                        echo "</div>";
                        echo "</div>";
                        $found = true;
                    }
                }
            }
            
            if (!$found) {
                echo "<div class='alert alert-warning'>Mama, '$search_term' namer kichu khuje pai nai!</div>";
            }
        }
        ?>
      </div>
      <div class="modal-footer">
        <a href="main.php" class="btn btn-secondary">Close & Clear Search</a>
      </div>
    </div>
  </div>
</div>

<script>
    window.onload = function() {
        const urlParams = new URLSearchParams(window.location.search);
        // Jodi URL-e 'search' thake, tahole modal open hobe
        if (urlParams.has('search') && urlParams.get('search') !== '') {
            var myModal = new bootstrap.Modal(document.getElementById('searchModal'));
            myModal.show();
        }
    }
</script>

</body>

</html>