<?php
$servername = "localhost";
$username = "root";
$password = "";
$datbasename = "contacts_saver";
$conn= mysqli_connect($servername, $username, $password, $datbasename);

if(!$conn){
    die("connection filed: " . mysqli_connect_error());
}
else{

}


?>