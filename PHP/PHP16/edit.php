<?php
if(isset($_GET['id'])){
    $conn = mysqli_connect("localhost:3325","root","","shopdb");
    $query= "SELECT * FROM mobiles where ID=".$_GET['id'] ;
    $result = mysqli_query($conn,$query);
    $row = mysqli_fetch_assoc($result);
    var_dump($row);

    echo '<form action="" method="post">
    <input type="hidden" value="'.$row['ID'].'">
    <input type="text" value="'.$row['pName'].'">
    <input type="text" value="'.$row['pModel'].'">

    <input type="text" value="'.$row['pPrice'].'">

    <input type="submit" value="update">    
    </form>';
}
?>

