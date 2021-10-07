<?php
 require_once 'db_con.php';
 $pnr = "5568372981";
$result = mysqli_query($conn,"SELECT * FROM pnr WHERE pnr = '$pnr' " );

echo "<table border='1'>
<tr>
<th>PNR Number</th>    
<th>Train Number</th>
    <th>Train Name</th>
    <th>Boarding Date(DD-MM-YYY)</th>
    <th>From</th>
    <th>To</th>
    <th>Reserved Upto</th>
    <th>Boarding Point</th>
    <th>Class</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
    echo "<tr>";
    echo "<td>" . $row['pnr'] . "</td>";
    echo "<td>" . $row['train_number'] . "</td>";
    echo "<td>" . $row['train_name'] . "</td>";
    echo "<td>" . $row['boarding_date'] . "</td>";
    echo "<td>" . $row['from'] . "</td>";
    echo "<td>" . $row['to'] . "</td>";
    echo "<td>" . $row['reserved_upto'] . "</td>";
    echo "<td>" . $row['boarding_point'] . "</td>";
    echo "<td>" . $row['class'] . "</td>";
    echo "</tr>";
}
echo "</table>";

mysqli_close($conn);
?>