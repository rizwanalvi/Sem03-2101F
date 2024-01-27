<?php
session_start();
extract($_SESSION['uXiD']);
echo $ROLEID;

if($ROLEID != 1){
    header("location:index.php");
}
if(isset($_POST['btnsingout'])){

    session_destroy();
    header("location:index.php");
}

?>

<form action="" method="post">
    <input type="submit" name="btnsingout" value="Logout">
</form>