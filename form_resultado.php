	<?php 
	require_once("valida_secao.php");
	require_once("menu.php");
	require_once("db/Clientes.php");
	require_once("db/funcionarios.php");
	require_once("db/amostras.php")

					//Depende das funções dessa pagina lista_tarefas_bd ($conexao);
	?>

	<h2 class="px-3 py-2">Inserir Resultado</h2>
	<section class="col-md-5">
		<form enctype="multipart/form-data" action="insereResultado.php" method="post"><br>
			Amostra:
			<select name="amostra" required>
				<option value="">-- Selecione a Amostra --</option>
				<?php  
				$listadeamostras = listar_amostras_resultado();
				foreach ($listadeamostras as $data):
					?>
					<option value="<?=$data["identificador"]?>"><?=$data["identificador"]?></option>

					<?php
				endforeach
				?>
			</select>
			<br>	
			Observação:<textarea name="observacao" row="10" cols="26"></textarea>
			<br>	
			Arquivo: <input type="file" name="arquivo" required><br><br>
			CPF/CNPJ - Cliente:
			<select name="cliente" required>
				<option value="">-- Selecione o Cliente --</option>
				<?php  
				$listadeclientes = listar_clientes();
				foreach ($listadeclientes as $data):
					?>
					<option value="<?=$data["identificador"]?>"><?=$data["identificador"]." : ".$data["nome"]." ".$data["sobrenome"]?></option>


					<?php
				endforeach
				?>
			</select>
			<br><br>
			<input class="btn btn-success mt-2" type="submit" value="Confirmar">
		</form>
	</section>
</div>
</body>
</html>