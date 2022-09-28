<?php
session_start();
if((isset($_SESSION['uname']))){
    switch($_SESSION['role']){
        case 0:
        break;
        case 1:
            header("location:customerpage.php");
            break;
            
    }

}
else{

   header("location:index.php");
}

?>
<h1>Admin Page</h1>

<a href="./singout.php">Signout</a>