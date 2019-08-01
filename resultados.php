
	<?php 
		require_once("db/resultados.php");
		require_once("valida_secao_cliente.php");
		require_once("menu_cliente.php");
	 ?>

<section id="conteudo">	
	<fieldset>
		 <legend>
		  <table>
			 <tr>
				<td><h4>Resultados</h4></a></td>
			 </tr>
		  </table>
		 </legend>
		 <article>
			  <table class="table" style="border: solid;">
			   <tr class="tr">
				<td class="tabletd">Observação</td>
				<td class="tabletd">Arquivo</td>
				<td class="tabletd">Data</td>
				<td class="tabletd">Cliente</td> 
				 
				</tr>
			   <?php
			   		$listaderesultados = lista_resultados_cliente($_SESSION['identificador']);
					foreach ($listaderesultados as $data):
					//Depende das funções dessa pagina lista_tarefas_bd ($conexao);
				?>
				<tr class="tr">
				<td class="td"><?=$data["observacao"]?></td>
				<td class="td"><a target="_blank" href="<?=$data["arquivo"]?>"><button class="btn btn-primary">Acessar Resultado</button></a></td>
				<td class="td"><?=$data["data"]?></td>
				<td class="td"><?=$data["cliente"]?></td>
				</tr>
				<?php
				 	endforeach
				?>
		     </table>
        </article>
	</fieldset>
	
  </section>
	
</body>
</html>