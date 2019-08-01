<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sistema_solos";

$conn = mysqli_connect($servername, $username, $password, $dbname);

//Receber a requisão da pesquisa 
$requestData= $_REQUEST;


//Indice da coluna na tabela visualizar resultado => nome da coluna no banco de dados

//Código	Situação	Cliente	CPF/CNPJ	Tipo da amostra	Valor	Data de Entrada	
$columns = array( 
	0 =>'identificador', 
	1 =>'nome',
	2 =>'sobrenome',
	3 =>'cod_endereco',
	4 =>'acao'
	
);

//Obtendo registros de número total sem qualquer pesquisa
$result_client = "SELECT identificador, nome, sobrenome, cod_endereco FROM clientes ";

$resultado_cliente =mysqli_query($conn, $result_client);
$qnt_linhas = mysqli_num_rows($resultado_cliente);

//Obter os dados a serem apresentados
$result_clientes = "SELECT identificador, nome, sobrenome, cod_endereco FROM clientes ";

if( !empty($requestData['search']['value']) ) {   // se houver um parâmetro de pesquisa, $requestData['search']['value'] contém o parâmetro de pesquisa
 $result_clientes.=" AND ( identificador LIKE '".$requestData['search']['value']."%' ";    
 $result_clientes.=" OR nome LIKE '".$requestData['search']['value']."%' ";
 $result_clientes.=" OR sobrenome LIKE '".$requestData['search']['value']."%' )";
}

$resultado_cliente=$resultado_client;
$totalFiltered = mysqli_num_rows($resultado_cliente);

//Ordenar o resultado
$result_clientes.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."  LIMIT ".$requestData['start']." ,".$requestData['length']."   ";
$resultado_cliente=mysqli_query($conn, $result_clientes);

// Ler e criar o array de dados
$dados = array();
while( $row_clientes =mysqli_fetch_array($resultado_cliente) ) {  
	$dado = array(); 
	$dado[] = $row_clientes["identificador"];
	$dado[] = $row_clientes["nome"];
	$dado[] = $row_clientes["sobrenome"];
	$dado[] = $row_clientes["cod_endereco"];
	$dado[] = " <a href='form_cliente_editar.php?identificador=".$row_clientes["identificador"]. "'><button type='button' class='btn btn-warning'>Editar</button></a>
				 <a href='modal_cliente.php?identificador=".$row_clientes["identificador"] . "'><button type='button' class='btn btn-danger'>Excluir</button> </a>";
	$dados[] = $dado;
}

// <a href="test.php?tmpString=Teste">link teste</a>

//Cria o array de informações a serem retornadas para o Javascript
$json_data = array(
	"draw" => intval( $requestData['draw'] ),//para cada requisição é enviado um número como parâmetro
	"recordsTotal" => intval( $qnt_linhas ),  //Quantidade de registros que há no banco de dados
	"recordsFiltered" => intval( $totalFiltered ), //Total de registros quando houver pesquisa
	"data" => $dados   //Array de dados completo dos dados retornados da tabela 
);

echo json_encode($json_data);  //enviar dados como formato json
