<?php
    //4.如何刪除一個變數？
    $array = ['1', '2', '3'];
    echo '$array刪除前為';
    var_dump($array);
    echo '<br/>';

    unset($array[1]);

    echo '$array刪除後為';
    var_dump($array);
    echo '<br/>';
?>