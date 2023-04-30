<h2 class="text-white">All Orders</h2>
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
      <th scope="col">order_id</th>
      <th scope="col">user_id</th>
      <th scope="col">Amount</th>
      <th scope="col">Invoice no.</th>
      <th scope="col">Total products</th>
      <th scope="col">Date</th>
      <th scope="col">status</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $get_products="select * from `user_orders`";
    $result_orders=mysqli_query($con,$get_products);
    while($row_orders=mysqli_fetch_assoc($result_orders)){
        $order_id=$row_orders['order_id'];
        $user_id=$row_orders['user_id'];
        $amaount_due=$row_orders['amaount_due'];
        $invoice_number=$row_orders['invoice_number'];
        $total_products=$row_orders['total_products'];
        $order_date=$row_orders['order_date'];
        $order_status=$row_orders['order_status'];
        echo"
        <tr>
  
      <td>$order_id</td>
      <td>$user_id</td>
      <td>$amaount_due</td>
      <td>$invoice_number</td>
      <td>$total_products</td>
      <td>$order_date</td>
      <td>$order_status</td>
      ";

      
      ?>
      <?php 
      echo" </tr>";   
    }
    
    ?>
    
  </tbody>
</table>