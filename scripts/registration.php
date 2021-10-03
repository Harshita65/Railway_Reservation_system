<?php
require_once 'db_con.php'; // Called the dbcon file from scripts
//now we need to check whether the users are there or not so..lets make a modal
if(isset($_POST['btn_reg'])){
$name =mysqli_real_escape_string($conn,$_POST['name']);
$age = mysqli_real_escape_string($conn,$_POST['age']);
$mobile =mysqli_real_escape_string( $conn,$_POST['mobile']);
$gender = mysqli_real_escape_string($conn,$_POST['gender']);
$email = mysqli_real_escape_string($conn,$_POST['email']);
$password = password_hash(mysqli_real_escape_string($conn,$_POST['password']),PASSWORD_DEFAULT);

$query = "SELECT * FROM register  WHERE mobile_number = '$mobile' || email = '$email'"; 
$count = mysqli_num_rows($conn->query($query));
if($count>0){
    $msg = "User already exist.";
}
else{
// now the checking
$query = "INSERT INTO register (name,age,mobile_number,gender,email,password) 
VALUES ('$name','$age','$mobile','$gender','$email','$password')";

$sql = $conn->query($query);
if($sql === TRUE){
    $msg = "Registered Successfully!";
}
else{
    $msg = "Something went wrong!";
}

$conn->close();
}
}


?>