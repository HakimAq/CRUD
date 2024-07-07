<?php
include "connection.php";

$sql= "SELECT * FROM customer_tbl";
$query = $conn->query($sql);

if($query->num_rows >0){
    echo "<table border= '1'>";
    echo "<tr>";
   
    echo "<th>ID </th>";
    echo "<th>Name</th>";
    echo "<th>Department</th>";
    echo "<th>Location</th>";
    echo "<th>Project</th>";
    echo "</tr>";


    while($row = $query->fetch_assoc()){
        echo "<tr>";
        echo "<td>".$row['id']."</td>";
        echo "<td>".$row['name']."</td>";
        echo "<td>".$row['department']."</td>";
        echo "<td>".$row['location']."</td>";
        echo "<td>".$row['project']."</td>";

        
        echo "<td>
        <a href= ' employee_update.php? id=".$row['id']."'>Update</a>
        <a href= ' employee_delete.php? id=".$row['id']."'>Delete</a>
        </td>";
        echo "</tr>";
    }
    echo "</table>";

}else{
    echo " no connection.";
}
mysqli_close($conn);

?>