<?php

include 'connect.php';


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
  <link rel="stylesheet" href="../css/style.css">

</head>

<body>

  <div class="container">
    <button class="btn btn-primary my-5"><a href="emp.php" class="text-light">Add Employee</a>
    </button>
    <button class="btn btn-primary my-5"><a href="home.php" class="text-light">Back to Admin Pannel</a>
    </button>
    <table class="table ">
      <thead>
        <tr>
          <th scope="col">Sr no</th>
          <th scope="col">Name</th>
          <th scope="col">Email<br></th>
          <th scope="col">Mobile</th>
          <th scope="col">Password</th>
          <th scope="col">Operation</th>
        </tr>
      </thead>
      <tbody>

        <?php
        $sql = "select * from employee";
        $result = mysqli_query($con, $sql);
        if ($result) {
          while ($row = mysqli_fetch_assoc($result)) {
            $id = $row['id'];
            $name = $row['name'];
            $email = $row['email'];
            $mobile = $row['mobile'];
            $password = $row['password'];
            echo '<tr>
            <th scope="row">' . $id . '</th>
            <td>' . $name . '</td>
            <td>' . $email . '</td>
            <td>' . $mobile . '</td>
            <td>' . $password . '</td>
            <td>
            <a name="" id="" class="btn btn-primary" href="empupdate.php?updateid='.$id.'" role="button">Update</a>
            <a name="" id="" class="btn btn-danger" href="empdelete.php?deleteid='.$id.'" role="button">Delete</a>
              </td>
          </tr>';
          }

        }
        ?>

      </tbody>
    </table>
  </div>

</body>

</html>