<?php
error_reporting(E_ERROR | E_PARSE);

if(isset($_GET['edit_product'])){
    $product_id=$_GET['edit_product'];
    // $email=$_SESSION['email'];
    $select_query="select * from `products` where product_id='$product_id'";
    $result_query=mysqli_query($con,$select_query);
    $row_fetch=mysqli_fetch_assoc($result_query);
    $product_id=$row_fetch['product_id'];
    $product_title=$row_fetch['product_title'];
    $product_description=$row_fetch['product_description'];
    $product_keywords=$row_fetch['product_keywords'];
    $category_id=$row_fetch['category_id'];
    $product_img=$row_fetch['product_img'];
    $product_price=$row_fetch['product_price'];
    $Artist_name=$row_fetch['Artist_name'];

    if(isset($_POST['save_product'])){
        // $product_id=$product_id;
        $product_title=$_POST['product_title'];
        $product_description=$_POST['product_description'];
        $product_keywords=$_POST['product_keywords'];
        $category_id=$_POST['category_id'];
        $product_img=$_FILES['product_img'];
        $product_price=$_POST['product_price'];
        $Artist_name=$_POST['Artist_name'];

        $update_data="update `products` set product_title='$product_title',product_description='$product_description',product_keywords='$product_keywords',category_id='$category_id',product_img='$product_img',product_price='$product_price', Artist_name='$Artist_name' where product_id=$product_id";
        $result_query_update=mysqli_query($con,$update_data);
        if($result_query_update){
            echo "<script>alert('Information updated')</script>";
        }
    }
}

echo"
 <h2 class='m-3 text-white text-center' >Edit product</h2>
";
?>
<div class="container w-50 ">
<?php echo"  <img src='product_images/$product_img' alt=''> "; ?>
<form action="" method="post" enctype="multipart/form-data"> 
       <label class="form-label f-label"for="productName">Product Name</label>
    <input name="product_title" id="product_title" value="<?php echo $product_title; ?>"
    class="form-control mb-4" type="text" placeholder="Enter Name of the product" required="required">

    <label class="form-label f-label "  for="Artist">Name of the Artist</label>
    <input name="Artist_name" id="Artist_name" value="<?php echo $Artist_name; ?>"
    class="form-control mb-4" type="text" placeholder="Enter description of the product" required="required">

    <label class="form-label f-label "  for="description">Product Description</label>
    <input name="product_description" id="product_description" value="<?php echo $product_description; ?>"
    class="form-control mb-4" type="text" placeholder="Enter description of the product" required="required">

    <label class="form-label f-label "  for="keywords">Product keywords</label>
    <input name="keywords" id="keywords" value="<?php echo $product_title; ?>"
    class="form-control mb-4" type="text" placeholder="Enter keywords of the product" required="required">

    
  <label class="form-label f-label "  for="pCategory">Select Category</label> 
    <select name="category_id" class="pCategory p-2 w-100 mb-3" style=" display: block;" id="category_id" >
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
    <input name="product_price" id="product_price" value="<?php echo $product_price; ?>"
    class="form-control mb-4" type="text" placeholder="Enter price of the product" required="required">

  
    <!-- <input name="product_img" id="product_img" 
    class="form-control mb-4" type="file" placeholder="Add image of the product" required="required"> -->

    <!-- <label class="form-label f-label "  for="quantity">Product quantity</label>
    <input name="quantity" id="quantity" 
    class="form-control mb-4" type="number" placeholder="Enter quantity of the product" required="required"> -->

    <input type="submit" name="save_product" value="Submit" class="btn add-btn w-100 p-3" >

</form>

</div>