<?php
require_once "includes/database1.php";

$id = $_GET['id'];

// $delete_empl = "DELETE FROM emplyees WHERE id ='$id'";
// $delete = mysqli_query($database_connect,$delete_empl);


// if($delete){
//     header("location:table.php");
// }

$update_delete_status="UPDATE emplyees SET delete_status=2 WHERE id='$id'";
$uptade= mysqli_query($database_connect,$update_delete_status);
if($uptade){
    header("location:table.php");
}


?>