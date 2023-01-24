
<?php
$StudentName=["Ahmed","Kamran","Salman"];
$Math =[75,0,90];
$Eng =[70,10,92];
$Urdu =[80,0,90];
echo "<table border='1'>
<tr>
    <th>Student Name</th>
    <th>Maths</th>
    <th>English</th>
    <th>Urdu</th>
    <th>Total Marks</th>
    <th>% Marks</th>
    <th>Remarks</th><th>Grades</th>
</tr>";
for($i=0;$i<sizeof($StudentName);$i++){
    $sum =array_sum([$Math[$i],$Eng[$i],$Urdu[$i]]);
    $percentage =round($sum/300*100);
    $remarks = "";
    $grade="";
    if($sum>=40){
        $remarks = "Pass";
    }
    else{
        $remarks = "Fail";
    }

    if($percentage>= 90){
            $grade = "A+";
    }
    else if($percentage>= 80){
        $grade = "A";

    }

    else if($percentage>= 70){
        $grade = "B";

    }
    else if($percentage>= 60){
        $grade = "C";

    }
    else if($percentage>= 50){
        $grade = "D";

    }
    else if($percentage>= 40){
        $grade = "E";

    }
    else {
        $grade = "F";
    }
    echo "<tr>
    <td>$StudentName[$i]</td>
    <td>$Math[$i]</td>
    <td>$Eng[$i]</td>
    <td>$Urdu[$i]</td>
    <td>".$sum."</td>
    <td>".$percentage."%</td>
    <td>".$remarks."</td>
    <td>$grade</td>
</tr>";
}

echo "</table>";
?>