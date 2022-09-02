<?php
include 'dbconfig.php';
if(isset($_POST['btnSave'])){
    $proName = $_POST['proName'];
    $proPrice = $_POST['proPrice'];
    $imgFile = $_POST['imgFile'];
    $imgPath = "./img/".$imgFile;
    $query = "INSERT INTO PRODUCTS(ID,PRONAME,PRICE,IMGPATH) VALUES (NULL,'$proName','$proPrice','$imgPath')";
    mysqli_query($conn,$query);
}
?>

