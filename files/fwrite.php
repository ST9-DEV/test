<?php
$myfile = fopen("newfile.txt", "w")
          or die ("Unable to open file!");
$txt = "John Doe\n";
fwrite($myfile, $txt);
echo "Dopisano do pliku";
fclose($myfile);

?>