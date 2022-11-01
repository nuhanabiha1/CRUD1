<?php
include 'connect.php';
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $description=$_POST['description'];
    $quantity=$_POST['quantity'];
    $price=$_POST['price'];
    $expire_date=$_POST['expire_date'];

    $sql="insert into product(name, quantity, description, price, expire_date)
    values('$name', '$description', '$quantity', '$price', '$expire_date')";
    $result=mysqli_query($con,$sql);
    if($result){
        header('location:display.php');
        }
    else{
        die(mysqli_error($con));
    }
}

?>

<!doctype html>
<html lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

    <title>Crud Operation</title>
  </head>
  <body>
    <div class="container my-5">
    <form method="post">
  <div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control" name="name" autocomplete="off">
  </div>

  
  <div class="form-group">
    <label>Description</label>
    <input type="text" class="form-control" name="description" autocomplete="off">
  </div>

  
  <div class="form-group">
    <label>Quantity</label>
    <input type="text" class="form-control" name="quantity" autocomplete="off">
  </div>

  
  <div class="form-group">
    <label>Price</label>
    <input type="text" class="form-control" name="price" autocomplete="off">
  </div>

  
  <div class="form-group">
    <label>Expire_date</label>
    <input type="date" class="form-control" name="expire_date" autocomplete="off">
  </div>

  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
    </div>
  
  </body>
</html>