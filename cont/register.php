<?php
include("database.php");

if (isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "POST") {
    $username = isset($_POST["username"]) ? $_POST["username"] : null;
    $email = isset($_POST["email"]) ? $_POST["email"] : null;
    $password = isset($_POST["password"]) ? $_POST["password"] : null;

    // Hash the password securely
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $query = "INSERT INTO cont (username, email, password) VALUES ('$username', '$email', '$hashedPassword')";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "Registration successful!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>