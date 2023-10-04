<?php
$servername = "localhost"; // Hostnaam van de MySQL-server
$username = "root"; // Gebruikersnaam voor de database
$password = ""; // Wachtwoord voor de gebruiker
$database = "contact"; // Naam van de database

// Verbinding maken met de database
$conn = new mysqli($servername, $username, $password, $database);

// Controleren of de verbinding is geslaagd
if ($conn->connect_error) {
    die("Verbinding mislukt: " . $conn->connect_error);
} else {
    echo "<br>";
}



?>