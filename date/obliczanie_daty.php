<?php
$czas = mktime(0,0,0,5,6,2024);
echo "Created date is ". date("d.m.Y", $czas);
$now = time();
$sto_dni = 100*24*60*60;
echo "<br> teraz: ".date("d.m.Y h:i:sa", $czas -$sto_dni);

?>