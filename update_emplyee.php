<?php
require_once "includes/database1.php";
$id = $_POST['id'];
$Firstname =$_POST['Firstname'];
$Last_name =$_POST['Last_name'];
$Email = $_POST['Email'];
$password =$_POST['password'];
$gender =$_POST['gender'];
$department =$_POST['department'];

$update_quary = "UPDATE emplyees SET first_name ='$Firstname', last_name = '$Last_name',email ='$Email', password ='$password',gender = '$gender', department ='$department' WHERE id='$id'";
$update = mysqli_query($database_connect,$update_quary);

if($update){
    header("location:table.php");
}
?>