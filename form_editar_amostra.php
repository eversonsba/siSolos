	<?php
		require_once("db/situacao.php");
		require_once("db/Clientes.php");
		require_once("db/tipoAnalise.php");
		require_once("db/amostras.php");
		require_once("valida_secao.php");
		require_once("menu.php");
		$indentificador = $_GET['identificador'];
		$dado = listar_amostra_unica($indentificador);
	?>	
	<section class="col-md-5">
	<h2>Amostras</h2>
	<form action="editarAmostras.php" method="post">
		<input type="hidden" name="identificador" value="<?=$indentificador?>" />
		Codigo:<input type="text" value="<?=$dado["identificador"]?>" name="novo" required><br>

		Situação:<select name="situacao" required>
			<option selected="selected" value="<?=$dado["id_situacao"]?>"><?=$dado["situacao"]?></option>
			<?php  
			$listadesituacao = listar_situacao();
					foreach ($listadesituacao as $data):
						?>
		<option value="<?=$data["id"]?>"><?=$data["descricao"]?></option>
		
		<?php
				 	endforeach
		?>
	</select><br>

		Solicitante:<select name="cliente" required>
			<option value="<?=$dado["id_cliente"]?>"><?=$dado["id_cliente"]." : ".$dado["nome"]." ".$dado["sobrenome"]?></option>
			<?php  
			$listadeclientes = listar_clientes();
					foreach ($listadeclientes as $data):
						?>
		<option value="<?=$data["identificador"]?>"><?=$data["identificador"]." : ".$data["nome"]." ".$data["sobrenome"]?></option>
		<?php
				 	endforeach
		?></select><br>

		Tipo de Analise:<select name="tipoAnalise" required>
			<option value="<?=$dado["id_tipo"]?>"><?=$dado["tipo"]?></option>
			<?php  
			$listadetipo = listar_tipo_analise();
					foreach ($listadetipo as $data):
						?>
		<option value="<?=$data["id"]?>"><?=$data["descricao"]?></option>
		
		<?php
				 	endforeach
		?>
		</select><br>
		
		<input class="btn btn-success mt-2" type="submit" value="Confirmar">
	</form>
	</section>
</div>
</body>
</html>