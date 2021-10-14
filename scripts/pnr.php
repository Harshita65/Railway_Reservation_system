<?php
 require_once 'db_con.php';
 if(isset($_POST['btn_submit']))
 {
$pnr = mysqli_real_escape_string($conn,$_POST['pnr_number']);
$sql = "select * FROM pnr INNER JOIN train_details ON train_details.train_number = pnr.train_number WHERE pnr = '$pnr'";
$result = mysqli_query($conn,$sql );

echo "

<html>
    <head>
        <link rel='stylesheet' href='../assets/style/style.css'>
    </head>
    <body class='rail-bg6'>
            
                <div id='mytopnav' class = 'topnav'>
                    <div id='navtext'><a href='Railway.html' >Home</a></div> 
                    <div id='navtext'><a href='Railway_PNR.html'>PNR Enquiry</a></div>
                    <div id='navtext'><a href='Railway_tickets.html'>Book Tickets</a></div>
                    <div id='navtext'><a href='#Freight Services'>Freight Services</a></div>
                    <div id='navtext'><a href='railway_register.php' >Login/Register</a></div>
                </div>
            
        <div id ='pnrcheck_glass'>    
        <h2 id='pnrcheck_heading'>Passenger Current status</h2>
<table id='table'>
<tr>
<th>Train Number</th>
    <th>Train Name</th>
    <th>Boarding Date(DD-MM-YYY)</th>
    <th>From</th>
    <th>To</th>
    
</tr>";

while($row = mysqli_fetch_array($result))
{
    echo "<tr>";
    echo "<td>" . $row['train_number'] . "</td>";
    echo "<td>" . $row['train_name'] . "</td>";
    echo "<td>" . $row['boarding_date'] . "</td>";
    echo "<td>" . $row['t_from'] . "</td>";
    echo "<td>" . $row['t_to'] . "</td>";
    echo "</tr>";
}
echo "</table>
</div> 
</div>    

</body>
</html>
";
}
mysqli_close($conn);
?>