<?php
include 'connection.php';

$id = $_POST['id'];

$name = $_POST['name'];
$phone = $_POST ['phoneNumber'];
$address = $_POST['address'];



$sql = "UPDATE contactdetails SET name = '$name', phoneNo = '$phone', Address ='$address' WHERE contactid= $id";
$result = mysqli_query($conn, $sql);
if($result){
    header("location: index.php");
}

?>
