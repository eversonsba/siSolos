<?
$name      = $_POST["name"];
$email     = $_POST["email"];
$assunto   = $_POST["assunto"];
$message  = $_POST["mensagem"];


global $email; //função para validar a variável $email no script todo

$data      = date("d/m/y");                     //função para pegar a data de envio do e-mail
$ip        = $_SERVER['REMOTE_ADDR'];           //função para pegar o ip do usuário
$navegador = $_SERVER['HTTP_USER_AGENT'];       //função para pegar o navegador do visitante
$hora      = date("H:i");                       //para pegar a hora com a função date

//aqui envia o e-mail para você
$envia = mail ("everson.paulino@gmail.com",                       //email aonde o php vai enviar os dados do form
      //"$assunto", //Não altere é o assunto digitado no formulário html
      //Se você adicionou algum campo lá no inicio você deverá colocar logo abaixo também
      //para o script poder enviar corretamente para o seu email
      //Exemplo de como adicionar:  Campo_do_Formulário: $variável\n
      //A variável da sentença acima deve ser a mesma que você colocou para o campo no alto deste script \n é para quebrar a linha para baixo
      // lembre que se for adicionar no inicio da linha abaixo de não excluir as " aspas,
      // Se for no final também " deve ter aspas.
      "Nome: $name\n Assunto:$assunto\nData: $data\nHora: $hora\nMensagem: $mensagem",
      "From: $email"
     );

if ($envia) {
     Header("location:index.html"); //essa é a página de obrigado.
     }
else {
echo "Problemas no envio, por favor tente novamente";
echo "<a href='index.html'>Voltar</a>"; /*no lugar de index.htm, coloque
a página para onde você deseja redirecionar caso o formulário apresente
algum problema no preenchimento.
*/
}

//aqui são as configurações para enviar o e-mail para o visitante
$site   = "everson.paulino@gmail.com";    //o e-mail que aparecerá na caixa postal do visitante
$titulo = "Mensagem recebida";     //titulo da mensagem enviada para o visitante
$msg    = "Seu email foi enviado com sucesso. 

Obrigado pela visita ao meu site.
Espero que você tenha se divertido.

Em breve entrarei em contato com você.


Obs.: Essa é uma resposta automática. Não é necessário responder a esta mensagem."
;

//aqui envia o e-mail de auto-resposta para o visitante
mail("$email",
     "$titulo",
     "$msg",
     "From: $site"
    );

?>

