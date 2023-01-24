

<form action="result.php" method="get">
    <label for="txtName">Enter Your Name</label>
    <input type="text" name="txtName">
    <br/>
    <label for="txtName">Enter Your Age</label>
    <input type="text" name="txtage">
    <br/>
    <label for="txtName">Select Gender</label>
   <select name="lstGender" id="">
    <option value="Male">Male</option>
    <option value="Female">Female</option>
   </select>
    <br/>
    <input type="submit" value="send" name="btnsend">
</form>
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
    </tr>";
    //var_dump($_GET);
 
echo "<tr>
<td>$name</td>
<td>$age</td>
<td>$lstGender</td>
<td><a href='#'>back</a></td>
</tr>";

    echo "</table>";
    
}
?>

