<?php 
require_once("db/resultados.php");
$id = $_POST['id'];
$arquivo = $_POST['arquivo'];
delete_resultado($id);
unlink($arquivo);

header ("Location:gerresultados.php");


 ?>