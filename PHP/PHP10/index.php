<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous" />
<?php
if(isset($_POST['btnSave'])){
    $fName = $_FILES['imgfile']['name'];
    $tempName = $_FILES['imgfile']['tmp_name'];
    $filePath = "./img/".$fName;
    $Title = $_POST['Title'];
    $Author = $_POST['Author'];
    $Punlisher = $_POST['Punlisher'];
    $Description = $_POST['Description'];
    $Price = $_POST['Price'];
    $Quantity = $_POST['Quantity'];
    $Stock = $_POST['Stock'];
    $conn = mysqli_connect("localhost:3325","root","","bookstoredb");
    if($conn){
        move_uploaded_file($tempName,$filePath);
        $query = "INSERT INTO books(ID,TITLE,AUTHOR,PUBLISHER,DESCRIPTION,PRICE, QUANTITY,IMGPATH,INSTOCK) VALUES (null,'$Title','$Author','$Punlisher','$Description','$Price','$Quantity','$filePath','$Stock')";
        mysqli_query($conn,$query);

    }

    header("location:index.php");
}
?>
 <form action="" method="post" enctype="multipart/form-data">
<div class="row alert alert-warning    ">
    <div class="col-md-4 ">
    <div class="form-group">
    <label for="">Book Title</label>
    <input type="text" name="Title" class="form-control">
    </div>
    <div class="form-group">
    <label for="">Book Author</label>
    <input type="text" name="Author" class="form-control">
    </div>
    <div class="form-group">
    <label for="">Book Punlisher</label>
    <input type="text" name="Punlisher" class="form-control">
    </div>
    </div>
    <div class="col-md-4 ">
   
   
    <div class="form-group">
    <label for="">Book Description</label>
    <textarea name="Description" id="" cols="30" rows="10" class="form-control"></textarea>
    
    </div>
   
   


    </div>
    <div class="col-md-4">
    <div class="form-group">
    <label for="">Book Price</label>
    <input type="text" name="Price" class="form-control">
    </div>
    <div class="form-group">
    <label for="">Book Quantity</label>
    <input type="text" name="Quantity" class="form-control">
    </div>
    <div class="form-group">
    <label for="">Book Stock</label>
    <select name="Stock" id="" class="form-control">
    <option value="2">---Select---</option>
        <option value="1">In Stock</option>
        <option value="0">Out of Stock</option>
    </select>
    <input type="file" name="imgfile" class="form-control-file">
    </div>
    <div class="form-group">
        <input type="submit" name="btnSave" value="Save" class="btn btn-success">
</div>
    </div>
</div>

</form>