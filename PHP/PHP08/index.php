<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<?php
   $conn = mysqli_connect("localhost:3325","root","","apdb");
if(isset($_GET['btnSave'])){
    $StudentName = $_GET['StudentName'];
    $StudentBatch = $_GET['StudentBatch'];
    $FeeStatus = $_GET['FeeStatus'];
 
   
    if($conn){
        $query = "INSERT INTO STUDENT(ID,STDNAME,BATCHID,FEESTATUS) VALUES(NULL,'$StudentName','$StudentBatch',$FeeStatus)";
        mysqli_query($conn,$query);
        header("location:index.php");
       
    }
    else{

        
    }

}
?>

<div class="row">
<div class="col-md-4"></div>
<div class="col-md-4">
<form action="" method="get">
    <div class="form-group">
        <label for="">Student Name</label>
    <input type="text" name="StudentName" class='form-control'>
    </div>
    <div class="form-group">
    <label for="">Student Batch</label>
    <input type="text" name="StudentBatch" class='form-control'>
</div>
<div class="form-group">
<label for="">Fee Status</label>
    <select name="FeeStatus" id="" class='form-control'>
        <option value="1">Paid</option>
        <option value="0">Pending</option>
    </select>
</div>
    <input type="submit" name="btnSave" value="Save" class="btn btn-success" >

</form>
</div>
<div class="col-md-4"></div>

</div>
<?php
    if($conn){
        $query ="SELECT * FROM STUDENT";
       $result = mysqli_query($conn,$query);
       echo '<table class="table">
       <thead class="thead-dark">
         <tr>
           <th scope="col">Student ID</th>
           <th scope="col">Name</th>
           <th scope="col">Batch ID</th>
           <th scope="col">Fee Status</th>
           <th scope="col"></th>
         </tr>
       </thead>
       <tbody>';
      
      while($row = mysqli_fetch_assoc($result)){
        $status="";
        if($row['FEESTATUS'] ==1){
                $status = "Paid";

        }
        else{

            $status = "Pending";
        }
        echo "<tr>
        <th >".$row['ID']."</th>
        <td>".$row['STDNAME']."</td>
        <td>".$row['BATCHID']."</td>
        <td>".$status."</td>
        <td>   <div class='btn btn-group'>
        <a href='#' class='btn btn-success btn-sm'>Edit</a>
        <a href='#' class='btn btn-warning btn-sm'>Update</a>
        <a href='#' class='btn btn-danger btn-sm'>Delete</a>
       
       </div></td>
      </tr>";
           
            
      }
      echo "    </tbody>
      </table>";
     
    }
?>


