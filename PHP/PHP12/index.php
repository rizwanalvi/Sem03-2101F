<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<?php
$conn = mysqli_connect("localhost:3325","root","","bookstoredb");
if(isset($_POST['btnRegister'])){

        $usrname = trim($_POST['txtUname']);
        $hashPassword = password_hash(trim($_POST['txtPassword']),PASSWORD_DEFAULT);
          
            $query = "INSERT INTO users(ID,USERNAME,PASSWORD) VALUES (null,'$usrname','$hashPassword')";
            mysqli_query($conn,$query);

}
if(isset($_POST['btnLogin'])){
    $usrname = trim($_POST['txtUname']);
    $Password  =trim($_POST['txtPassword']);
    $query  = "SELECT * FROM USERS WHERE USERNAME = '$usrname'";    
    $result =mysqli_query($conn,$query);
    while($row =  mysqli_fetch_assoc($result)){
           // var_dump($row);
           $Hashpass = $row['PASSWORD'];
           if(password_verify($Password,$Hashpass)){
                echo "Isvalid";
           }
           else{
            echo "In valid";

           }
         
           
       

    }

}
?>

<div class="row">
   
    <div class="col-md-4"></div>
    <div class="col-md-4 jumbotron alert-success">
    <form action="" method="post">    
    <div class="form-group">

            <input type="text" class="form-control" name="txtUname">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="txtPassword">
        </div>
        <div class="btn-group">    
        <input type="submit" value="Register" name="btnRegister" class="btn btn-success">
        <input type="submit" value="Login" name="btnLogin" class="btn btn-info">
        </div>
        </form>
    </div>
    <div class="col-md-4"></div>
</div>