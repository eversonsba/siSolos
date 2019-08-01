<?php 

$situacao = $_POST['descricao'];

require_once("db/situacao.php");

inserir_situacao($situacao);

header ("Location:gersituacao.php");

?>