<?php
$conn = mysqli_connect("localhost","register","c642895123","register");
$email = $_POST['email'];
$full_name = $_POST['full_name'];
$address = $_POST['address'];


$errors = array();

if(isset($_POST['reg_users'])){
    $check="SELECT * FROM register_users WHERE email = '$email' OR full_name = '$full_name' LIMIT 1";
    $query = mysqli_query($conn,$check);
    $result = mysqli_fetch_assoc($query);
    if($result){
        if($result['email'] === $email){
            array_push($errors,"Already");
            print(" Email Already");
        }

        if($result['email'] === $email and $result['full_name'] === $full_name){
            
            print ("  And  ");
        }

        if($result['full_name'] === $full_name){
            array_push($errors,"Already");
            print(" Full Name Already");
        }


    }
        if(count($errors) == 0){
            $sql="INSERT INTO register_users(email,full_name,address) VALUES('$email','$full_name','$address')";
            mysqli_query($conn,$sql);
            print("Register success for $full_name at $email in $address");
        }
    
    
}





?>

<!-- print("Register success for $full_name at $email in $address"); 
    $sql="INSERT INTO register_users(email,full_name,address)";
$sql.=" VALUES('$email','$full_name','$address')";
mysqli_query($conn,$sql); -->