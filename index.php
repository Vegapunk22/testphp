<?php
$servername = "mysql";
$username = "root";
$password = "root";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

$sql = "SELECT id, nom, race, description FROM personnage";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Nom: " . $row["nom"]. " - Race: " . $row["race"]. " - Description: " . $row["description"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();

?>
