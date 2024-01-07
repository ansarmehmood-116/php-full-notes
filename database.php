<?php 

$connection=mysqli_connect("localhost","root","","nadra") or die("connection failed");
$id=$_POST['id'];
$name=$_POST['name'];
$city=$_POST['city'];

if(isset($_POST['submit1'])){





                      //___________calling from database basis of marks________

    // $query="SELECT * from `us` where `marks`=12";
    // $making=mysqli_query($connection,$query);
    // while ($temp=mysqli_fetch_assoc($making)) {
    //    echo $temp['name']."" .$temp['marks']. "<br>";
    // }

    //_______________________________________________________________//






              
                       //  insertion in database in run time

// $insert= "INSERT INTO us (id,name,city) VALUES ('$id','$name','$city')";
// $q=mysqli_query($connection,$insert) or die("failed to connect");
// echo "<script> alert('Record entered') </script>";

 

 




                   //    deletion from database(but some mistake in else statement)

// $q="DELETE from us where city='$city'";
// $querry=mysqli_query($connection,$q);
// if($querry){    
//     echo "your record has been delete successfully";
// }else{
//     echo "wrong attempt with wrong name";
// }
// mysqli_close($connection);








  
}
    //    updation in database using another button 
if(isset($_POST['submit2'])){
 $q="UPDATE `us` SET `name`='$name',`city`='$city' WHERE `id`='$id'";
 $query=mysqli_query($connection,$q);
 if($query){
    echo "upated successfuly";
 }else{
    echo "not updated";
 }


}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
         <form action=""  method="post">
            enter id <input type="number" name="id">
            <br><br>
            enter name <input type="text" name="name">
            <br><br>
            enter city <input type="text"  name="city">
            <br><br>
            <button type="submit" name="submit1">submitt</button>
            <button type="submit" name="submit2">update record</button>
         </form>
</body>
</html>