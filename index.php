<?php
$servername = "mysql";
$username = "root";
$password = "root";
$dbname = "middleearth";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
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
