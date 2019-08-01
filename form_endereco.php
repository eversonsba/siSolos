<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Formulario Endereco</title>
</head>
<body>
	<?php require_once("valida_secao.php");
		require_once("menu.php")
	 ?>
	 <section class="col-md-5">
	<h2>Endereço</h2>
	<form action="insereEndereco.php" method="post">
		Cidade:<input size="50" type="text" name="cidade" required><br>
		Propriedade:<input size="50" type="text" name="propriedade" required><br>
		Estado:<br><select name="estado" required >
				<option value="">-- Selecione um Estado --</option>
				<option value="AC">Acre</option>
				<option value="AL">Alagoas</option>
				<option value="AP">Amapá</option>
				<option value="AM">Amazonas</option>
				<option value="BA">Bahia</option>
				<option value="CE">Ceará</option>
				<option value="DF">Distrito Federal</option>
				<option value="ES">Espírito Santo</option>
				<option value="GO">Goiás</option>
				<option value="MA">Maranhão</option>
				<option value="MT">Mato Grosso</option>
				<option value="MS">Mato Grosso do Sul</option>
				<option value="MG">Minas Gerais</option>
				<option value="PA">Pará</option>
				<option value="PB">Paraíba</option>
				<option value="PR">Paraná</option>
				<option value="PE">Pernambuco</option>
				<option value="PI">Piauí</option>
				<option value="RJ">Rio de Janeiro</option>
				<option value="RN">Rio Grande do Norte</option>
				<option value="RS">Rio Grande do Sul</option>
				<option value="RO">Rondônia</option>
				<option value="RR">Roraima</option>
				<option value="SC">Santa Catarina</option>
				<option value="SP">São Paulo</option>
				<option value="SE">Sergipe</option>
				<option value="TO">Tocantins</option>
</select>
		<br>CEP:<input size="50" type="number" name="cep" maxlength="8"><br>
		<input class="btn btn-success mt-2" type="submit" value="Confirmar">
	</form>
	</section>
</body>
</html>