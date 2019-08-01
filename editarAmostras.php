<?php 

$identificador=$_POST['identificador'];
$identificadorNovo=$_POST['novo'];
$situacao=$_POST['situacao'];
$cliente=$_POST['cliente'];
$tipo=$_POST['tipoAnalise'];

require_once("db/amostras.php");
atualizar_amostra($identificador,$identificadorNovo,$situacao,$cliente,$tipo);
header ("Location:geramostras.php");
?>