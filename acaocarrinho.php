<?php
session_start();
include "conexao.php";

if (isset($_SESSION['carrinho'])) {
	if ($_GET['acao']=="esvaziar") {
		unset($_SESSION['carrinho']);
		header("location: carrinho.php");
	} 
}

?>