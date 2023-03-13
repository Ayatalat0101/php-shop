
<h2 class="text-center m-3">Insert Brand</h2>
<form action="" method="post" class="mt-2 container">
<div class="input-group mb-3 w-90">
  <span class="input-group-text bg-light" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
  <input type="text" class="form-control" name="brands_tit" placeholder="insert brand" aria-label="brand" 
  aria-describedby="basic-addon1" required="required" >
</div> 
<input class="btn btn-outline-danger btn-md"  type='submit' name="brands_ti"
  value="Insert Brand" />

</form>


<?php  
   include('../include/connect.php');

   if(isset($_POST['brands_ti'])){
      $brands_title	=$_POST['brands_tit'];
      
      $select_query=" Select * from `brand` where  brand_title='$brands_title'";

      $result_select=mysqli_query($con,$select_query);
      $number=mysqli_num_rows($result_select);
        if( $number>0){
         echo"<script>alert('this brand is present inside the database')</script>";
        
        }else{
      $insert_query="insert into `brand` (brand_title) values ( '$brands_title') ";
      $result=mysqli_query($con,$insert_query); 
      if($result){
         echo '<script>alert("brands has been inserted successfully")</script>';
      } 
   }
   } 
?>