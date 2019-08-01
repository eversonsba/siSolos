
<?php require_once("valida_secao.php");
	require_once("menu.php");
 ?>
  	<h2 class="px-3 py-2">Inserir Tipo de Análise</h2>
 	<section class="col-md-9">
	<form action="insereTipoAnalise.php" method="post">
		Descrição:<input type="text" name="descricao" required><br>
		Valor:<br><input type="number" name="valor" required><br>
		<input class="btn btn-success mt-2" type="submit" value="Confirmar">
	</form>
	</section>
</div>
</body>
</html>