<?php
include 'conexao.php';


$busca = $_POST['busca'];

$stmt = $pdo->prepare('SELECT * FROM produtos WHERE nome LIKE ? ');
$stmt->bindValue(1,'%'.$busca.'%');
$stmt->execute();
if($alvos = $stmt->fetchAll()){
	echo $alvos[0]['nome'];
}
?>	