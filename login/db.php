<?php
$server = 'localhost';
$username = 'dustinroberts891';
$password = 'Cheerup22!';
$database = 'testingthis';

try{
	$conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch(PDOException $e){
	die( "Connection failed: " . $e->getMessage());
}
?>