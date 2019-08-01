	<?php 

		require_once("db/situacao.php");
		require_once("valida_secao.php");
		require_once("menu.php");
		$id = $_POST['id'];

		$data = listar_situacao_unica($id);


	 ?>
	<section class="col-md-5">
	<h2>Situação</h2>
	<form action="editarSituacao.php" method="post">
		<input type="hidden" name="id" value="<?=$data['id']?>" />
		Descricao:<input type="text" value="<?=$data['descricao']?>" name="descricao" required><br>
		<input class="btn btn-success mt-2" type="submit" value="Confirmar">
	</form>
	</section>
	</div>	
</body>
</html>