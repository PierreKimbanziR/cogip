<?php

$host     = 'dbecode.clokakyc5e3r.eu-west-1.rds.amazonaws.com';
$db       = 'dbecode';
$username = 'phil';
$password = 'phil';

$dsn = "mysql:host=$host;dbname=$db";

try {
    // create a PDO connection with the configuration data
    $conn = new PDO($dsn, $username, $password);

    // display a message if connected to database successfully
    if ($conn) {
        echo "Connected to the <strong>db</strong> database successfully!";
    }
} catch (PDOException $e) {
    // report error message
    echo $e->getMessage();
}
