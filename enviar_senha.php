<?
include "config.php"; //inclui o arquivo de configura��es

$nome = $_POST["nome"];
$login = $_POST["login"];
$email = $_POST["email"];
$senha = $_POST["senha"];
$senha2 = $_POST["senha2"];

$db   = mysql_connect ($host, $login_db, $senha_db); //conecta ao mysql
$basedados = mysql_select_db($database); //conecta a base de dados

$confirmacao = mysql_query("SELECT * FROM `$tabela` WHERE login = '$login' AND email = '$email'", $db); //verifica se o login e a email conferem
  while ($row = mysql_fetch_array($confirmacao)) {
    $login = $row["login"]; //adiciona a variavel $login o login do usuario
$senha = $row["senha"]; //adiciona a variavel $senha a senha do usuario
    $email = $row["email"]; //adiciona a variavel $email o email do usuario
}

$contagem = mysql_num_rows($confirmacao); //traz o resultado da pesquisa acima

if ( $contagem == 1 ) {
  $msg  = "Recupera��o de senha" . chr(13) . chr(10);
  $msg .= "Senha enviada em " . date("d/m/Y") . ", os dados seguem abaixo: " . chr(13) . chr(10) . chr(10);
  $msg .= "Login : " . $login . chr(13) . chr(10);
  $msg .= "Email : " . $email . chr(13) . chr(10);
  $msg .= "Senha : " . $senha . chr(13) . chr(10);

  $Remetente = "pjacinto@crt.saude.gov.br"; //remetente do email, coloque o email do seu site

  mail($email, "Recupera��o de Senha",$msg,"From: $Remetente"); //campos do email na ordem, email destinho (n�o deve ser alterada), assunto, conteudo (n�o deve ser alterado), remetente (tamb�m n�o altere)
  
  echo "<div align=center><font size=2 face=Verdana, Arial, Helvetica, sans-serif>Sua senha foi enviada com sucesso para o email: $email.</font></div>"; //resposta se o email foi enviado com sucesso
  } else {
    echo "<div align=center><font size=2 face=Verdana, Arial, Helvetica, sans-serif>Seu login ou email est� incorreto.</font></div>"; //resposta se n�o foi possivel enviar o email
}
?>