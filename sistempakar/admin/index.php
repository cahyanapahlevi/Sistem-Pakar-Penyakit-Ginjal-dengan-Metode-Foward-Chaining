<table width="60%" border="1" align="center" bgcolor="#A4C8FF">
<form method="POST" action="admin/cek_login.php">
  <tr> <td colspan="2"><h2 align=center>LOGIN | REGISTRATION</h2></td>
    </tr>
  <tr> <td valign="top"><strong>Pilih Login</strong></td>
    <td><label>
      <input name="login" type="radio" value="pasien" /> Pasien
      &nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;
      <input name="login" type="radio" value="admin" /> Admin
    </label>
  </tr>
  <tr> <td><strong>Username</strong></td>
    <td><input name="username" type="text" size="30" required></td> </tr>
  <tr><td><strong>Password</strong></td>
  <td><input type="password" name="password" size="30" required></td></tr>
  <tr><td colspan="2">
    <center><input type="submit" name="Submit" value="LOGIN" class="button" style="width:100%"/></td>
    </center>
  </tr>
  <tr>
    <td colspan="2">Belum punya Akun ? <a href=home.php?menu=registrasi>Registrasi</a></td>
    </tr>
 </form>
</table>
<br />
