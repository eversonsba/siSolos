<?php 

$cidade = $_POST['cidade'];
$propriedade = $_POST['propriedade'];
$estado = $_POST['estado'];
$cep = $_POST['cep'];

require_once("db/endereco.php");

inserir_endereco($cidade,$propriedade,$estado,$cep);

header ("Location:gerendereco.php");
?>