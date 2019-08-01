	<?php 
		require_once("valida_secao.php");
		require_once("menu.php");
		require_once("db/categorias.php");
		require_once("db/funcionarios.php");
		$siap = $_POST['siap'];
		$dado = listar_funcionario_unico($siap);
			   		
					//Depende das funções dessa pagina lista_tarefas_bd ($conexao);
		?>
		<section class="col-md-5">
		<h2>Funcionários</h2>
		<form action="atualizaFuncionario.php" method="post"><br>
		<input type="hidden" name="siap" value="<?=$siap?>"/>
		SIAP:<input type="number" value="<?=$dado["siap"]?>" name="novo"><br>
		Nome:<input type="text" value="<?=$dado["nome"]?>" name="nome"><br>
		Sobrenome:<input type="text" value="<?=$dado["sobrenome"]?>" name="sobrenome"><br>
		Senha:<input type="password" value="<?=$dado["senha"]?>" name="senha"><br>
		E-mail:<input type="email" value="<?=$dado["email"]?>" name="email"><br>
		Categoria:
		<select name="categoria">
		<option value="<?=$dado["cod_categoria"]?>"><?=$dado["descricao"]?></option>
			<?php  
			$listadecategorias = listar_categorias();
					foreach ($listadecategorias as $data):
						?>
		<option value="<?=$data["id"]?>"><?=$data["descricao"]?></option>
		
		<seletion>
		<?php
				 	endforeach
		?>
		<input class="btn btn-success mt-2" type="submit" value="Confirmar">
	</form>
	</form>
	</section>
</seletion>
</select>
</div>
</body>
</html>