<?php 
require_once("valida_secao.php");
$id = $_POST['id'];
$descricao = $_POST['descricao'];
$valor = $_POST['valor'];

require_once("db/tipoAnalise.php");

atualizar_tipo_analise($id,$descricao,$valor);
header ("Location:gertipoanalise.php");
?>