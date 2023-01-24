<?php
$StudentName=["Ahmed","Kamran","Salman"];
$Math =[75,60,85];
$Eng =[70,60,50];
$Urdu =[80,50,60];
echo "<table border='1'>
<tr>
    <th>Student Name</th>
    <th>Maths</th>
    <th>English</th>
    <th>Urdu</th>
    <th>Total Marks</th>
</tr>";
for($i=0;$i<sizeof($StudentName);$i++){

    echo "<tr>
    <td>$StudentName[$i]</td>
    <td>$Math[$i]</td>
    <td>$Eng[$i]</td>
    <td>$Urdu[$i]</td>
    <td>".array_sum([$Math[$i],$Eng[$i],$Urdu[$i]])."</td>
</tr>";
}

echo "</table>";
?>




