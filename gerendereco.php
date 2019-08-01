
	<?php 
		require_once("db/endereco.php");
		require_once("valida_secao.php");
		require_once("menu.php");
	 ?>

<section id="conteudo">	
	<fieldset>
		 <legend>
		  <table>
			 <tr>
				<td><h4>Endereços</h4></a></td>
			 </tr>
		  </table>
		 </legend>
		 <article>
			  <table class="table text-center table-bordered table-hover container-fluid">
			   <tr class="tr bg-dark text-light">
			   	<td class="tabletd">Código</td>
				<td class="tabletd">Cidade</td>
				<td class="tabletd">Propriedade</td>
				<td class="tabletd">Estado</td>
				<td class="tabletd">CEP</td>
				<td class="tabletd">Excluir</td>
				<td class="tabletd">Editar</td>
			   </tr>
			   <?php
			   		$listadeendereco = listar_enderecos();
					foreach ($listadeendereco as $data):
					//Depende das funções dessa pagina lista_tarefas_bd ($conexao);
				?>
				<tr class="tr">
					<td class="td"><?=$data["id"]?></td>
					<td class="td"><?=$data["cidade"]?></td>
					<td class="td"><?=$data["propriedade"]?></td>
					<td class="td"><?=$data["estado"]?></td>
					<td class="td"><?=$data["cep"]?></td>
					<td>
	                                <form action="modal_endereco.php" method="post">
	                                    <input type="hidden" name="id" value="<?=$data['id']?>" />
	                                    <button class="btn btn-danger">Remover</button>
	                                </form>
	                </td>
					<td>
	                                <form action="form_editar_endereco.php" method="post">
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
	
  </section>
</div>	
</body>
</html>