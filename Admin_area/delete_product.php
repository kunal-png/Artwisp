<h2 class='m-3 text-white ' >Delete product</h2>
<div class="container w-30">
    <p class="text-white m-1 mb-5 h5">Deleted products cannot be recovered and all data linked to products is deleted forever</p>
    <br>
    <form action="" method="post">
<input type="submit" name="delete" value="Delete Product" class="btn btn-lg btn-outline-danger "></input>
</form>
</div>

<?php 

$product_id=$_GET['delete_product'];
if(isset($_POST['delete'])){
    $delete_query="delete from `products` where product_id='$product_id'";
    $result=mysqli_query($con,$delete_query);
    if($result){
        echo "<script>alert('Product has been deleted')</script>";
        echo "<script>window.open('index.php?view_products','_self')</script>";
    }
}

?>