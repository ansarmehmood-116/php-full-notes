<?php
//Question:1
// $color = array(4 => 'white', 6 => 'green', 11 => 'red');
// foreach ($color as $key => $val) {
//     echo "First Key: $key, First Value: $val";
//     break;
// }

//OR second Method

// $color=array(4=>'White',6=>'Green',11=>'Red');
//foreach($color as $i=>$j){
  //  if($i==4){
  //      echo"$i";
 // }
//}
// $firstelement=reset($color);
// echo"the first element is: $firstelement";
//--------------------------------------------------------------------------------//

//Question:2

// $array=array("Umar"=>"31","Khan"=>"41","Qazi"=>"39","Tariq"=>"40");
// asort($array);
// echo"ascending order sort by value <br>";
// foreach($array as $i=>$j){
//     echo("name is $i value is $j <br>");
// }
// echo"<br><br><br>";
// ksort($array);
// echo"ascending order sort by Key <br>";
// foreach($array as $i=>$j){
//     echo("name is $i value is $j <br>");
// }
// echo"<br><br><br>";
// arsort($array);
// echo"descending order sorting by Value <br>";
// foreach($array as $i=>$j){
//     echo("name is $i value is $j <br>");
// }
// echo"<br><br><br>";
// krsort($array);
// echo"descending order sorting by Key <br>";
// foreach($array as $i=>$j){
//     echo("name is $i value is $j <br>");
// }
// echo"<br><br><br>";
//-----------------------------------------------------------------------------//

//Question:3

// $color = array ( "color" => array ( "a" => "Red", "b" => "Green", "c" => "White"),
// "numbers" => array ( 1, 2, 3, 4, 5, 6 ),
// "holes" => array ( "First", 5 => "Second", "Third"));
// foreach($color as $i){
//     foreach($i as $j=>$k){
//         if($j=="a"){
//         echo"$k";}
//         if($k=="Second"){
//             echo"$k";}
//     }
// }
//-----------------------------------------------------------------------------//

//Question:4
// $color = array ("Pakistan"=>"Islamabad","Greece"=>"Athens","Germany"=>"Berlin","Bangladash"=>"Dhaka",);
// ksort($color);
// foreach($color as $i=>$j){
//    echo"$i capital is $j<br>";
// }
//-----------------------------------------------------------------------------//

// //Question:05

// $color=array("white","green","red");
// asort($color);
// foreach($color as $i){
//     echo $i."<br>";
// }
//-----------------------------------------------------------------------------//

//Question:6

// $color = array ("Pakistan","Islamabad","Greece","Athens","Germany","Berlin","Bangladash","Dhaka",);
// $g="Greece";
// foreach($color as $i=>$j){
//    if($g==$j){
//     unset($color[$i]);
//    }
// }
// print_r($color);
//-----------------------------------------------------------------------------//

//Question:7
// $units=40;//enter value to check
// $prise=array('3.5','4','5.2','6.5');
// if($units>250){
//     $units=$units*$prise[3];
//     echo"bill is $units";
// }
// else if($units>150){
//     $units=$units*$prise[2];
//     echo"bill is $units";
// }
// else if($units>50){
//     $units=$units*$prise[1];
//     echo"bill is $units";
// }
// elseif($units>0){
//     $units=$units*$prise[0];
//     echo"bill is $units";
// }
// else{
//     echo"wrong data";
// }

//-----------------------------------------------------------------------------//
//Question:8
// $names=array(10=>"Ali",20=>"Hamza",30=>"Azher");
// foreach($names as $i=>$j){
//     echo $i."=>".$j."<br>";
// }
// $length=count($names);
// echo "Size of Array: ".$length."<br>";
// $elementToDelete = 20;
// unset($names[$elementToDelete]);
// foreach($names as $k=>$l){
//     echo $k."=>".$l."<br>";
// }

// $names=array(10=>"Ali",20=>"Hamza",30=>"Azher");
// $reverse = array_flip($names);
// foreach ($reverse as $i => $j) {
//     echo $i . "=>" . $j . "<br>";
// }
// shuffle($names);
// echo "Array in random order:<br>";
// foreach ($names as $k => $l) {
//     echo $k . "=>" . $l . "<br>";
// }
//-----------------------------------------------------------------------------//
//-----------------------------------------------------------------------------//

//Question:10

// $number1=211;//change the value here
// $number2=$number1;
// $j=0;
// while($number2>1){
//     $i=$number2%10;
//     $j+=$i;
//     $j=$j*10;
//     $number2=$number2/10;
// }
// $j=$j/10;
// if($number1==$j){
//     echo"number is palindrome";
// }
// else{
//     echo"number is not palindrome";
// }
//-----------------------------------------------------------------------------//
//-----------------------------------------------------------------------------//
//Question:12

// $color = array (4 => 'white', 6 => 'green', 11=> 'red');
// foreach($color as $key=>$val){
//     echo $key."=>".$val;
//     break;
// }

// echo "<table border=2 cellpadding=3 cellspacing=5>";
// for($i=1;$i<=6;$i++){
//     echo "<tr>";
//     for($j=1;$j<=5;$j++){
//         echo "<td height=60px width=60px>$i x $j=" . $i * $j . "</td>";
//     }
//     echo "</tr>";
// }
// echo "</table>";
// echo "<br><br>";

//    echo "<style>";
//    echo "td { border: none; }"; // Add this CSS rule to remove borders from table cells
//    echo "</style>";
//-----------------------------------------------------------------------------//
  
//Question:13

//    echo "<table border=1 width=270>";
//    for($i=1;$i<=9;$i++){
//      echo "<tr>";

//         for($j=1;$j<=9;$j++){
//             $result=$i+$j;

//            if($result%2==0){
//               echo "<td height =30px width=30px bgColor=black></td>";
//             }
//             else{
//              echo "<td height =30px width=30px bgColor=white></td>"; 
//             }
//         }
//      echo "</tr>";
//    }
//    echo "</table>";
//    echo "<br><br>";
//-----------------------------------------------------------------------------//

//Question:14

// $x= array(87,19,13,85,27,11,33,53,69,71); 
// foreach($x as $i){
//     if(isPrime($i)){
//         echo $i." ";
//     }
// }
// function isPrime($num)
// {
//     if ($num < 2) {
//         return false;
//     }
//     for ($i = 2; $i <= ($num / 2); $i++) {
//         if ($num % $i == 0) {
//             return false;
//         }
//     }
//     return true;
// }
//-----------------------------------------------------------------------------//
?>
