<?php
include 'dbconfig.php';

?>
 <table border="1">
          <thead>
            <tr>
              <th>#</th>
              <th>Header</th>
              <th>Header</th>
              <th>Header</th>
              <th>Header</th>
              <th>Header</th>
              <th>Header</th>
              <th>Header</th>
            </tr>
          </thead>
          <tbody>
<?php
if($conn){
    $query= "SELECT * FROM mobiles";
    $result = mysqli_query($conn,$query);
    while($row =mysqli_fetch_assoc($result)){
?>
            <tr>
              <td><?php echo $row["ID"]; ?></td>
              <td><?php echo $row["pName"]; ?></td>
              <td><?php echo $row["pPrice"]; ?></td>
              <td><?php echo $row["pModel"]; ?></td>
              <td><?php echo $row["pQuantity"]; ?></td>
              <td><?php echo $row["pDesc"]; ?></td>
              <td> <img src="<?php echo $row["pImgPath"]; ?>" alt=""  height="100px"> </td>
              <td><div class="btn-group">
                <a href="edit.php?id=<?php echo $row["ID"]; ?>">Edit</a>
              </div> 

             </td>
            </tr>
           
          
        
        
        <?php
        }
        }

        ?>
        </tbody>
        </table>