<?php
if (isset($_GET['id'])) {
    $delete_id = $_GET['id'];
    $file_path = "birds_info.txt";

    if (file_exists($file_path)) {
        $lines = file($file_path, FILE_IGNORE_NEW_LINES);
        $new_data = [];

        foreach ($lines as $line) {
            $data = explode("|", $line);
            if ($data[0] != $delete_id) {
                // Sudhu oi ID chara baki gulo rakhlam
                $new_data[] = $line;
            } else {
                // Optional: Delete hobar shomoy image file-tao folder theke delete kora
                if (file_exists($data[2])) {
                    unlink($data[2]);
                }
            }
        }

        // Notun data file-e abar likhe deya (PHP_EOL diye line break kora)
        file_put_contents($file_path, implode(PHP_EOL, $new_data) . PHP_EOL);
        
        header("Location: manage_birds.php"); // Kaj sheshe manage page-e pathay dibe
    }
}
?>