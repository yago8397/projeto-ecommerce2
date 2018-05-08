<?php

	include "conexao.php";
	$login = $_POST['login']; 
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	$csenha = $_POST['csenha'];
	$nome = $_POST['nome'];
	$dtn = $_POST['dtn'];
	$uf = $_POST['uf'];
	$sexo = $_POST['sexo'];
	$tel = $_POST['tel'];
	$cel = $_POST['cel'];
	$cpf = $_POST['cpf'];
	$cep = $_POST['cep'];
	$cid = $_POST['cid'];
	$end = $_POST['end'];
	$num = $_POST['num'];
	$bairro = $_POST['bairro'];
	$comp = $_POST['comp'];
	$vfc = "SELECT cpf FROM gerente WHERE cpf='$cpf'";
	$res= PDO($conexao, $vfc);
	if ($dados=mysqli_fetch_assoc($res)) {
		echo $CPF;
		echo " ja cadastrado";
		mysqli_close($conexao);
	}
		/*else{
	$vfc = "SELECT email FROM gerente WHERE email='$email'";
	$res= mysqli_query($conexao, $vfc);
	if ($dados=mysqli_fetch_assoc($res)) {
		echo $email;
		echo " ja cadastrado";
		mysqli_close($conexao);
	}*/
		else{

	$inserir = "INSERT INTO usuarios(CPF, nome, email, senha) values ('$CPF','$nome','$email','$senha')";


	$enviar = mysqli_query($conexao, $inserir);


	if ($enviar) {
		echo "usuario cadastrado com sucesso.";
		mysqli_close($conexao);
	} else {
		echo "usuario não cadastrado";
		mysqli_close($conexao);
	}
	}
	

?>