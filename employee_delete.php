<?php
include 'connection.php';

if(isset($_GET['id'])){
    $id= $_GET['id'];

    $query = "DELETE FROM customer_tbl WHERE id='$id'";
    $result= mysqli_query($conn, $query);

    if($result){
        echo "Students record deleted succesfully.";
    }else{
        echo "error deleting student record:".mysqli_error($conn);
    }
    } else{
        echo "Invalid student id.";
        exit;
    }
    mysqli_close($conn);
    header('location:add.php')

?>