<?php

$host = 'localhost=3306';
$username = 'menu';
$password = '';
$database = 'ref_menu';

try {
    $database = new PDO("mysql:host=$host;dbname=$database", $username, $password);
    $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected Successfully";
} catch(PDOException $e){
    echo "Connection Failed: " . $e->getMessage();
}
?>