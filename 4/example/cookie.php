<?php
     //setcookie( "test", "Good_Idea", time()+3600); //變數為test，變數值為Good_Idea，存活時間一小時(3600秒) 
     //echo $_COOKIE["test"]; //讀取變數

    
    
     // Print a cookie
    //echo $_COOKIE["user"];

    // A way to view all cookies
    //print_r($_COOKIE);
    //var_dump($_COOKIE);

    //setcookie("test", "", time()-2500);

    setcookie("cookie","cookiecontext",time()+60);
    setcookie("test", "", time()-3600);
    var_dump($_COOKIE);
?>