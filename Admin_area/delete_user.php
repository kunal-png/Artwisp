<h2 class='m-3 text-white ' >Delete User</h2>
<div class="container w-30">
    <p class="text-white m-1 mb-5 h5">Deleted users cannot be recovered and all data linked to user is deleted forever</p>
    <br>
    <form action="" method="post">
<input type="submit" name="delete" value="Delete user" class="btn btn-lg btn-outline-danger "></input>
</form>
</div>

<?php 

$user_id=$_GET['delete_user'];
if(isset($_POST['delete'])){
    $delete_query="delete from `user_table` where user_id=$user_id";
    $result=mysqli_query($con,$delete_query);
    if($result){
        echo "<script>alert('user has been deleted')</script>";
        echo "<script>window.open('index.php?users','_self')</script>";
    }
}

?>