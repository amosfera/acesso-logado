<?
$host  = "localhost"; //endere�o do seu servidor MySQL
$database = "cadastro"; //o database que conter� sua tabela, muitas vezes seu pr�prio login
$tabela  = "tbl_usuarios"; //o nome de sua tabela
$login_db = "root"; //login usado no MySQL
$senha_db = "usbw"; //senha usado no MySQL

$nome = $_POST["nome"];
$login = $_POST["login"];
$email = $_POST["email"];
$senha = $_POST["senha"];
$senha2 = $_POST["senha2"];

?>