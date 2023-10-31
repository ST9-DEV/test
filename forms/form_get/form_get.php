Welcome
<?php
echo $_GET['name'];
?>
!
<br>
Your email address is: <?php echo $_GET['email']."<br>"; ?>

<?php

$nazwa_serwera = 'localhost';
$nazwa_uzyt = 'root';
$haslo = '';
$baza="baza2";
$conn = mysqli_connect($nazwa_serwera, $nazwa_uzyt, $haslo, $baza);
if (!$conn){
    die('Połączenie nieudane '. mysqli_connect_error());
}
echo "Połączono się pomyślnie<br>";

$name=$_GET['name'];
$email=$_GET['email'];
$sql="INSERT INTO guests (imie, email) VALUES ('$name', '$email')";
echo $sql. "<br>";
if (mysqli_query($conn, $sql)){
    echo "Dodano rekord do bazy.";
}
else {
    echo "ERROR". $sql."<br>". mysqli_error($conn);
}