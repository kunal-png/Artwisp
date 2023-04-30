<?php
include('../includes/connect.php');
include('../functions/common_functions.php');

if(isset($_GET['user_id'])){
    $user_id=$_GET['user_id'];
}
$get_ip_address=getIPAddress();
$total_price=0;
$cart_query_price="Select * from `cart_details` where ip_address='$get_ip_address'";
$result_cart_price=mysqli_query($con,$cart_query_price);
$invoice_number=mt_rand();
$status='pending';
$count_products=mysqli_num_rows($result_cart_price);
while($rows_price=mysqli_fetch_array($result_cart_price)){
    $product_id=$rows_price['product_id'];
    $select_product="Select * from `products` where product_id=$product_id";
    $run_price=mysqli_query($con,$select_product);
    while($row_product_price=mysqli_fetch_array($run_price)){
        $product_price=array($row_product_price['product_price']);
        $product_values=array_sum($product_price);
        $total_price +=$product_values;
    }
}

$insert_orders="insert into `user_orders` (user_id,amaount_due,invoice_number,total_products,order_date,order_status)
values($user_id,$total_price,$invoice_number,$count_products,NOW(),'$status')";
$result_query=mysqli_query($con,$insert_orders);

$insert_pending_orders="insert into `orders_pending` (user_id,invoice_number,product_id,order_status)
values($user_id,$invoice_number,$product_id,'$status')";
$result_pending_orders=mysqli_query($con,$insert_pending_orders);

$empty_cart="Delete from `cart_details` where ip_address='$get_ip_address '";
$result_delete=mysqli_query($con,$empty_cart);

 echo "<script>window.open('profile.php?my_orders','_self')</script>";
?>