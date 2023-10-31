<?php

$nazwa = "promocja";
$wartosc = "wycieczka";
setcookie($nazwa, $wartosc, time()+ (2*24*60*60));

if(!isset($_COOKIE[$nazwa])){
    echo "cookie named '" . $nazwa . "' is not set!";
}
else{
    echo "cookie named '" . $nazwa . "' is set!<br>";
    echo "Value is '" . $wartosc . "'";
}
setcookie($nazwa, $wartosc, time() - (48*3600));
if(!isset($_COOKIE[$nazwa])){
    echo "cookie named '" . $nazwa . "' is not set!";
}
else{
    echo "cookie named '" . $nazwa . "' is set!<br>";
    echo "Value is '" . $wartosc . "'";
}
?>