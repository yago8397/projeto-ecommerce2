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
						<a href="index_vendedor.php">
	        			<img class="img-fluid " src="imagens/logo.png" alt="Logo da empresa"/>
	        			</a>
	      				</figure>
					</div>
		      		<div class="col-md-7 col-xl-8 mt-3" >
		      			<form  action="procurar_vendedor.php" method="post">
		        		<input name="busca" id="busca" class="form-control mr-sm-2 " type="text" placeholder="Qual produto está procurando?" aria-label="Search">	
		      			</form>
		      		</div>		      		
<?php 
if (isset($_SESSION['logarv'])){
?>					
					<div class="col-md-3 col-xl-2 mt-1 mb-1 text-black ">
					
		      		<p class="m-1">Ola, <a href=""><?php echo $_SESSION['logarv'];?></a><br>Seja Bem-Vindo!</p>		      		
		      				      		
		      		<a href="deslogav.php?acao2=deslogar" class="btn btn btn-info btn-sm m-1"><i class="fas fa-sign-out-alt"></i></a>


		      		</div>		      										
<?php
}
else{
	header('location:index.php');
}
?>
								
				</div>				
			</header>				
			
			<nav>		
				<div class="row d-flex justify-content-center">

					<ul class="nav nav-pills mt-2 p-1 border border-info border-right-0 border-left-0">
	  				<li class="nav-item mr-1">
	    			<a class="nav-link btn btn btn-dark btn-sm bg-info p-1" href="index_vendedor.php">Início</a>
					</li>
					<li class="nav-item mr-1">
					<a class="nav-link btn btn-outline-dark btn-sm bg-secondary p-1 disabled text-dark" href="categoria.php?categoria=informatica">Informática e Telefonia</a>
					
					<li class="nav-item dropdown mr-1">
					<a class="nav-link btn btn-outline-dark btn-sm bg-secondary p-1 disabled text-dark" href="categoria.php?categoria=eletrodomestico">Eletrodomésticos</a>
					
					<li class="nav-item dropdown mr-1">
					<a class="nav-link btn btn-outline-dark btn-sm bg-secondary p-1 disabled text-dark" href="categoria.php?categoria=decoracao">Móveis e Decoração</a>
					
					<li class="nav-item dropdown ">
					<a class="nav-link btn btn-outline-dark btn-sm bg-secondary p-1 disabled text-dark" href="categoria.php?categoria=entretenimento">Entretenimento</a>
					</ul>																
				</div>
			</nav>			

			<section>
				<div class="border border-info rounded" style="background-color: #BDBDBD">		
					<h4 class="row card-header bg-info mb-2 m-1">Pedidos</h4>
					<div class="row ml-1">
					<div class="col-md-1"><h5>Número</h5></div>	
					<div class="col-md-3"><h5>Produtos</h5></div>
					<div class="col-md-2"><h5>Cliente</h5></div>
					<div class="col-md-3"><h5>Pagamento</h5></div>
					<div class="col-md-3"><h5>Status</h5></div>		
					</div>	
					<div class="dropdown-divider"></div>
<?php 
$stmt = $pdo->prepare('SELECT * FROM pedidos');
$stmt->execute();
if($result = $stmt->fetchAll())
	foreach ($result as $alvos){
?>
	 				<div class="row ml-1">

	 					<div class="col-md-1">
	 					<table>
	 					<br>
	 					<tr>
	 					<td><p class="btn btn btn-info btn-sm m-1 disabled"><?php echo $alvos['cod_pedido'] ?></p></td>
	 					</tr>
	 					</table>
	 					</div>	
	 					
	 					<div class="col-md-3">
	 					<table>
	 					<br>
	 					<tr>
	 					<td><p><?php echo $alvos['nome_produto'] ?></p></td>	
	 					</tr>
	 					</table>
	 					</div>

	 					<div class="col-md-2">
	 					<table>
	 					<tr>
	 					<td><p>Nome: <?php echo $alvos['nome_usuario'] ?></p></td>
	 					</tr>	
	 					<tr>
	 					<td><p>Email: <?php echo $alvos['email_usuario'] ?></p></td>	
	 					</tr>	 					
	 					</table>
	 					</div>

	 					<div class="col-md-3">
	 					<table>
	 					<tr>
	 					<td><p>Total da Compra: <?php echo number_format((float)$alvos['total_pagar'], 2, ',', '');?></p></td>	
	 					</tr>
	 					<tr>
	 					<td><p>Forma de pagamento:<br><?php echo $alvos['parcelas'] ?> </p></td>	
	 					</tr>	 					 					
	 					</table>
	 					</div>

	 					<div class="col-md-3">
	 					<table>
	 					<tr>
	 					<td><p><?php echo $alvos['processo_entrega'] ?></p></td>	
	 					</tr>
	 					<tr>
	 					<td><p>Data de emissão: <br><?php echo $alvos['data_pedido'] ?></p></td>	
	 					</tr>	 					 					
	 					</table>
	 					</div>


	 							
					</div>

					<div class="dropdown-divider"></div>
<?php
}
?>				
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