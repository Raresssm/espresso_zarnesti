<?php
include("database.php"); // Adjust the path to the database file if needed

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = isset($_POST["username"]) ? $_POST["username"] : null;
    $email = isset($_POST["email"]) ? $_POST["email"] : null;
    $password = isset($_POST["password"]) ? $_POST["password"] : null;

    // Hash the password securely
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $query = "INSERT INTO cont (username, email, password) VALUES (?, ?, ?)";
    $stmt = mysqli_prepare($conn, $query);

    // Use prepared statement to prevent SQL injection
    mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashedPassword);

    $result = mysqli_stmt_execute($stmt);

    if ($result) {
        // Registration successful! Redirect to login page (assuming login.html is in the cont directory)
        header("Location: login.html");
        exit();
    } else {
        $errorMessage = "Error occurred during registration.";
    }

    // Close prepared statement
    mysqli_stmt_close($stmt);
}

mysqli_close($conn);
?>