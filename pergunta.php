<?php 
require_once("valida_secao.php");
require_once("db/amostras.php");
require_once("menu.php");

?>
<head>
	<meta charset="utf-8">
		<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
		<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
		<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
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
<fieldset>
	<legend>
		<table>
			<tr>
				<td><h4>Amostras Cadastradas</h4></a></td>
			</tr>
		</table>
	</legend>
	<body>
		<table id="tabela" class="display" style="width: 100%">
			<thead>
				<tr>
					<td>Código</td>
					<td>Situação</td>
					<td>Cliente</td> 
					<td>CPF/CNPJ</td> 
					<td>Tipo da amostra</td>
					<td>Valor</td>
					<td>Data de Entrada</td>
					<td>Excluir</td>
					<td>Editar</td>
				</tr>
			</thead>
		</table>
		</body>
			
  
  
 
   
</html>