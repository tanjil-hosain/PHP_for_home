<?php
$write = file_put_contents("text-file/check.txt", "hello\n", FILE_APPEND);
echo"succeccfullt";
$result = file_get_contents("text-file/check.txt");


$read = fopen("text-file/check.txt", "r");
echo fread($read, filesize("text-file/check.txt"));