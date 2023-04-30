<?php
include('../includes/connect.php');
include('../functions/common_functions.php');
@session_start();


if(isset($_GET['order_id'])){
    $order_id=$_GET['order_id'];
    $select_data="select * from `user_orders` where order_id=$order_id";
    $result_data=mysqli_query($con,$select_data);
    $row_fetch=mysqli_fetch_assoc($result_data);
    $invoice_number=$row_fetch['invoice_number'];
    $amount_due=$row_fetch['amaount_due'];

}

if(isset($_POST['confirm_payment'])){
    $invoice_number=$_POST['invoice_number'];
    $amount=$_POST['amount'];
    $payment_mode=$_POST['payment_mode'];
    $insert_query="insert into `user_payments` (order_id,invoice_number,amount,payment_mode)
    values($order_id,$invoice_number,$amount,'$payment_mode')
    ";
    $result=mysqli_query($con,$insert_query);
    if($result){
        echo "<script>alert('Transaction Success !')</script>";
        echo "<script>window.open('profile.php?my_orders','_self')</script>";
    }
    $update_orders="update `user_orders` set order_status='Complete' where order_id=$order_id";
    $result_orders=mysqli_query($con,$update_orders);
}

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
    <title>confirm payement</title>
</head>
<body class="bg-dark" >
<div class="container w-50 ">
    <h1 class="text-white text-center m-4" >Confirm Payement</h1>
<form action="" method="post" class="d-block text-center p-3 ">
<input type="text" class="form-control mb-3"  required="required" name="invoice_number" readonly value="<?php echo $invoice_number; ?>"  placeholder="invoice nuber">
<label for="amount" class="text-white h4 " >Amount:</label>
<input type="number" class="form-control mb-3"  required="required" name="amount" readonly value="<?php echo $amount_due; ?>"  placeholder="Amount">

<select class="form-select mb-4" name="payment_mode" id="">
    <option value="">Select Payment Mode</option>
    <option value="">UPI</option>
    <option value="">PAYTM</option>
    <option value="">Netbanking</option>
    <option value="">Cash on Delivery</option>
</select>
<input type="submit" name="confirm_payment" value="Place Order" class="btn add-btn w-100 p-3" >
 
</form>
</div>
</body>
</html>