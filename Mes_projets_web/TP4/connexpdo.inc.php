<?php

function connexpdo($table){
	$sgbd="mysql";
	$host="localhost";
	$user = "root";
	$pass = "JLqwcq";
	
	$pdo = new PDO("$sgbd:host=$host;dbname=$table;charset=utf8", $user, $pass);
	$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	return $pdo;
}
?>
