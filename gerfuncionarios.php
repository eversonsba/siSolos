	<?php 
		require_once("valida_secao.php");
		require_once("db/funcionarios.php");
		require_once("menu.php");
	 ?>

	
	<fieldset>
		 <legend>
		  <table>
			 <tr>
				<td><h4>Funcionários</h4></a></td>
			 </tr>
		  </table>
		 </legend>
		 <article>
			  <table id="tb1" class="table table-striped table-bordered table-hover">
			   <tr class="tr bg-dark text-light" border=solid>
				<td class="tabletd">SIAP</td>
				<td class="tabletd">Nome</td>
				<td class="tabletd">Sobrenome</td> 
				<td class="tabletd">E-mail</td>
				<td class="tabletd">Cargo</td>
				<td class="tabletd">Excluir</td>
				<td class="tabletd">Editar</td>

			   </tr>
			   <?php
			   		$listadefuncionarios = listar_funcionarios();
					foreach ($listadefuncionarios as $data):
					//Depende das funções dessa pagina lista_tarefas_bd ($conexao);
				?>
				<tr class="tr">
				<td class="td"><?=$data["siap"]?></td>
				<td class="td"><?=$data["nome"]?></td>
				<td class="td"><?=$data["sobrenome"]?></td>
				<td class="td"><?=$data["email"]?></td>
				<td class="td"><?=$data["descricao"]?></td>
				<td>
	                                <form action="modal_funcionario.php" method="post">
	                                    <input type="hidden" name="siap" value="<?=$data['siap']?>" />
	                                    <button class="btn btn-danger">Remover</button>
	                                </form>
	            </td>
	            <td>
	                                <form action="form_funcionarios_editar.php" method="post">
	                                    <input type="hidden" name="siap" value="<?=$data['siap']?>" />
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