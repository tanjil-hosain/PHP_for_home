<?php
$result = fopen("text-file/first.txt", "r") or die("The File is not found");
echo fread($result, filesize("text-file/first.txt"));
fclose($result);

echo"<br>";
echo readfile("text-file/first.txt"); // ertar maddome korle charecter size porjonto asbe!