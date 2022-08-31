<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous" />

<?php

if(isset($_POST['btnSave'])){
    $Title = $_POST['Title'];
    $Author = $_POST['Author'];
    $Punlisher = $_POST['Punlisher'];
    $Description = $_POST['Description'];
    $Price = $_POST['Price'];
    $Quantity = $_POST['Quantity'];
    $ID = $_POST['ID'];
    $conn = mysqli_connect("localhost:3325","root","","bookstoredb");
    if($conn){
        $query = "UPDATE books SET TITLE=' $Title',AUTHOR='$Author',PUBLISHER='$Punlisher',DESCRIPTION='$Description',PRICE='$Price',QUANTITY='$Quantity' WHERE ID = ". $ID;
        mysqli_query($conn,$query);

    }
    header("location:booklist.php");
}
//SELECT * FROM books WHERE ID = 1
if(isset($_GET['id'])){
    $id= $_GET['id'];  
    $conn = mysqli_connect("localhost:3325","root","","bookstoredb");
  if($conn){
      $query = "SELECT * FROM books WHERE ID = ". $id;
      $result = mysqli_query($conn,$query);
      $row = mysqli_fetch_assoc($result);

//UPDATE books SET TITLE='[value-2]',AUTHOR='[value-3]',PUBLISHER='[value-4]',DESCRIPTION='[value-5]',PRICE='[value-6]',QUANTITY='[value-7]' WHERE ID = 1
    echo '<div class="row">
    <div class="col-md-4 ">

    </div>
    <div class="col-md-4 alert alert-warning    ">
    <form action="" method="post">
    <div class="form-group">
    <input type="hidden" name="ID" class="form-control" value ='.$row['ID'].' >
    <label for="">Book Title</label>
    <input type="text" name="Title" class="form-control" value ='.$row['TITLE'].' >
    </div>
    <div class="form-group">
    <label for="">Book Author</label>
    <input type="text" name="Author" class="form-control" value ='.$row['AUTHOR'].'>
    </div>
    <div class="form-group">
    <label for="">Book Punlisher</label>
    <input type="text" name="Punlisher" class="form-control" value ='.$row['PUBLISHER'].'>
    </div>
    <div class="form-group">
    <label for="">Book Description</label>
    <textarea name="Description" id="" cols="30" rows="10" class="form-control">'.$row['DESCRIPTION'].'</textarea>
    
    </div>
    <div class="form-group">
    <label for="">Book Price</label>
    <input type="text" name="Price" class="form-control" value ='.$row['PRICE'].'>
    </div>
    <div class="form-group">
    <label for="">Book Quantity</label>
    <input type="text" name="Quantity" class="form-control" value ='.$row['QUANTITY'].'>
    </div>
   
    <div class="form-group">
        <input type="submit" name="btnSave" value="Update" class="btn btn-success">
        <a href="booklist.php" class="btn btn-primary btn-sm">Back</a>
</div>
</form>

    </div>
    <div class="col-md-4"></div>
</div>';
}
}

