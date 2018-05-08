<?php

$db_name = 'lojavt';
$hostname = 'localhost';
$username = 'root';
$password = '';
$opcoes = array(
PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8'
);

$pdo = new PDO ("mysql:host=$hostname;dbname=$db_name", $username, $password, $opcoes);
