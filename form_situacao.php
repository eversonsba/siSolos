<?php require_once("valida_secao.php");
	  require_once("menu.php");
 ?>
 		<h2 class="px-3 py-2">Situação da análise</h2>
	<section class="col-md-5">

	<form action="insereSituacao.php" method="post">
		Descrição:<input type="text" name="descricao" placeholder="Status da analise" required><br>
	<input class="btn btn-success mt-2" type="submit" value="Confirmar">
	</form>
	</section>
</body>
</html>