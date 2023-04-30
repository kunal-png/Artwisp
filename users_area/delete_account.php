<h2 class='m-3 text-white ' >Delete account</h2>
<div class="container w-30">
    <p class="text-white m-1 mb-5 h5">Deleted Accounts cannot be recovered and all data linked to account is deleted forever</p>
    <br>
    <form action="" method="post">
<input type="submit" name="delete" value="Delete Account" class="btn btn-lg btn-outline-danger "></input>
</form>
</div>

<?php 

$email_s=$_SESSION['email'];
if(isset($_POST['delete'])){
    $delete_query="delete from `user_table` where user_email='$email_s'";
    $result=mysqli_query($con,$delete_query);
    if($result){
        session_destroy();
        echo "<script>alert('Account has been deleted')</script>";
        echo "<script>window.open('../index.php','_self')</script>";
    }
}

?>