<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

$server = 'localhost';
$username = 'root';
$password = '12345678';
$database = 'proyecto';

try{
    $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
    
} catch (PDOException $e) {
    die('coneccion fallida' . $e->getMessage());
}



?>