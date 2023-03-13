<?php
include('./include/connect.php');

//get products
function getproducts()
{
  if(!isset($_GET['catagory'])){
    if(!isset($_GET['brand'])){
  global $con;
  $select_query = 'select * from `products` order by rand() limit 0,9';
  $result_query = mysqli_query($con, $select_query);
  $num_of_rows=mysqli_num_rows($result_query);
  if($num_of_rows==0){
    echo "
     <p class='text-center text-danger'><i>no stock of this products</i></p>
    ";
  }
  while ($row = mysqli_fetch_assoc($result_query)) {
    $p_id = $row['product_id'];
    $bnd_id = $row['brand_id'];
    $cat_id = $row['categry_ID'];
    $p_title = $row['product_titles'];
    $p_des = $row['product_descriptions'];
    $p_img = $row['product_img1'];
    $p_price = $row['product_pricess'];
    echo "
       <div class='col-md-4 mb-2'>
           <div class='card '>
             <img src='./admin/images/$p_img' alt='$p_title' class='card-img-top'>
             <div class='card-body'>
                 <h5 class='card-title'>$p_title</h5>
                 <p class='card-text '>$p_des</p>
                 
                   <p class='card-text'>price : $p_price</p>
                   <a href='' class='btn btn-danger'>Add to cart</a>
                   <a href='' class='btn btn-outline-danger bg-white text-danger'><strong>view more</strong></a>
                 
              </div>
           </div>
       </div>
     ";
  }
}
}
}

//get all products
function get_all_products()
{
  if(!isset($_GET['catagory'])){
    if(!isset($_GET['brand'])){
  global $con;
  $select_query = 'select * from `products` order by rand()';
  $result_query = mysqli_query($con, $select_query);
  $num_of_rows=mysqli_num_rows($result_query);
  if($num_of_rows==0){
    echo "
     <p class='text-center text-danger'><i>no stock of this products</i></p>
    ";
  }
  while ($row = mysqli_fetch_assoc($result_query)) {
    $p_id = $row['product_id'];
    $bnd_id = $row['brand_id'];
    $cat_id = $row['categry_ID'];
    $p_title = $row['product_titles'];
    $p_des = $row['product_descriptions'];
    $p_img = $row['product_img1'];
    $p_price = $row['product_pricess'];
    echo "
       <div class='col-md-4 mb-2'>
           <div class='card '>
             <img src='./admin/images/$p_img' alt='$p_title' class='card-img-top'>
             <div class='card-body'>
                 <h5 class='card-title'>$p_title</h5>
                 <p class='card-text '>$p_des</p>
                 
                   <p class='card-text'>price : $p_price</p>
                   <a href='' class='btn btn-danger'>Add to cart</a>
                   <a href='' class='btn btn-outline-danger bg-white text-danger'><strong>view more</strong></a>
                 
              </div>
           </div>
       </div>
     ";
  }
}
}
}



//get all products
function search_product()
{
  if(isset($_GET['search_value'])){
  global $con;
  $search_product_value=$_GET['search_data'];
  $select_query = "SELECT * FROM `products` WHERE product_keywords LIKE '%$search_product_value%'";
  $result_query = mysqli_query($con, $select_query);
  $num_of_rows=mysqli_num_rows($result_query);
  if($num_of_rows==0){
    echo "
     <p class='text-center text-danger'><i>no stock of this products</i></p>
    ";
  }
  while ($row = mysqli_fetch_assoc($result_query)) {
    $p_id = $row['product_id'];
    $bnd_id = $row['brand_id'];
    $cat_id = $row['categry_ID'];
    $p_title = $row['product_titles'];
    $p_des = $row['product_descriptions'];
    $p_img = $row['product_img1'];
    $p_price = $row['product_pricess'];
    echo "
       <div class='col-md-4 mb-2'>
           <div class='card '>
             <img src='./admin/images/$p_img' alt='$p_title' class='card-img-top'>
             <div class='card-body'>
                 <h5 class='card-title'>$p_title</h5>
                 <p class='card-text '>$p_des</p>
                 
                   <p class='card-text'>price : $p_price</p>
                   <a href='' class='btn btn-danger'>Add to cart</a>
                   <a href='' class='btn btn-outline-danger bg-white text-danger'><strong>view more</strong></a>
                 
              </div>
           </div>
       </div>
     ";
  }
}
else{
  
}
}



