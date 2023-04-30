<?php
include('../includes/connect.php');
include('../functions/common_functions.php');
@session_start();

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
</head>
<body style="background-color: black;">
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
        <div class="container w-20">
    <h1 class="text-center m-2 form-heading">Welcome back to <span class="fw-medium">ArtWisp</span></h1>
<br>
      <form action="" method="post" class="d-block text-center p-3 ">
     
      <input type="email" class="form-control mb-2"  required="required" name="email" placeholder="Email">
      <input type="password" class="form-control mb-4"  required="required" name="password" placeholder="Password">
      <input type="submit" name="login" value="Submit" class="btn add-btn w-100 p-3" >
      </form>
      </div>
    </section>
</body>
</html>
<?php 
session_start();
if(isset($_POST['login'])){
  $email=$_POST['email'];
  $password=$_POST['password'];
  

  $select_query="select * from `admin_table` where email='$email' and password='$password'";
  $result=mysqli_query($con,$select_query);
  $row_count=mysqli_num_rows($result);
  $row_data=mysqli_fetch_assoc($result);
  $user_ip=getIPAddress();

  if($row_count>0){
    $_SESSION['admin_email']=$email;
    // $_SESSION['name']=$result['username'];
    if($row_count==1 and $row_count_cart==0){
      $_SESSION['admin_email']=$email;
      // $_SESSION['name']=$result['username'];
      echo "<script> alert('Login Succesfull') </script>";
      echo"<script>window.open('index.php','_self')</script>";
    }else{
      $_SESSION['admin_email']=$email;
      // $_SESSION['name']=$result['username'];
      echo "<script> alert('Login Succesfull') </script>";
      echo"<script>window.open('index.php','_self')</script>";
    }
  }else{
    echo "<script> alert('invalid details, try again') </script>";
  }
}

?>



