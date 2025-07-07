<?php include 'db.php';

// Data Insert
$ext = extract($_POST);

print_r($ext);

$stName = $_POST['stName'];
$stEmail = $_POST['stEmail'];
$stDept = $_POST['stDept'];


if(isset($stName) && isset($stEmail) && isset($stDept) ){
    
   $insert = "INSERT INTO `student`(`name`, `email`, `department`) VALUES('$stName', '$stEmail', '$stDept')";
    
     $query = mysqli_query($conn, $insert); 

}














?>

