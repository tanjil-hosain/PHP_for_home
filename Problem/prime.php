<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
    Enter a number: <input type="text" name="num">
    <input type="submit" value="Check">
</form>

<?php
if (isset($_POST['num'])) {
    $num = $_POST['num'];
    echo "You entered: " . $num;
}
?>
    <?php

    $count = 0;
     if ($num <=1) {
            echo("Not Prime or Composite");
        } else {
            for ($i = 2; $i < $num; $i++) {
                if ($num % $i == 0) {
                    $count++;
                    break;
                }
            }
            if ($count == 0) {
                echo("Prime");
            } else {
                echo("not Prime");
            }
        }
    ?>
</body>
</html>