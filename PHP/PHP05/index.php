<?php
$Student =["100"=>"Ahmed Khan","101"=>"Noman Khan","103"=>"Salman Ahmed","119"=>"FARHAN"];

print_r($Student);

foreach($Student as $item){
echo "<h3>$item</h3>";

}

echo "<table border='1'>
<tr>
    <th>Student ID</th>
    <th>Student Name</th>
</tr>";
foreach($Student as $key=>$item){
   
        echo"<tr>
        <td>$key</td>
        <td>$item</td>
    </tr>";
    }

    echo "   </table>";

    ?>

    
    
 