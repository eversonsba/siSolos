<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Formulario Tipos de analise</title>
</head>
<body>
	<?php 
		require_once("db/tipoAnalise.php");
		require_once("valida_secao.php");
		require_once("menu.php");

		$id = $_POST['id'];

		$data = listar_tipo_analise_unica($id);

	?>
		<section class="col-md-5">
		<h2>Tipos de Análise</h2>
	<form action="editarTipoAnalise.php" method="post">
		<input type="hidden" name="id" value="<?=$data['id']?>" />
		Descricao:<input type="text" value="<?=$data['descricao']?>" name="descricao" required><br>
		Valor:<input type="number" step=".01" min="0" max="9999"value="<?=$data['valor']?>" name="valor" required><br>
		<input class="btn btn-success mt-2" type="submit" value="Confirmar">
	</form>
	</section>
</div>
	
</body>
</html>