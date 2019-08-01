<?php
session_start();
//Caso o usuário não esteja autenticado, limpa os dados e redireciona
if ( !isset($_SESSION['siap']) or !isset($_SESSION['senha']) ) {
    //Limpa
    unset ($_SESSION['siap']);
    unset ($_SESSION['senha']);
	
	//Destrói
    session_destroy();
 
    //Redireciona para a página de autenticação
    header ("Location:login.html");
}
?>