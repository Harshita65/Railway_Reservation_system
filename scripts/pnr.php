<?php
 $servername = "localhost";
 $username = "admin";
 $password = "adminpass";
 $dbname = ""; 
 $conn = new mysqli($servername, $username, $password,$dbname); 

if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully".'<br>';
?>