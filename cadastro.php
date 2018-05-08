<?php
include "conexao.php";
?>
<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/bootstrap.css" >
		<link rel="stylesheet" type="text/css" href="estilo.css">		
		<title>Gaia Shopping</title>
	</head>
	<body>
		<div class="container">	

			<header>
				<div class="row border border-info rounded" style="background-color: #BDBDBD">

					<div class="col-md-2 mt-2">
						<figure class="figure">
						<a href="index.php">
	        			<img class="img-fluid" src="imagens/logo.png" alt="Logo da empresa"/>
	        			</a>
	      				</figure>	      				
					</div>
		      		<div class="col-md-8 mt-3" >
		      			<form >
		        		<input class="form-control mr-sm-2 " type="search" placeholder="Qual produto está procurando?" aria-label="Search">	
		      			</form>
		      		</div>
		      		<div class="col-md-2">
		      		<div class="w-50 h-25 mt-1">
		      			<a class="btn btn btn-info btn-sm" data-toggle="modal" data-target="#exampleModal" href="">Login</a>
		      		</div>		      				      		
		      		<div class="w-50 h-25 mt-3 ">
		      			<a class="btn btn btn-info btn-sm " href="cadas.php">Cadastro</a>
		      		</div>
		      		</div>
				</div>
			</header>			
			
			<nav>		
				<div class="row col-md-10 offset-md-1">				
				<div class="col-md-2"></div>

					<ul class="nav nav-pills mt-2 p-1 border border-info border-right-0 border-left-0">
	  				<li class="nav-item mr-1">
	    			<a class="nav-link btn btn btn-dark btn-sm bg-info p-1" href="index.php">Início</a>
					</li>
					<li class="nav-item dropdown mr-1">
					<a class="nav-link btn btn-outline-dark btn-sm bg-secondary p-1" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Informática e Telefonia</a>
					<div class="dropdown-menu bg-secondary">
					<a class="dropdown-item" href="#">Celulares</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="#">Tablets</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="#">Pc Gaming</a>								
					</div>

					<li class="nav-item dropdown mr-1">
					<a class="nav-link btn btn-outline-dark btn-sm bg-secondary p-1" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Eletrodomésticos</a>
					<div class="dropdown-menu bg-secondary">
					<a class="dropdown-item" href="#">Tv's</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="#">Ar condicionado</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="#">Áudio</a>								
					</div>

					<li class="nav-item dropdown mr-1">
					<a class="nav-link btn btn-outline-dark btn-sm bg-secondary p-1" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Móveis e Decoração</a>
					<div class="dropdown-menu bg-secondary">
					<a class="dropdown-item" href="#">Sala</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="#">Cozinha</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="#">Banheiro</a>								
					</div>

					<li class="nav-item dropdown ">
					<a class="nav-link btn btn-outline-dark btn-sm bg-secondary p-1" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Outros</a>
					<div class="dropdown-menu bg-secondary">
					<a class="dropdown-item" href="#">Jogos</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="#">Filmes</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="#">Livros</a>								
					</div>
					</ul>																
				</div>
			</nav>			

			<section>
				<div class="col-md  mt-2 mb-2 p-3 border border-info rounded" style="background-color: #BDBDBD">
					
					<h5 class=" row card-header bg-info mb-2">Faça o seu Cadastro:</h5>



					<form id="form_usuarios" method="post" action="cadas.php">

					<div class="row">
					<div class="form-group col-md-4">
				    <label for="login">Login:</label>
				    <input required type="text" class="form-control" name="login" placeholder="Digite o Login" maxlength="30">
				    </div>
				    <div class="form-group col-md-8">
				    <label for="email">Email:</label>
				    <input required type="email" class="form-control" name="email" placeholder="Digite o email" maxlength="30">
				    </div>				    				    
					</div>				    
					

					<div class="row">
				    <div class="form-group col-md-6">
				    <label for="senha">Senha:</label>
				    <input required type="password" class="form-control" name="senha" placeholder="Digite a senha" maxlength="30">
				    </div>
				    <div class="form-group col-md-6">
				    <label for="csenha">Comfirmar Senha:</label>
				    <input required type="password" class="form-control" name="csenha" placeholder="Comfirmar senha" maxlength="30">
				    </div>
					</div>

					<div class="row">
				    <div class="form-group col-md-6">
				    <label for="nome">Nome:</label>
				    <input required type="text" class="form-control" name="nome" placeholder="Digite o nome" maxlength="30">
				    </div>
				    <div class="form-group col-md-3">
				    <label for="dtn">Data de Nasc.:</label>
				    <input required type="date" class="form-control" name="dtn" placeholder="">
				    </div>
				    <div class="form-group col-md-3">
					<label for="uf">UF:</label>
					<select name="uf" class="form-control">
					<option disabled selected>Estado</option>
					<option>RJ</option>
					<option>SP</option>
					<option>MG</option>
					<option>ES</option>
					</select>
					</div>				    
					</div>  

					<div class="row">		    
				    <div class="form-group col-md-4">
					<label for="sexo">Sexo:</label>
					<select name="sexo" class="form-control">
					<option disabled selected>Sexo</option>
					<option>Masculino</option>
					<option>Feminino</option>
					</select>
					</div>
					<div class="form-group col-md-4">
				    <label for="tel">Tel.:</label>
				    <input required type="text" class="form-control" name="tel" placeholder="FALTA MASCARA" maxlength="12">
				    </div>
				    <div class="form-group col-md-4">
				    <label for="cel">Cel.:</label>
				    <input required type="text" class="form-control" name="cel" placeholder="FALTA MASCARA" maxlength="11" >
				    </div>
					</div>

					<div class="row">
					<div class="form-group col-md-4">
				    <label for="cpf">CPF:</label>
				    <input required type="text" class="form-control" name="cpf" placeholder="FALTA MASCARA" maxlength="14">
				    </div>
					<div class="form-group col-md-4">
				    <label for="cep">CEP:</label>
				    <input required type="text" class="form-control" name="cep" placeholder="FALTA MASCARA" maxlength="9">
				    </div>				    
					<div class="form-group col-md-4">
				    <label for="cid">Cidade:</label>
				    <input required type="text" class="form-control" name="cid" placeholder="Cidade"
				    maxlength="30">
				    </div>
				    </div>

				    <div class="row">
				   	<div class="form-group col-md-9">
				    <label for="end">End.:</label>
				    <input required type="text" class="form-control" name="end" placeholder="Digite o Endereço" maxlength="40">
				    </div>
				    <div class="form-group col-md-3">
				    <label for="num">Número.:</label>
				    <input required type="text" class="form-control" name="num" placeholder="Número" maxlength="4">
				    </div>
				    </div>

				    <div class="row">				    
				    <div class="form-group col-md-4">
				    <label for="bairro">Bairro.:</label>
				    <input required type="text" class="form-control" name="bairro" placeholder="Bairro" maxlength="30">
				    </div>
				    <div class="form-group col-md-8">
				    <label for="comp">Complemento.:</label>
				    <input required type="text" class="form-control" name="comp" placeholder="Complemento" maxlength="40">
				    </div>
				    </div>

					<button class="btn btn-info col-md-4 offset-md-4" type="submit">Cadastrar</button>

					</form>
				</div>								
			</section>

			<footer>
				<div class="row">
					<div class="col-md-12 mt-1">
						<h5 class="card-header bg-info">GaiaShopping</h5>
						<div class="card-body" style="background-color: #BDBDBD">
						<div class="dropdown-divider"></div>					
						<p class="card-text text-center">Todas as regras e promoções são válidas apenas para produtos vendidos e entregues pela gaiashop.com.<br>				
						Av. das Américas, 4666 <br> Barra da Tijuca, Rio de Janeiro - RJ, 22640-102</p>
						<div class="dropdown-divider"></div>						
						<a href="#" class="btn btn-info col-md-4 offset-md-4">Voltar ao topo</a>
						</div>
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
<label for="exampleInputEmail1" >Login:</label>
<input type="text" name="login" class="form-control" id="exampleInputEmail1"  aria-describedby="emailHelp" placeholder="Digite seu login.">
<small id="emailHelp" class="form-text text-muted">Nós nunca vamos compartilhar seu login e senha com mais ninguém.</small>
</div>
<div class="form-group">
<label for="exampleInputPassword1" >Senha:</label>
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