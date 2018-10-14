<?php
$array = array(3, 4, 2, 1); 
  
  
      function comparatorRev( $x, $y) 
    {    
        // If $x is equal to $y it returns 0 
        if ($x== $y) 
            return 0; 
      
        // if x is less than y then it returns -1 
        // else it returns 1     
        if ($x < $y) 
            return 1; 
        else
            return -1; 
    } 
    function comparatorFunc( $x, $y) 
    {    
        // If $x is equal to $y it returns 0 
        if ($x== $y) 
            return 0; 
      
        // if x is less than y then it returns -1 
        // else it returns 1     
        if ($x < $y) 
            return -1; 
        else
            return 1; 
    } 
      
    // Input array 
    $arr= array(2, 9, 1, 3, 5);  
    $arr1= array(2, 9, 1, 3, 5);  
  
    usort($arr, "comparatorFunc"); 
      
    print_r($arr); 

    usort($arr1, "comparatorRev");
    print_r($arr1);


?>