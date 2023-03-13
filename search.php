<?php
include('include/connect.php');
include('./function/common_function.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>shop</title>

  <!-- bootstrap css link-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!--font awesome link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="style.css" />

</head>

<body>

  <!--  nav bar -->
  <container class="container-fluid p-0">
    <!-- first child -->
    <navbar class="navbar navbar-expand-lg navbar-dark bg-dark ">
      <div class="container-fluid">
        <img class="logo" src="./images/logo.png" href="#" />
        <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="display_all_products.php">Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Register</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><i class="fa fa-shopping-cart"></i><sup>1</sup></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Total price:</a>
            </li>
          </ul>
          <form class="d-flex" action="search.php" method="get" >
            <input class="form-control mx-2" type="search" placeholder="Search" aria-label="Search" name="search_data" />
            <!-- <button class="btn badge-lg badge-white btn-danger ">Search</button> -->
            <input type="submit" value="search" name="search_value" class="btn btn-outline-danger bg-white text-danger"/>
          </form>
        </div>
      </div>
    </navbar>

     <!-- second child -->
     <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="#" class="nav-link"><h6>Welcome</h6></a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link"><h6>Login</h6></a>
          </li>
        </ul>
      </nav>

    <!-- fourth child -->
    <Main class="row">
      <!-- fourth part1 child f1 row -->
      <article class='col-md-10 mp-5'>
      <!-- third child -->
      <intro>
        <h4 class="text-center">ABU SAMAR STORE</h4>
        <p class="text-center">Communications is heart of e-commerce and community</p>
      </intro>
        <!--fetching products from db  -->
        <section class='row'>
          <?php
          search_product();
          get_unique_catgory();
          get_unique_brand();

          ?>
        </section>
      </article>

      <!-- fourth part2 child sc2 row -->
      <aside class="col-md-2 bg-light p-0 ">
        <ul class="navbar-nav  text-center">
          <li class="nav-item bg-dark ">
            <h4><a href="#" class="nav-link text-light">Delivery Brands</a></h4>
          </li>
          <?php
          getbrand();
          ?>


        </ul>

        <ul class="navbar-nav  text-center">
          <li class="nav-item bg-dark">
            <h4><a href="#" class="nav-link text-light">Categories</a></h4>
          </li>
          <?php
          getcatogry();
          ?>
        </ul>


      </aside>
    </Main>

    <!--last child  -->
    <?php include('./footer.php');?>
  </container>




  <!--bootstrap js link -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
  </script>
</body>

</html>