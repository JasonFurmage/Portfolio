<?php

// Include Composer's autoload to manage dependencies and load environment variables from .env for configuration
require_once realpath(__DIR__ . "/../vendor/autoload.php");
use Dotenv\Dotenv;
$dotenv = Dotenv::createImmutable(__DIR__ . '/../', ['env.env']);
$dotenv->load();

// Get enviornment variables for connecting to database.
$dbHost = $_ENV['MySQL_DB_HOST'];
$dbUserName = $_ENV['MySQL_DB_USER_NAME'];
$dbPassword = $_ENV['MySQL_DB_PASSWORD'];
$dbName = $_ENV['MySQL_DB_NAME'];

// Connect to database.
try {
    $db = new PDO("mysql:host=$dbHost;dbname=$dbName", "$dbUserName", "$dbPassword");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    echo "Unable to connect to database:";
    //echo $e->getMessage();
    exit; 
}

?>
