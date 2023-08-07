<?php
include 'config.php';
$stu_id = $_GET['id'];

$sql = "DELETE FROM student WHERE sid=$stu_id";

mysqli_query($conn, $sql);
header('Location: http://localhost/Pondit%20Code/newCRUD/index.php');
?>