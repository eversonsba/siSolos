	<?php 
		require_once("db/Clientes.php");
		require_once("db/endereco.php");
		require_once("valida_secao.php");
		require_once("menu.php");
			   		
					//Depende das funções dessa pagina lista_tarefas_bd ($conexao);
		?>
		<h2 class="px-3 py-2">Inserir Novo Cliente</h2>
		<section class="col-md-5">
		<form action="insereCliente.php" method="post"><br>
		CPF/CNPJ:<input size="50" type="number" name="identificador" required><br>
		Nome:<input size="50" type="text" name="nome" required><br>
		Sobrenome:<input size="50"type="text" name="sobrenome" required><br>
		Senha:<input size="50"type="password" name="senha" required><br>
		Endereço:
		<select name="endereco" required>
			<option value="">-- Selecione o Endereço --</option>
			<?php  
			$listadeendereco = listar_enderecos();
					foreach ($listadeendereco as $data):
						?>
		<option value="<?=$data["id"]?>"><?=$data["id"]."-".$data["propriedade"]?></option>
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