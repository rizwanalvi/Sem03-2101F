<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<?php
$BookTile = "Java Script";
$BookPrice = 235.65;
$Author = "Aptech";
$Quantity = 10; 
$img = "<img src='img/js.jpg' height='80px' >";
echo "<table class='table'>
<tr>
<th>Book Name</th>
<th>Book Price</th>
<th>Book Quantity</th>
<th>Book Author</th>
<th>Poster</th>
<th>Status</th>
</tr>
<tr>
<td>$BookTile</td>
<td>$BookPrice</td>
<td>$Author</td>
<td>$Quantity</td>

<td>$img</td>

<td><div class='btn-group'>
<button class='btn btn-info btn-sm'>Edit</button>
<button class='btn btn-warning btn-sm'> Update</button>
<button class='btn btn-danger btn-sm'>Delete</button>

</div>
</td>
</tr>
</table>
";
?>

