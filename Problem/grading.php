<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

 <form method="post">
    Enter a marksber: <input type="text" name="marks">
    <input type="submit" value="Check">
</form>

<?php
if (isset($_POST['marks'])) {
    $marks = $_POST['marks'];
    echo "You entered: " . $marks;
}
?>
  <?php 
if ($marks >= 80) {
    echo( "A+");
} else if ($marks >= 70) {
    echo("A") ;
} else if ($marks >= 60) {
    echo("B") ;
} else {
    echo("Below B") ;
}
    ?>
</body>
</html>