<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<?php 
include 'Crudbook.php';
include 'Book.php';
$db = new Crudbook();
$bk = new Book(0,"Hamdan","Rohan",256.50);
echo $db->Read();
$db->Insert($bk);

?>
