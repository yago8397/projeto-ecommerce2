<?php

	session_start();
	include 'conexao.php';

	$img = $_POST['img'];
	$nome = $_POST['nome'];
	$desc = $_POST['desc'];
	$preco = $_POST['preco'];

	$td = [$img,$nome,$desc,$preco]; 

	if (!isset($_SESSION['carrinho'])) {
		$_SESSION['carrinho']= []; 
	}

	array_push($_SESSION['carrinho'], $td);
	header('location:carrinho.php');
	
	



 ?>