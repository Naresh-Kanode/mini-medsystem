<?php
include 'connect.php';

$id = $_GET['updateid'];

$sql = "select * from inventory where did=$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$dname = $row['dname'];
$qty = $row['qty'];
$mfgdate = $row['mfgdate'];
$expdate = $row['expdate'];
$amount = $row['amount'];

if (isset($_POST['submit'])) {
    $dname = $_POST['dname'];
    $qty = $_POST['qty'];
    $mfgdate = $_POST['mfgdate'];
    $expdate = $_POST['expdate'];
    $amount = $_POST['amount'];
    $sql = "update inventory set did=$id, dname='$dname' , qty='$qty' , mfgdate='$mfgdate' , expdate='$expdate' , amount='$amount' where did=$id";
    $result = mysqli_query($con, $sql);

    if ($result) {
        header('location:inventorymanipulation.php');
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
                    <label for="dname" class="form-label">Drug Name</label>
                    <input type="text" name="dname" class="form-control" id="dname" aria-describedby="dname"
                        placeholder="Drug Name" value=<?php echo $dname; ?>>

                </div>

                <div class="mb-3">
                    <label for="qty" class="form-label">QTY</label>
                    <input type="number" name="qty" class="form-control" id="qty" aria-describedby="qty"
                        placeholder="QTY" value=<?php echo $qty; ?>>

                </div>
                <div class="mb-3">
                    <label for="mfgdate" class="form-label">MFG Date</label>
                    <input type="date" name="mfgdate" class="form-control" id="mfgdate" aria-describedby="mfgdate"
                        placeholder="MFG Date" value=<?php echo $mfgdate; ?>>

                </div>
                <div class="mb-3">
                    <label for="expdate" class="form-label">Expiry date</label>
                    <input type="date" name="expdate" class="form-control" id="expdate" placeholder="Expiry date"
                        value=<?php echo $expdate; ?>>
                </div>
                <div class="mb-3">
                    <label for="amount" class="form-label">Amount</label>
                    <input type="number" name="amount" class="form-control" id="amount" placeholder="Amount" value=<?php echo $amount; ?>>
                </div>
                <a href="inventorymanipulation.php"> <button type="submit" name="submit"
                        class="btn btn-primary">Update</button></a>
            </form>
        </div>

    </div>

</body>

</html>