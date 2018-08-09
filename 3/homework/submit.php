<?php
    $file = "guestbook.txt";
    $username = $_POST['username'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $date = date("Y年n月j日 H:i:s");
    $text = 
    "留言時間:" . $date . "<br/>" . "\r\n" 
    . "姓名:" . '<a href="email.php?message='.$message.'&email='.$email.'">' . $username . '</a>' . "<br/>" . "\r\n" 
    . "留言:" . $message . "<br/>" . "\r\n"
    ."----------------------------------------------------------" . "<br/>" . "\r\n" ;

    $fp = fopen($file, "a+");

    fwrite($fp, $text);

    echo '寫入guestbook.txt成功';

    fclose($fp);

?>