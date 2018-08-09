<?php
    $email = $_GET['email'];
    $subject = "測試寄信";
    $message = $_GET['message'];
    //$headers = "MIME-Version: 1.0\r\n";
    //$headers.= "Content-type: text/html; charset=utf-8\r\n";
    $headers = "From:".$email."\r\n";
    $email = "peter62782@yahoo.com.tw";
    echo $email;
    echo $subject;
    echo $message;
    echo $headers;


    $to      = 'peter62782@yahoo.com.tw';
    $subject = 'the subject';
    $message = 'hello';
    $headers = array(
        'From' => 'eric88142@yahoo.com.tw',
        'Reply-To' => 'eric88142@yahoo.com.tw',
        'X-Mailer' => 'PHP/' . phpversion()
    );
    if(mail($to, $subject, $message, $headers)){
        echo 'success';
    }
exit;
    if(mail($email,$subject,$message,$headers)){
        echo "寄信成功";
    }else{
        echo "寄信失敗";
    }
     //to = 收件人 , subject = 主旨 , body = 信件文字 , header = 信件標頭

?>