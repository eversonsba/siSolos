<?php 
require_once("valida_secao.php");
require_once("db/amostras.php");
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
					"url": "proc_pesq_amostra.php",
					"type": "POST"
				}
			});
		} );
	</script>
</head>
<body>
	<h1>Amostras Cadastradas</h1>
	<table id="tabela" class="table table-striped table-bordered table-hover">
		<thead>
			<tr>
				<th>Código</th>
				<th>Situação</th>
				<th>Cliente</th> 
				<th>CPF/CNPJ</th> 
				<th>Tipo</th>
				<th>Valor</th>
				<th>Entrada</th>
				<th>Ação</th>
			</tr>
		</thead>
		</table>
</body>

</html>