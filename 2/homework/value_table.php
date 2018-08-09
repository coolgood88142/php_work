<?php
//1.用PHP加HTML做99乘法表，印出X * Y = Z(格式)
    $length = $_POST['length'];
    $width = $_POST['width'];

    for($y=1;$y<=$width;$y++){

        echo '<br/>';

        for($x=1;$x<=$length;$x++){

            echo $x.' * '.$y.' = '.$x * $y.'&nbsp;&nbsp;&nbsp;';
        }

    }
    echo '<br/>';
?>