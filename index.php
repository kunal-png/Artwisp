<?php
error_reporting(E_ERROR | E_PARSE);
include('includes/connect.php');
include('functions/common_functions.php');


cart();
session_start();
// total_cart_price();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="./Images\Assets\Fav_art.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles.css">
    <script src="script.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/c0c4487d61.js" crossorigin="anonymous"></script>
    <title>Artwisp</title>
</head>
<body>

    <header class="navbar sticky-top navbar-expand-lg  bg-black">
        <div class="container-fluid" id="top-bar">
          <a class="navbar-brand" id="mg" href="#">
            <img src="Images/Primary/logo.png" alt="Brand Logo">
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
            <li><a class='dropdown-item' href='./users_area/user_login.php'>Login</a></li>
            <li><a class='dropdown-item' href='./users_area/user_register.php'>Register</a></li>
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
            <li><a class='dropdown-item' href='./users_area/profile.php'>My account</a></li>
            <li><a class='dropdown-item text-danger' href='./pages/logout.php'>Logout</a></li>
          </ul>
                <!-- <a class='nav-link icons  d-inline ' href='#' id='userIcon'>
                 <i class='fa-regular fa-user fa-xl'></i>
                </a> -->
              </li>";
                }
              ?>
              <li class="nav-item">
                <a class='nav-link icons  d-inline ' href='pages/cart.php' target='_blank'>
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
                <a href="pages/originals.php" class="nav-link">Originals</a>
            </li>
            <li class="nav-item">
                <a href="pages/prints.php" class="nav-link">Prints</a>
            </li>
            <li class="nav-item">
                <a href="pages/Digitals.php" class="nav-link">Digitals</a>
            </li>
            <li class="nav-item">
                <a href="pages/Sculpture.php" class="nav-link">Sculpture</a>
            </li>
        </ul>
    </div>
    <section>
     
      <div class="container-fluid row " id="hero">
        <div class="hero-text-box col">
          <p id="herosub">featured collection</p>
          <h1 id="hero-heading">Monochromatic Melancholy</h1>
          <p id="hero-text">
            An introspective journey through monochromatic hues, exploring the depth and beauty of melancholy
          </p>
         <a style="text-decoration:none;" href="pages/featured_collection.php"><button  id="hero-button" class="d-block"><p class="d-inline">EXplore</p><i class="fa-solid fa-arrow-right"></i></button></a> 
        </div>
        <div class="image-box col d-flex align-items-center">
          <div class="image-container d-inline-flex ">
           <a href="pages/product_details.php?product_id=41" target="_blank"><img src="Images/Assets/image 3.png" alt=""  id="hero-img-1"></a> 
           <a href="pages/product_details.php?product_id=42" target="_blank" > <img src="Images/Assets/image 4.png" alt="" class="align-self-baseline" id="hero-img-2"></a> 
          </div>
        </div>
      </div>
    </section>
    <section class="section-header" id="New">
      <h1 class="text-center">New art</h1>
      <div class="py-5">
        <div class="container">
          <div class="row hidden-md-up">
            <div class="col-md-4">
            <a href="pages/product_details.php?product_id=46" class="d-block new_art">
               <div class="card border-none bg-transparent new_art">
              <img src="Images/Assets/view more/Group 17.png">
               </div>
</a>
            </div>
         <div class="col-md-4">
         <a href="pages/product_details.php?product_id=47" class="d-block new_art">
        <div class="card border-none bg-transparent new_art">
              <img src="Images/Assets/view more/Group 16.png">
        </div>
</a>
        </div>
        <div class="col-md-4 ">
        <a href="pages/product_details.php?product_id=48" class="d-block new_art">
        <div class="card bg-transparent new_art">
         
              <img src="Images/Assets/view more/Group 15.png">
              
          </div>
          </a>
          </div>
        </div>
      <br>
      <div class="row">
        <div class="col-md-4">
        <a href="pages/product_details.php?product_id=49" class="d-block new_art">
        <div class="card border-none bg-transparent new_art">
              <img src="Images/Assets/view more/Group 13.png">
          </div>
