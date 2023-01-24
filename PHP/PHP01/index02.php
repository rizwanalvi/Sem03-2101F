<?php
$Subject = ["Maths","English","Urdu","PakStudies"];

//echo sizeof($Subject);
echo "<ul>";
for($i=0;$i<sizeof($Subject);$i++){

    echo "<li>$Subject[$i]</li>";
}
echo "</ul>";


echo "<table border='1'>
    <tr ><th>Subjects</th><tr>";

for($i=0;$i<sizeof($Subject);$i++){
    echo "<tr><td>$Subject[$i]</td></tr>";
}

echo "</table>";




