<?php
session_start();
include 'dbconfig.php';
if(isset($_POST['btnRegister'])){
  $uPass = trim($_POST['uPass']);
  $uUser = trim($_POST['uUser']);
  $hash = password_hash($uPass,PASSWORD_DEFAULT);
  $query ="INSERT INTO users(ID,USERNAME,PASSWORD,STATUS) VALUES (null,'$uUser','$hash','1')";
  if($conn){
    mysqli_query($conn,$query);
  }
  
}
if(isset($_POST['btnLogin'])){
  $uPass = $_POST['uPass'];
  $uUser = $_POST['uUser'];
 
  $query ="SELECT * FROM users WHERE USERNAME = '$uUser'";
  $result = mysqli_query($conn,$query);
  while($row = mysqli_fetch_assoc($result)){
    $p =$row['PASSWORD'];
 
    if(password_verify($uPass,$p)){
        $_SESSION['name'] = $uUser;  
     header('location:index.php');
    }
    else{
      echo "Error";

    }

  }
  

}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title>Signin Template · Bootstrap v4.6</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.6/examples/sign-in/">

    

    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">



    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
<form class="form-signin" method="post">
  <img class="mb-4" src="../assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
  <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
  <label for="inputEmail" class="sr-only">Email address</label>
  <input type="email" id="inputEmail" class="form-control" name="uUser" placeholder="Email address" required autofocus>
  <label for="inputPassword" class="sr-only">Password</label>
  <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="uPass" required>
  <div class="checkbox mb-3">
    <label>
      <input type="checkbox" value="remember-me"> Remember me
    </label>
  </div>
  <button class="btn btn-lg btn-primary btn-block" type="submit" name="btnRegister">Register</button>
  <button class="btn btn-lg btn-primary btn-block" type="submit" name="btnLogin">Sign in</button>
 
  <p class="mt-5 mb-3 text-muted">&copy; 2017-2022</p>
</form>


    
  </body>
</html>
