
	<?php 
		require_once("valida_secao.php");
		require_once("db/categorias.php");
		require_once("menu.php");

	 ?>

<section id="conteudo">	
	<fieldset>
		 <legend>
		  <table>
			 <tr>
				<td><h4>Categorias de Funcionários</h4></a></td>
			 </tr>
		  </table>
		 </legend>
		 <article>
			  <table class="table table-striped table-bordered table-hover">
			   <tr class="tr bg-dark text-light">
				<td class="tabletd">Descrição</td>
				<td class="tabletd">Excluir</td>
				<td class="tabletd">Editar</td>	
			   </tr>
			   <?php
			   		$listadecategorias = listar_categorias();
					foreach ($listadecategorias as $data):
					//Depende das funções dessa pagina lista_tarefas_bd ($conexao);
				?>
				<tr class="tr">
				<td class="td"><?=$data["descricao"]?></td>
				<td>
	                                <form action="modal_categoria.php" method="post">
	                                    <input type="hidden" name="id" value="<?=$data['id']?>" />
	                                    <button class="btn btn-danger">Remover</button>
	                                </form>
	            </td>
	            <td>
	                                <form action="form_editar_categoria.php" method="post">
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