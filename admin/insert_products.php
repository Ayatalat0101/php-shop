<?php
include("../include/connect.php");
if (isset($_POST['insert_product'])) {

    $prod_title = $_POST['product_title'];
    $prod_des = $_POST['description'];
    $prod_keyword = $_POST['product_keywords'];
    $prod_cat = $_POST['product_category'];
    $prod_brand = $_POST['product_brand'];
    $prod_price = $_POST['product_price'];
    $prod_status = true;

    $prod_img1 = $_FILES['product_image1']['name'];
    $prod_img2 = $_FILES['product_image2']['name'];
    $prod_img3 = $_FILES['product_image3']['name'];

    $tmp_img1 = $_FILES['product_image1']['tmp_name'];
    $tmp_img2 = $_FILES['product_image2']['tmp_name'];
    $tmp_img3 = $_FILES['product_image3']['tmp_name'];
    if ($prod_title == '' or $prod_des == '' or $prod_keyword == '' or  $prod_cat == '' or $prod_brand == '' or  $prod_price == '' or $prod_img1 == '' or $prod_img2 == '' or $prod_img3 == '') {
        echo "<script>alert('please fill all available fields')</script>";
        exit();
    } else {
        move_uploaded_file($tmp_img1, "./images/$prod_img1");
        move_uploaded_file($tmp_img2, "./images/$prod_img2");
        move_uploaded_file($tmp_img3, "./images/$prod_img3");


        $insert_products = "insert into `products` (product_titles,product_descriptions,product_keywords,categry_ID,brand_id,product_img1,product_img2,product_img3,product_pricess,status,data)
    values('$prod_title','$prod_des','$prod_keyword','$prod_cat','$prod_brand','$prod_img1','$prod_img2','$prod_img3','$prod_price',' $prod_status',Now())";
        $result = mysqli_query($con, $insert_products);
        if ($result) {
            echo "<script>alert('product insert successfully')</script>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin insert products</title>

    <link rel="stylesheet" href="../style.css" />
    <!-- bootstrap css link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body class="bg-light">
    <div class="container mt-3">
        <!--title-->
        <h1 class="text-center">Insert Product</h1>
        <!--form  -->
        <form action="" method="post" enctype="multipart/form-data">
            <!-- insert title -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_title" class="form-label">product title</label>
                <input type="text" class="form-control" id="product_title" name="product_title" placeholder="Enter product title" autocomplete="off" required="required">
            </div>
            <!-- insert description -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="description" class="form-label">product description</label>
                <input type="text" class="form-control" id="description" name="description" placeholder="Enter product description" autocomplete="off" required="required">
            </div>

            <!-- insert keywords -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_keywords" class="form-label">product keywords</label>
                <input type="text" class="form-control" id="product_keywords" name="product_keywords" placeholder="Enter keywords" autocomplete="off" required="required">
            </div>
            <!-- select category -->
            <div class="form-outline mb-4 w-50 m-auto">
                <select class="form-select" id="" name="product_category">
                    <option>select category</option>
                    <?php
                    $select_query = "select * from `categories`";
                    $result_query = mysqli_query($con, $select_query);
                    while ($row = mysqli_fetch_assoc($result_query)) {
                        $cat_title = $row['categery_title'];
                        $cat_id = $row['categry_ID'];
                        echo "<option value='$cat_id'>$cat_title</option>";
                    }

                    ?>
                </select>
            </div>
            <!-- select brand -->
            <div class="form-outline mb-4 w-50 m-auto">
                <select class="form-select" id="" name="product_brand">
                    <option>select brand</option>
                    <?php
                     $select_query="select * from `brand`";
                     $result_query=mysqli_query($con,$select_query);
                     while($row=mysqli_fetch_assoc($result_query)){
                     $brands_title=$row['brand_title'];
                     $brands_id=$row['brand_id'];
                     echo"<option value='$brands_id'>$brands_title</option>";
                     }
                    ?>
                   
                </select>
            </div>
            <!-- insert image1 -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image1" class="form-label">product image1</label>
                <input type="file" class="form-control" id="product_image1" name="product_image1" placeholder="product image 1" autocomplete="off" required="required">
            </div>
            <!-- insert image2 -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image2" class="form-label">product image2</label>
                <input type="file" class="form-control" id="product_image2" name="product_image2" placeholder="product image 2" autocomplete="off" required="required">
            </div>
            <!-- insert image3 -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image3" class="form-label">product image3</label>
                <input type="file" class="form-control" id="product_image3" name="product_image3" placeholder="product image 3" autocomplete="off" required="required">
            </div>

            <!-- price -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_price" class="form-label">product price</label>
                <input type="text" class="form-control" id="product_price" name="product_price" placeholder="Enter price" autocomplete="off" required="required">
            </div>

            <!-- submit -->
            <div class="form-outline mb-4 w-50 m-auto">  
              <input type="submit" class="btn btn-outline-danger px-4 m-auto" id="insert_product" name="insert_product" value="insert product">
            </div>

        </form>
    </div>
</body>

</html>