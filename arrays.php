<?php
        // data efficeint  utilization is callled array
        // there are three different typers of arrays
        // 1:     numeric/indexed array
        // 2:     associative array
        // 3:      multi dimensional associoative array

// /--------------------------------------------------------------------------------------
//    this is simple array and if we want to print the key and value so we can print and    as well as individual if we want to print key and value so we can also do the same


        // $x=array("a"=>10,"b"=>20,"c"=>30);
        // foreach ($x as $key => $value) {
        //        echo "$key"."=>"."$value"."<br>";
        // }
// -----------------------------------------------------------------------------------
//_____________________________  1st ::   numeric arrays__________________________________

$array1=array("orange","blue","red","green");
// print_r($array1);       // it will render all the elements like console//

for ($i=0; $i <count($array1) ; $i++) { 
      echo "$array1[$i]"." ";
}




$counting=count($array1);
echo "<br>";
echo "The length of the array is ";   // find the length of array//
echo "$counting";
echo "<br>";
 
                         // The new index will be added at the end of the array 
$array1[]="new addition ";
for ($i=0; $i <count($array1) ; $i++) { 
        echo "$array1[$i]"." ";
  }

  echo "<br>";
  







      
     
      
?>