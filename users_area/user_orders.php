<h2 class="text-white">Your Orders</h2>
<?php 

$email=$_SESSION['email'];
$get_user="select * from `user_table` where user_email='$email'";
$result_query=mysqli_query($con,$get_user);
$row_fetch=mysqli_fetch_assoc($result_query);
$user_id=$row_fetch['user_id'];
?>

<table class="table table-hover table-dark">
  <thead>
    <tr>
      <!-- <th scope="col">S.no</th> -->
      <th scope="col">Order no</th>
      <th scope="col">Amount Due</th>
      <th scope="col">Total products</th>
      <th scope="col">Invoice no</th>
      <th scope="col">Date</th>
      <th scope="col">processing</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $get_order_details="select * from `user_orders` where user_id=$user_id";
    $result_orders=mysqli_query($con,$get_order_details);
    while($row_orders=mysqli_fetch_assoc($result_orders)){
        $order_id=$row_orders['order_id'];
        $amaount_due=$row_orders['amaount_due'];
        $invoice_number=$row_orders['invoice_number'];
        $total_products=$row_orders['total_products'];
        $order_date=$row_orders['order_date'];
        $order_status=$row_orders['order_status'];
        if($order_status=='pending'){
            $order_status='Incomplete';
        }else{
            $order_status='Complete';
        }
        $num=1;
        echo"
        <tr>
  
      <td>$order_id</td>
      <td>$amaount_due</td>
      <td>$total_products</td>
      <td>$invoice_number</td>
      <td>$order_date</td>
      <td>$order_status</td>";
      ?>
      <?php 
      if($order_status=='Complete'){
        echo"
        <td>Paid</td>
        ";
      }else{
        echo"
        <td><a href='confirm_payement.php?order_id=$order_id'>Confirm</a></td>
        ";
      }
      echo" </tr>";   
    $num=$num++;
    }
    
    ?>
    
  </tbody>
</table>