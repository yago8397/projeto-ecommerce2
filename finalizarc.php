<?php
include 'conexao.php';

	$total = $_POST['total']

$stmt = $pdo->prepare ('INSERT INTO pedidos (total) VALUES (?)');

$stmt->bindParam(1,$total,PDO::PARAM_STR);



if ($stmt->execute()){
header('refresh:0;url=index.php',true,303);
?>
<script  type="text/javascript" language="javascript1.5">
	alert("Usuário cadastrado.")
	</script>
<?php
} else {
header('refresh:0;url=index.php',true,303);
	?>
<script  type="text/javascript" language="javascript1.5">
	alert("Usuário não cadastrado.")
	</script>
<?php
}

?>






					