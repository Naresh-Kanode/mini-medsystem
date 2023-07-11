<?php

// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "pharamadb";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Die if connection was not successful
if (!$conn) {
    die("Sorry we failed to connect: " . mysqli_connect_error());
} else {
    echo "Connection was successful<br>";
}

// Variables to be inserted into the table

$email = $_POST['email'];
$password = $_POST['password'];

// Sql query to be executed
$sql = "INSERT INTO logintb(email,password) VALUES('$email','$password')";


$result = mysqli_query($conn, $sql);

// Add a new trip to the Trip table in the database
if ($result) {
    echo "The order has been placed successfully successfully!<br>";
} else {
    echo "The order was not placed successfully because of this error ---> " . mysqli_error($conn);
}

header("Location:home.php");
?>