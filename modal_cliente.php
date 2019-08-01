<?php
require_once("valida_secao.php");

	$identificador = $_GET['identificador'];
	require_once ("mensagem.php");
	$titulo = 'EXCLUSÃO DE CLIENTE';
	$texto = 'Deseja realamente excluir os dados do sistema?';
	$link = 'confirma_exclusao_cliente.php?identificador='.$identificador;
	$link_cancel = 'gerclientes.php';
	confirma($titulo,$texto,$link,$link_cancel);
?>