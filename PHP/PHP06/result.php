<?php
if(isset($_GET['btnsend'])){
    //  extract($_GET);
      $name =$_GET['txtName'];
      $age = $_GET['txtage'];
      $lstGender = $_GET['lstGender'];
      echo "<table border='1'>
      <tr>
          <th>Student Name</th>
          <th>Student Age</th>
          <th>Gender</th>
          <th></th>
      </tr>";
      //var_dump($_GET);
   
  echo "<tr>
  <td>$name</td>
  <td>$age</td>
  <td>$lstGender</td>
  <td><a href='#'>Back</a></td>
  </tr>";
  
      echo "</table>";
      
  }