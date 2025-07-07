<?php 
include "db.php";
extract($_GET);

$id = $_GET['id'];

$query = "SELECT * FROM `student` WHERE id='$id'";
$result = mysqli_query($conn,$query);

$row = mysqli_fetch_array($result);
$res = [];
$res = $row;

echo json_encode($res);

