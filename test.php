<?php 
	session_start(); 
	include 'conect.php';

	$idProd = [];
	$nomeProd = [];
	$descProd = [];
	$precoProd = [];

	foreach ($_SESSION['carrinho'] as $item) {
		array_push($idProd, $item[4]);
		array_push($nomeProd, $item[0]);
		array_push($descProd, $item[1]);
		array_push($precoProd, $item[2]);
	}

	$idProd = implode(", ", $idProd);
	$nomeProd = implode(", ", $nomeProd);
	$descProd = implode(", ", $descProd);
	$precoProd = implode(", ", $precoProd);


$idPedido = '';
$idCliente = $_SESSION['id_cliente'];

$precoTotal = $_POST['precoTotal'];
$totalParc = 10;


//echo "INSERT INTO pedidos (idPedido, idCliente, idProduto, nomeProd, descProd, precoProd, precoTotal, totalParc) VALUES ('$idPedido','$idCliente', '$idProd', '$nomeProd', '$descProd', '$precoProd', '$precoTotal', '$totalParc')";

$stmt = $pdo->prepare ("INSERT INTO pedidos (idPedido, idCliente, idProduto, nomeProd, descProd, precoProd, precoTotal, totalParc) VALUES (?,?,?,?,?,?,?,?)");

        $stmt->bindParam(1,$idPedido,PDO::PARAM_INT);
		$stmt->bindParam(2,$idCliente,PDO::PARAM_INT);
		$stmt->bindParam(3,$idProd,PDO::PARAM_STR);
		$stmt->bindParam(4,$nomeProd,PDO::PARAM_STR);
		$stmt->bindParam(5,$descProd,PDO::PARAM_STR);
		$stmt->bindParam(6,$precoProd,PDO::PARAM_STR);
		$stmt->bindParam(7,$precoTotal,PDO::PARAM_INT);
		$stmt->bindParam(8,$totalParc,PDO::PARAM_INT);
		
		$stmt->execute();
      

?>