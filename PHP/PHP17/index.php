<?php
session_start();
$conn = mysqli_connect("localhost:3325","root","","eshop");
if(isset($_POST['btnRegister'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $hash = password_hash($password,PASSWORD_DEFAULT);
    $query = "INSERT INTO users(ID,USERNAME,PASSWORD,ROLE) VALUES (null,'$username','$hash','1')";
    mysqli_query($conn,$query);
}
if(isset($_POST['btnLogin'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = "SELECT * FROM users WHERE USERNAME = '$username'";
    $result = mysqli_query($conn,$query);
    $row = mysqli_fetch_assoc($result);
    if(password_verify($password,$row['PASSWORD'])){
        switch($row['ROLE']){
            case 0:
                $_SESSION['uname'] = $row['USERNAME'];
                $_SESSION['role'] = $row['ROLE'];
             header('location:adminpage.php');   
            break;
            case 1:
                $_SESSION['uname'] = $row['USERNAME'];
                $_SESSION['role'] = $row['ROLE'];
             header('location:customerpage.php');   
            break;
    
    
        }

    }
    else{

        echo "Invalid";
    }
   

}
?>

<form action="" method="post">
    <label for="">UserName</label>
    <input type="text" name="username">
    <label for="">Password</label>
    <input type="password" name="password">
    <input type="submit" value="Register" name="btnRegister">
    <input type="submit" value="Login" name="btnLogin">

</form>