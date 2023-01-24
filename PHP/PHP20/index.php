<?php
include 'header.php';

if(isset($_GET['pageid'])){
  $pg =$_GET['pageid'].".php";
  include $pg;

}
else{
  include 'dashboard.php';
}



include 'footer.php';
      ?>