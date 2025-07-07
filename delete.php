<?php 
include 'db.php';

$ee = extract($_GET);
print_r($ee);

$id = $_GET['studentId'];

$query = "DELETE FROM student WHERE id='$id'";
$result = mysqli_query($conn, $query);
 