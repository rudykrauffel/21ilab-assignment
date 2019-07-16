<?php

$hashed = hash('sha256', $_POST['pass']);
echo "$hashed";


$servername = "localhost";
$dbname = "backend";
$username = "reader";
$password = "reader";

// Create connection
$connection = new mysqli($servername, $username, $password);

// Check connection
if (mysqli_connect_error()) {
    die("Database connection failed: " . mysqli_connect_error());
}
echo "Connection successful";

$query = "SELECT * FROM users";
$result = $connection->query($sql);

if ($result->num_rows > 0) {
    //foreach line of result, check if hash is equal (===) AND email is the same
} else {
    # code...
}


?>