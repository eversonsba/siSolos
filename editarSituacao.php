<?php 
require_once("valida_secao.php");
$id = $_POST['id'];
$situacao = $_POST['descricao'];

require_once("db/situacao.php");

atualizar_situacao($id,$situacao);
header ("Location:gersituacao.php");

?>