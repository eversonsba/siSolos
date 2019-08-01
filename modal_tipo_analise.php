<?php
require_once("valida_secao.php");

	$id = $_POST['id'];
	require_once ("mensagem.php");
	$titulo = 'EXCLUSÃO DE TIPO DE ANÁLISE';
	$texto = 'Deseja realamente excluir os dados do sistema?';
	$link = 'confirma_exclusao_tipo_analise.php?id='.$id;
	$link_cancel = 'gertipoanalise.php';
	confirma($titulo,$texto,$link,$link_cancel);
?>