<?php
session_start();
include 'conexao.php';
	
	$cod_produto = '';
	$img = "imagens/".$_POST['img'];
	$nome = $_POST['nome']; 
	$descri = $_POST['descri']; 
	$preco = $_POST['preco']; 
	$tipo = $_POST['tipo']; 


$stmt = $pdo->prepare ('INSERT INTO produtos (cod_produto, img, nome, descri, preco, tipo) VALUES(?,?,?,?,?,?)');

$stmt->bindParam(1,$cod_produto,PDO::PARAM_STR);
$stmt->bindParam(2,$img,PDO::PARAM_STR);
$stmt->bindParam(3,$nome,PDO::PARAM_STR);
$stmt->bindParam(4,$descri,PDO::PARAM_STR);
$stmt->bindParam(5,$preco,PDO::PARAM_STR);
$stmt->bindParam(6,$tipo,PDO::PARAM_STR);


if($stmt->execute()){
header('refresh:0;url=index_vendedor.php',true,303);
}
?>