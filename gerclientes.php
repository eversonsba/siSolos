
	<?php
		require_once("valida_secao.php");
		require_once("db/Clientes.php");
		require_once("menu.php");

	 ?>

<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script src="js/datatables_pt-br.js"></script>
	<script type="text/javascript" language="javascript">
		$(document).ready(function() {
			$('#tabela').DataTable({			
				"processing": true,
				"serverSide": true,
				"ajax": {
					"url": "proc_pesq_clientes2.php",
					"type": "POST"
				}
			});
		} );
	</script>
</head>
<body>
	<h1>Clientes Cadastrados</h1>
	<table id="tabela" class="table table-striped table-bordered table-hover" style="width: 100%">
		<thead>
			<tr>
				<th>CNPJ/CPF</th>
				<th>Nome</th>
				<th>Sobrenome</th> 
				<th>Endereço</th> 
				<th>Ação</th>
			</tr>
		</thead>
		</table>
</body>

</html>