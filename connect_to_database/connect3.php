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
$sql = "CREATE TABLE guests(
    id INT(6),
    imie varchar(30) NOT NULL,
    nazwisko varchar(30) NOT NULL)";

echo '<br>';
if (mysqli_query($conn, $sql)) {
    echo "Stworzono tabelę";
}
else {
    echo "Error creating table:" . mysqli_error($conn);}

?>