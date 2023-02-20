<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="styless.css">
   
    <title>Contact</title>
</head>
<body>

<header>
   <h2> Contact Saver <h2>
</header>

<form action ="insert.php" method ="post">
<lable>Name <label>
<input type = "text"  name = "name" required> <br> <br>
<lable>Phone  <label>
<input type = "text"  name = "phoneNumber" required>  <br> <br>

<lable>Address  <label>
<input type = "text"  name = "address" required>  <br> <br>

<input type = "submit" value = "Submit">
</form>

<hr>

<?php
/*
*/

?>
<table>
<tr>
        <th>Name</th>
        <th>Phone Number</th>
        <th> Address</th>
        <th> Action </th>
        
</tr>


<?php

include 'connection.php';
$sql = "SELECT * from contactdetails";

$result = mysqli_query($conn, $sql);


if($result){
    while($row = mysqli_fetch_assoc($result)){
        $name = $row['name'];
        $phoneNumber = $row['phoneNo'];
        $address = $row['Address'];
        $id =$row['contactid']
        ?>
<tr>
<td> <?php  echo $name ?> </td>  
<td> <?php  echo $phoneNumber ?> </td>
<td> <?php  echo $address ?> </td>  
<td>
<a  href = "delete.php? contactid=<?php echo $id ?>"> Delete</a>
<a href = "edit.php? contactid=<?php echo $id ?>"> Update</a>

</td>
</tr> 

        <?php

    }
}
?>
</table>
    
</body>
</html>


