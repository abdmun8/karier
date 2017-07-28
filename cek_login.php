<?php
session_start();
include_once "inc/koneksi.php";
$pass=md5($_POST['sandi']);

$login=mysql_query("SELECT * FROM userpass WHERE id_user='$_POST[nick_name]' AND sandi='$pass' AND hak='Admin'");
$ketemu=mysql_num_rows($login);
$sql=mysql_fetch_array($login);

$login1=mysql_query("SELECT * FROM userpass WHERE id_user='$_POST[nick_name]' AND sandi='$pass' AND hak='Pakar'");
$ketemu1=mysql_num_rows($login1);
$sql1=mysql_fetch_array($login1);

$login2=mysql_query("SELECT * FROM userpass WHERE id_user='$_POST[nick_name]' AND sandi='$pass' AND hak='User'");
$ketemu2=mysql_num_rows($login2);
$sql2=mysql_fetch_array($login2);

if ($ketemu > 0){
  //session_start();
  //session_register("namauser");
  //session_register("passuser");
  //session_register("admin");

  $_SESSION[namauser]=$sql[id_user];
  $_SESSION[passuser]=$sql[sandi];
  //$_SESSION[admin]=$sql[hak];
  header('location:admin/');
}

if ($ketemu1 > 0){
  //session_start();
  //session_register("namauser");
  //session_register("passuser");

  $_SESSION[namauser]=$sql1[id_user];
  $_SESSION[passuser]=$sql1[sandi];
  header('location:pakar/');
}
if ($ketemu2 > 0){
  //session_start();
  //session_register("namauser");
  //session_register("passuser");

  $_SESSION[namauser]=$sql2[id_user];
  $_SESSION[passuser]=$sql2[sandi];
  header('location:user/');
}

else{
echo "<center> Login Gagal User dan Password Salah <b></center>";
include_once"login.php";
}
?>
