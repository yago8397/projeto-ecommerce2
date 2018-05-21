<?php
session_start();
include 'conexao.php';
	
	$cod_produto = '';
	$img = $_POST['img'];
	$nome = $_POST['nome']; 
	$desc = $_POST['desc']; 
	$preco = $_POST['preco']; 
	$tipo = $_POST['tipo']; 


$stmt = $pdo->prepare ('INSERT INTO produtos (cod_produto, img, nome, desc, preco, tipo) VALUES(?,?,?,?,?,?)');

$stmt->bindParam(1,$cod_produto,PDO::PARAM_STR);
$stmt->bindParam(2,$img,PDO::PARAM_STR);
$stmt->bindParam(3,$nome,PDO::PARAM_STR);
$stmt->bindParam(4,$desc,PDO::PARAM_STR);
$stmt->bindParam(5,$preco,PDO::PARAM_STR);
$stmt->bindParam(6,$tipo,PDO::PARAM_STR);

$stmt->execute()

?>