<?php 
include('connection.php');
$con = connection();
$ID = null;
$name = $_POST['name'];
$last_name = $_POST['last_name'];
$usario_name = $_POST['usario_name'];
$pasword = $_POST['pasword'];
$email = $_POST['email'];

$sql = "INSERT INTO users VALUES('$ID','$name','$last_name','$usario_name','$pasword','$email')";

$query = mysqli_query($con, $sql);

if($query){
    header("Location: index.php");
};

?>