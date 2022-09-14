<?php
session_start();
if(!isset( $_SESSION['userName'])){
    header('location:index.php');

}
if(isset($_POST['btnSignout'])){
    session_destroy();
    header('location:index.php');
}
?>
<form action="" method="post">

<input type="submit" value="Signout" name="btnSignout">
</form>
