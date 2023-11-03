<?php




$pdo 	= new PDO("mysql:host=lnmp-mysql-1;dbname=test_one_db", "test_one_user" , "pass");

$query 	= $pdo->query("show tables");

$rows	= $query->fetchAll();


echo "<pre>";
var_dump($_SERVER);

var_dump($rows);
echo "</pre>";
