<?php
// logoff.php
session_start();
session_destroy();

// Return a JSON response indicating success
echo json_encode(['success' => true]);
?>