<?php 

include('../includes/connect.php');
@session_start();
function getproducts(){
    global $con;
    $select_query="Select * from `products` order by rand()";
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
      <img src='../Admin_area/product_images/$product_img' class='card-img-top' alt='...'>
      <div class='card-body p-0'>
        <div class='d-flex justify-content-between'>
        <h5 class='card-title float-start' id='nameOfProduct'> $product_title</h5>
        <h5 class='card-title ' id='price'> ₹ $product_price</h5>
      </div>
        <p class='card-text mb-3 fw-medium'>$Artist_name</p>
        <br>
        <a href='#' class='btn btn-primary w-100 add-btn fw-medium p-3'>Add to Cart</a>
      </div>
    </div>
      ";
    }
}
//get ip function
function getIPAddress() {  
  //whether ip is from the share internet  
   if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
              $ip = $_SERVER['HTTP_CLIENT_IP'];  
      }  
  //whether ip is from the proxy  
  elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
              $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
   }  
//whether ip is from the remote address  
  else{  
           $ip = $_SERVER['REMOTE_ADDR'];  
   }  
   return $ip;  
}  
// $ip = getIPAddress();  
// echo 'User Real IP Address - '.$ip;  

//cart function

function cart(){
  if(isset($_GET['add_to_cart'])){
    global $con;
    $ip = getIPAddress(); 
    $get_product_id=$_GET['add_to_cart'];
    
    $select_query="Select * from `cart_details` where ip_address='$ip' and product_id=$get_product_id";
    $result_query=mysqli_query($con, $select_query);
    $num_of_rows=mysqli_num_rows($result_query);
    if($num_of_rows>0){
      echo "<script>alert('This item is already present in the cart')</script>";
      echo"<script>window.open('originals.php','_self')</script>";
    }
    else{
      $insert_query="insert into `cart_details` (product_id,ip_address,quantity) values ($get_product_id,'$ip',1)";
      $result_query=mysqli_query($con, $insert_query);
      echo "<script>alert('Added to cart')</script>";
      echo"<script>window.open('','_self')</script>";
    }
  }
}

function cart_items(){
  if(isset($_GET['add_to_cart'])){
    global $con;
    $ip = getIPAddress(); 
    
    
    $select_query="Select * from `cart_details` where ip_address='$ip'";
    $result_query=mysqli_query($con, $select_query);
    $count_cart_items=mysqli_num_rows($result_query);
  }
   else{
      global $con;
      $ip = getIPAddress(); 
      
      
      $select_query="Select * from `cart_details` where ip_address='$ip'";
      $result_query=mysqli_query($con, $select_query);
      $count_cart_items=mysqli_num_rows($result_query);
    }
    echo $count_cart_items;
}

function total_cart_price(){
  global $con;
  $ip = getIPAddress();
  $total=0;
  $cart_query="Select * from `cart_details` where ip_address='$ip'";
  $result=mysqli_query($con,$cart_query);
  while($row=mysqli_fetch_array($result)){
    $product_id=$row['product_id'];
    $select_products="Select * from `products` where product_id='$product_id' ";
    $result_products=mysqli_query($con,$select_products);
    while($row_product_price=mysqli_fetch_array($result_products)){
      $product_price=array($row_product_price['product_price']);
      $product_values=array_sum($product_price);
      $total +=$product_values;
  }
}
echo $total;
}

//get_user_order_details
function get_user_order_details(){
  global $con;
  $email=$_SESSION['email'];
  $get_details="select * from `user_table` where user_email='$email'";
  $result_query=mysqli_query($con,$get_details);
  while($row_query=mysqli_fetch_array($result_query)){
    $user_id=$row_query['user_id'];
    if(!isset($_GET['edit_account'])){
      if(!isset($_GET['my_orders'])){
        if(!isset($_GET['del_account'])){
          $get_orders="select * from `user_orders` where user_id=$user_id and order_status='pending'";
          $result_orders_query=mysqli_query($con,$get_orders);
          $row_count=mysqli_num_rows($result_orders_query);
          if($row_count>0){
            echo"
            <h2 class='m-3 text-white' > you have $row_count pending orders</h2>
            <a class='m-3 text-white  h3' href='../users_area/profile.php?my_orders'>My Orders</a>
            ";
          }else{
            echo"
            <h2 class='m-3 text-white' > you don't have any pending orders</h2>
            ";
          }
        }

      }
    }
    
  }
  

}

?>