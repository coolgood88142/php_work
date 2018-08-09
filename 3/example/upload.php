<?php


// echo "檔案名稱" . $_FILE['file']
// var_dump( $_FILES['file']);
//echo $_FILES['file'];

copy($_FILES['file']["tmp_name"],"C:/xampp/htdocs/todolist/upload.txt");

echo '複製成功';


?>