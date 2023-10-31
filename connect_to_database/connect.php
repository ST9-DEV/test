<?php
$nazwa_serwera = 'localhost';
$nazwa_uzyt = 'root';
$haslo = '';

$conn = mysqli_connect($nazwa_serwera, $nazwa_uzyt, $haslo);
if (!$conn){
    die('Połączenie nieudane '. mysqli_connect_error());
}
echo "Połączono się pomyślnie"

?>