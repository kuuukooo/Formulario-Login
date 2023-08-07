<?php 
$servername = "localhost";

$username = "root";

$password = "";

$db = "biblioteca";

// Create connection

$conn = mysqli_connect($servername, $username, $password,$db);

// Check connection

if (!$conn) {

   die("Connection failed: " . mysqli_connect_error());

}

$query= "select * from libros";

$stmt = mysqli_query($connection, $query);

while($row = mysqli_fetch_array($stmt, MYSQLI_ASSOC)){

    echo $row['autor']. ''.$row['nombre_libro']. '</br>'; 
}   

?>