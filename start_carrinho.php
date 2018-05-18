<?php

	session_start();
	include 'conexao.php';

	$img = $_POST['img'];
	$nome = $_POST['nome'];
	$desc = $_POST['desc'];
	$preco = $_POST['preco'];
	$cod_produto = $_POST['cod_produto'];	

	$td = [$img,$nome,$desc,$preco,$cod_produto]; 

	if (!isset($_SESSION['carrinho'])) {
		$_SESSION['carrinho']= []; 
	}

	array_push($_SESSION['carrinho'], $td);
	header('location:carrinho.php');
	
	



 ?>