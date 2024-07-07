<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <title>Add new place</title>
</head>
<body>
<!-- <nav class="navbar">
        <a href="add.php">Add</a>
        <a href="employee_list.php">List</a>
        <a href="">Package</a>
        <a href="book.php">Book</a>
    </nav> -->
<center>
   
    <h1>Add New Place</h1>
    <form action="" method="POST" id="">
        
            <label for="name">IMAGE: </label>
            <input type="file" accept="image/png, image/jpg, image/jpeg" name="image" id="" required><br><br>

            
            <label for="">PLACE NAME:</label>
        <input type="text" name="name" id="" required><br><br>

        <label for="">LOCATION</label>
        <input type="text" name="location" id="" required><br><br>

        <label for="">PRICE:</label>
        <input type="number" name="price" id="" required><br><br>

        <input type="submit" name = "submit" value="submit">
        <br><br>

        
        </center>
    </form>
</body>
</html>

<?php
include 'connection.php';
if(!$conn){
    echo "no conection with database";
}else{
if(isset($_POST['submit'])){
$name= $_POST['name'];
$image= $_POST['image'];
$location= $_POST['location'];
$price= $_POST['price'];

$query= "INSERT INTO customer_tbl(name, image, location, price) VALUES ('$name', '$image', '$location', '$price')";

echo $query;
$res=mysqli_query($conn, $query);
echo $res;
if($res){
    echo "Data insert";
}else{
    echo "error in data base";
}
    }
}

?>


<?php
include "connection.php";

$sql= "SELECT * FROM customer_tbl";
$query = $conn->query($sql);

if($query->num_rows >0){
    echo "<table border= '1'>";
    echo "<tr>";
   
    echo "<th>ID </th>";
    echo "<th>Name</th>";
    echo "<th>Image</th>";
    echo "<th>Location</th>";
    echo "<th>Project</th>";
    echo "</tr>";


    while($row = $query->fetch_assoc()){
        echo "<tr>";
        echo "<td>".$row['id']."</td>";
        echo "<td>".$row['name']."</td>";
        echo "<td>".$row['image']."</td>";
        echo "<td>".$row['location']."</td>";
        echo "<td>".$row['price']."</td>";

        
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
