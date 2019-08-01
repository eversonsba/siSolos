<?php
require_once("valida_secao.php");

	$siap = $_POST['siap'];
	require_once ("mensagem.php");
	$titulo = 'EXCLUSÃO DO FUNCIONÁRIO';
	$texto = 'Deseja realamente excluir os dados do sistema?';
	$link = 'confirma_exclusao_funcionario.php?siap='.$siap;
	$link_cancel = 'gerfuncionarios.php';
	confirma($titulo,$texto,$link,$link_cancel);
?>