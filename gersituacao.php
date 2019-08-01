	<?php 
	require_once("valida_secao.php");
	require_once("db/situacao.php");
	require_once("menu.php");
	?>
	<fieldset>
		<legend>
			<table>
				<tr>
					<td><h4>Situação de Amostras</h4></a></td>
				</tr>
			</table>
		</legend>
		<article>
			<table class="table text-center table-bordered table-hover container-fluid">
				<tr class="tr bg-dark text-light">
					<td class="tabletd">ID</td>
					<td class="tabletd">Descrição</td>
					<td class="tabletd">Excluir</td>
					<td class="tabletd">Editar</td> 	
				</tr>
				<?php
				$listadesituacao = listar_situacao();
				foreach ($listadesituacao as $data):
					//Depende das funções dessa pagina lista_tarefas_bd ($conexao);
					?>
					<tr class="tr">
						<td class="td"><?=$data["id"]?></td>
						<td class="td"><?=$data["descricao"]?></td>
						<td>
							<form action="modal_situacao.php" method="post">
								<input type="hidden" name="id" value="<?=$data['id']?>" />
								<button class="btn btn-danger">Remover</button>
							</form>
						</td>
						<td>
							<form action="form_editar_situacao.php" method="post">
								<input type="hidden" name="id" value="<?=$data['id']?>" />
								<button class="btn btn-danger">Editar</button>
							</form>
						</td>
					</tr>
					<?php
				endforeach
				?>
			</table>
		</article>
	</fieldset>
</div>
</body>
</html>