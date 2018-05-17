<?php
session_start();
include 'conexao.php';

$login  = $_POST ['login'];
$senha = $_POST['senha'];
$tipo = $_POST['tipo'];

$stmt = $pdo->prepare('SELECT * FROM usuarios WHERE login = ? AND senha = ?');
$stmt->bindParam(1, $login, PDO::PARAM_STR);
$stmt->bindParam(2, $senha,PDO::PARAM_STR);
$stmt->execute();
if($alvos = $stmt->fetchAll()){
	if($alvos[0]['tipo']=="Cliente"){
		$_SESSION['logar'] = $alvos[0]['nome'];
		header('location: index.php');
	}
	elseif ($alvos[0]['tipo']=="Vendedor"){
		$_SESSION['logarv'] = $alvos[0]['nome'];
		header('location: p_vendedor.php');
	
}
}else{
?>
<script  type="text/javascript" language="javascript1.5">
	alert("Login ou senha inválidos!")
	</script>
<?php
	header('refresh:0;url=index.php',true,303);
}
?>