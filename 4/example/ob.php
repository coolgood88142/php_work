<?php

    for ($i=0; $i < 30; $i++) { 
        echo "$i ";
        if(($i % 2) == 0){
            ob_flush();
            sleep(1);
        }
        else
            ob_clean();    
    }

    echo "只輸出偶數";
    ob_end_flush();
?>