</a>
        </div>
        <div class="col-md-4">
        <a href="pages/product_details.php?product_id=50" class="d-block new_art">
        <div class="card border-none bg-transparent ">
              <img src="Images/Assets/view more/Group 14.png" id="new_art">
          </div>
</a>
        </div>
        <div class="col-md-4">
        <a href="pages/originals.php" class="d-block new_art">
        <div class="card border-none bg-transparent new_art">
              <img src="Images/Assets/view more/Component 2.png">
          </div>
</a>
        </div>
      </div>
    </div>
  </div>
      <!-- <div class="table">
        <div class="row p-3">
          <img src="Images/Assets/view more/Group 17.png" alt="" class="col">
          <img src="Images/Assets/view more/Group 16.png" alt="" class="col">
          <img src="Images/Assets/view more/Group 15.png" alt="" class="col">
        </div>
        <div class="row p-3">
          <img src="Images/Assets/view more/Group 13.png" alt="" class="col">
          <img src="Images/Assets/view more/Group 14.png" alt="" class="col">
          <img src="Images/Assets/view more/Component 2.png" alt="" class="col">
        </div>
      </div>
    </section>
    <section class="section-header pt-0" id="categories">
      <h1 class="text-center">Shop by Category</h1>
     <div class="container d-flex justify-content-center m-10" id="category">
      <div class="item-expanded col-5 m-2" id="Originals"></div>
      <div  class="not-expanded col m-2" id="prints"></div>
      <div  class="not-expanded col m-2" id="digitals"></div>
      <div  class="not-expanded col m-2" id="sculptures"></div>
     </div>
      </div> -->
    </section>
    <section class="section-header pt-0" id="categories">
      <h1 class="text-center">Shop by Category</h1>
     <div class="container d-flex justify-content-center m-10 " id="category">
      <div class="item-expanded h-100 d-flex justify-content-center align-items-center col m-2" id="Originals">
      <a href="pages/originals.php"> <p   style="list-style: none;
        text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
        color: white;
   font-family: 'Inter';
font-style: normal;
font-weight: 700;
font-size: 35px;" >Originals</p></a>
      </div>
      <div  class="item-expanded h-100 d-flex justify-content-center align-items-center  col m-2" id="prints">
      <a href="pages/prints.php"> <p   style="list-style: none;
      text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
        color: white;
   font-family: 'Inter';
font-style: normal;
font-weight: 700;
font-size: 35px;" >Prints</p></a>
      </div>
      <div  class="item-expanded h-100 d-flex justify-content-center align-items-center  col m-2" id="digitals">
        <a href="pages/Digitals.php">
      <p   style="list-style: none;
      text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
        color: white;
   font-family: 'Inter';
font-style: normal;
font-weight: 700;
font-size: 35px;" >Digitals</p></a>
      </div>
      <div  class="item-expanded  h-100 d-flex justify-content-center align-items-center col m-2" id="sculptures">
        <a href="">
      <p   style="list-style: none;
      text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
        color: white;
   font-family: 'Inter';
font-style: normal;
font-weight: 700;
font-size: 35px;" >Sculptures</p></a>
      </div>
     </div>
      </div>
    </section>
    <section>
      <div class="container-fluid row" id="about">
        <div class="about-image col">
          <img src="Images/Primary/about.png" alt="">
        </div>

        <div class="col About-text">
          <p class="mt-4 ">
            At ArtWisp, we believe that art has the power to inspire, transform and connect people from all walks of life. 
We offer a wide variety of art styles, 
including paintings, sculptures, prints, and mixed media, to suit every taste and budget.

we believe that everyone 
deserves to own a piece of art that inspires them 
and brings beauty and joy to their life. 
Join our community today and 
discover the world of art at your fingertips.
          </p>
        </div>
      </div>
    </section>
    <footer>
      <div class="container text-center  ">
        <img src="Images/Primary/logo.png" class="mt: 20px" alt="" id="footer-logo">
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
        });
//         $('#userIcon').on("click",function(){
//    $('#signup-popup').removeClass('d-none');
//    $('#signup-popup').addClass('d-block');
// });
// $('.close-btn').on("click",function(){
//    $('#signup-popup').addClass('d-none');
//    $('#signup-popup').removeClass('d-block');
// });
      })
    </script>
</body>
</html>