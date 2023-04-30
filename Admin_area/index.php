<?php
error_reporting(E_ERROR | E_PARSE);

include('../includes/connect.php');
include('../functions/common_functions.php');
@session_start();

// $_SESSION['admin_email']=$email;

if(!isset($_SESSION['admin_email'])){
  echo "<script>window.open('admin_login.php','_self')</script>";
}
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
    <title>Admin Dashboard</title>
    <!-- bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../styles.css">
    <script src="script.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/c0c4487d61.js" crossorigin="anonymous"></script>
    <link rel="icon" type="image/x-icon" href="../Images\Assets\Fav_art.ico">
</head>
<body>
<!-- bootstrap js link -->
<header class="navbar sticky-top navbar-expand-lg  bg-black">
        <div class="container-fluid" id="top-bar">
          <a class="navbar-brand" id="mg" href="#">
            <img src="../Images/Primary/logo.png" alt="Brand Logo">
          </a>
          <div class="collapse navbar-collapse justify-content-end " id="navbarNav">
            <ul class="navbar-nav ">
              <li class="nav-item">
                <a class="nav-link d-inline  icons" href="#">
                 <p class="fw-medium" style="color: white;   margin: .5rem 2rem;" >Welcome Admin</p>
                </a>
              </li>
            </ul>
          </div>
        </div>
    </header>
    <section class="section-header">
        <h3 class="text-center m-2  ">Manage Shop</h3>
        <hr class="align-self-center d-block" style="color:#ffff; margin: 1rem auto; width:50vw; border: 3px #ffff solid;">
        <div class="container-fluid d-flex">
            <div class="nav " id="Admin-nav">
                <ul>
                    <li><a href="index.php?insert_product">Insert Products</a></li>
                    <li><a href="index.php?view_products">View Products</a></li>
                    <li><a href="index.php?all_orders">All Orders</a></li>
                    <li><a href="index.php?payments">Payements</a></li>
                    <li><a href="index.php?users">Users</a></li>
                    <li><a id="logout" href="../pages/logout.php">Logout</a></li>
                </ul>
            </div>
            <div class="main-body ">
              <div class="container">
                <?php
                if(isset($_GET['insert_product'])){
                    include('insert_product.php');
                }
                if(isset($_GET['view_products'])){
                  include('view_products.php');
              }
              if(isset($_GET['edit_product'])){
                include('edit_products.php');
            }
            if(isset($_GET['all_orders'])){
              include('all_orders.php');
          }
          if(isset($_GET['payments'])){
            include('payments.php');
        }
        if(isset($_GET['users'])){
          include('users.php');
      }
      if(isset($_GET['delete_product'])){
        include('delete_product.php');
    }
    if(isset($_GET['delete_user'])){
      include('delete_user.php');
  }
          
                ?>
              </div>  

            </div>
        </div>
    </section>
</body>
</html>