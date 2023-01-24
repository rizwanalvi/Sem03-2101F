<?php
if(isset($_GET['id'])){
    $id= $_GET['id'];  
    $conn = mysqli_connect("localhost:3325","root","","bookstoredb");
  if($conn){
      $query = "DELETE FROM BOOKS WHERE ID=". $id;
      mysqli_query($conn,$query);
  }
  header("location:booklist.php");
}