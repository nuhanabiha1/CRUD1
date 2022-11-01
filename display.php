<?php
include 'connect.php';
?>

<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatiable" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Crud Operation</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

    <div class="container">
        <button class="btn btn-primary my-5"><a href="index.php" class="text-light">Add data</a>
        </button>
        
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th scope="col">Quantity</th>
      <th scope="col">Price</th>
      <th scope="col">Expire_date</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>


  <?php

  $sql="Select * from product";
  $result=mysqli_query($con,$sql);
  if($result){
    while($row=mysqli_fetch_assoc($result)){
        $id=$row['id'];
        $name=$row['name'];
        $description=$row['description'];
        $quantity=$row['quantity'];
        $price=$row['price'];
        $expire_date=$row['expire_date'];

        echo '<tr>
        <th scope="row">'.$id.'</th>
        <td>'.$name.'</td>
        <td>'.$description.'</td>
        <td>'.$quantity.'</td>
        <td>'.$price.'</td>
        <td>'.$expire_date.'</td>
        <td>
        <button class="btn btn-primary"><a href="update.php?updateid='.$id.'" class="text-light">Update</a></button>
        <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light">Delete</a></button>
        </td>
      </tr>';
    }
  }
    ?>
  
  </tbody>
</table>

    </div>
  </head>
  <body>

</body>
</html>