//get brand
function getbrand()
{
  global $con;
  $select_brands = 'select * from `brand`';
  $result_brand = mysqli_query($con, $select_brands);
  while ($row_data = mysqli_fetch_assoc($result_brand)) {
    $brand_title = $row_data['brand_title'];
    $brand_id = $row_data['brand_id'];
    echo " <li class='nav-item '>
                <a href='index.php?brand=$brand_id' class='nav-link text-danger '><h6>$brand_title</h6></a>
              </li>";
  }
}
  


function getcatogry()
{
  global $con;
  $select_catagories='select * from `categories`';
  $result_catagories=mysqli_query($con,$select_catagories);
  while($row_data=mysqli_fetch_assoc($result_catagories)){
    $catagory_title= $row_data['categery_title'];
    $catagory_id= $row_data['categry_ID'];
    echo " <li class='nav-item '>
    <a href='index.php?catagory=$catagory_id' class='nav-link text-danger'><h6>$catagory_title</h6></a>
  </li>";
  }
}

//get unique_catgory
function get_unique_catgory()
{
  if(isset($_GET['catagory'])){
   
  global $con;
  $uni_cat=$_GET['catagory'];
  $select_query = "select * from `products` where categry_ID=$uni_cat ";
  $result_query = mysqli_query($con, $select_query);
  $num_of_rows=mysqli_num_rows($result_query);
  if($num_of_rows==0){
    echo "
     <p class='text-center text-danger'><i>no stock of this catgory</i></p>
    ";
  }
  while ($row = mysqli_fetch_assoc($result_query)) {
    $p_id = $row['product_id'];
    $bnd_id = $row['brand_id'];
    $cat_id = $row['categry_ID'];
    $p_title = $row['product_titles'];
    $p_des = $row['product_descriptions'];
    $p_img = $row['product_img1'];
    $p_price = $row['product_pricess'];
    echo "
       <div class='col-md-4 mb-2'>
           <div class='card '>
             <img src='./admin/images/$p_img' alt='$p_title' class='card-img-top'>
             <div class='card-body'>
                 <h5 class='card-title'>$p_title</h5>
                 <p class='card-text '>$p_des</p>
                 
                   <p class='card-text'>price : $p_price</p>
                   <a href='' class='btn btn-danger'>Add to cart</a>
                   <a href='' class='btn btn-outline-danger bg-white text-danger'><strong>view more</strong></a>
                 
              </div>
           </div>
       </div>
     ";
  }
}
}


//get unique_brand
function get_unique_brand()
{
  if(isset($_GET['brand'])){
   
  global $con;
  $uni_brand=$_GET['brand'];
  $select_query = "select * from `products` where brand_id=$uni_brand ";
  $result_query = mysqli_query($con, $select_query);
  $num_of_rows=mysqli_num_rows($result_query);
  if($num_of_rows==0){
    echo "
     <p class='text-center text-danger'><i>no stock of this brand</i></p>
    ";
  }
  while ($row = mysqli_fetch_assoc($result_query)) {
    $p_id = $row['product_id'];
    $bnd_id = $row['brand_id'];
    $cat_id = $row['categry_ID'];
    $p_title = $row['product_titles'];
    $p_des = $row['product_descriptions'];
    $p_img = $row['product_img1'];
    $p_price = $row['product_pricess'];
    echo "
       <div class='col-md-4'>
           <div class='card'>
             <img src='./admin/images/$p_img' alt='$p_title' class='card-img-top'>
             <div class='card-body'>
                 <h5 class='card-title '>$p_title</h5>
                 <p class='card-text'>$p_des</p>
                 
                   <p class='card-text'>price : $p_price</p>
                   <a href='' class='btn btn-danger'>Add to cart</a>
                   <a href='' class='btn btn-outline-danger bg-white text-danger'><strong>view more</strong></a>
                 
              </div>
           </div>
       </div>
     ";
  }
}
}


?>