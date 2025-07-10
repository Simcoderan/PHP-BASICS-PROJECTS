<?php
include 'connect.php';
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

$sql= "insert into `crud`(name, email, mobile, password) values('$name', '$email', '$mobile', '$password')";
$result= mysqli_query($con, $sql);

if($result){
     echo "Data inserted successfully";

} else {
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">

    <title>Crud Operation</title>
  </head>
  <body>
    <div class="container my-5">

     <form method ="post">

  <div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control" name="name" placeholder="Enter your name" autocomplete= "off">
  </div>

  <div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control" name="email" placeholder="Enter your email" autocomplete="off">
  </div>

  <div class="form-group">
    <label>Mobile</label>
    <input type="tel" class="form-control" name="mobile" placeholder="Enter your mobile number" autocomplete="off">
  </div>

  <div class="form-group">
    <label>Password</label>
    <input type="password" class="form-control" name="password" placeholder="Enter your password" autocomplete="off">
  </div>

  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>


</div>
 


  </body>
</html>