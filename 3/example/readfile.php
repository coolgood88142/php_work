<?php

$file="book.txt";
// $open_file = fopen($file , "a+");

//$read = fread($open_file, filesize($file));
//echo $read;

$fileread = readfile($file);
echo $fileread;

?>