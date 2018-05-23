<?php
session_start();
include 'conexao.php';
	$cod_pedido=$_POST['cod_pedido'];
	
	$processo_entrega = $_POST['processo_entrega']; 


$stmt = $pdo->prepare ('UPDATE pedidos SET processo_entrega = ? WHERE cod_pedido = ?');

$stmt->bindParam(1,$processo_entrega,PDO::PARAM_STR);
$stmt->bindParam(2,$cod_pedido,PDO::PARAM_INT);


if($stmt->execute()){

?>
<script  type="text/javascript" language="javascript1.5">
	alert("Status alterado com sucesso")
	</script>
<?php	
header('refresh:0;url=pedidos_vendedor.php',true,303);
}
?>