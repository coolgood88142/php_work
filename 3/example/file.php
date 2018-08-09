<?php

$file = "book.txt";
$content = "我的第一個file";

$fp = fopen($file, "a+");

fwrite($fp, $content);

fputs($fp, $content,15);

echo 'book.txt成功';

fclose($fp);

?>