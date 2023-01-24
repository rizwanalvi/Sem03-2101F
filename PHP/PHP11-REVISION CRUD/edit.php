<?php
include 'dbconfig.php';
if(isset($_GET['id'])){
    $id =$_GET['id'];
    
    $query = "SELECT * FROM PRODUCTS WHERE ID =".$id;
  $result =  mysqli_query($conn,$query);
  $row = mysqli_fetch_assoc($result);
  var_dump($row);
    echo '<form action="" method="post">
    <input type="hidden" name="id" value="'.$row['ID'].'">
    <input type="text" name="proName" value="'.$row['PRONAME'].'">
    <input type="text" name="proPrice" value="'.$row['PRICE'].'">
    <input type="file" name ="imgFile" value="'.$row['IMGPATH'].'">
    <input type="submit" value="Update" name="btnUpdate">
    
    </form>';
}

if(isset($_POST['btnUpdate'])){
    $id =$_POST['id'];
    $proName = $_POST['proName'];
    $proPrice = $_POST['proPrice'];
    $imgFile = $_POST['imgFile'];
    $imgPath = "./img/".$imgFile;
    $query  = "";
    if( $imgFile !=null)
   {
    $query = "UPDATE products SET PRONAME='$proName',PRICE='$proPrice',IMGPATH=' $imgPath' WHERE ID= ".$id;

   }
   else{
    $query = "UPDATE products SET PRONAME='$proName',PRICE='$proPrice' WHERE ID= ".$id;
   }
    mysqli_query($conn,$query);
header('location:show.php');

}
?>
