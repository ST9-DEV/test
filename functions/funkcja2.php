<?php 
 function add_some(&$string){
    $string.='and something extra';
 }
 $str = 'This is a string, ';
 
add_some($str);
echo $str;
 ?>