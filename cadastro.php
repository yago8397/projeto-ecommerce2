<?php
session_start();
include "conexao.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/bootstrap.css">					
		<title>Gaia Shopping</title>
	</head>
	<body>
		<div class="container-fluid">	

			<header>
				<div class="row border border-info rounded" style="background-color: #BDBDBD">

					<div class="col-md-2  col-xl-2 mt-2 ">
						<figure class="figure">
						<a href="index.php">
	        			<img class="img-fluid " src="imagens/logo.png" alt="Logo da empresa"/>
	        			</a>
	      				</figure>
					</div>
		      		<div class="col-md-7 col-xl-8 mt-3" >
		      			<form  action="procurar.php" method="post">
		        		<input name="busca" id="busca" class="form-control mr-sm-2 " type="text" placeholder="Qual produto está procurando?" aria-label="Search">	
		      			</form>
		      		</div>		      		
<?php 
if (isset($_SESSION['logar'])){
?>					
					<div class="col-md-3 col-xl-2 mt-1 mb-1 text-black ">
					
		      		<p class="m-1">Ola, <a href="perfil_usuario.php"><?php echo $_SESSION['logar'];?></a><br>Seja Bem-Vindo!</p>		      		
		      		  		      		
		      		<a href="carrinho.php" class="btn btn btn-info btn-sm m-1"><i class="fas fa-cart-plus"></i></a>
		      		<a href="desloga.php?acao2=deslogar" class="btn btn btn-info btn-sm m-1"><i class="fas fa-sign-out-alt"></i></a>


		      		</div>		      										
<?php
}
else{
?>
					<div class="col-md-3 col-xl-2 mt-1 mb-1 ">
		      		<div class="row m-1">
		      			<a class="btn btn btn-info btn-sm mr-1" data-toggle="modal" data-target="#exampleModal" href="">Login</a>
		      			<a href="carrinho.php" class="btn btn btn-info btn-sm"><i class="fas fa-cart-plus"></i></a>
		      		</div>		      				      		
		      		<div class="row m-1 ">
		      			<a class="btn btn btn-info btn-sm " href="cadastro.php">Cadastro</a>
		      		</div>
		      		
		      		</div>
<?php
}
?>									
				</div>				
			</header>				
			
			<nav>		
				<div class="row d-flex justify-content-center">

					<ul class="nav nav-pills mt-2 p-1 border border-info border-right-0 border-left-0">
	  				<li class="nav-item mr-1">
	    			<a class="nav-link btn btn btn-dark btn-sm bg-info p-1" href="index.php" >Início</a>
					</li>
					<li class="nav-item mr-1">
					<a class="nav-link btn btn-outline-dark btn-sm bg-secondary p-1" href="categoria.php?categoria=informatica">Informática e Telefonia</a>
					
					<li class="nav-item dropdown mr-1">
					<a class="nav-link btn btn-outline-dark btn-sm bg-secondary p-1" href="categoria.php?categoria=eletrodomestico">Eletrodomésticos</a>
					
					<li class="nav-item dropdown mr-1">
					<a class="nav-link btn btn-outline-dark btn-sm bg-secondary p-1" href="categoria.php?categoria=decoracao">Móveis e Decoração</a>
					
					<li class="nav-item dropdown ">
					<a class="nav-link btn btn-outline-dark btn-sm bg-secondary p-1" href="categoria.php?categoria=entretenimento">Entretenimento</a>
					</ul>																
				</div>
			</nav>			

			<section>
				<div class="col-md col-xl-8 offset-xl-2 mt-2 mb-2 p-3 border border-info rounded" style="background-color: #BDBDBD">
					
					<h5 class=" row card-header bg-info mb-2">Faça o seu Cadastro:</h5>

					<form  method="post" action="cadas.php">

					<div class="row">

					<div class="form-group col-md-4">
				    <label id="login">Login:</label>
				    <input required type="text" class="form-control" name="login" placeholder="Digite o Login">
				    </div>
				    <div class="form-group col-md-8">
				    <label id="email">Email:</label>
				    <input required type="email" class="form-control" name="email" placeholder="Digite o email">
				    </div>				    				    
					</div>				    
					

					<div class="row">

				    <div class="form-group col-md-6">
				    <label id="senha">Senha:</label>
				    <input required type="password" class="form-control" name="senha" placeholder="Digite a senha">
				    </div>
				    <div class="form-group col-md-6">
				    <label id="csenha">Comfirmar Senha:</label>
				    <input required type="password" class="form-control" name="csenha" placeholder="Comfirmar senha">
				    </div>
					</div>

					<div class="row">

				    <div class="form-group col-md-6">
				    <label id="nome">Nome:</label>
				    <input required type="text" class="form-control" name="nome" placeholder="Digite o nome">
				    </div>				    
				    <div class="form-group col-md-4">
				    <label id="dtn">Data de Nasc.:</label>
				    <input required type="text" class="form-control" name="dtn" placeholder="">
				    </div>
				    <div class="form-group col-md-2">
					<label id="sexo">Sexo:</label>
					<select name="sexo" class="form-control">
					<option disabled selected>-</option>
					<option>M</option>
					<option>F</option>
					</select>
					</div>				    				    
					</div>  

					<div class="row">

					<div class="form-group col-md-6">
				    <label id="snome">Sobrenome:</label>
				    <input required type="text" class="form-control" name="snome" placeholder="Digite o Sobrenome">
				    </div>				    
					<div class="form-group col-md-3">
				    <label id="tel">Tel.:</label>
				    <input required type="text" class="form-control" name="tel" placeholder="">
				    </div>
				    <div class="form-group col-md-2">
					<label id="uf">UF:</label>
					<select name="uf" class="form-control">
					<option disabled selected>-</option>
					<option>RJ</option>
					<option>SP</option>
					<option>MG</option>
					<option>ES</option>
					</select>
					</div>				   
					</div>

					<div class="row">					
									    
				    <div class="form-group col-md-4">
				    <label id="cpf">CPF:</label>
				    <input required type="text" class="form-control" name="cpf" placeholder="">
				    </div>
				    <div class="form-group col-md-4">
				    <label id="cep">CEP:</label>
				    <input required type="text" class="form-control" name="cep" placeholder="">
				    </div>
				    <div class="form-group col-md-4">
				    <label id="cid">Cidade:</label>
				    <input required type="text" class="form-control" name="cid" placeholder="Digite a Cidade">
				    </div>					
				    </div>

				    <div class="row">

				   	<div class="form-group col-md-12">
				    <label id="ende">End.:</label>
				    <input required type="text" class="form-control" name="ende" placeholder="Digite o Endereço">
				    </div>
				    <div class="form-group col-md-2 d-none">
					<label id="tipo">Tipo de Usuário:</label>
					<select name="tipo" class="form-control">
					<option selected>Cliente</option>										
					</select>
					</div>				    
				    </div>
				   
					<button class="btn btn-info col-md-4 offset-md-4" type="submit">Cadastrar</button>

					</form>
				</div>								
			</section>

			<footer>				
					<h5 class="text-info mt-3">GaiaShopping</h5>					
					<div class="row border border-info rounded " style="background-color: #BDBDBD">
					<div class="col-md-10 offset-md-1 col-xl-10 offset-xl-1 text-black">											
					<p class="text-center">Todas as regras e promoções são válidas apenas para produtos vendidos e entregues pela gaiashop.com.<br>				
					Av. das Américas, 4666 <br> Barra da Tijuca, Rio de Janeiro - RJ, 22640-102</p>
					<a href="#" class="btn btn-info col-md-4 offset-md-4  mb-2">Voltar ao topo</a>
					</div>
					</div>								
			</footer>


		</div>		

	</body>
</html>



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLabel">Olá Visitante:</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
<form method="post" action="login.php">
<div class="form-group">
<label for="exampleInputEmail1">Login:</label>
<input type="text" name="login" class="form-control" id="exampleInputEmail1"  aria-describedby="emailHelp" placeholder="Digite seu login.">
<small id="emailHelp" class="form-text text-muted">Nós nunca vamos compartilhar seu login e senha com mais ninguém.</small>
</div>
<div class="form-group">
<label for="exampleInputPassword1">Senha:</label>
<input type="password" name="senha" class="form-control" id="exampleInputPassword1" placeholder="Digite sua senha.">
</div>
<div class="form-check">
<input type="checkbox" class="form-check-input" id="exampleCheck1" required="">
<label class="form-check-label" for="exampleCheck1">Eu li e concordo com os termos de uso.</label>
</div>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>
</div>
<div class="modal-footer">
</div>
</div>
</div>
</div>



<script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>