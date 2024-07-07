<?php
include 'connection.php';
 if(isset($_GET['id'])){
    $id = $_GET['id'];

    $query = "SELECT * FROM customer_tbl WHERE ID = '$id'";
    $result = mysqli_query($conn,$query);
    $row = mysqli_fetch_assoc($result);
    
    if($row){
        $Name = $row['name'];
        $image = $row['image'];
        $Location = $row['location'];
        $Price = $row['price'];

    } else {
        echo"Student record not found.";
        exit;
    } 
} 
 
if(isset($_POST['submit'])){
        $Name = $_POST['name'];
        $image= $_POST['image'];
        $Location = $_POST['location'];
        $Price = $_POST['price'];

        $query = "UPDATE customer_tbl SET name='$Name', image='$image', location='$Location', price='$Price' WHERE ID='$id'";
        echo "$query";
        $result= mysqli_query($conn, $query);

        if($result){
            echo "Employee record update sucessfully.";
        }
        else{
            echo "Error updating employee record".mysqli_error($conn);
        }
}
 mysqli_close($conn);
 
 ?>
 <html>
    <head>
        <tite>Update Student</title>
        <style>
            .btn{
    text-align: center;
    height: 3rem;
    flex-basis: 80%;
    background: #3c00a0;
    color: #fff;
    border-radius: 25px;
    cursor: pointer;
    
}
        </style>
        
</head>
<body>
    <h1>Update Student</h1>
    <form method="POST" action="">
        <label for="">Name:</label>
        <input type="text" name="name" value="<?php echo $Name; ?>"><br><br>
        <label for="">Image:</label>
        <input type="file" name="image" value="<?php echo $image; ?>"><br><br>
        <label for="">Location:</label>
        <input type="text" name="location" value="<?php echo $Location; ?>"><br><br>
        <label for="">Price:</label>
        <input type="text" name="price" value="<?php echo $Price; ?>"><br><br>
        
        <input type="submit" name="submit" value="submit" class="btn">
        <a href="add.php" class="btn" value="go back">go back</a>
</form>
</body>
</html>