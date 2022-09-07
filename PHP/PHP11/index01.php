<?php
if(isset($_POST['btnUpload'])){
   $tempName = $_FILES['img']['tmp_name'];
   $Name = $_FILES['img']['name'];
   $size = $_FILES['img']['size'];
   $type =$_FILES['img']['type'];
   $dirLocation = './img/'.$Name;
   move_uploaded_file($tempName,$dirLocation);

}

?>

<form action="" method="post" enctype="multipart/form-data">
   <input type="file" name="img" >
   <input type="submit" value='Upload' name="btnUpload" >
</form>

