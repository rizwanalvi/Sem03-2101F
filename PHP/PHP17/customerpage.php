<?php
session_start();
if((isset($_SESSION['uname']))){
    switch($_SESSION['role']){
        case 0:
            header("location:adminpage.php");
            break;
        case 1:
            
            break;
            
    }

}
else{

   header("location:index.php");
}

?>
<h1>Customer Page</h1>

<a href="./singout.php">Signout</a>