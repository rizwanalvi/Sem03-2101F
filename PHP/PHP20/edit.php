<?php
include 'header.php';
include 'Crudbook.php';
include 'Book.php';
$curdbk = new Crudbook();

$id =$_GET['id'];
$result = $curdbk->ReadById($id);
$row = $result->fetch_assoc();
$title = $row['TITLE'];
$author = $row['AUTHOR'];
$price = $row['PRICE'];
if(isset($_POST['btnUpdate'])){
$bk = new Book($_POST['txtId'],$_POST['txtTitle'],$_POST['txtAuthor'],$_POST['txtPrice']);
$curdbk->Update($bk);

}
?>
<div class="jumbotron">
    <form action="" method="post">
        <input type="text" name="txtId" value= '<?php echo $id ?>'>
    <div class="col-md-6">
        <div class="form-group">
            <label for="">BOOK TITLE</label>
            <input type="text" class="form-control" name='txtTitle' value='<?php echo $title ?>'>
        </div>
    </div>
    <div class="col-md-6">
    <div class="form-group">
    <label for="">BOOK AUTHOR</label>
            <input type="text" class="form-control"  name="txtAuthor" value='<?php echo $author ?>'>
        </div>
    </div>
    <div class="col-md-6">
    <div class="form-group">
    <label for="">BOOK PRICE</label>
            <input type="text" class="form-control"  name="txtPrice" value='<?php echo $price ?>'>
        </div>
    </div>
    <div class="form-group">
    <input type="submit" class='btn btn-success' value='Update' name ='btnUpdate'>     
</div>
    </form>
    </div>

<?php
include 'footer.php';
?>