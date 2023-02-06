<?php

$host = "localhost";
$database = "messages_app";
$user = "root";
$password = "";

try{
    $conn  = new PDO("mysql: host=$host;dbname=$database", $user, $password);
} catch(PDOException $e){
    die("PDO ERROR: ". $e);
}