<?php
include 'conexao.php';

	$login = $_POST['login']; 
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	$csenha = $_POST['csenha'];
	$nome = $_POST['nome'];
	$dtn = $_POST['dtn'];
	$sexo = $_POST['sexo'];
	$snome = $_POST['snome'];
	$tel = $_POST['tel'];
	$uf = $_POST['uf'];
	$cpf = $_POST['cpf'];
	$cep = $_POST['cep'];
	$cid = $_POST['cid'];
	$ende = $_POST['ende'];
	$tipo = $_POST['tipo'];
	

$stmt = $pdo->prepare ('INSERT INTO usuarios (login,email,senha,csenha,nome,dtn,sexo,snome,tel,uf,cpf,cep,cid,ende,tipo) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)');

$stmt->bindParam(1,$login,PDO::PARAM_STR);
$stmt->bindParam(2,$email,PDO::PARAM_STR);
$stmt->bindParam(3,$senha,PDO::PARAM_STR);
$stmt->bindParam(4,$csenha,PDO::PARAM_STR);
$stmt->bindParam(5,$nome,PDO::PARAM_STR);
$stmt->bindParam(6,$dtn,PDO::PARAM_STR);
$stmt->bindParam(7,$sexo,PDO::PARAM_STR);
$stmt->bindParam(8,$snome,PDO::PARAM_STR);
$stmt->bindParam(9,$tel,PDO::PARAM_STR);
$stmt->bindParam(10,$uf,PDO::PARAM_STR);
$stmt->bindParam(11,$cpf,PDO::PARAM_STR);
$stmt->bindParam(12,$cep,PDO::PARAM_STR);
$stmt->bindParam(13,$cid,PDO::PARAM_STR);
$stmt->bindParam(14,$ende,PDO::PARAM_STR);
$stmt->bindParam(15,$tipo,PDO::PARAM_STR);

$stmt->execute();

if($_POST['tipo']=="Cliente"){
header('refresh:0;url=index.php',true,303);
?>

<script type="text/javascript" language="javascript1.5">
alert ("Usuário cadastrado.")
</script>

<?php
}elseif ($_POST['tipo']=="Vendedor"){
		header('refresh:0;url=index_vendedor.php',true,303);	
} else {
header('refresh:0;url=index.php',true,303);
	?>
<script  type="text/javascript" language="javascript1.5">
	alert("Usuário não cadastrado.")
	</script>
<?php
}

?>






					