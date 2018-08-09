<?php
/*
 class CarClass{
	function __con
	function start(){
		$this->array = ['駕照' => true , '乘坐人數' => 7 , '動能' => 'gas' , '種類' => true , '價格' => 'expensive'];
		return $this->array;
	}

	function stop(){

	}
}

class ScooterClass{
	function start(){
		 $this->array = ['駕照' => true , '乘坐人數' => 3  , '動能' => 'gas' , '種類' => true , '價格' => 'expensive'];
		 return $this->array;
	}
}

class BikeClass{
	function start(){
		 $this->array = ['駕照' => false , '乘坐人數' => 1  , '動能' => 'human' , '種類' => true , '價格' => 'ordinary'];
		 return $this->array;
	}
}

class BusClass{
	function start(){
		 $this->array = ['駕照' => false , '乘坐人數' => 'many'  , '動能' => 'Electricity' , '種類' => false , '價格' => 'cheap'];
		 return $this->array;
	}
}

class MrtClass extends BaseClass{

	function start(){
		 $this->array = ['駕照' => false , '乘坐人數' => 'many'  , '動能' => 'Electricity' , '種類' => false , '價格' => 'cheap'];
		 return $this->array;
	}
}

class BaseClass{
	function __construct() {
		$this->name = "SumClass";
		print $this->name . "\t" . "start" ."\n";
	}

	function getClass_Sum() {
		$car =  new CarClass();
		$scooter = new ScooterClass();
		$bike = new BikeClass();
		$bus = new BusClass();
		$mrt = new MrtClass();
		$array_sum = [(object) $car,(object) $scooter,(object) $bike,(object) $bus,(object) $mrt];

		foreach($array_sum as $key => $value){
			var_dump($value->start());
		}
	}

	function __destruct() {
		print $this->name . "\t" . "end" ."\n";
	}
	
}
	
$sunclass = new SumClass();
echo $sunclass->getClass_Sum();
*/

//car類別

class car extends BaseClass{
	function start(){
		$this->door = 'car door';
		return $this->door;
	}

}

//底層類別
class BaseClass{
	function __construct(){
		return 'construct';
	}

	function all(){
		return 'between';
	}

	function __destruct(){
		return 'destruct';
	}
}
$car = new car();
$test = $car->start();

var_dump($test);


?>



//基底類別
class A類別{

}

//衍生類別
class B類別 extends A類別{

}