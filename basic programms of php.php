<?php

//_____________Chess table_________________//

//    echo "<style>";
//    echo "td { border: none; }"; // Add this CSS rule to remove borders from table cells
//    echo "</style>";


//    echo "<table border=1>";
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
// --------------------------------------------------------------------//



//_______Table printing 1 to 7 each has limit 7

// echo "<table border=2>";
// for($i=1;$i<=7;$i++){
//     echo "<tr>";
//     for($j=1;$j<=7;$j++){
//         $result = $i + $j;
//         $bgColor = ($result % 2 == 0) ? 'black' : 'white';
//         $fontColor = ($bgColor == 'black') ? 'white' : 'black';
//         echo "<td height=60px width=60px bgColor=$bgColor style='color: $fontColor'>$i x $j=" . $i * $j . "</td>";
//     }
//     echo "</tr>";
// }
// echo "</table>";
// echo "<br><br>";
//----------------------------------------------------------------------//



//__________Increasing order triangle 1 to 15___________//

// $k=1;
// for($i=0;$i<5;$i++){
//     for($j=0;$j<=$i;$j++){
//         echo "$k";
//         $k++;
//     }
//     echo"<br>";
// }
//--------------------------------------------------------------------//

// for($i=1;$i<=5;$i++){
//     echo "$i &nbsp;";
// }
// echo "<br>";
// for($i=1;$i<=5;$i++){
//     $k=$i;
//     for($j=1;$j<=$i;$j++){
//         echo "$k &nbsp;";
//         $k+=$i;
//     }
//     echo"<br>";
// }


?>