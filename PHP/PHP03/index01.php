<?php
$subj = ["Maths","English","Urdu","PakStudies"];
//$subj = array();
var_dump($subj);
echo "<br/>";
print_r($subj);


echo "<h1>$subj[2]</h1>";
echo "<table border='1'>
<tr>
    <th>Subject Name</th>
</tr>";
for($i=0;$i<sizeof($subj);$i++){
    
echo "<tr>
<td>$subj[$i]</td>
</tr>";
}
echo "</table>";
?>


    


