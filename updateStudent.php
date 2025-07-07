<?php

include 'db.php';
extract($_POST);

$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$depertment = $_POST['depertment'];

$query = "UPDATE `student` SET `name`='$name',`email`='$email',`department`='$depertment' WHERE id='$id'";
$result = mysqli_query($conn, $query);