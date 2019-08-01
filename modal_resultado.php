<?php
require_once("valida_secao.php");

	$id = $_POST['id'];
	$arquivo = $_POST['arquivo'];
	require_once ("mensagem.php");
	$titulo = 'EXCLUSÃO DE RESULTADOS';
	$texto = 'Deseja realamente excluir os dados do sistema?';
	$link = 'confirma_exclusao_resultado.php?id='.$id;
	$link_cancel = 'gerresultados.php';
	confirma($titulo,$texto,$link,$link_cancel);
?>