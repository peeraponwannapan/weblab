<?php
$conn = mysqli_connect("localhost","register","c642895123","register");
$email = $_POST['email'];
$full_name = $_POST['full_name'];
$address = $_POST['address'];


$errors = array();

// if(isset($_POST['reg_users'])){
    $check="SELECT * FROM register_users WHERE email = '$email' OR full_name = '$full_name' LIMIT 1";
    $query = mysqli_query($conn,$check);
    $result = mysqli_fetch_assoc($query);
    if($result){
        if($result['email'] === $email){
            array_push($errors,"Already");
            echo "<script type='text/javascript'>";
                echo "alert('Email นี้มีคนใช้แล้ว');";
                echo "window.location = 'index.html';";
            echo "</script>";  
            print("Email มีคนใช้แล้ว");
        }

    }
        if(count($errors) == 0){
            $sql="INSERT INTO register_users(email,full_name,address) VALUES('$email','$full_name','$address')";
            mysqli_query($conn,$sql);
            print("Register success for $full_name at $email in $address");
        }
    
    
// }





?>

