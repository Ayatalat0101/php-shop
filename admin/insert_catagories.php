<h2 class="text-center m-3">Insert Catagory</h2>
<form action="" method="post" class="mt-2 container">
<div class="input-group mb-3 w-90">
  <span class="input-group-text bg-light" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
  <input type="text" class="form-control" name="cat_title" placeholder="insert catagories" aria-label="catagories" 
  aria-describedby="basic-addon1" required="required">
</div> 
<input class="btn btn-outline-danger btn-md"  type='submit' name="insert_cat"
  value="insert catagories"/>
</form>


<?php  
   include('../include/connect.php');

   if(isset($_POST['insert_cat'])){
      $categery_title	=$_POST['cat_title'];
      
      $select_query=" Select * from `categories` where  categery_title='$categery_title'";
      $result_select=mysqli_query($con,$select_query);
      $number=mysqli_num_rows($result_select);
        if( $number>0){
         echo"<script>alert('this category is present inside the database')</script>";
        
        }else{
      $insert_query="insert into `categories` (categery_title) values ( '$categery_title') ";
      $result=mysqli_query($con,$insert_query); 
      if($result){
         echo '<script>alert("Category has been inserted successfully")</script>';
      } 
   }
   }
?>


