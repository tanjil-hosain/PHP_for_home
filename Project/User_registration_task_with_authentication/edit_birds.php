<?php
$id = $_GET['id'];
$file_path = "birds_info.txt";
$lines = file($file_path, FILE_IGNORE_NEW_LINES);
$bird_data = [];

// Oi ID-r current data khuje ber kora
foreach ($lines as $line) {
    $data = explode("|", $line);
    if ($data[0] == $id) {
        $bird_data = $data;
        break;
    }
}

// Update Logic
if (isset($_POST['update_bird'])) {
    $new_id = $_POST['id'];
    $new_name = $_POST['name'];
    $old_img = $_POST['old_img'];
    $updated_lines = [];

    // Chhobi change korle notun path, naile puron path
    if (!empty($_FILES['img_file']['name'])) {
        $new_img = "birds/" . time() . "_" . $_FILES['img_file']['name'];
        move_uploaded_file($_FILES['img_file']['tmp_name'], $new_img);
        if (file_exists($old_img)) unlink($old_img); // Puron chhobi delete
    } else {
        $new_img = $old_img;
    }

    foreach ($lines as $line) {
        $data = explode("|", $line);
        if ($data[0] == $id) {
            // Updated data-ta shajano
            $updated_lines[] = "$new_id|$new_name|$new_img";
        } else {
            $updated_lines[] = $line;
        }
    }

    file_put_contents($file_path, implode(PHP_EOL, $updated_lines) . PHP_EOL);
    header("Location: manage_birds.php");
}
?>

<form method="POST" enctype="multipart/form-data" class="container mt-5">
    <h3>Edit Bird Data</h3>
    <input type="text" name="id" value="<?= $bird_data[0] ?>" class="form-control mb-2">
    <input type="text" name="name" value="<?= $bird_data[1] ?>" class="form-control mb-2">
    <input type="hidden" name="old_img" value="<?= $bird_data[2] ?>">
    <p>Current Image: <img src="<?= $bird_data[2] ?>" width="50"></p>
    <input type="file" name="img_file" class="form-control mb-2">
    <button type="submit" name="update_bird" class="btn btn-success">Save Changes</button>
</form>