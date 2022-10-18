<?php
echo "ok";
// $conn = mysqli_connect("localhost:3325","root","","bookstoredb");
// $resultset = mysqli_query($conn,"SELECT * FROM BOOKS");

$id =8;


function UpdateData(){

    $title = "Rohan Biblography";
$AUTHOR = "Hamdan";

$mysqli = new mysqli("localhost:3325","root","","bookstoredb");
$stm = $mysqli->prepare("UPDATE books SET TITLE = ?, AUTHOR =? WHERE ID = ?");
$stm->bind_param("ssi",$title,$AUTHOR,$id);
$stm->execute();

}

function DeleteData(){
    $id =10;
$title = "";
$AUTHOR = "";

$mysqli = new mysqli("localhost:3325","root","","bookstoredb");
$stm = $mysqli->prepare("DELETE FROM books WHERE ID = ?");
$stm->bind_param("i",$id);
$stm->execute();

}
function InsetData(){

    $id =8;
$title = "";
$AUTHOR = "";

$mysqli = new mysqli("localhost:3325","root","","bookstoredb");
$stm = $mysqli->prepare("INSERT INTO books(TITLE,AUTHOR) VALUES (?,?)");
$stm->bind_param("ss",$title,$AUTHOR);
$stm->execute();

}
function SelectTest(){

    $id =8;
$mysqli = new mysqli("localhost:3325","root","","bookstoredb");
$stm = $mysqli->prepare("SELECT * FROM BOOKS WHERE ID = ?");
$stm->bind_param("i",$id);
 $stm->execute();
 $result = $stm->get_result();
//  /var_dump($result);
echo $result->num_rows;
for($i=0;$i<$result->num_rows;$i++){
    var_dump($result->fetch_assoc());
}
}