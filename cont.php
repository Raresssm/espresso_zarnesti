<?php
include("database.php");

$username = isset($_POST["user"]) ? $_POST["user"] : null;
$password = isset($_POST["pass"]) ? $_POST["pass"] : null;

// Use prepared statement to prevent SQL injection
$interogare = $conn->prepare("INSERT INTO cont (username, password) VALUES (?, ?)");
$interogare->bind_param("ss", $username, $hashedPassword);

// Hash the password securely
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

// Execute the prepared statement
$interogare->execute();

// Check for errors
if ($interogare->errno) {
    exit('<br>Adaugare esuata: ' . $interogare->errno . ": " . $interogare->error . "<BR>");
}

echo "Conectare reusita!";

$interogare->close();
$conn->close();
?>