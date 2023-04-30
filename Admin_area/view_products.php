<h2 class="text-white">All Products</h2>
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
      <th scope="col">PID</th>
      <th scope="col">Name</th>
      <th scope="col">Desc</th>
      <th scope="col">Keywords</th>
      <th scope="col">CID</th>
      <th scope="col">img</th>
      <th scope="col">Price</th>
      <th scope="col">Artist</th>
      <th scope="col">Edit</th>
      <th scope="col">delete</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $get_products="select * from `products`";
    $result_orders=mysqli_query($con,$get_products);
    while($row_orders=mysqli_fetch_assoc($result_orders)){
        $product_id=$row_orders['product_id'];
        $product_title=$row_orders['product_title'];
        $product_description=$row_orders['product_description'];
        $product_keywords=$row_orders['product_keywords'];
        $category_id=$row_orders['category_id'];
        $product_img=$row_orders['product_img'];
        $product_price=$row_orders['product_price'];
        $Artist_name=$row_orders['Artist_name'];
        echo"
        <tr>
  
      <td>$product_id</td>
      <td>$product_title</td>
      <td>$product_description</td>
      <td>$product_keywords</td>
      <td>$category_id</td>
      <td>$product_img</td>
      <td>$product_price</td>
      <td>$Artist_name</td>
      <td><a href='index.php?edit_product=$product_id' class='btn btn-outline-warning'>Edit</a></td>
      <td><a href='index.php?delete_product=$product_id' type='button' class='btn btn-outline-danger'>Delete</a></td>
      ";

      
      ?>
      <?php 
      echo" </tr>";   
    }
    
    ?>
    
  </tbody>
</table>