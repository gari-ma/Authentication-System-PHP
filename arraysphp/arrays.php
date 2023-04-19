<!-- 
    ARRAY- Collection of homogenous objects 
    continous memory location 

    * counting always starts from 1
    * index always starts from 0
-->

<?php

 $arr= array(1,2,3,4,5,8,9);
     //print_r($arr);
  echo count($arr);  // gives count of array elements 

  // to print nth element of array 
  echo $arr[2];


  // to reassign the value of n index 
  $arr[2]=4;
  echo $arr[2];

//    for($i=0; $i<count($arr);$i++){
//     echo $arr[$i];

//    }

foreach($arr as $x){
    echo $x."<br>";
}

?>