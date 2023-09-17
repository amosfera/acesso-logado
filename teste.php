<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Teste de Acesso</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>

<?php include 'acesso.php'; 
$nome = $HTTP_COOKIE_VARS["login"]; //pegamos o cookie login, gravado anteriormente com o login
$pass = $HTTP_COOKIE_VARS["senha"]; //pegamos o cookie senha, gravado anteriormente com o login
?>


<?
if ( $contagem == 1 ) {
//aqui deixe aberto, pois iremos fechar somente no final da página
  ?>
<div align="center">OI!</div>
<?
  } else {
    echo "Você não está logado."; //aqui que terminamos o IF que iniciamos na página
}
  ?>
</body>
</html>
