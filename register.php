<?php
$email = $_POST['email'];
$full_name = $_POST['full_name'];
$address = $_POST['address'];
print("Register success for $full_name at $email in $address");

$conn = mysqli_connect("localhost","register","c642895123","register");
$sql="INSERT INTO register_users(email,full_name,address)";
$sql.=" VALUES('$email','$full_name','$address')";
mysqli_query($conn,$sql);

?>