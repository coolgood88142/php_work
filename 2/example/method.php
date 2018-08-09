<?php


// echo ' 這是第" '   . __LINE__ . ' "行' ;

// echo ' 該文件位於" '   . __FILE__ . ' " ' ;

// echo ' 該文件位於" '   . __DIR__ . ' " ' ;

// function test ( ) { 
//     echo ' 函數名為：' . __FUNCTION__ ;
// } 
// test ( ) ;

// class test { function _print ( ) { echo ' 類名為：'   . __CLASS__ . " <br> " ;
//     echo ' 函數名為：' . __FUNCTION__ ;
// } } $t = new test ( ) ;
// $t -> _print ( ) ;

// class Base { 
//     public function sayHello ( ) { 
//         echo ' Hello ' ;
//     } 
// } 
// trait SayWorld { 
//     public function sayHello ( ) { 
//         parent :: sayHello ( ) ;
//     echo ' World! ' ;
//     } 
// } 
// class MyHelloWorld extends Base { 
//     use SayWorld ;
// } 


// $o = new MyHelloWorld ( ) ;
// $o -> sayHello ( ) ;

function test ( ) { 
    echo ' 函數名為：' . __METHOD__ ;
} 
test ( ) ;

?>