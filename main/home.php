<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pharama admin page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <h3 class=" text-light text-center pt-2 pb-2 overflow-hidden bg-info">PHARAMACY MANAGEMENT ADMIN PANNEL</h3>
    <div class="container-fluid text-center ">

        <div class="row mt-4  " id="adminpannel">
            <div class="col-12 col-md-4 col-lg-4 p-3">
                <a href="empdisplay.php">
                    <div class="card  w-100 justify-content-center  shadow" style="width: 20rem; height: 15rem;">
                        <img src="../images/empmanage.svg"  alt="">  EMPLOYEE
                    </div>
                </a>
            </div>
            <div class="col-12 col-md-4 col-lg-4 p-3">
                <a href="inventory.php">
                    <div class="card  w-100 justify-content-center shadow" style="width: 10rem; height: 15rem;">
                        <img src="../images/inventory.jpg"  class="height=100px" alt="">  INVENTORY
                    </div>
                </a>
            </div>
            <div class="col-12 col-md-4 col-lg-4 p-3">
                <a href="../invoice/invoice_list.php">
                    <div class="card  w-100 justify-content-center shadow" style="width: 20rem; height: 15rem;">
                        <img src="../images/salesmanage.png" alt="">  SALES ORDERS
                    </div>
                </a>
            </div>
        </div>
        
    </div>
</body>

</html>