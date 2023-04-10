<?php 

// Start Connect Database

$username = 'root';
$password = '';
$host     = 'localhost';
$dbname   = 'users';
try {

    $con = new PDO("mysql:host=$host;dbname=$dbname",$username, $password);
    // set the PDO error mode to exception
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e) {
    echo $e->getMessage(); 
}