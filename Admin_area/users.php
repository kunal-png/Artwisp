<h2 class="text-white">All Users</h2>
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
      <th scope="col">user_id</th>
      <th scope="col">username</th>
      <th scope="col">user_email</th>
      <th scope="col">user_password</th>
      <th scope="col">user_ip</th>
      <th scope="col">user_address</th>
      <th scope="col">User_mobile</th>
      <th scope="col">Delete_user</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $get_products="select * from `user_table`";
    $result_orders=mysqli_query($con,$get_products);
    while($row_orders=mysqli_fetch_assoc($result_orders)){
        $user_id=$row_orders['user_id'];
        $username=$row_orders['username'];
        $user_email=$row_orders['user_email'];
        $user_password=$row_orders['user_password'];
        $user_ip=$row_orders['user_ip'];
        $user_address=$row_orders['user_address'];
        $User_mobile=$row_orders['User_mobile'];
        echo"
        <tr>
  
      <td>$user_id</td>
      <td>$username</td>
      <td>$user_email</td>
      <td>$user_password</td>
      <td>$user_ip</td>
      <td>$user_address</td>
      <td>$User_mobile</td>
      <td><a href='index.php?delete_user=$user_id' type='button' class='btn btn-outline-danger'>Delete</a</td>
      ";

      
      ?>
      <?php 
      echo" </tr>";   
    }
    
    ?>
    
  </tbody>
</table>