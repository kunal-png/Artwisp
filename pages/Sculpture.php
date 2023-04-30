<?php
include("../includes/connect.php");
include("../functions/common_functions.php");

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
    <link rel="stylesheet" href="http://localhost/Artwisp/styles.css">
    <script src="script.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/c0c4487d61.js" crossorigin="anonymous"></script>
    <link rel="icon" type="image/x-icon" href="../Images\Assets\Fav_art.ico">
    <title>Artwisp | Sculptures</title>
</head>
<body>
<?php include('top-section.php') ?>
<section>
  
    <!-- <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Library</li>
        </ol>
      </nav> -->
      
      <h1 class="page-heading text-center p-2 ">Sculpture</h1>
      <!-- <button class="">sort</button> -->
      <div class="row w-200" 
      data-masonry='{"percentPosition": true }'>
        <!-- <div class="col-md-4"></div> -->
        <!-- fetching products from database -->
        <?php
        $select_query="Select * from `products` where category_id = 4 order by rand()";
        $result_query=mysqli_query($con, $select_query);
        // $row=mysqli_fetch_assoc($result_query);
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
          <div class='card product_card p-2 m-2' >
          <a href='product_details.php?product_id=$product_id' target='_blank' >
          <img src='../Admin_area/product_images/$product_img' class='card-img-top' alt='...'>
          </a>
          <div class='card-body p-0'>
            <div class='d-flex justify-content-between'>
            <h5 class='card-title float-start' id='nameOfProduct'> $product_title</h5>
            <h5 class='card-title ' id='price'> ₹ $product_price</h5>
          </div>
            <p class='card-text mb-3 fw-medium'>$Artist_name</p>
            <br>
            <a href='Sculpture.php?add_to_cart=$product_id' class='btn btn-primary w-100 add-btn fw-medium p-3'>Add to Cart</a>
          </div>
        </div>
          ";
        }
        ?>
        <!-- ///card here -->
        <!-- <div class="card product_card p-2 m-2" >
          <img src="http://localhost/Artwisp/Images/Assets/image 3.png" class="card-img-top" alt="...">
          <div class="card-body p-0">
            <div class="d-flex justify-content-between">
            <h5 class="card-title float-start" id="nameOfProduct">name</h5>
            <h5 class="card-title " id="price">price</h5>
          </div>
            <p class="card-text mb-2">Painters name</p>
            <br>
            <a href="#" class="btn btn-primary w-100 add-btn fw-medium">Add to Cart</a>
          </div>
        </div> -->
      

     
    </div>
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