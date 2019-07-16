<?php




$servername = "localhost";
$dbname = "backend";
$username = "reader";
$password = "reader";

$inputMail = $_POST["mail"];
$inputPass = $_POST["pass"];
$hashedInputPass = hash('sha256', $_POST['pass']);

// Create connection
$connection = new mysqli($servername, $username, $password, $dbname);

// Check connection
if (mysqli_connect_error()) {
    die("Database connection failed: " . mysqli_connect_error());
}

$query = "SELECT * FROM users";
$result = $connection->query($query);

if ($result->num_rows > 0) {
    //foreach line of result, check if hash is equal (===) AND email is the same
    while($row = $result->fetch_assoc()) {
        if ($row["email"] === $inputMail) {
            if ($row["password"] === $hashedInputPass) {
                // Go to next page of the assignment
                header('Location:algorithm.html');
                exit();
            }
        }
    }
} else {
   echo "Query returned nothing...";
}

// Return to first page with warning

?>