<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<?php
include 'dbconfig.php';
$query = "SELECT * FROM PRODUCTS";
$result = mysqli_query($conn,$query);
echo '<table class="table">
<thead>
  <tr>
    <th scope="col">ID</th>
    <th scope="col">Pro Name</th>
    <th scope="col">Price</th>
    <th scope="col">Poster</th>
    <th scope="col"></th>
  </tr>
</thead>
<tbody>';
while($row = mysqli_fetch_assoc($result)){
    var_dump($row);
    echo "<tr>
    <th >".$row['ID']."</th>
    <td>".$row['PRONAME']."</td>
    <td>".$row['PRICE']."</td>
    <td><img src='".$row['IMGPATH']."' style='height:150px'></td>
    <td><a href='edit.php?id=".$row['ID']."' class='btn btn-primary btn-sm' >Edit</a>
    <a href='delete.php?id=".$row['ID']."' class='btn btn-danger btn-sm' >Delete</a>
    </td>
  </tr>";
}
echo "</tbody>
</table>";
?>
