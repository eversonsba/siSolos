<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Fomulario de funcionarios</title>
</head>
<body>

	<?php 
		require_once("db/categorias.php");
		require_once("valida_secao.php");
		require_once("menu.php");
			   		
					//Depende das funções dessa pagina lista_tarefas_bd ($conexao);
		?>
		<h2 class="px-3 py-2">Inserir Funcionário</h2>
		<section class="col-md-5">
		<form action="insereFuncionario.php" method="post"><br>
		SIAP:<input  type="number" name="siap" required><br>
		Nome:<input size="50"type="text" name="nome" required><br>
		Sobrenome:<input size="50"type="text" name="sobrenome" required><br>
		Senha:<input size="50" type="password" name="senha" required><br>
		E-mail:<input size="50" type="email" name="email" required><br>
		Categoria:
		<select name="categoria" required>
			<option value="">--Selecione uma categoria--</option>
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
	</section>
</seletion>
</select>
</div>
</body>
</html>