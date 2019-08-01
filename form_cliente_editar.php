	<?php 
		require_once("db/Clientes.php");
		require_once("db/endereco.php");
		require_once("valida_secao.php");
		require_once("menu.php");
		$identificador = $_GET['identificador'];
		$dado = listar_cliente_unico($identificador);			   		
					//Depende das funções dessa pagina lista_tarefas_bd ($conexao);
		?>
	<section class="col-md-5">
		<h2>Cliente</h2>
	<form action="editarCliente.php" method="post"><br>
		<input type="hidden" name="identificador" value="<?=$identificador?>" />
		CPF/CNPJ:<input type="number" value="<?=$dado["identificador"]?>" name="novo" required><br>
		Nome:<input size="50" type="text" value="<?=$dado["nome"]?>" name="nome" required><br>
		Sobrenome:<input size="50" type="text" value="<?=$dado["sobrenome"]?>" name="sobrenome" required><br>
		Senha:<input size="50" type="password" value="<?=$dado["senha"]?>" name="senha" required><br>
		Endereco:
		<select name="endereco" required>
		<option value="<?=$dado["id"]?>"><?=$dado["propriedade"]?></option>	
			<?php  
			$listadeendereco = listar_enderecos();
					foreach ($listadeendereco as $data):
						?>
		<option value="<?=$data["id"]?>"><?=$data["propriedade"]?></option>
		<seletion>
		<?php
				 	endforeach
		?>
		<input class="btn btn-success mt-2" type="submit" value="Confirmar">
	</form>
	</section>
	</div>	
</body>
</html>