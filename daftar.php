<html>
<head>
<title>Pakar</title>
  <link rel="stylesheet" href="/inc/body.css" type="text/css" />
  <script language="javascript">
  function popup(sFlash) {
  	window.open(sFlash,'Window','scrollbar=no,width=500,height=400');
  }
  </script>
  <script language="javascript">
  function cek() {
  var nis = document.tambah.nis.value;
  var id_user = document.tambah.id_user.value;
  var nama = document.tambah.nama.value;
  var sandi = document.tambah.sandi.value;
  var sandi2 = document.tambah.sandi2.value;

  if(id=="") { alert("Isi Id !"); return false; }
  else if(id_user=="") { alert("ID User belum di isi  !"); return false; }
  else if(nama==""||sandi==""||sandi2=="") { alert("Isi Semua Data dengan benar !"); return false; }
  else if (sandi!=sandi2) { alert("Password Tidak sama  !"); return false; }
  else { return confirm('Apakaah anda yakin'); return true; }
  }
  </script>
  <script type="text/javascript" src="inc/datepicker.js"></script>
  <link rel="stylesheet" type="text/css" href="inc/datepicker.css" media="screen" />
  <style type="text/css">
  <!--
  .style3 {color: #FFFFFF; font-weight: bold; }
  .style4 {color: #FFFFFF}
  -->
  </style>
  </head>
  <link rel="shortcut icon" href="/Gambar/favicon.ico"  />
<body>
<?php
include_once"inc/koneksi.php";
echo"<center>";
?>
<?php $op = $_GET['op'];

if($op == "insert1")
     {
 
$nis=$_POST['nis'];
$Iduser=$_POST['id_user'];
$Nama=$_POST['nama'];
$jen_kel=$_POST['jen_kel'];
$tempat_lahir=$_POST['tempat_lahir'];
$tanggal_lahir=$_POST['tanggal_lahir'];
$kelas=$_POST['kelas'];
$jurusan=$_POST['jurusan'];
$nama_ortu=$_POST['nama_ortu'];
$Sandi=md5	($_POST['sandi']);
$Hak=$_POST['hak'];

$cek = mysql_query("SELECT * from siswa where nis ='$nis' ");
$cek1 = mysql_num_rows($cek);
if ($cek1>0) { echo "Nis yang and masukan sudah terdaftar".$msg=". Silahkan login kembali.<br> Atau jika anda lupa username dan password silahkan hubungi Administrator.<br><a href=\"index.php?ke=flogin\">Kembali</a>"; }
else { 
$cek2 = mysql_query("SELECT * from siswa where id_user='$Iduser' ");
$cek3 = mysql_num_rows($cek2);
if ($cek3>0) { echo "User name sudah terdaftar. Silahkan login kembali.<br> Atau jika anda lupa username dan password silahkan hubungi Administrator.<br><a href=\"index.php?ke=flogin\">Kembali</a>"; }
else { 

        $query = "INSERT INTO userpass (id_user,sandi,hak) VALUES('$Iduser','$Sandi','$Hak')";
		$siswa = "INSERT into siswa (nis,nama_lengkap,jen_kel,tempat_lahir,tanggal_lahir,kelas,Jurusan,nama_ortu,id_user)
		VALUES ('$nis','$Nama','$jen_kel','$tempat_lahir','$tanggal_lahir','$kelas','$jurusan','$nama_ortu','$Iduser')";
        $hasil = mysql_query($query);
        $siswa1 =   mysql_query($siswa);
        if (($hasil) and ($siswa1)) echo "<p>Proses Input Data Sukses.<br>
Nama Lengkap = ".$Nama."<br><br>
User Name = ".$Iduser."<br>
Passwor   = ".$_POST['sandi']."<br><a href=\"index.php?ke=flogin\">Kembali</a></p>";
        else echo "<p>Proses Input Data Gagal<br></p>";
		
     }
 }

}
else {
$Id=$_POST['id'];
$Iduser=$_POST['id_user'];
$Nama=$_POST['nama'];
$NickName=$_POST['nick_name'];
$Sandi=md5($_POST['sandi']);
$Hak=$_POST['hak'];
 
?>
<form id="tambah" name="tambah" method="post" action="<?php echo ($_SERVER['PHP_SELF']); ?>?ke=daftar&op=insert1" onSubmit="return cek()"> 
<table width="350" cellpadding="0" cellspacing="1" class="keliling" align="center" bgcolor="#999999">
<tr>
<td height="25" colspan="3"class="style2 judul" id="can_pathway" ><div align="center" class="style4"><strong>Form Input Data </strong></div></td>
</tr>
<tr bgcolor="#FFFFFF">
<td width="92" height="25">N I S </td>
<td width="3" height="25">:</td>
<td width="237" height="25"><input name="nis" type="text" size="10" maxlength="5" /> 
<a onMouseOver="alert('NIS diisi dengan angka,  2 digit pertama diisi dengan tahun masuk dan 000-999 =(jumlah Data)')">Help</a></td>
</tr>
<tr bgcolor="#FFFFFF">
<td width="92" height="25">Nama Lengkap</td>
<td width="3" height="25">:</td>
<td width="237" height="25"><input name="nama" type="text" size="35" maxlength="50" /></td>
</tr>
<tr bgcolor="#FFFFFF">
<td width="92" height="25">Jenis Kelamin </td>
<td width="3" height="25">:</td>
<td width="237" height="25"><input name="jen_kel" type="radio" value="L" />Laki-Laki 
<input name="jen_kel" type="radio" value="P" /> Perempuan
</td>
</tr>
<tr bgcolor="#FFFFFF">
<td width="92" height="25">Tempat Lahir</td>
<td width="3" height="25">:</td>
<td width="237" height="25"><input name="tempat_lahir" type="text" size="30" maxlength="25" /></td>
</tr>
<tr bgcolor="#FFFFFF">
<td width="92" height="25">Tanggal Lahir</td>
<td width="3" height="25">:</td>
<td width="237" height="25"><label>
              <input type="text" name="tanggal_lahir" readonly="true">
              <input name="button2" type=button onClick="displayDatePicker('tanggal_lahir', this);" value="Date">
              </label></td>
</tr>
<tr bgcolor="#FFFFFF">
<td width="92" height="25">Kelas</td>
<td width="3" height="25">:</td>
<td width="237" height="25"><select name="kelas">
<option value="10">10</option>
<option value="11">11</option>
<option value="12" selected="selected">12</option></select></td>
</tr>
<tr bgcolor="#FFFFFF">
<td width="92" height="25">Kelas</td>
<td width="3" height="25">:</td>
<td width="237" height="25"><select name="jurusan">
<option value="tgb">TGB</option>
<option value="titl">TITL</option>
<option value="tei">TEI</option>
<option value="rpl">RPL</option>
<option value="tkj">TKJ</option>
<option value="tsr">TSR</option>
<option value="tp">TP</option>
<option value="tpl">TPL</option>
<option value="tkr">TKR</option>
<option value="tsm">tsm</option></select></td>
</tr>
<tr bgcolor="#FFFFFF">
<td width="92" height="25">Nama Orang Tua</td>
<td width="3" height="25">:</td>
<td width="237" height="25"><input name="nama_ortu" type="text" size="30" maxlength="25" /></td>
</tr>
<tr bgcolor="#FFFFFF">
<td width="92" height="25">Username</td>
<td width="3" height="25">:</td>
<td width="237" height="25"><input name="id_user" type="text" size="20" maxlength="50" />  untuk login.</td>
</tr>
<tr bgcolor="#FFFFFF">
<td width="92" height="25">Password</td>
<td width="3" height="25">:</td>
<td width="237" height="25"><input name="sandi" type="password" size="31" maxlength="30" /></td>
</tr>
<tr bgcolor="#FFFFFF">
<td width="92" height="25">Ketik Ulang Password</td>
<td width="3" height="25">:</td>
<td width="237" height="25"><input name="sandi2" type="password" size="31" maxlength="30" /></td>
</tr>
<tr bgcolor="#FFFFFF">
<td width="92" height="25">Hak</td>
<td width="3" height="25">:</td>
<td width="237" height="25"><input name="hak" type="radio" value="User" checked />
User</td>
</tr>
<tr bgcolor="#FFFFFF">
<td width="92" height="25">&nbsp;</td>
<td width="3" height="25">&nbsp;</td>
<td width="237" height="25"> 
<input type="submit" name="submit" value="Simpan Data" >
<input name="reset" type="reset" value="Reset" /></td>
</tr></table>   </form>
<?php

}

?>



</body>
</html>
