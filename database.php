<?php

$server = 'localhost';
$username = 'root';
$password = '';
$database = 'php_login';

try {

    $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
}
    catch (PDOExeption $e) {

        die('connected failed: '.$e->get_message());
    
}

?>