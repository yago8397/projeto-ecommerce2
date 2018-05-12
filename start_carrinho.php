<?php

	session_start();
	include 'conexao.php';

	$nm_prod = $_POST['nome'];
	$desc_prod = $_POST['desc'];
	$preco_prod = $_POST['preco'];

	if (isset($_SESSION['carrinho'])) {
		$_SESSION['carrinho']= []; 
	}

	array_push($_SESSION['carrinho'], [$nm_prod, $desc_prod, $preco_prod]);
	print_r($_SESSION['carrinho']);
	//header ('location:index.php');




 ?>