<?php
session_start();
echo 'welcome to page #1';


$_session ['favcolor'] = 'blue'."<br>";
$_session ['animal'] = 'dog'."<br>";
$_session ['time'] = time()."<br>";;
echo '<br/><a href="sesja2.php">page 2 </a>'
?>
