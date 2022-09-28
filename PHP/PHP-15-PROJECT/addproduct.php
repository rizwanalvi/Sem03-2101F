<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<?php
if(isset($_POST['btnSave'])){
    var_dump($_POST);
$pName = $_POST['pName'];
$pModel  = $_POST['pModel'];
$pPrice  = $_POST['pPrice'];
$pQuantity  = $_POST['pQuantity'];
//$pImgPath     = $_POST['pImgPath'];
$pDesc  = $_POST['pDesc'];
$name = $_FILES['pImgPath']['name'];
$name_tmp = $_FILES['pImgPath']['tmp_name'];
$upload_path = "./assets/img/".$name;
move_uploaded_file($name_tmp,$upload_path);
echo $name_tmp;
if($conn){
    $query ="INSERT INTO mobiles(ID,pName,pModel,pPrice,pQuantity,pDesc,pImgPath,InStock) VALUES (null,'$pName','$pModel','$pPrice','$pQuantity','$pDesc','$upload_path','1')";
   mysqli_query($conn,$query);
}
}

?>
<form action="" method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="col-md-4">
        <div class="form-group">
            <label for="exampleInputEmail1">Product Name</label>
            <input type="text" class="form-control" name="pName">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Product Model</label>
            <input type="text" class="form-control" name="pModel">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Product Price</label>
            <input type="text" class="form-control" name="pPrice">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Product Quantity</label>
            <input type="number" class="form-control" name="pQuantity">
        </div>
        <div class="form-group">
        <button type="submit" class="btn btn-success" name="btnSave">Save</button>    
    </div>
        </div>
        <div class="col-md-4">
        <div class="form-group">
            <label for="exampleInputEmail1">Description</label>
            <textarea  id="" cols="30" rows="11" class="form-control" name="pDesc"></textarea>
           
        </div>
        </div>
        <div class="col-md-4">
        <div class="form-group">
            <img src="./assets/img/avatar.jpg" alt="" class="img-thumbnail" name="pImg" id="previewImg">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Upload Picture</label>
            <input type="file" class="form-control-file" name="pImgPath" onchange="previewFile(this);">
        </div>
        </div>
    </div>

</form>

<script>
    function previewFile(input){
        var file = $("input[type=file]").get(0).files[0];
 
        if(file){
            var reader = new FileReader();
 
            reader.onload = function(){
                $("#previewImg").attr("src", reader.result);
            }
 
            reader.readAsDataURL(file);
        }
    }
</script>