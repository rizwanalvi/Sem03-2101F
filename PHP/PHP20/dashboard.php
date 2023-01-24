<?php
include 'Crudbook.php';
$curdbk = new Crudbook();
echo ' <h2>All Records</h2>';
echo $curdbk->Read();
?>
