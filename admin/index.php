<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin dashboard</title>
    <link rel="stylesheet" href="../style.css" />
    <!-- bootstrap css link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .admin-img {
            width: 150px;
            object-fit: contain;
        }

        
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            overflow:hidden;
}
    </style>
</head>

<body>
    <div class="container-fluid p-0">
        <!-- header  -->
        <header class="navbar navbar-expand-lg navbar-dark bg-dark ">
            <div class="container-fluid">
                <img class="logo" src="../images/logo.png" href="#" />
                <nav class="navbar nav-expand-lg">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="#" class="nav-link text-light">
                                <strong>Welcome guest</strong>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>

        <!--second child  -->
        <div class="bg-white">
            <h3 class="text-center p-2">Manage Details</h3>
        </div>

        <!--third child  -->
        <div class="row ">
            <div class="col-md-12 bg-light p-1 d-flex align-items-center">
                <div class="p-3 ">
                    <a><img src="../images/logo.png" alt="" class="admin-img rounded-circle"></a>
                    <h5 class="text-dark text-center mt-3 ">Admin Name</h5>
                </div>
                <!-- buttons -->
                <div class="ml-2">
                    <button class="btn btn-outline-danger bg-white text-white btn-sm mb-2"><a href="insert_products.php" class="nav-link text-danger"><strong>Insert Product</strong></a></button>
                    <button class="btn btn-outline-danger bg-white  text-white btn-sm mb-2"><a href="" class="nav-link text-danger"><strong>View Product</strong></a></button>
                    <button class="btn btn-outline-danger bg-white  text-white btn-sm mb-2"><a href="index.php?insert-categtry" class="nav-link text-danger "><strong>Insert Catagories</strong></a></button>
                    <button class="btn btn-outline-danger bg-white  text-white btn-sm mb-2"><a href="" class="nav-link text-danger"><strong>View Catagories</strong></a></button>
                    <button class="btn btn-outline-danger bg-white  text-white btn-sm mb-2"><a href="index.php?insert-brand" class="nav-link text-danger"><strong>Insert Brand</strong></a></button>
                    <button class="btn btn-outline-danger bg-white  text-white btn-sm mb-2"><a href="" class="nav-link text-danger"><strong>View Brand</strong></a></button>
                    <button class="btn btn-outline-danger bg-white  text-white btn-sm mb-2"><a href="" class="nav-link text-danger"><strong>All Orders</strong></a></button>
                    <button class="btn btn-outline-danger bg-white  text-white btn-sm mb-2"><a href="" class="nav-link text-danger"><strong>All Payments</strong></a></button>
                    <button class="btn btn-outline-danger bg-white  text-white btn-sm mb-2"><a href="" class="nav-link text-danger"><strong>List Users</strong></a></button>
                    <button class="btn btn-outline-danger bg-white  text-white btn-sm mb-2"><a href="" class="nav-link text-danger"><strong>Logout</strong></a></button>
                </div>
            </div>
        </div>

         <!-- fourth child  -->
        <div class="container">
        <?php
        // Check whether a variable is empty isset
        // $_GET and $_POST are used to collect form-data.
        if(isset($_GET ['insert-categtry']))
        //Use include when the file is not required and application should continue when file is not found.
        include('insert_catagories.php');
        ?>
         <?php
        // Check whether a variable is empty isset
        // $_GET and $_POST are used to collect form-data.
        if(isset($_GET ['insert-brand']))
        //Use include when the file is not required and application should continue when file is not found.
        include('insert-brand.php');
        ?>

        </div>




          <!--last child  -->
          <?php include('../footer.php');?>

    </div>


    <!--bootstrap js link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>