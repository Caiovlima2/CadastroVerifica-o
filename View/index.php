<!DOCTYPE html>

<html>

<head>

	<title>Cadastro</title>

	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
	<script type="text/javascript" src="../bootstrap/js/jquery.js"></script>
	<script type="text/javascript" src="../bootstrap/js/bootstrap.js"></script>
	<script type="text/javascript" src="../bootstrap/jquery-mask/src/jquery.mask.js"></script>
	<script type="text/javascript" src="../bootstrap/js/funcoes.js"></script>

</head>

<body>

	<form method="POST" id="form" action="../Actions/cadastrar.action.php">
  		
  		<div class="form-group">
   		
   			<label for="Nome">Nome Completo:*</label>
    		<input type="text" class="form-control" id="nome" placeholder="Caio Vicente Lima Pereira" minlength="4" maxlength="100" name="nome">
  		
  		</div>
  		
  		<div class="form-group">
    	
    		<label for="Email">E-Mail:*</label>
    		<input type="email" class="form-control" id="email" placeholder="caio.vlima@hotmail.com" name="email">
  		
  		</div>

  		<label>Sexo*:</label>
  	
  		<div class="form-check">
		 	
		 	<input class="form-check-input" type="radio" name="radioSexo" id="rdbSexo1" value="M" checked>
		  	<label class="form-check-label" for="radio1">Masculino</label>
		
		</div>
		
		<div class="form-check">
		
		  <input class="form-check-input" type="radio" name="radioSexo" id="rdbSexo2" value="F">
		  <label class="form-check-label" for="radio2">Feminino</label>
		
		</div>

		<div class="form-group">
   		
   			<label for="Nome">Telefone:*</label>
    		<input type="text" class="form-control" id="telefone" placeholder="+55 (11) 97982-0802" name="telefone">
  		
  		</div>

  		<div class="form-group">
   		
   			<label for="Data">Data de Nascimento:*</label>
    		<input type="date" class="form-control" id="data" name="data">
  		
  		</div>
  
  		<button type="submit" class="btn btn-primary" style="width: 100%" id="btnEnviar">Enviar</button>

	</form>

</body>

</html>