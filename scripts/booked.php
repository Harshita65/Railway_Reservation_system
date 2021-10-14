<?php
 require_once 'db_con.php';
if(isset($_POST['booked_submit']))
{$from = mysqli_real_escape_string($conn,$_POST['routes']);
$d = mysqli_real_escape_string($conn,$_POST['booking_date']);
$date= date('Y-m-d',strtotime($d));
$rand = rand(1000000000,9999999999);
$sql = "SELECT train_number FROM train_details WHERE t_from = '$from'";
$t_number=mysqli_fetch_row(mysqli_query($conn,$sql))[0];

$sql = "INSERT INTO pnr (pnr,train_number,boarding_date) VALUES ($rand,$t_number,'$date')";
if($update = mysqli_query($conn,$sql)){
    echo "<script>alert('Your PNR number is : ".$rand." ')</script>";
}
else{
    echo "<script>alert('Error occured!')</script>";
}

echo " 

<html>
    <head>
        <link rel='stylesheet' href='../assets/style/style.css'>
    </head>
    <body class='rail-bg7'>
   
   Thank you for using our service :-)
</body>
</html>
";

mysqli_close($conn);}
?>