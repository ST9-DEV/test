<?php
$nazwa = "user";
$wartosc = "Jan Kowalski";
setcookie($nazwa, $wartosc, time()+ (24*60*60));
?>