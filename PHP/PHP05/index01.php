<?php
//id=>[name,maths,english,urdu,islamiat,pakstudies]
$Students =[
    "1"=>["SAIM",89,79,89,90,68],
    "2"=>["AHAD",90,92,95,88,90],
    "3"=>["ARBAB",27,90,89,88,16],
    "4"=>["AZHAN",0,0,0,88,16]
];

echo "<table border='1'>
    <tr>
    <th>Student ID</th>
    <th>Student NAME</th>
    <th>Maths</th>
    <th>English</th>
    <th>Urdu</th>
    <th>ISLAMIAT</th>
    <th>PAK-STUDIES</th>
    <th>TOTAL MARKS</th>
    <th>PERCENT(%)</th>
    <th>Remarks</th>
    <th>GRADES</th>
    </tr>
";
foreach($Students as $key => $item){
    $sum = array_sum([$item[1],$item[2],$item[3],$item[4],$item[5]]);
    $percent = $sum/500*100;
    $remarks = "";
    $grade = "";
    if( $percent>=40){
        $remarks = "Pass";
    }
    else{

        $remarks = "Fail";
    }

    if($percent>=90){
        $grade = "A+";
    }
    else if($percent>=80){
        $grade = "A";


    }
    else if($percent>=70){
        $grade = "B";


    }
    else if($percent>=60){
        $grade = "C";


    }
    else if($percent>=50){
        $grade = "D";


    }
    else if($percent>=40){
        $grade = "E";


    }
    else{
        $grade = "F";

    }
    echo "<tr>
        <td>$key</td>
        <td>$item[0]</td>
        <td>$item[1]</td>
        <td>$item[2]</td>
        <td>$item[3]</td>
        <td>$item[4]</td> 
        <td>$item[5]</td>  
        <td>$sum</td>  
        <td>$percent</td>
        <td>$remarks</td>    
        <td>$grade</td>    
    </tr>";
  
    
}

echo "</table>";

