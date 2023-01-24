<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<?php
  $conn = mysqli_connect("localhost:3325","root","","bookstoredb");
  if($conn){
      $query = "SELECT * FRoM books";
      $result = mysqli_query($conn,$query);
      $remarks = "";
     
     
      echo '<table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">TITLE</th>
          <th scope="col">AUTHOR</th>
          <th scope="col">PUBLISHER</th>
          <th scope="col">DESCRIPTION</th>
          <th scope="col">PRICE</th>
          <th scope="col">QUANTITY</th>
          <th scope="col">INSTOCK</th>
        </tr>
      </thead>
      <tbody>';
      while($row = mysqli_fetch_assoc($result)){
        if($row['INSTOCK'] > 0){

            $remarks = "In Stock";
          }
          else{
    
            $remarks = "Out of Stock";
          }
          echo  "<tr>
          <td >".$row['ID']."</td>
          <td >".$row['TITLE']."</td>
          <td >".$row['AUTHOR']."</td>
          <td >".$row['PUBLISHER']."</td>
          <td >".$row['DESCRIPTION']."</td>
          <td >".$row['PRICE']."</td>
          <td >".$row['QUANTITY']."</td>
          <td >".$remarks."</td>
        </tr>";

      }

      echo "</tbody></table>";

  }


?>


  
   