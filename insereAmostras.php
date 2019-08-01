<?php 

$identificador=$_POST['indentificador'];
$situacao=$_POST['situacao'];
$cliente=$_POST['cliente'];
$tipo=$_POST['tipoAnalise'];

require_once("db/amostras.php");

inserir_amostras($identificador,$situacao,$cliente,$tipo);

header ("Location:geramostras.php");
?>