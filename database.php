<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$db_server = "localhost";
$db_user = "Rares1";
$db_pass = "Password_12";
$db_name = "cafenea";

try {
    // Attempt to establish a database connection
    $conn = new mysqli($db_server, $db_user, $db_pass, $db_name);

    // Continue with other code if the connection is successful
} catch (mysqli_sql_exception $e) {
    exit ("Conectare esuata!");
}
?>