<?php

include 'connection.php';

$name = $_POST['name'];
$phone = $_POST ['phoneNumber'];
$address = $_POST['address'];
$sql = "INSERT into contactdetails(name, phoneNo, Address) values('$name', '$phone', '$address')";
$result = mysqli_query($conn, $sql);

if($result){
    
    header ('location: index.php');
}

?>