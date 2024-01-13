<?php
include("database.php"); // Adjust the path to the database file if needed

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = isset($_POST["username"]) ? $_POST["username"] : null;
    $password = isset($_POST["password"]) ? $_POST["password"] : null;

    $query = "SELECT * FROM cont WHERE username = ?";

    // Use prepared statement to prevent SQL injection
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);

    if ($result) {
        $row = mysqli_fetch_assoc($result);

        if ($row && password_verify($password, $row["password"])) {
            // Start a session and store relevant user information
            session_start();
            $_SESSION['username'] = $username;

            // Redirect to the main page or dashboard (assuming index.html is in the parent directory)
            header("Location: ../index.html");
            exit();
        } else {
            $errorMessage = "Login failed. Please check your username and password.";
        }
    } else {
        $errorMessage = "Error occurred during login.";
    }

    // Close prepared statement
    mysqli_stmt_close($stmt);
}

mysqli_close($conn);
?>