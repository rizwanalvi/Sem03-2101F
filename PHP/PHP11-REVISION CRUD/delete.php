<?php
include 'dbconfig.php';
if(isset($_GET['id'])){
    $id =$_GET['id'];
    
    $query = "DELETE FROM PRODUCTS WHERE ID =".$id;
  mysqli_query($conn,$query);
  header("location:show.php");
}