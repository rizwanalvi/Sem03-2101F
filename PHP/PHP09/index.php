<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous" />
<?php
if(isset($_POST['btnSave'])){
    $Title = $_POST['Title'];
    $Author = $_POST['Author'];
    $Punlisher = $_POST['Punlisher'];
    $Description = $_POST['Description'];
    $Price = $_POST['Price'];
    $Quantity = $_POST['Quantity'];
    $Stock = $_POST['Stock'];
    $conn = mysqli_connect("localhost:3325","root","","bookstoredb");
    if($conn){
        $query = "INSERT INTO books(ID,TITLE,AUTHOR,PUBLISHER,DESCRIPTION,PRICE, QUANTITY,INSTOCK) VALUES (null,'$Title','$Author','$Punlisher','$Description','$Price','$Quantity','$Stock')";
        mysqli_query($conn,$query);

    }

    header("location:index.php");
}
?>
<div class="row">
    <div class="col-md-4 ">

    </div>
    <div class="col-md-4 alert alert-warning    ">
    <form action="" method="post">
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
    <div class="form-group">
    <label for="">Book Description</label>
    <textarea name="Description" id="" cols="30" rows="10" class="form-control"></textarea>
    
    </div>
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
  
    </div>
    <div class="form-group">
        <input type="submit" name="btnSave" value="Save" class="btn btn-success">
</div>
</form>

    </div>
    <div class="col-md-4"></div>
</div>

