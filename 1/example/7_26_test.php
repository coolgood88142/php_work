<?php

    $value = $_POST['value'];
    $pass = $_POST['pass'];
    // var_dump($pass);
      
    // if($value>90){
    //     echo 'good';
    // }else{
    //     echo 'bad';
    // }
    
    // for($i=0;$i<10;$i++){
    //     echo '第' . $i . '次';
    //     echo '帳號' . $value;
    //     echo '密碼' . $pass;
    //     echo '</br>';
    // }

    // $i=0;
    // while($i<10){
    //     echo '第' . $i . '次';
    //     echo '帳號' . $value;
    //     echo '密碼' . $pass;
    //     echo '</br>';
    //     $i++;
    // }

    switch($value){
        case "user" :
            echo check();
        break;
        default:
            echo '帳號失敗';
        break;
    }

    function check(){
        return 'seuess';
    }
?>
<!-- switch (expression)
{
case label1:
  code to be executed if expression = label1;
  break;  
case label2:
  code to be executed if expression = label2;
  break;
default:
  code to be executed
  if expression is different 
  from both label1 and label2;
} -->