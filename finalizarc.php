<?php
	session_start();
	include 'conexao.php';


	$cod_produto = [];
	$nome_produto = [];
	$preco_produto = [];


	foreach ($_SESSION['carrinho'] as $item) {
		array_push($cod_produto, $item[4]);
		array_push($nome_produto, $item[1]);
		array_push($preco_produto, $item[3]);
		}


	$cod_produto = implode(", ", $cod_produto);
	$nome_produto = implode(", ", $nome_produto);
	$preco_produto = implode(", ",$preco_produto);


	$cod_pedido = '';
	$cod_usuario = $_SESSION['cod_usuario'];
	$nome_usuario = $_SESSION['logar'];
	$email_usuario = $_SESSION['email_usuario'];
	$parcelas = $_POST['parcelas'];	
	$processo_entrega = "Pedido Realizado";
	$data_pedido = date("d/m/Y H:i:s");


	if ($parcelas<=10){
	$total_pagar = $_POST['total_pagar'];
 	}else {
 	$total_pagar = $_POST['total_pagar_j'];}


	$stmt = $pdo->prepare ("INSERT INTO pedidos (cod_pedido, cod_produto, nome_produto, preco_produto, cod_usuario, nome_usuario, email_usuario, processo_entrega, total_pagar, data_pedido, parcelas) VALUES (?,?,?,?,?,?,?,?,?,?,?)");

	$stmt->bindParam(1,$cod_pedido,PDO::PARAM_STR);
	$stmt->bindParam(2,$cod_produto,PDO::PARAM_STR);
	$stmt->bindParam(3,$nome_produto,PDO::PARAM_STR);
	$stmt->bindParam(4,$preco_produto,PDO::PARAM_STR);
	$stmt->bindParam(5,$cod_usuario,PDO::PARAM_STR);
	$stmt->bindParam(6,$nome_usuario,PDO::PARAM_STR);	
	$stmt->bindParam(7,$email_usuario,PDO::PARAM_STR);
	$stmt->bindParam(8,$processo_entrega,PDO::PARAM_STR);
	$stmt->bindParam(9,$total_pagar,PDO::PARAM_STR);
	$stmt->bindParam(10,$data_pedido,PDO::PARAM_STR);
	$stmt->bindParam(11,$parcelas,PDO::PARAM_STR);

	if($stmt->execute()){
		unset($_SESSION['carrinho']);
		header("location: index.php");
	}

?>










					