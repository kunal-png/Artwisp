<?php
include('../includes/connect.php');
include('../functions/common_functions.php');
cart();
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
    <link rel="stylesheet" href="../styles.css">
    <link rel="stylesheet" href="Product_details.css">

    <script src="script.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/c0c4487d61.js" crossorigin="anonymous"></script>
    <link rel="icon" type="image/x-icon" href="../Images\Assets\Fav_art.ico">
    <title>Product details</title>
</head>
<body>
<?php include('top-section.php') ?>
<section>
    <?php
    global $con;
if(isset($_GET['product_id'])){
 $product_id=$_GET['product_id'];

 $select_query="Select * from `products` where product_id=$product_id";
 $result_query=mysqli_query($con, $select_query);

 while($row=mysqli_fetch_assoc($result_query)){
    $product_id=$row['product_id'];
    $product_title=$row['product_title'];
    $product_description=$row['product_description'];
    // $product_keywords=$row['product_keywords'];
    $category_id=$row['category_id'];
    $product_img=$row['product_img'];
    $product_price=$row['product_price'];
    $Artist_name=$row['Artist_name'];


echo"

  <div class='row px-2'>
    <div class='col-md-4'>
    <img style=' max-height: 60vh; max-width: 30vw'  class=' m-5 rounded 'src='../Admin_area/product_images/$product_img' alt=''>
    </div>
    <div class='col-md-8'>
  <h1 class='m-5 mb-2 product_details_head'>$product_title</h1>
    <h3 class='m-5 mt-2' id='artist_name'>
    $Artist_name
    </h3>
    <h3 class='m-5 mt-2 mb-2'id='price'>
    ₹ $product_price
    </h3>
    <p class='d-block m-5 mb-2 desc'>
    $product_description
    </p>
    <a href='originals.php?add_to_cart=$product_id' class='btn btn-primary  m-5  mt-2 add-btn fw-medium p-3'>Add to Cart</a>
    </div>
hello
  </div>
  ";
}
}
  ?>
</section>
 

  
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