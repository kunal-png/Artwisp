<?php

if(isset($_GET['edit_account'])){
    $email=$_SESSION['email'];
    $select_query="select * from `user_table` where user_email='$email'";
    $result_query=mysqli_query($con,$select_query);
    $row_fetch=mysqli_fetch_assoc($result_query);
    $user_id=$row_fetch['user_id'];
    $username=$row_fetch['username'];
    $user_password=$row_fetch['user_password'];
    $user_address=$row_fetch['user_address'];
    $User_mobile=$row_fetch['User_mobile'];

    if(isset($_POST['user_update'])){
        $update_id=$user_id;
        $username=$_POST['username'];
        $user_email=$_POST['user_email'];
        $user_password=$_POST['user_password'];
        $user_address=$_POST['user_address'];
        $User_mobile=$_POST['User_mobile'];

        $update_data="update `user_table` set username='$username',user_email='$user_email',user_password='$user_password',user_address='$user_address',User_mobile='$User_mobile' where user_id=$update_id";
        $result_query_update=mysqli_query($con,$update_data);
        if($result_query_update){
            echo "<script>alert('Information updated')</script>";
        }
    }
}

echo"
 <h2 class='m-3 text-white text-center' >Edit Account</h2>
";
?>
<div class="container w-50 ">
<form action="" method="post" enctype="multipart/form-data" class="d-block text-center p-3 ">
<input type="text" class="form-control mb-3"  required="required" name="username" value="<?php echo $username; ?>" placeholder="Name">
<input type="email" class="form-control mb-3"  required="required" name="user_email" value="<?php echo $email; ?>" placeholder="Email">
<input type="password" class="form-control mb-3"  required="required" name="user_password" value="<?php echo $user_password; ?>" placeholder="Password">
<!-- <input  id="user_img" class="form-control mb-2" type="file" placeholder="Add your image" name="user_img" required="required"> -->
<input type="text" class="form-control mb-3"  required="required" name="user_address" value="<?php echo $user_address; ?>" placeholder="Enter your address">
<input type="number" class="form-control mb-4"  required="required" name="User_mobile" value="<?php echo $User_mobile; ?>" placeholder="Enter your mobile number">
<input type="submit" name="user_update" value="Submit" class="btn add-btn w-100 p-3" >
 
</form>
</div>

          