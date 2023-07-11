<?php
include 'connect.php';


if (isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];
    $sql = "delete from inventory where did=$id";
    $result = mysqli_query($con, $sql);
    if($result){
        header('location:inventorymanipulation.php');
    }else{
        die(mysqli_error($con));
    }
}

?>