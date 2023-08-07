<?php
include 'config.php';
if (isset($_POST['submit'])) {
    echo $stuname = $_POST['sname'];
    echo $stuaddress = $_POST['saddress'];
    echo $stuclass = $_POST['sclass'];
    echo $stuphone = $_POST['sphone'];


    $sql = "INSERT INTO student(sname, saddress, sclass, sphone) 
    VALUE('{$stuname}', '{$stuaddress}', '{$stuclass}', '{$stuphone}')";

    mysqli_query($conn, $sql) or die('Query Feiled');

    header('Location: http://localhost/Pondit%20Code/newCRUD/index.php');
}

?>