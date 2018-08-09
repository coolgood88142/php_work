<?php
    //2.判斷一個變數是否為空的函數？
    $empty = ''; //0、false、null、空字串empty都會等於true
    if(empty($empty)){
        echo '$empty為空值';
    }else{
        echo '$empty不為空值';
    } 
    echo '<br/>';
?>