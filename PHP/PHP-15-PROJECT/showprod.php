<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<div class="table-responsive">
        <table class="table table-striped table-sm">
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
                <a href="index.php?id=<?php echo $row["ID"]; ?>" class="btn btn-warning btn-sm">Edit</a>
              </div> 

             </td>
            </tr>
           
          
        
        
        <?php
        }
        }

        ?>
        </tbody>
        </table>