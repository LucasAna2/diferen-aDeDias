<?php
$date1 = $_GET['date1'];
$date2 = $_GET['date2'];

$d1 = strtotime($date1);
$d2 = strtotime($date2);

$dif = ($d2 - $d1) / 86400;

echo "Entre " . $date1 . " e " . $date2 . " há " . $dif . " dias.";


?>