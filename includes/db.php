<?php
$servername = "localhost:3305"; // Adres serwera MySQL (np. localhost)
$username = "root"; // Nazwa użytkownika MySQL
$password = "okno"; // Hasło użytkownika MySQL 
$database = "sklep_internetowy"; // Nazwa bazy danych

// Nawiązanie połączenia z bazą danych
$conn = new mysqli($servername, $username, $password, $database);

// Sprawdzenie czy połączenie zostało ustanowione
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//else {
//    echo "Connection successful"; // Opcjonalny komunikat potwierdzający pomyślne połączenie
}
?>
