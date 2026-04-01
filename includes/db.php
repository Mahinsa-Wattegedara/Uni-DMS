<?php
// includes/db.php
require_once __DIR__ . '/config.php';

$conn = mysqli_init();
if (!$conn) {
    die("mysqli_init failed");
}

// Local XAMPP uses localhost and an empty password, so we rely on the constants loaded via config.php
$db_host = DB_HOST;
$db_user = DB_USER;
$db_pass = DB_PASSWORD;
$db_name = DB_NAME;
$db_port = is_numeric(DB_PORT) ? (int) DB_PORT : 3306;

if (!mysqli_real_connect($conn, $db_host, $db_user, $db_pass, $db_name, $db_port)) {
    die("Database Connection Failed: " . mysqli_connect_error());
}

mysqli_set_charset($conn, 'utf8mb4');