
<?php
$StudentName=["Ahmed","Kamran","Salman"];
$Math =[75,0,85];
$Eng =[70,10,50];
$Urdu =[80,0,60];
echo "<table border='1'>
<tr>
    <th>Student Name</th>
    <th>Maths</th>
    <th>English</th>
    <th>Urdu</th>
    <th>Total Marks</th>
    <th>% Marks</th>
    <th>Remarks</th>
</tr>";
for($i=0;$i<sizeof($StudentName);$i++){
    $sum =array_sum([$Math[$i],$Eng[$i],$Urdu[$i]]);
    $percentage =$sum/300*100;
    $remarks = "";
    if($sum>=40){
        $remarks = "Pass";
    }
    else{
        $remarks = "Fail";
    }
    echo "<tr>
    <td>$StudentName[$i]</td>
    <td>$Math[$i]</td>
    <td>$Eng[$i]</td>
    <td>$Urdu[$i]</td>
    <td>".$sum."</td>
    <td>".$percentage."%</td>
    <td>".$remarks."</td>
</tr>";
}

echo "</table>";
?>