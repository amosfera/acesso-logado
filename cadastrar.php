<form name="cadastrar" method="post" action="enviar_cadastro.php">
  <table width="400" border="0" cellspacing="0" cellpadding="0">
    <tr> 
      <td width="150"><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Nome:</font></td>
      <td width="250"><input name="nome" type="text" id="nome" maxlength="75"></td>
    </tr>
    <tr> 
      <td><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Login:</font></td>
      <td><input name="login" type="text" id="login" maxlength="30"></td>
    </tr>
    <tr> 
      <td><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Senha:</font></td>
      <td><input name="senha" type="password" id="senha" maxlength="30"></td>
    </tr>
    <tr> 
      <td><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Repetir 
        Senha:</font></td>
      <td><input name="senha2" type="password" id="senha2" maxlength="30"></td>
    </tr>
    <tr> 
      <td><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Email:</font></td>
      <td><input name="email" type="text" id="email" maxlength="50"></td>
    </tr>
    <tr> 
      <td>&amp;nbsp;</td>
      <td>&amp;nbsp;</td>
    </tr>
    <tr> 
      <td colspan="2"><div align="center"> 
          <input name="enviar" type="submit" id="enviar" value="Enviar Cadastro">
          <input name="limpar" type="reset" id="limpar" value="Limpar Dados">
        </div></td>
    </tr>
  </table>
</form>