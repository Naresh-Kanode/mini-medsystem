<?php
$con = new mysqli('localhost', 'root', '', 'pharamadb');

if ($con) {
    echo "connetion successfully";


} else {
    die(mysqli_error($con));
}
?>