<?php 
session_start();
include "conexao.php";

if (isset($_SESSION['logar'])) {
	if ($_GET['acao2']=="deslogar") {
		unset($_SESSION['logar']);
		header('refresh:0;url=index.php',true,303);
		exit;
	} 
}

?>