<?php

 
 //$apple = 'red apple'; //顯示apple 字串
 $array_test = ['apple','banana','graph'];
 
 //var_dump($array_test);
 
 
 //foreach($array_test as $key => $value){
//	var_dump($value);
 //}
 
 


 class BaseClass{
	public $hello = 'Hello World';
	
	function __construct() {
       print "In BaseClass constructor\n";
   }
	
	function test_func(){
		return 'test';
	}
	
	function hello(){
		echo $this->test_func(); 
		echo $this->hello;
	}
 }
 
  class SubClass extends BaseClass {
   function __construct() {
       parent::__construct();
       print "In SubClass constructor\n";
   }
}

 // $base_class = new SubClass;
 // echo $base_class->hello();
 
// -> 物件的指向
// =>	陣列的指向
 $arrat_has_key = [
	'food' => (object)'apple',
	'drink' => 'water'
 ];
 
 //var_dump($arrat_has_key);
 
 class MyDestructableClass {
   function __construct() {
       print "In constructor\n";
       $this->name = "MyDestructableClass";
       $this->date = date("m.d.y");
   }
 	
 	function test(){
 		echo $this->date;
 	}

   function __destruct() {
       print "Destroying " . $this->name . "\n";
   }
}
 
 //$obj = new MyDestructableClass();

 //echo $obj->test();

// $test = false;
// if($test){
// 	echo 'success';
// }

$e = 0x3fc;
//echo "0x3fc = $e </br>";
//echo "test \n";

$a = 10;
$b = 10;
//echo $a + $b;
$a = $a+1; //$a++
//echo $a;

$test_string = '123';
$test_int = 123;

if($test_string == $test_int){
	//echo '123';
}

if($test_string === $test_int){

}else{
	//echo '因為行台太不一樣所以進來';
}

//$array_sum = [(object) $car,(object) $scooter,(object) $bike,(object) $bus,(object) $mrt];

//foreach($array_sum as $key => $value){
//	var_dump($value->start());
//}
?>
