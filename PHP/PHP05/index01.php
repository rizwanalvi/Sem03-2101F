<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<?php
//id=>[name,maths,english,urdu,islamiat,pakstudies]
$Students =[
    "1"=>["SAIM",0,0,0,0,0],
    "2"=>["AHAD",90,92,95,88,90],
    "3"=>["ARBAB",27,90,89,88,16],
    "4"=>["AZHAN",0,0,0,88,16]
];

echo "<table class='table'>
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
        $remarks = "<td class='bg-success text-white text-center'>Pass</td>";
    }
    else{

        $remarks = "<td class='bg-danger text-white text-center'>Fail</td>";;
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
        $remarks    
        <td>$grade</td>    
    </tr>";
  
    
}

echo "</table>";

