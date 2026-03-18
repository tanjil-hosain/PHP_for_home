<?php


//write
$r = fopen("text-file/check.txt", "w");
$ur = "this is new file";
fwrite($r, $ur);


//read
$read = fopen("text-file/check.txt", "r");
echo fread($read, filesize("text-file/check.txt"));