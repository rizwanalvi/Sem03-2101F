<?php

//$fruitName = array("Apple","Banana","Orange");
$fruitName = ["Apple","Banana","Orange","Pineapple","Mango"];
//print_r($fruitName);
//echo "<pre/>";
//var_dump($fruitName);
//echo sizeof($fruitName);
echo "<ul>";
for($i=0;$i<sizeof($fruitName);$i++){
    echo " <li>$fruitName[$i]</li>";
}
echo "</ul>";


echo "<table border='1'>
<tr>
    <th>Fruit Name</th>
</tr>";
for($i=0;$i<sizeof($fruitName);$i++){

    echo "<tr>
    <td>$fruitName[$i]</td>
</tr>";
}

echo "</table>";

echo "<select name='' id=''>";

for($i=0;$i<sizeof($fruitName);$i++){

    echo "<option value=''>$fruitName[$i]</option>";
}

echo "</select>";
?>








