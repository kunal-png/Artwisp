<?php
error_reporting(E_ERROR | E_PARSE);
include('../includes/connect.php');
include('../functions/common_functions.php');
session_start();

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
    <title>Register</title>
</head>
<body>
<header class="navbar sticky-top navbar-expand-lg  bg-black">
        <div class="container-fluid" id="top-bar">
          <a class="navbar-brand" id="mg" href="../index.php">
            <img src="../Images/Primary/logo.png" alt="Brand Logo">
          </a>
          <div class="collapse navbar-collapse justify-content-end " id="navbarNav">
            <ul class="navbar-nav ">
              <li class="nav-item">
                <a class="nav-link d-inline  icons" href="#">
                 <i class="fa-solid fa-magnifying-glass fa-xl visible" id="Search-normal"  ></i> 
                  <div id="Search-expanded" class="invisible">
                  <form class="d-inline"action="pages/search_product.php">
                  <input type="text" class="searchText"  placeholder="Search something" name="search_data">
                  <button  type="submit" value="search"  name="search_data_product" class="Search-bt btn btn-dark p-1 invisible" ><i  class=" fa-solid fa-arrow-right fa-xl invisible"></i></button>
                  </form>
                  </div>
                </a>
                
        
              </li>
              <li class="nav-item dropdown">
                <?php
                if(!isset($_SESSION['email'])){
                  echo "
              <a class='nav-link dropdown-toggle icons  d-inline' href='#' role='button' id='userIcon' data-bs-toggle='dropdown' aria-expanded='false'>
              <i class='fa-regular fa-user fa-xl'></i>
          </a>
          <ul class='dropdown-menu'>
            <li><a class='dropdown-item' href='user_login.php'>Login</a></li>
            <li><a class='dropdown-item' href='user_register.php'>Register</a></li>
          </ul>
                <!-- <a class='nav-link icons  d-inline ' href='#'id='userIcon'>
                 <i class='fa-regular fa-user fa-xl'></i>
                </a> -->
              </li>";
                }else{
                  echo "
                  <a class='nav-link dropdown-toggle icons  d-inline' href='#' role='button' id='userIcon' data-bs-toggle='dropdown' aria-expanded='false'>
              <i class='fa-regular fa-user fa-xl'></i>
          </a>
          <ul class='dropdown-menu'>
            <li><a class='dropdown-item' href='profile.php'>My account</a></li>
            <li><a class='dropdown-item text-danger' href='../pages/logout.php'>Logout</a></li>
          </ul>
                <!-- <a class='nav-link icons  d-inline ' href='#' id='userIcon'>
                 <i class='fa-regular fa-user fa-xl'></i>
                </a> -->
              </li>";
                }
              ?>
              <li class="nav-item">
                <a class='nav-link icons  d-inline ' href='../pages/cart.php' target='_blank'>
                  <i class="fa-solid fa-bag-shopping fa-xl"> <span class="badge badge-light"><?php cart_items(); ?></span></i>
                </a>
                
                
              </li>
            </ul>
          </div>
        </div>
    </header>
    <!-- <div id="signup-popup" class="signUpPopup d-none ">
      <button class="close-btn float-end"><i class="fa-solid fa-xmark fa-xl"></i></button>
      <h1 class="text-center m-3 form-heading">Welcome to <span class="fw-medium">ArtWisp</span></h1>
      <form action="#" class="d-block text-center form-label ">
        <input type="text" placeholder="Name">
        <br>
        <input type="email" placeholder="Email">
        <br>
        <input type="password" placeholder="Password">
        <br>
        <button class="form-btn" type="submit">Register</button>
        <div class="container_or">
          <hr>
          <p>OR</p>
          <hr>
        </div>
        <button class="d-block social-login"><i class="fa-brands fa-google fa-xl m-2"></i>Log in with Google</button>
        <button class="d-block social-login"><i class="fa-brands fa-meta fa-xl m-2"></i>Log in with Facebook</button>
        <p id="bottom-form-text">Already have an account? <a class="text-decoration-none fw-bold" href="#">Log in</a></p>
      </form>

    </div> -->
    <div class="container" id="navigation">
        <ul class="nav justify-content-center ">
            <li class="nav-item">
                <a href="../pages/originals.php" class="nav-link">Originals</a>
            </li>
            <li class="nav-item">
                <a href="../pages/prints.php" class="nav-link">Prints</a>
            </li>
            <li class="nav-item">
                <a href="../pages/Digitals.php" class="nav-link">Digitals</a>
            </li>
            <li class="nav-item">
                <a href="../pages/Sculpture.php" class="nav-link">Sculpture</a>
            </li>
        </ul>
    </div>
<section >
<div id="signup-popup" class="signUpPopup d-block">
<h1 class="text-center m-2 form-heading">Welcome to <span class="fw-medium">ArtWisp</span></h1>
<br>
      <form action="" method="post" enctype="multipart/form-data" class="d-block text-center p-3 ">
      <input type="text" class="form-control mb-2"  required="required" name="name" placeholder="Name">
      <input type="email" class="form-control mb-2"  required="required" name="email" placeholder="Email">
      <input type="password" class="form-control mb-2"  required="required" name="password" placeholder="Password">
      <!-- <input  id="user_img" class="form-control mb-2" type="file" placeholder="Add your image" name="user_img" required="required"> -->
      <input type="text" class="form-control mb-2"  required="required" name="address" placeholder="Enter your address">
      <input type="number" class="form-control mb-2"  required="required" name="phone" placeholder="Enter your mobile number">
      <input type="submit" name="register" value="Submit" class="btn add-btn w-100 p-3" >
        <div class="container_or">
          <hr>
          <p>OR</p>
          <hr>
        </div>
        <button class="d-block social-login"><i class="fa-brands fa-google fa-xl m-2"></i>Log in with Google</button>
        <button class="d-block social-login"><i class="fa-brands fa-meta fa-xl m-2"></i>Log in with Facebook</button>
        <p id="bottom-form-text">Already have an account? <a id="signup" class="text-decoration-none fw-bold" href="user_login.php">Log in</a></p>
      </form>
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

<!-- php code -->
<?php 
if(isset($_POST['register'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $password=$_POST['password'];
  $phone=$_POST['phone'];
  $address=$_POST['address'];
  // $user_image=$_FILES['user_img']['name'];
  // $user_image_tmp=$_FILES['user_img']['tmp_name'];
  $user_ip=getIPAddress();

  //select query
$select_query="select * from `user_table` where username='$name' or user_email='$email' ";
$result=mysqli_query($con,$select_query);
$rows_count=mysqli_num_rows($result);
if($rows_count>0){
  echo "<script> alert('user allredy exists try login') </script>";
}
else{
  $insert_query="insert into `user_table` (username,user_email,user_password,user_image,user_ip,user_address,User_mobile)
  values('$name','$email','$password','$user_img','$user_ip','$address','$phone')";
  $sql_execute=mysqli_query($con,$insert_query);
}
  //inserting
  // move_uploaded_file($user_image_tmp,"./product_images/$user_image");
 
  //selectin cart items

  $select_cart_items="select *from `cart_details` where ip_address='$user_ip' ";
  $result_cart=mysqli_query($con,$select_cart_items);
  $rows_count=mysqli_num_rows($result_cart);
  if($rows_count>0){
    $_SESSION['username']=$name;
    echo "<script> window.open('../pages/checkout.php') </script>";
  }
  else{
    echo "<script> window.open('../index.php') </script>";
  }
}

?>