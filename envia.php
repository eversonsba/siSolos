<?
$name      = $_POST["name"];
$email     = $_POST["email"];
$assunto   = $_POST["assunto"];
$message  = $_POST["mensagem"];


global $email; //fun��o para validar a vari�vel $email no script todo

$data      = date("d/m/y");                     //fun��o para pegar a data de envio do e-mail
$ip        = $_SERVER['REMOTE_ADDR'];           //fun��o para pegar o ip do usu�rio
$navegador = $_SERVER['HTTP_USER_AGENT'];       //fun��o para pegar o navegador do visitante
$hora      = date("H:i");                       //para pegar a hora com a fun��o date

//aqui envia o e-mail para voc�
$envia = mail ("everson.paulino@gmail.com",                       //email aonde o php vai enviar os dados do form
      //"$assunto", //N�o altere � o assunto digitado no formul�rio html
      //Se voc� adicionou algum campo l� no inicio voc� dever� colocar logo abaixo tamb�m
      //para o script poder enviar corretamente para o seu email
      //Exemplo de como adicionar:  Campo_do_Formul�rio: $vari�vel\n
      //A vari�vel da senten�a acima deve ser a mesma que voc� colocou para o campo no alto deste script \n � para quebrar a linha para baixo
      // lembre que se for adicionar no inicio da linha abaixo de n�o excluir as " aspas,
      // Se for no final tamb�m " deve ter aspas.
      "Nome: $name\n Assunto:$assunto\nData: $data\nHora: $hora\nMensagem: $mensagem",
      "From: $email"
     );

if ($envia) {
     Header("location:index.html"); //essa � a p�gina de obrigado.
     }
else {
echo "Problemas no envio, por favor tente novamente";
echo "<a href='index.html'>Voltar</a>"; /*no lugar de index.htm, coloque
a p�gina para onde voc� deseja redirecionar caso o formul�rio apresente
algum problema no preenchimento.
*/
}

//aqui s�o as configura��es para enviar o e-mail para o visitante
$site   = "everson.paulino@gmail.com";    //o e-mail que aparecer� na caixa postal do visitante
$titulo = "Mensagem recebida";     //titulo da mensagem enviada para o visitante
$msg    = "Seu email foi enviado com sucesso. 

Obrigado pela visita ao meu site.
Espero que voc� tenha se divertido.

Em breve entrarei em contato com voc�.


Obs.: Essa � uma resposta autom�tica. N�o � necess�rio responder a esta mensagem."
;

//aqui envia o e-mail de auto-resposta para o visitante
mail("$email",
     "$titulo",
     "$msg",
     "From: $site"
    );

?>

