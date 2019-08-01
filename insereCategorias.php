<?php 

$descricao = $_POST['descricao'];

require_once("db/categorias.php");

inserir_categoria($descricao);

header ("Location:gercategorias.php");?>