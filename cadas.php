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
	
$verificar = "SELECT email FROM usuarios WHERE email = '$email'";

$resultado = PDO_query($conexao, $verificar);
	if($dados=PDO_fetch_assoc($resultado)){
		echo $email."<br/>";
		echo "Usuário já cadastrado.";		
		} else {

$verificar = "SELECT cpf FROM usuarios WHERE cpf = '$cpf'";

$resultado = PDO_query($conexao, $verificar);
	if($dados=PDO_fetch_assoc($resultado)){
		echo $cpf."<br/>";
		echo "Usuário já cadastrado.";		
		} else {






// Montar as cláusulas(instruções) MySql/Sql para envio dos dados.

$conn->exec= "INSERT INTO usuarios(login,email,senha,csenha,nome,dtn,sexo,snome,tel,uf,cpf,cep,cid,ende) values ('$login','$email','$senha','$csenha','$nome','$dtn','$sexo','$snome','$tel','$uf','$cpf','$cep','$cid','$ende')";

//Enviar os dados para a tabela

$enviar = PDO_query($conexao, $inserir);

//Verificar se usuários foi cadastrado

if($enviar){
	echo "Usuário cadastrado com sucesso.";
} else {
	echo "Usuário não cadastrado.";
}
}
}

?>


					