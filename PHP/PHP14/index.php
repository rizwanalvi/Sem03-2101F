<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<?php
session_start();
include 'config.php';
if(isset($_POST['btnRegister'])){
    if($conn){
        $txtName = trim($_POST['txtName']);
        $txtPass = trim($_POST['txtPass']);
        $hash = password_hash($txtPass,PASSWORD_DEFAULT);
        $query ="INSERT INTO USERS(ID,USERNAME,PASSWORD,STATUS) VALUES(NULL,'$txtName','$hash',0)";
        mysqli_query($conn,$query);
    }

}
if(isset($_POST['btnLogin'])){
    if($conn){
        $txtName = trim($_POST['txtName']);
        $txtPass = trim($_POST['txtPass']);
        $query ="SELECT * FROM users WHERE USERNAME = '$txtName'";
        $result =  mysqli_query($conn,$query);
        while($row = mysqli_fetch_assoc($result)){
                    echo $row["PASSWORD"];
                    if(password_verify($txtPass,$row["PASSWORD"])){
                        echo "<script>alert('ok');</script>";
                        $_SESSION['UserName'] = $txtName;
                        header('location:dashboard.php');
                    }
                    else{
                        echo "<script>alert('Invalid');</script>";

                    }
        }
    }
}


?>

<form action="" method="post">
    <div class="form-group">
        <label for="">User Name</label>
        <input name="txtName" type="text" class="form-control">
    </div>
    <div class="form-group">
        <label for="">Password</label>
        <input name="txtPass" type="password" class="form-control">
    </div>
    <div class="btn-group">
    <input name="btnRegister" type="submit" value="Register" class="btn btn-success">
    <input name="btnLogin" type="submit" value="Login" class="btn btn-warning">
    
</div>

</form>