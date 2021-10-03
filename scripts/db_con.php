
<?php
      $servername = "localhost";
      $name = "admin";
      $password = "adminpass";
      $dbname = "railway"; 
      $conn = new mysqli($servername, $name, $password,$dbname);
      // mysql_select_db($dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

      ?>



