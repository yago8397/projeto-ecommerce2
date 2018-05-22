<?php

	session_start();
	include 'conexao.php';

	$img = $_POST['img'];
	$nome = $_POST['nome'];
	$descri = $_POST['descri'];
	$preco = $_POST['preco'];
	$cod_produto = $_POST['cod_produto'];	

	$td = [$img,$nome,$descri,$preco,$cod_produto]; 

	if (!isset($_SESSION['carrinho'])) {
		$_SESSION['carrinho']= []; 
	}

	array_push($_SESSION['carrinho'], $td);
	header('location:carrinho.php');
	
	



 ?>