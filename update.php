<?php
include 'connect.php'; 
$id=$_GET['updateid'];
$sql="Select * from `crud` where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$email=$row['email'];
$phone=$row['phone'];
$password=$row['password'];

if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $email=$_POST['email']; 
  $phone=$_POST['phone'];
  $password=$_POST['password'];
  $sql=" update `crud` set id=$id,name='$name',email='$email',
  phone='$phone',password='$password'
  where id=$id";
  $result=mysqli_query($con,$sql);
if($result) {
    //echo "updated succeccfully";
    header('location:display.php');
  }else{ 
    die(mysqli_error($con));
  }
}
?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <h1>CRUD OPERATION</h1>
    <div class="container my-5"> 
    <form method = "post">
    <div class="form-group">
<label>Name</label>
    <input type="text" 
    class="form-control" 
    placeholder="Enter your name"
    name="name" autocomplete="off" value=<?php echo $name;?>>
<div>
<div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control"
    placeholder="Enter your email" name="email" autocomplete="off" value=<?php echo $email?> >
</div>
<div class="form-group">
    <label>Phone</label>
    <input type="text" class="form-control"
    placeholder="Enter your phone" name="phone" autocomplete="off" value=<?php echo $phone?>>
</div>
<div class="form-group">
    <label>Password</label>
    <input type="password" class="form-control"
    placeholder="Enter your password" name="password" value=<?php echo $password?>>
</div>
      <button type="submit" class="btn btn-primary" name="submit">Update</button>
</form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>