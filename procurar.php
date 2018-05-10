<?php 
include 'conexao.php';
 
$stmt = $pdo->prepare('SELECT * FROM produtos WHERE tipo = ?');
$stmt
$stmt->execute();





 ?>