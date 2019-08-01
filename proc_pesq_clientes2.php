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
	3 =>'propriedade',
	4 =>'acao'
	
);

//Obtendo registros de número total sem qualquer pesquisa
$result_user = "SELECT c.identificador, c.nome, c.sobrenome,e.propriedade  FROM clientes c
iNNER JOIN enderecos e ON c.cod_endereco = e.id ";

$resultado_user =mysqli_query($conn, $result_user);
$qnt_linhas = mysqli_num_rows($resultado_user);

//Obter os dados a serem apresentados
$result_usuarios = "SELECT c.identificador, c.nome, c.sobrenome,e.propriedade  FROM clientes c
iNNER JOIN enderecos e ON c.cod_endereco = e.id ";

if( !empty($requestData['search']['value']) ) {   // se houver um parâmetro de pesquisa, $requestData['search']['value'] contém o parâmetro de pesquisa
 $result_usuarios.=" WHERE ( identificador LIKE '".$requestData['search']['value']."%' ";    
 $result_usuarios.=" OR nome LIKE '".$requestData['search']['value']."%' ";
 $result_usuarios.=" OR propriedade LIKE '".$requestData['search']['value']."%' ";
 $result_usuarios.=" OR sobrenome LIKE '".$requestData['search']['value']."%' )";
}

$resultado_usuarios=$resultado_user;
$totalFiltered = mysqli_num_rows($resultado_usuarios);
//Ordenar o resultado
$result_usuarios.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."  LIMIT ".$requestData['start']." ,".$requestData['length']."   ";
$resultado_usuarios=mysqli_query($conn, $result_usuarios);

// Ler e criar o array de dados
$dados = array();
while( $row_usuarios =mysqli_fetch_array($resultado_usuarios) ) {  
	$dado = array(); 
	$dado[] = $row_usuarios["identificador"];
	$dado[] = utf8_encode($row_usuarios["nome"]);
	$dado[] = utf8_encode($row_usuarios["sobrenome"]);
	$dado[] = utf8_encode($row_usuarios["propriedade"]);
	$dado[] = " <a href='form_cliente_editar.php?identificador=".$row_usuarios["identificador"]. "'><button type='button' class='btn btn-warning'>Editar</button></a>
				 <a href='modal_cliente.php?identificador=".$row_usuarios["identificador"] . "'><button type='button' class='btn btn-danger'>Excluir</button> </a>";
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
