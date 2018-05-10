<?php
session_start();
include 'conexao.php';

$login  = $_POST ['login'];
$senha = $_POST['senha'];


$stmt = $pdo->prepare('SELECT * FROM usuarios WHERE login = ? AND senha = ?');
$stmt->bindParam(1, $login, PDO::PARAM_STR);
$stmt->bindParam(2, $senha,PDO::PARAM_STR);
$stmt->execute();
if($alvos = $stmt->fetchAll()){	
	$_SESSION['nome'] = $alvos[0]['nome'];
	header('location: index.php');
} else{
?>
<script  type="text/javascript" language="javascript1.5">
	alert("Login ou Senha Inválidos!")
	</script>
<?php
	header('refresh:0;url=index.php',true,303);
}
?>