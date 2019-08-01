<?php 

$id = $_POST['id'];
$descricao = $_POST['descricao'];

require_once("db/categorias.php");

atualizar_categoria($id,$descricao);

header ("Location:gercategorias.php");
?>