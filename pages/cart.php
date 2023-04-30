<?php
include('../includes/connect.php');
include('../functions/common_functions.php');

//calling cart function
cart();
// total_cart_price();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous" async></script>
    <link rel="stylesheet" href="http://localhost/Artwisp/styles.css">
    <script src="script.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/c0c4487d61.js" crossorigin="anonymous"></script>
    <link rel="icon" type="image/x-icon" href="../Images\Assets\Fav_art.ico">
    <title>Artwisp | my cart</title>
</head>
<body>
<?php include('top-section.php') ?>
<section>
<h1 class="page-heading text-center p-2 ">BAG</h1> 
<div class="container h-100 py-5">
    <div class="row d-flex justify-content-center align-items-center ">
      <div class="col-12">
        <?php 
         global $con;
         $ip = getIPAddress();
         $total=0;
         $cart_query="Select * from `cart_details` where ip_address='$ip'";
         $result=mysqli_query($con,$cart_query);
         $result_count=mysqli_num_rows($result);
         if($result_count>0){

         
         while($row=mysqli_fetch_array($result)){
           $product_id=$row['product_id'];
           $select_products="Select * from `products` where product_id='$product_id' ";
           $result_products=mysqli_query($con,$select_products);
           while($row_product_price=mysqli_fetch_array($result_products)){
             $product_price=array($row_product_price['product_price']);
             $price_table=$row_product_price['product_price'];
             $product_title=$row_product_price['product_title'];
             $product_image=$row_product_price['product_img'];
             $Artist_name=$row_product_price['Artist_name'];
             $product_values=array_sum($product_price);
             $total +=$product_values;
       
       ?>
        <div class="card rounded-3 mb-4" >
            <!-- card prod -->
          <div class="card-body p-4" >
            <div class="row d-flex justify-content-between align-items-center ">
              <div class="col-md-2 ">
                <img
                  src="../Admin_area/product_images/<?php echo"$product_image"; ?>"
                  class="img-fluid rounded-3" alt="...">
              </div>
              <div class="col-md-5">
                <p class=" mb-2" style="
                  margin: 5px auto;
    text-transform: uppercase;
    color: black;
    font-family: 'Playfair Display', serif;
    font-style: normal;
    font-weight: 300;
    font-size: 2.5rem;
                "><?php echo"$product_title"; ?></p>
                <br>
                <p style="
                margin: 5px auto;
    text-transform: uppercase;
    color: black;
    font-family: 'Inter', sans-serif;
    font-style: normal;
    font-weight:500;
    font-size: 1.5rem;
                " ><span><?php echo"$Artist_name"; ?></span></p>
              </div>
              <!-- <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                <button class="btn btn-link px-2"
                  onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                  <i class="fas fa-minus"></i>
                </button>

                <input id="form1" min="0" name="quantity" value="2" type="number"
                  class="form-control form-control-sm" />

                <button class="btn btn-link px-2"
                  onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                  <i class="fas fa-plus"></i>
                </button>
              </div> -->
              <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                <h5 class="mb-0" style="
                margin: 5px auto;
    text-transform: uppercase;
    color: black;
    font-family: 'Inter', sans-serif;
    font-style: normal;
    font-weight:500;
    font-size: 1.5rem;
                ">₹ <?php echo"$price_table"; ?></h5>
              </div>
              <div class="col-md-2 text-center">
                <form action="" method="post" class="d-flex">
                <input class="" style="width: 30px; height: 30px;" type="checkbox" name="remove_item[]" value="<?php echo "$product_id"; ?>" id="">
                <input type="submit"  name="remove_cart" value="Remove" style=" border:none; background-color:white; "class="text-danger h3"></input>
                <!-- <i class="fas fa-trash fa-xl"></i>< -->
                </form>
              </div>
            </div>
          </div>
        </div>
        <?php

} } } 
else{
    echo"<h2 class='p-3 text-center'
    style='
    margin: 5px auto;
text-transform: uppercase;
color: white;
font-family: 'Inter', sans-serif;
font-style: normal;
font-weight:500;
font-size: 1.5rem;
    '> Cart is empty </h2>";
}



       ?>

        <hr class="rounded mb-3" style="width: 100%;

        margin-left: auto;
        margin-right: auto;
        border: 4px solid white;">
        <div class="d-flex justify-content-end">
                <p class="text-align-right m-2" style="
                text-align:right;
                color:white;

    text-transform: uppercase;
    font-family: 'Inter', sans-serif;
    font-style: normal;
    font-weight:500;
    font-size: 1.5rem;
                " >Subtotal: ₹ <?php  total_cart_price(); ?> </p>
              </div>


        <a href='checkout.php' class='btn btn-primary w-100 add-btn fw-bold p-3 style=" ' style='font-size: 1.5rem;'>Proceed to payment</a>

      </div>
    </div>
  </div>

</section>
 
<!-- to remove item -->
<?php 
 function remove_cart_item(){
    global $con;
    if(isset($_POST['remove_cart'])){
        foreach($_POST['remove_item'] as $remove_id){
            echo $remove_id;
            $delete_query="Delete from `cart_details` where product_id=$remove_id";
            $run_delete=mysqli_query($con,$delete_query);
            if($run_delete){
                echo"<script>window.open('cart.php','_self')</script>";
            }
        }
       
    
    }

 }
echo $remove_item= remove_cart_item();
?>  


    <footer>
      <div class="container text-center  ">
        <img src="/Images/Primary/logo.png" class="mt: 20px" alt="" id="footer-logo">
        <div class="social-icons d-flex align-content-between">
          <i  class="fa-brands col fa-linkedin fa-xl"></i>
          <i class="fa-brands col fa-pinterest fa-xl"></i>
          <i class="fa-brands col fa-facebook-f fa-xl"></i>
          <i class="fa-brands col fa-instagram fa-xl"></i>
        </div>
        <a class="d-block"href="">About</a>
        <a class="d-block" href="">Press</a>
        <a  class="d-block" href="">Contact</a>
      </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
      $(document).ready(function(){
        $('#Search-normal').on('click', function(){
          $(this).removeClass("visible");
          $(this).addClass("invisible");
          $('#Search-expanded').addClass("visible");
          $('#Search-expanded').removeClass("invisible");
          $('#Search-expanded form input').addClass("visible");
          $('#Search-expanded form input ').removeClass("invisible");
          $('#Search-expanded form button').addClass("visible");
          $('#Search-expanded form button').removeClass("invisible");
          $('#Search-expanded form button i').addClass("visible");
          $('#Search-expanded form button i').removeClass("invisible");
        })
      })
    </script>
</body>
</html>