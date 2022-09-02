<?php
if(isset($_POST['btnUpload'])){

    //echo $_POST['imgFile'];
    var_dump($_FILES);
    $temp = $_FILES['imgFile']['tmp_name'];
    $fileName = $_FILES['imgFile']['name'];
    echo $temp;
    move_uploaded_file($temp,'./img/'.$fileName);
}
?>

<form action="" method="post" enctype="multipart/form-data">

<input type="file" name="imgFile" id="">
<input type="submit" value="Upload" name="btnUpload">
</form>