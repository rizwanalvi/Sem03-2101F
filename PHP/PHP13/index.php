<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<?php
session_start();
// echo session_id();
// $_SESSION['username'] = password_hash('admin@gmail.com',PASSWORD_DEFAULT);
// unset($_SESSION['username']);
// session_destroy();
if(isset($_POST['btnSave'])){
   $userName = $_POST['userName'];
   $pasword = $_POST['pasword'];
    if($userName == 'admin' && $pasword =='admin'){
        $_SESSION['userName'] = $userName;
        header('location:dashboard.php');
    }
    else{
        echo "Invalid User and Password";    
    }
}

?>
<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <form action="" method="post">
            <div class="form-group">
                <input type="text" class="form-control" name ="userName">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="pasword">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-success" value="Login" name="btnSave">
            </div>
        </form>
    </div>
    <div class="col-md-4"></div>
</div>
