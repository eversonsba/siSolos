<?php
require_once("valida_secao.php");

	$id = $_POST['id'];
	require_once ("mensagem.php");
	$titulo = 'EXCLUSÃO DE Categoria';
	$texto = 'Deseja realamente excluir os dados do sistema?';
	$link = 'confirma_exclusao_categoria.php?id='.$id;
	$link_cancel = 'gercategorias.php';
	confirma($titulo,$texto,$link,$link_cancel);
?>