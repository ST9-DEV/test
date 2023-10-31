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
$sql = "DELETE FROM guests WHERE id BETWEEN 3 AND 7";
$result = mysqli_query($conn, $sql);

echo '<br>';

if (mysqli_query($conn, $sql)){
    
    echo "Record deleted";
        
    }
   
          
    else {
        echo "Deleted 0 records";
    }
?>