<?php

include 'connect.php';


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inventory management page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/style.css">

</head>

<body>

    <div class="container">
        <button class="btn btn-primary my-5"><a href="inventoryadd.php" class="text-light">Add inventory</a>
        </button>
        <button class="btn btn-primary my-5"><a href="inventory.php" class="text-light">Back to inventory Pannel</a>
        </button>
            <table class="table">
            <thead>
                <tr>
                    <th scope="col"><b>Drug ID<b></th>
                    <th scope="col">Drug Name</th>
                    <th scope="col">Qty</th>
                    <th scope="col">MFD Date</th>
                    <th scope="col">Expiry Date</th>
                    <th scope="col">Amount</th>
                    <th scope="col">Operations</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $sql = "select * from inventory";
                $result = mysqli_query($con, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $did = $row['did'];
                        $dname = $row['dname'];
                        $qty = $row['qty'];
                        $mfgdate = $row['mfgdate'];
                        $expdate = $row['expdate'];
                        $amount = $row['amount'];
                        echo '<tr>
                            <th scope="row">' . $did . '</th>
<td>' . $dname . '</td>
<td>' . $qty . '</td>
<td>' . $mfgdate . '</td>
<td>' . $expdate . '</td>
<td>' . $amount . '</td>
<td>
<a name="" id="" class="btn btn-primary" href="inventoryupdate.php?updateid=' . $did . '" role="button">Update</a>
<a name="" id="" class="btn btn-danger" href="inventorydelete.php?deleteid=' . $did . '" role="button">Delete</a>
<a name="" class="btn btn-success" href="../invoice/create_invoice.php"role="button">order</a>
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