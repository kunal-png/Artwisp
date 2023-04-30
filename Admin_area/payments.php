<h2 class="text-white">All payments</h2>
<?php 

// $email=$_SESSION['email'];
// $get_products="select * from `products`";
// $result_query=mysqli_query($con,$get_products);
// $row_fetch=mysqli_fetch_assoc($result_query);
// // $user_id=$row_fetch['user_id'];
?>
<table class="table table-hover table-dark">
  <thead>
    <tr>
      <!-- <th scope="col">S.no</th> -->
      <th scope="col">payment_id</th>
      <th scope="col">order_id</th>
      <th scope="col">invoice_number</th>
      <th scope="col">amount</th>
      <th scope="col">payment_mode</th>
      <th scope="col">date</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $get_products="select * from `user_payments`";
    $result_orders=mysqli_query($con,$get_products);
    while($row_orders=mysqli_fetch_assoc($result_orders)){
        $payment_id=$row_orders['payment_id'];
        $order_id=$row_orders['order_id'];
        $amount=$row_orders['amount'];
        $invoice_number=$row_orders['invoice_number'];
        $amount=$row_orders['amount'];
        $payment_mode=$row_orders['payment_mode'];
        $date=$row_orders['date'];
        echo"
        <tr>
  
      <td>$payment_id</td>
      <td>$order_id</td>
      <td>$amount</td>
      <td>$invoice_number</td>
      <td>$payment_mode</td>
      <td>$date</td>
      ";

      
      ?>
      <?php 
      echo" </tr>";   
    }
    
    ?>
    
  </tbody>
</table>