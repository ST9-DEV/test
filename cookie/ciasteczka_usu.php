<?php
$nazwa = "user";
$wartosc = "Jan Kowalski";
setcookie($nazwa, $wartosc, time() - (3600));
if(!isset($_COOKIE[$nazwa])){
    echo "cookie named '" . $nazwa . "' is not set!";
}
else{
    echo "cookie named '" . $nazwa . "' is set!<br>";
    echo "Value is '" . $wartosc . "'";
}


?>