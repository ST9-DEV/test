<?php
$servername ="localhost";
$username = "root";
$password ="";
$database="baza2";

$conn = mysqli_connect($servername, $username, $password, $database);


if (!$conn) {
    die("Connection failed." . mysqli_connect_error());


}
echo "Connected successfully";
////$sql = "CREATE TABLE guests(
//    id INT(6),
//    imie varchar(30) NOT NULL,
//    nazwisko varchar(30) NOT NULL)"; 
$sql = "INSERT INTO guests (imie, nazwisko)
VALUES ('John', 'Doe');";
$sql .= "INSERT INTO guests (imie, nazwisko)
VALUES ('Mary', 'Moe');";
$sql .= "INSERT INTO guests (imie, nazwisko)
VALUES ('Julie', 'Foe');";

echo '<br>';
if (mysqli_multi_query($conn, $sql)) {
    echo "Dodano rekordy.";
}
else {
    echo "Error adding records:" . mysqli_error($conn);}

?>