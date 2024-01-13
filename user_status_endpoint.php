<?php
// user_status_endpoint.php

session_start();

// Check if the user is logged in
$loggedIn = isset($_SESSION['username']);

// Simulate user status data
$userData = [
    'loggedIn' => $loggedIn,
    'username' => $loggedIn ? $_SESSION['username'] : ''
];

header('Content-Type: application/json');
echo json_encode($userData);
?>