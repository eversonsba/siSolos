<?php 
require_once("db/categorias.php");
$codigo = $_GET['id'];

require_once ("mensagem.php");

$titulo = 'EXCLUSÃO DE CATEGORIA';
$link = 'gercategorias.php';
$res=delete_categoria($codigo);


if($res == 0){
	$texto = 'Os dados não foram excluidos do sistema.';
	erro($titulo,$texto,$link);
}else{
	$texto = 'Os dados foram excluidos do sistema.';
	sucesso($titulo,$texto,$link);
}
 ?>