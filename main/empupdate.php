<?php
include 'connect.php';


$id = $_GET['updateid'];

$sql = "select * from employee where id=$id";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$email = $row['email'];
$mobile = $row['mobile'];
$password = $row['password'];

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];
    $sql = "update employee set id=$id , name='$name' , email='$email' , mobile='$mobile' , password='$password' where id=$id ";
    $result = mysqli_query($con, $sql);

    if ($result) {
        header('location:empdisplay.php');
    } else {
        die(mysqli_error($con));
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>employee management page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <div class="container mb-5 ">
        <div class="card mt-5 p-5">


            <form method="post">
                <div class="mb-3">
                    <label for="name" class="form-label">Enter Your Name</label>
                    <input type="text" name="name" class="form-control" id="name" aria-describedby="name"
                        placeholder="Enter Your Name" value=<?php echo $name;?>>
                    <div id="name" class="form-text">We'll never share your email with anyone else.</div>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" id="email1" aria-describedby="email"
                        placeholder="Email address"value=<?php echo $email;?>>
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="mobile" class="form-label">Mobile Number</label>
                    <input type="number" name="mobile" class="form-control" id="mobile" aria-describedby="mobile"
                        placeholder="Mobile Number"value=<?php echo $mobile;?>>
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="text" name="password" class="form-control" id="password" placeholder="Password"value=<?php echo $password;?>>
                </div>

                <a href="empdisplay.php"> <button type="submit" name="submit"
                        class="btn btn-primary">Update</button></a>
            </form>
        </div>

    </div>

</body>

</html>