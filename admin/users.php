<?php
session_start();
if(!isset(  $_SESSION[namauser],  $_SESSION[passuser])) {
header("Location: ../index.php?ke=flogin");
} else {
?>
<html>
<head>
<title>Pakar</title>
<link rel="stylesheet" href="../inc/body.css" type="text/css" />
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
<script type="text/javascript" src="../inc/datepicker.js"></script>
<link rel="stylesheet" type="text/css" href="../inc/datepicker.css" media="screen" />
<style type="text/css">
<!--
.style3 {color: #FFFFFF; font-weight: bold; }
.style4 {color: #FFFFFF}
-->
</style>
</head>
<link rel="shortcut icon" href="../Gambar/favicon.ico"  />
<body>
<?php
include_once"../inc/koneksi.php";
echo"<center>";
?>
<?php $op = $_GET['op'];

if ($op == "input1")
{
 
 
$Id=$_POST['id'];
$Iduser=$_POST['id_user'];
$Nama=$_POST['nama'];
$NickName=$_POST['nick_name'];
$Sandi=md5	($_POST['sandi']);
$Hak=$_POST['hak'];
 
 ?>
  <form id="tambah" name="tambah" method="post" action="<?php echo ($_SERVER['PHP_SELF']); ?>?op=insert1" onSubmit="return cek()"> 
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
<td width="237" height="25"><input name="id_user" type="text" size="20" maxlength="50" /></td>
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

else if($op == "insert1")
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
 
        $query = "INSERT INTO userpass (id_user,sandi,hak) VALUES('$Iduser','$Sandi','$Hak')";
		$siswa = "INSERT into siswa (nis,nama_lengkap,jen_kel,tempat_lahir,tanggal_lahir,kelas,Jurusan,nama_ortu,id_user)
		VALUES ('$nis','$Nama','$jen_kel','$tempat_lahir','$tanggal_lahir','$kelas','$jurusan','$nama_ortu','$Iduser')";
        $hasil = mysql_query($query);
        $siswa1 = mysql_query($siswa);
        if (($hasil) and ($siswa1)) echo "<p>Proses Input Data Sukses</p>";
        else echo "<p>Proses Input Data Gagal<br></p>";
		
     }
 


else if ($op == "delete1")
{
$id = $_GET['id'];
 
   $query = "DELETE FROM userpass WHERE id = '$id'";
   $hasil = mysql_query($query);

        if ($hasil) echo "<p>Proses Hapus Data Sukses</p>";
        else echo "<p>Proses Hapus Data Gagal</p>";
}

else if ($op == "edit1")
{
 
 
   $nis = $_GET['nis'];
 
   $query = "SELECT * FROM siswa s,userpass u WHERE s.id_user=u.id_user and nis = '$nis'";
   $hasil = mysql_query($query);
   $data  = mysql_fetch_array($hasil);
 
   echo "<form method=\"post\" action=\"".$_SERVER['PHP_SELF'].
        "?op=update1\">"; ?>
<table width="350" cellpadding="0" cellspacing="1" class="keliling" align="center" bgcolor="#999999">
<tr>
<td height="25" colspan="3"class="style2 judul" id="can_pathway" ><div align="center" class="style4"><strong>Form Input Data </strong></div></td>
</tr>
<tr bgcolor="#FFFFFF">
<td width="92" height="25">NIS</td>
<td width="3" height="25">:</td>
<td width="237" height="25"><input type="text" size="10" maxlength="5" value="<?php echo"$data[nis]"; ?>" disabled="disabled" /></td>
</tr>
<tr bgcolor="#FFFFFF">
<td width="92" height="25">Username</td>
<td width="3" height="25">:</td>
<td width="237" height="25"><input name="id_user" type="text" size="20" maxlength="50" value="<?php echo"$data[id_user]"; ?>"/></td>
</tr>
<tr bgcolor="#FFFFFF">
<td width="92" height="25">Nama Lengkap</td>
<td width="3" height="25">:</td>
<td width="237" height="25"><input name="nama" type="text" size="35" maxlength="50" value="<?php echo"$data[nama_lengkap]"; ?>" /></td>
</tr>
<tr bgcolor="#FFFFFF">
<td width="92" height="25">Jenis Kelamin</td>
<td width="3" height="25">:</td>
<td width="237" height="25"><input name="jen_kel" type="radio" maxlength="50" value="L" <?php if($data[jen_kel]=="L") echo "checked";?> /> L &nbsp; &nbsp; <input name="jen_kel" type="radio" value="P" <?php if($data[jen_kel]=="P") echo "checked"; ?> /> P </td>
</tr>
<tr bgcolor="#FFFFFF">
<td width="92" height="25">Tempat Lahir</td>
<td width="3" height="25">:</td>
<td width="237" height="25"><input name="tempat_lahir" type="text" size="30" maxlength="50" value="<?php echo"$data[tempat_lahir]"; ?>"/></td>
</tr>
<tr bgcolor="#FFFFFF">
<td width="92" height="25">Tanggal Lahir</td>
<td width="3" height="25">:</td>
<td width="237" height="25"><input name="tanggal_lahir" type="text" size="30" maxlength="50" value="<?php echo"$data[tanggal_lahir]"; ?>"/></td>
</tr>
<tr bgcolor="#FFFFFF">
<td width="92" height="25">Nama Orang Tua</td>
<td width="3" height="25">:</td>
<td width="237" height="25"><input name="nama_ortu" type="text" size="30" maxlength="50" value="<?php echo"$data[nama_ortu]"; ?>" /></td>
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
<?php
   echo " <input type=\"hidden\" name=\"nis\" value=\"".$data['nis']."\">
   <input type=\"hidden\" name=\"id\" value=\"".$data['id']."\">
   <input type=\"submit\" name=\"submit\"
         value=\"Simpan Perubahan\" onclick=\"return confirm('Apa Data yang Anda Update sudah Benar')\">
</td>
</tr>
</table>
   </form>";
}

else if($op == "update1")
{
$nis=$_POST['nis'];
$id=$_POST['id'];
$Iduser=$_POST['id_user'];
$Nama=$_POST['nama'];
$jen_kel=$_POST['jen_kel'];
$tempat=$_POST['tempat_lahir'];
$tanggal=$_POST['tanggal_lahir'];
$nama_ortu=$_POST['nama_ortu'];
$Hak=$_POST['hak'];
 
        $query = "UPDATE siswa SET nama_lengkap='$Nama', tempat_lahir='$tempat', tanggal_lahir='$tanggal', jen_kel='$jen_kel',
		nama_ortu='$nama_ortu' where nis = '$nis'"; 
		$query1 = "UPDATE userpass SET id_user='$Iduser' WHERE id = '$id'";
        $hasil = mysql_query($query);
 		$user = mysql_query($query1);
        if ($hasil and $user) echo "<p>Proses Update Sukses</p>";
        else echo "<p>Proses Update Gagal".$query."</p>";
     }

$table = userpass;
$hal = $_GET[hal];

if(!isset($_GET['hal'])){ 
    $page = 1; 
} else { 
    $page = $_GET['hal']; 
}

$max_results = 10;


$from = (($page * $max_results) - $max_results); 
?>
<table border="1">
<tr id="can_pathway">
    <td align="center" width="100"><span class="style3">Username</span></td>
    <td align="center" width="100"><span class="style3">NIS</span></td>
    <td align="center" width="200"><span class="style3">Nama Lengkap</span></td>	
    <td align="center" width="100"><span class="style3">Kelas</span></td>
	<td align="center" width="50"><span class="style3">L/P</span></td>
    <td align="center" width="200"><span class="style3">Action</span></td>
</tr>
<?php echo "<b> <a href=\"".$_SERVER['PHP_SELF']."?op=input1&data\">Input Data</a></b><br />";
echo"<center>";

@$limit=$_GET['limit']; 


$start1=$_GET['start1'];				
if(!($start1 > 0)) {                         
$start1 = 0;
}

$eu = ($start1 - 0); 

if(!$limit > 0 ){ 
$limit = 5;    
}                             
$this1 = $eu + $limit; 
$back = $eu - $limit; 
$next = $eu + $limit; 


$_GET['id'];
$query2=" SELECT * FROM userpass u,siswa s where s.id_user=u.id_user and hak='User' order by nis";
$result2=mysql_query($query2);
echo mysql_error();
$nume=mysql_num_rows($result2);

$id = 1;
$query=" SELECT * FROM userpass u,siswa s where s.id_user=u.id_user and hak='User' order by nis limit $eu, $limit ";
$result=mysql_query($query);
echo mysql_error();


while($data = mysql_fetch_array($result))
{
if($bgcolor=='#f1f1f1'){$bgcolor='#ffffff';}
else{$bgcolor='#f1f1f1';}

   echo "<tr>";
   echo "<td align=center>".$data[id_user]."</td>";
   echo "<td align=center>".$data[nis]."</td>";
      echo "<td align=center>".$data[nama_lengkap]."</td>";
   echo "<td align=center>".$data[Kelas]." ".$data[Jurusan]."</td>";
      echo "<td align=center>".$data[jen_kel]."</td>";
   echo "<td align=center><a href=\"".$_SERVER['PHP_SELF']."?op=edit1&nis=".$data['nis']."\"> Ubah</a> | 
	<a href=\"".$_SERVER['PHP_SELF']."?op=delete1&id=".$data['id']."\" onclick=\"return confirm('Klik OK untuk menghapus Data = ".$data['nama_lengkap']."')\">Hapus</a> |
	<a href=\"javascript:popup('detail1.php?kddetail=".$data['id']."')\">Detail</a></td>";
   echo "</td>";
   echo "</tr>";
$id++;
}
echo "</table>";



echo "<table align = 'center' width='50%'><tr><td  align='left' width='30%'>";

if($back >=0) { 
echo "<a href='$page_name?start1=$back&limit=$limit'><font face='Verdana' size='2'>PREV</font></a>"; 
} 

echo "</td><td align=center width='30%'>";
$i=0;
$l=1;
for($i=0;$i < $nume;$i=$i+$limit){
if($i <> $eu){
echo " <a href='$page_name?start1=$i&limit=$limit'><font face='Verdana' size='2'>$l</font></a> ";
}
else { echo "<font face='Verdana' size='4' color=red>$l</font>";}
$l=$l+1;
}


echo "</td><td  align='right' width='30%'>";
if($this1 < $nume) { 
print "<a href='$page_name?start1=$next&limit=$limit'><font face='Verdana' size='2'>NEXT</font></a>";} 
echo "</td></tr></table>";


?>



</body>
</html>
<?php
}
?>