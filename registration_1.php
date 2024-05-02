<?php
require_once "includes/database1.php";

 $First_name= $_POST['Firstname'];
 $Last_name = $_POST ['Lastname'];
 $Email = $_POST['Email'];
 $password = $_POST['password'];
 if(!empty($_POST['gender'])){
    $gender = $_POST['gender'];
 }
 $Department = $_POST['department'];

 


//  password validation rules
$uppercase = preg_match('@[A-Z]@',$password);
$lowercase = preg_match('@[a-z]@',$password);
$number = preg_match('@[0-9]@',$password);
$speacial = preg_match('@[^\w]@',$password);

$check_duplicate_email = "SELECT * FROM emplyees WHERE email = '$Email'";
$check_email = mysqli_query($database_connect, $check_duplicate_email);

if (empty($First_name) || empty($Last_name) || empty($Email) || empty($password) || empty($Department)){
    echo "please fill up the full form";
}
elseif (!filter_var($Email,FILTER_VALIDATE_EMAIL)) {
   echo "invalid email";
}
else if ($check_email->num_rows == 1) {
    echo "this email is already in use";
}
elseif(!$uppercase && !$lowercase && !$number && $speacial  && strlen($password) <= 8) {
    echo "please use uppercase ,lowercase,number,speacial character and password should be 8 characters";
}

else{
    $password = md5($_POST['password']);
    $insert_query = "INSERT INTO emplyees(first_name,last_name,email,password, gender, department) VALUES ('$First_name', '$Last_name','$Email','$password','$gender', '$Department')";

    $res =  mysqli_query($database_connect,$insert_query);
   header("location:table.php");
}



// if (empty($First_name)){
//     echo "please fill up the first name";
// }
// if (empty($Last_name)){
//     echo "please fill up the last name";
// }
// if (empty($Email)){
//     echo "please fill up the Email";
// }
// if (empty($password)){
//     echo "please fill up the  password";
// }
// if (empty($Department)){
//     echo "please fill up Department";
// }

 ?>


