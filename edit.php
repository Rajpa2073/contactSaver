<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="styles.css">
   
    <title>Update</title>
</head>
<body>
<header>
   <h2> Contact Saver <h2>
</header>
<h3> Update Contact <h3>
<?php
include 'connection.php';
$id = $_GET['contactid'];
$sql = "SELECT * FROM contactdetails where contactid =" .$id;

$result = mysqli_query($conn, $sql);
if($result){
    $row = mysqli_fetch_assoc($result);
    $contactname = $row['name'];
    $phoneNo = $row['phoneNo'];
    $address = $row['Address'];


}

?>
<form action ="editaction.php" method ="post">
<lable>Name <label>
<input type = "text"  name = "name" value = "<?php global $contactname; echo $contactname?>" required> <br> <br>
<lable>Phone  <label>
<input type = "text"  name = "phoneNumber" value = "<?php global $phoneNo; echo $phoneNo?>" required>  <br> <br>

<lable>Address  <label>
<input type = "text"  name = "address" value = "<?php global $address; echo $address?>" required>  <br> <br>
<input type = "hidden"  name = "id" id = "id" value ="<?php global $id; echo $id?>">
<input type = "submit" value = "update">
</form>
    
</body>
</html>


