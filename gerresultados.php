	<?php 
	require_once("db/resultados.php");
	require_once("valida_secao.php");
	require_once("menu.php");
	?>
	<section id="conteudo">	
		<fieldset>
			<legend>
				<table>
					<tr>
						<td><h4>Resultados das Análises</h4></a></td>
					</tr>
				</table>
			</legend>
			<article>
				<table class="table text-center" style="border: solid;">
					<tr class="tr">
						<td class="tabletd">Amostra</td>
						<td class="tabletd">Observação</td>
						<td class="tabletd">Arquivo</td>
						<td class="tabletd">Data</td>
						<td class="tabletd">Cliente</td> 
						<td class="tabletd">CPF/CNPJ</td> 
						<td class="tabletd">Remover</td>  
					</tr>
					<?php
					$listaderesultados = listar_resultados();
					foreach ($listaderesultados as $data):
					//Depende das funções dessa pagina lista_tarefas_bd ($conexao);
						?>
						<tr class="tr">
							<td class="td"><?=$data["identificador_amostra"]?></td>
							<td class="td"><?=$data["observacao"]?></td>
							<td class="td"><a target="_blank" href="<?=$data["arquivo"]?>">Resultado</a></td>
							<td class="td"><?=$data["data"]?></td>
							<td class="td"><?=$data["cliente"]." ".$data["sobrenome"] ?></td>
							<td class="td"><?=$data["identificador"]?></td>
							<td>
								<form action="confirma_exclusao_resultado.php" method="post">
									<input type="hidden" name="id" value="<?=$data['id']?>" />
									<input type="hidden" name="arquivo" value="<?=$data['arquivo']?>" />
									<button class="btn btn-danger">Remover</button>
								</form>
							</td>
						</tr>
						<?php
					endforeach
					?>
				</table>
			</article>
		</fieldset>
		
	</section>
</div>
</body>
</html>