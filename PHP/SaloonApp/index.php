<?php
include './config/dbconn.php';
session_start();
if($conn !=null){
    echo "Ok";
}
if(isset($_POST['btnRegister'])){
    extract($_POST);
    $sql1 = "INSERT INTO USERS (USRNAME,PASS,ROLEID) VALUES('$username','$pass',1)";
    $resultset = mysqli_query($conn,$sql1);
    unset($_POST['btnRegister']);
    header("location:index.php");

}
if(isset($_POST['btnLogin']))
{
        extract($_POST);
        $sql = "SELECT * FROM USERS WHERE USRNAME = '$username' AND PASS = '$pass'";
        $resultset = mysqli_query($conn,$sql);
      //var_dump($resultset);
      $row = mysqli_fetch_assoc($resultset);
      $_SESSION['uXiD']  =$row;
      switch ($row['ROLEID']) {
        case '1':
            # code...
            header("location:./admin.php");
            break;
        case '2':
            //user role
            # code...
            header("location:./userdashboard.php");
            break;
        case '3':
                # code...
                break;
        
        default:
            # code...
            break;
      }
       
        var_dump();
             
}
?>
<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
    <form action="" method="post">
    <div  class="form-group">
        <label for="">User Name</label>
    <input type="text" name="username" class="form-control">
    </div>
    <div  class="form-group">
        <label for="">Password</label>
    <input type="password" name="pass" class="form-control">
    </div>
    <div  class="form-group">
       <div class="btn-group">
       <input type="submit" name="btnLogin" value="Login" class="btn btn-success">  <input type="submit" name="btnRegister" value="Register" class="btn btn-primary">
       </div>
      
    </div>

    


</form>

    </div>
    <div class="col-md-4"></div>
</div>
