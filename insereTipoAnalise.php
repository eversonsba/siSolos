<?php 

$descricao = $_POST['descricao'];
$valor = $_POST['valor'];

require_once("db/tipoAnalise.php");

inserir_tipo_analise($descricao,$valor);
header ("Location:gertipoanalise.php");
?>