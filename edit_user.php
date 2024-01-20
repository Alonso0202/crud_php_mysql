<?php
include('connection.php');
$con = connection();

$ID = $_POST['ID'];
$name = $_POST['name'];
$last_name = $_POST['last_name'];
$usario_name = $_POST['usario_name'];
$pasword = $_POST['pasword'];
$email = $_POST['email'];
$sql = "UPDATE users SET name = '$name',last_name = '$last_name',usario_name = '$usario_name',pasword = '$pasword',email = '$email' WHERE ID='$ID'";
$query = mysqli_query($con, $sql);

if($query){
    header("Location: index.php");
}; 
?>