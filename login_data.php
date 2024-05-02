<?php 
session_start();
require_once "includes/database1.php";

$email = $_POST['email'];
$password = md5($_POST['password']);

$login_check = "SELECT * FROM emplyees WHERE email='$email' AND password='$password'";
$login = mysqli_query($database_connect,$login_check);
$accos_data = mysqli_fetch_assoc($login);
print_r($accos_data);

if($login->num_rows == 1){
    $_SESSION['user']= $accos_data['first_name']." ".$accos_data['last_name'];
    header("location: index.php");
}
else{
    echo "Your email or password invalid";
}

?>