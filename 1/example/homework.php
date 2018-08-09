<?php
	//echo 'apple';
	
	//$array = ['test1','test2','test3'];
	//var_dump($array);
	//print_r($array);
	
	//$array_key = [
		//'year' => '107',
		//'month' => 07,
		//'day' => (object) '23'
	//];
	//var_dump($array_key);
	
	class demo{
		public $test = 'hello_test';
		function print_test(){
			echo $this->test;
		}
	}
	$demo = new demo();
	$demo->print_test();
?>