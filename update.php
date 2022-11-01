<?php
include 'connect.php';
$id=$_GET['updateid'];
$sql="Select * from product where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$description=$row['description'];
$quantity=$row['quantity'];
$price=$row['price'];
$expire_date=$row['expire_date'];

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $description=$_POST['description'];
    $quantity=$_POST['quantity'];
    $price=$_POST['price'];
    $expire_date=$_POST['expire_date'];

    $sql="update product set id=$id, name='$name', description='$description', quantity='$quantity',
    price='$price', expire_date='$expire_date'  where id=$id"; 
    $result=mysqli_query($con,$sql);
    if($result){
        //echo "Updated successfully";
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
    <input type="text" class="form-control" name="name" autocomplete="off"
    value=<?php echo $name;?>>
  </div>

  
  <div class="form-group">
    <label>Description</label>
    <input type="text" class="form-control" name="description" autocomplete="off"
    value=<?php echo $description;?>>
  </div>

  
  <div class="form-group">
    <label>Quantity</label>
    <input type="text" class="form-control" name="quantity" autocomplete="off"
    value=<?php echo $quantity;?>>
  </div>

  
  <div class="form-group">
    <label>Price</label>
    <input type="text" class="form-control" name="price" autocomplete="off"
    value=<?php echo $price;?>>
  </div>

  
  <div class="form-group">
    <label>Expire_date</label>
    <input type="date" class="form-control" name="expire_date" autocomplete="off"
    value=<?php echo $expire_date;?>>
  </div>

  <button type="submit" class="btn btn-primary" name="submit">Update</button>
</form>
    </div>
  
  </body>
</html>