<?php
session_start();
//Caso o usuário não esteja autenticado, limpa os dados e redireciona
if ( !isset($_SESSION['identificador']) or !isset($_SESSION['senha']) ) {
    //Limpa
    unset ($_SESSION['identificador']);
    unset ($_SESSION['senha']);
	
	//Destrói
    session_destroy();
 
    //Redireciona para a página de autenticação
    header ("Location:login_cliente.html");
}
?>