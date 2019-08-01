	<?php
	require_once("db/situacao.php");
	require_once("db/Clientes.php");
	require_once("db/tipoAnalise.php");
	require_once("valida_secao.php");
	require_once("menu.php");
	?>	
	<h2 class="px-3 py-2">Inserir Amostra para Analise</h2>
	<section class="col-md-5">

		<form action="insereAmostras.php" method="post">
			Codigo:<input type="number" name="indentificador" class="mb-2" required><br>

			Situação:<select name="situacao" required><br>
				<?php  
				$listadesituacao = listar_situacao();
				foreach ($listadesituacao as $data):
					?>
					<option value="<?=$data["id"]?>"><?=$data["descricao"]?></option>
					<?php
				endforeach
				?>
			</select>

			<br>Solicitante:<select name="cliente" required>
				<option value="">-- Selecione o Cliente --</option>
				<?php  
				$listadeclientes = listar_clientes();
				foreach ($listadeclientes as $data):
					?>
					<option value="<?=$data["identificador"]?>"><?=$data["identificador"]." : ".$data["nome"]." ".$data["sobrenome"]?></option>
					<?php
				endforeach
				?></select> 
				
				Tipo de Analise:<br><select name="tipoAnalise" required>
					<option value="">-- Selecione o tipo --</option>
					<?php  
					$listadetipo = listar_tipo_analise();
					foreach ($listadetipo as $data):
						?>
						<option value="<?=$data["id"]?>"><?=$data["descricao"]?></option>

						<?php
					endforeach
					?>
				</select><br>
				<div style="display: flex;">
					<input class="btn btn-success mt-2 mr-2" type="submit" value="Confirmar">
					<a href='form_cliente.php'class="btn btn-secondary mt-2" value="cadastrar novo Cliente">Novo Cliente<a>
					</div>

				</form>
			</section>
		</div>
	</body>
	</html>