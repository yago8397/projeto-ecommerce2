<?php 
session_start();
include "conexao.php";

if (isset($_SESSION['logarv'])) {
	if ($_GET['acao2']=="deslogar") {
		unset($_SESSION['logarv']);
		header('location: index.php');
		exit;
	}
}

?>