<?php
/*
 * Database settings
 */
define("DB_SERVER", "localhost");
define("DB_NAME", "guvi");
define("DB_USERNAME", "root");
define("DB_PASSWORD", "");

try {
    $db = new PDO("mysql:host=".DB_SERVER.";dbname=".DB_NAME, DB_USERNAME, DB_PASSWORD);
}
catch (PDOException $e) {
    echo "Error!: " . $e->getMessage() . "<br/>";
    exit();
}
