<?php
include 'connection.php';
$id = $_GET['contactid'];
$sql = "DELETE FROM contactdetails WHERE contactid = $id";
$result = mysqli_query($conn, $sql);
if($result){
    header("location:index.php");
}
?>


