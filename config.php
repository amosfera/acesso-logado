<?
$host  = "localhost"; //endere�o do seu servidor MySQL
$database = "cadastro"; //o database que conter� sua tabela, muitas vezes seu pr�prio login
$tabela  = "tbl_usuarios"; //o nome de sua tabela
$login_db = "root"; //login usado no MySQL
$senha_db = "usbw"; //senha usado no MySQL
$nome = $HTTP_COOKIE_VARS["login"]; //pegamos o cookie login, gravado anteriormente com o login
$pass = $HTTP_COOKIE_VARS["senha"]; //pegamos o cookie senha, gravado anteriormente com o login

?>