<?php
// Array to be replaced 
// $array1 = array("orange", "banana", "apple",  
//                                  "raspberry"); 
  
// // arrays that will replace the values  
// // in the first array 
// $array2 = array(0 => "pineapple", 4 => "cherry"); 
// $array3 = array(0 => "grape"); 

// $res=array_replace($array1, $array2,$array3);
// print_r($res);


// $key=array(0,1,2,3,"mod");
// print_r(array_fill_keys($key, "modkhalid"));


// $key=range(0, 19);
// print_r(count(array_fill_keys($key, 12)));


$key=array(1,2,3,4);
$a=array("mod",21);

$res=array_fill_keys($key, $a);
print_r($res);

echo "\n";
?>