<?php
if(isset($_GET['data'])){

 
$conn = mysqli_connect("localhost:3325","root","","aptechdb");
$data = $_GET['data'];
$sql = "SELECT * FROM STUDENTS WHERE STDNAME LIKE '".$data."%'";
$result = mysqli_query($conn,$sql);
$row1=[];
while($row = mysqli_fetch_row($result)){
    $row1[] =$row;
   
}
echo json_encode($row1);
}
else{
    echo json_encode("{'response:'NO data'}");
}
?>
