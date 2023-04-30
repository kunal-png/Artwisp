<?php
include('../includes/connect.php');
if(isset($_POST['insert_product'])){
  $product_title=$_POST['productname'];
  $Artist=$_POST['Artist'];
  $description=$_POST['description'];
  $keywords=$_POST['keywords'];
  $pCategory=$_POST['pCategory'];
  $price=$_POST['price'];
  // $quantity=(int)$_POST['quantity'];

  //acessing images
  
  $image=$_FILES['image']['name'];
  $temp_image=$_FILES['image']['tmp_name'];

  //form validity
 
 if($product_title=='' or $description =='' or $Artist =='' or $keywords =='' or $pCategory=='' or $price =='' or $image =='' or $temp_image=='' or $quantity='' ){
  echo "<script> alert('fill all the fields') </script>";
  exit();
 } 
 else{

  move_uploaded_file($temp_image,"./product_images/$image");

  //inserting into db

  $insert_products="insert into `products` (product_title,product_description,product_keywords,category_id,product_img,product_price,Artist_name)
  values('$product_title','$description','$keywords','$pCategory','$image','$price','$Artist')";
 } 
 $result_query=mysqli_query($con,$insert_products);
 if($result_query){
  echo "<script> alert('product added') </script>";
 }
}
?>
<!-- <h3 class="text-center">Insert Products</h3> -->
<div class="w-50 ">
<form action="" method="post" enctype="multipart/form-data"> 
       <label class="form-label f-label"for="productName">Product Name</label>
    <input name="productname" id="productName" 
    class="form-control mb-4" type="text" placeholder="Enter Name of the product" required="required">

    <label class="form-label f-label "  for="Artist">Name of the Artist</label>
    <input name="Artist" id="Artist" 
    class="form-control mb-4" type="text" placeholder="Enter description of the product" required="required">

    <label class="form-label f-label "  for="description">Product Description</label>
    <input name="description" id="description" 
    class="form-control mb-4" type="text" placeholder="Enter description of the product" required="required">

    <label class="form-label f-label "  for="keywords">Product keywords</label>
    <input name="keywords" id="keywords" 
    class="form-control mb-4" type="text" placeholder="Enter keywords of the product" required="required">

    
  <label class="form-label f-label "  for="pCategory">Select Category</label> 
    <select name="pCategory" class="pCategory p-2 w-100 mb-3" style=" display: block;" id="pCategory" >
        <option value="">Select something</option>
        <?php 
         $select_query="Select * from `categories`";
         $result_query=mysqli_query($con,$select_query);

         while($row=mysqli_fetch_assoc($result_query)){
            $category_title=$row['category_title'];
            $category_id=$row['category_id'];
            echo " <option value='$category_id'> $category_title</option>";

         }
        ?>
    </select>

    <label class="form-label f-label "  for="price">Price of Product</label>
    <input name="price" id="price" 
    class="form-control mb-4" type="text" placeholder="Enter price of the product" required="required">

    <label class="form-label f-label "  for="image">image of Product</label>
    <input name="image" id="price" 
    class="form-control mb-4" type="file" placeholder="Add image of the product" required="required">

    <!-- <label class="form-label f-label "  for="quantity">Product quantity</label>
    <input name="quantity" id="quantity" 
    class="form-control mb-4" type="number" placeholder="Enter quantity of the product" required="required"> -->

    <input type="submit" name="insert_product" value="Submit" class="btn add-btn w-100 p-3" >

</form>
</div>