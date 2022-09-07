<?php
if(isset($_POST['btnSave'])){
    $fileType=['jpg','png'];
   // var_dump($_FILES);
    echo "<br/>";
    echo "File Name".$_FILES['imgUpload']['name'];
    echo "<br/>";
    echo "File Type".$_FILES['imgUpload']['type'];
    echo "<br/>";
    echo "File Size".$_FILES['imgUpload']['size'];
    echo "<br/>";
    echo "File Size in MB".round($_FILES['imgUpload']['size']/1024);
    echo "<br/>";
    echo "Temp Server Location".$_FILES['imgUpload']['tmp_name']; 
    echo "<br/>";
    $fileExt = explode('.',$_FILES['imgUpload']['name']);
      $tmp_loc =$_FILES['imgUpload']['tmp_name'];
      $fileName = $_FILES['imgUpload']['name'];
 if(in_array($fileExt[1],$fileType)){

    echo  "Uploaded";
    $imgPath = './img/'.$fileName;
    move_uploaded_file($tmp_loc,$imgPath);
 }
 else{
    echo "Invalid Type";
 }
}
?>
<form action="" method="post" enctype="multipart/form-data">
<input type="file" name="imgUpload">
<input type="submit" value="Upload" name="btnSave">
</form>

