	<?php
		require_once("db/categorias.php");
		require_once("valida_secao.php");
		require_once("menu.php");

		$id = $_POST['id'];
		$data = listar_categoria_unica($id);

	?>
	<section class="">
		<h2>Categorias de Funcionários</h2><br>
	<form action="editarCategorias.php" method="post">
		<input type="hidden" name="id" value="<?=$id?>" />
		Descrição:<br><input type="text" size="50" value ="<?=$data['descricao']?>" name="descricao" required><br>
	<input class="btn btn-success mt-2" type="submit" value="Confirmar">
	</form>
	</section>
</div>
</body>
</html>