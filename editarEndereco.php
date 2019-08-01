<?php 
require_once("valida_secao.php");
$id = $_POST['id'];
$cidade = $_POST['cidade'];
$propriedade = $_POST['propriedade'];
$estado = $_POST['estado'];
$cep = $_POST['cep'];

require_once("db/endereco.php");

atualizar_endereco($id,$cidade,$propriedade,$estado,$cep);

header ("Location:gerendereco.php");
?>