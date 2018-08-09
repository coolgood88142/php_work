<?php 

// $array = [  'a' => '10',
//             'b' => '20',
//             'c' => '30' ];
// $array = array_change_key_case($array,CASE_UPPER); //CASE_LOWER
// foreach ($array as $key => $value) {

//     var_dump($key);
// var_dump($value);
// }

// $array = [
//     [
//       'id' => 5698,
//       'first_name' => 'Peter',
//       'last_name' => 'Griffin',
//     ],
//     [
//       'id' => 4767,
//       'first_name' => 'Ben',
//       'last_name' => 'Smith',
//     ],
//     [
//       'id' => 3809,
//       'first_name' => 'Joe',
//       'last_name' => 'Doe',
//     ]
//   ];

//   $last_names = array_column($array, 'last_name');
//   print_r($last_names);exit;

$fname=["Peter","Ben","Joe"];
$age=["35","37","43"];

$c=array_combine($fname,$age);
var_dump($c);

?>