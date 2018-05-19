<?php
session_start();
include 'conexao.php';


$cod_produto = [];
$nome_produto = [];
$cod_usuario = [];
$nome_usuario = [];
$total = [];

foreach ($_SESSION['carrinho'] as $item) {
	array_push($cod_produto,$item[4]);
	array_push($nome_produto,$item[1]);
	array_push($cod_usuario,$item[4]);

}


$cod_produto = implode(",", $cod_produto);


print_r($cod_produto);


?>










					