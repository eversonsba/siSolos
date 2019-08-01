	<?php require_once("valida_secao.php");
	require_once("menu.php");
	?>
	<h2 class="px-3 py-2">Inserir Novo Cargo</h2>
	<section class="col-md-10">
		<form action="insereCategorias.php" method="post">
			Nome do Cargo:<input size="50" type="text" name="descricao" required><br>
			<input class="btn btn-success mt-2" type="submit" value="Confirmar">
		</form>
	</section>
</div>
</body>
</html>