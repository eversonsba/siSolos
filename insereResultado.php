<?php 
$amostra=$_POST['amostra'];
$observacao=$_POST['observacao'];
$arquivo = $_FILES['arquivo']['name'];
$cliente=$_POST['cliente'];
$diretorio = 'resultados/';

$nome=$diretorio.$arquivo;

move_uploaded_file($_FILES['arquivo']['tmp_name'],$nome);

require_once("db/resultados.php");

inserir_resultados($observacao,$nome,$cliente,$amostra);

header ("Location:gerresultados.php");

?>