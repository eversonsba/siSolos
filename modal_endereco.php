<?php
require_once("valida_secao.php");

	$id = $_POST['id'];
	require_once ("mensagem.php");
	$titulo = 'EXCLUSÃO DE ENDEREÇOS';
	$texto = 'Deseja realamente excluir os dados do sistema?';
	$link = 'confirma_exclusao_endereco.php?id='.$id;
	$link_cancel = 'gerendereco.php';
	confirma($titulo,$texto,$link,$link_cancel);
?>