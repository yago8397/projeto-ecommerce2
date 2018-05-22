<?php
session_start();
include 'conexao.php';
	
if (isset($_SESSION['lovav'])){

	($_GET['del']==$alvos['cod_produto']);
}

$cod_produto = $_GET['del'];

$stmt = $pdo->prepare("DELETE FROM produtos WHERE  cod_produto = ? ");
$stmt->bindParam(1, $cod_produto, PDO::PARAM_STR);
$stmt->execute();
?>
<script  type="text/javascript" language="javascript1.5">
	alert("Produto excluido.")
	</script>
<?php
header('location:excluir_produto.php');	

?>
