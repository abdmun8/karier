<?php
if(!isset(  $_SESSION['namauser'],  $_SESSION['passuser'])) {
header("Location: ../index.php?ke=flogin");
} else {
?>
<html>
<head>
<title>Pakar</title>
<link rel="stylesheet" href="../inc/body.css" type="text/css" />
<script language="javascript">
function popup(sFlash) {
	window.open(sFlash,'Window','scrollbar=no,width=400,height=200');
}
</script>
<script language="javascript">
function cek() {
var id_user = document.tambah.id_user.value;
var nama = document.tambah.nama.value;
var sandi = document.tambah.sandi.value;
var sandi2 = document.tambah.sandi2.value;

if(id_user=="") { alert("ID User belum di isi  !"); return false; }
else if(nama==""||sandi==""||sandi2=="") { alert("Isi Semua Data dengan benar !"); return false; }
else if (sandi!=sandi2) { alert("Password Tidak sama  !"); return false; }
else { return confirm('Apakaah anda yakin'); return true; }
}
</script>
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

if ($op == "input")
{
 
 
$Id=$_POST['id'];
$Iduser=$_POST['id_user'];
$Nama=$_POST['nama'];
$NickName=$_POST['nick_name'];
$Sandi=md5	($_POST['sandi']);
$Hak=$_POST['hak'];
 
 ?>
   <form name="tambah" id="tambah" method="post" action="?op=insert" onSubmit="return cek()"> 
<table width="350" cellpadding="0" cellspacing="1" class="keliling" align="center" bgcolor="#999999">
<tr>
<td height="25" colspan="3"class="style2 judul" id="can_pathway" ><div align="center" class="style4"><strong>Form Input Data </strong></div></td>
</tr>
<tr bgcolor="#FFFFFF">
<td width="92" height="25">Nama Lengkap</td>
<td width="3" height="25">:</td>
<td width="237" height="25"><input name="nama" type="text" size="35" maxlength="50" /></td>
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
<td width="92" height="25">Ulangi Password</td>
<td width="3" height="25">:</td>
<td width="237" height="25"><input name="sandi2" type="password" size="31" maxlength="30" /></td>
</tr>

<tr bgcolor="#FFFFFF">
<td width="92" height="25">Hak</td>
<td width="3" height="25">:</td>
<td width="237" height="25"><input name="hak" type="radio" value="Pakar" checked />
Pakar</td>
</tr>
<tr bgcolor="#FFFFFF">
<td width="92" height="25">&nbsp;</td>
<td width="3" height="25">&nbsp;</td>
<td width="237" height="25"> 

<input type="submit" name="submit" value="Simpan Data" >
<input name="reset" type="reset" value="Reset" /></td>
</tr>
</table>
   </form>";
<?php
}

else if($op == "insert")
     {
 
$Iduser=$_POST['id_user'];
$Nama=$_POST['nama'];
$Sandi=md5	($_POST['sandi']);
$Hak=$_POST['hak'];
 
        $query = "INSERT INTO userpass (id_user,sandi,hak) VALUES('$Iduser','$Sandi','$Hak')";
        $query1 = "INSERT INTO pakar (nama_pakar,id_user) VALUES('$Nama','$Iduser')";

        $hasil = mysql_query($query);
         $pakar = mysql_query($query1);
        if ($hasil and $pakar) echo "<p>Proses Input Data Sukses</p>";
        else echo "<p>Proses Input Data Gagal".$hasil.$pakar."</p>";
     }
 


else if ($op == "delete")
{
$id = $_GET['id'];
 
   $query = "DELETE FROM userpass WHERE id = '$id'";
   $hasil = mysql_query($query);

        if ($hasil) echo "<p>Proses Hapus Data Sukses</p>";
        else echo "<p>Proses Hapus Data Gagal</p>";
}

else if ($op == "edit")
{
 
 
   $id = $_GET['id'];
 
   $query = "SELECT * FROM userpass u, pakar p WHERE u.id_user=p.id_user and id = '$id'";
   $hasil = mysql_query($query);
   $data  = mysql_fetch_array($hasil);
 
   echo "<form method=\"post\" action=\"".$_SERVER['PHP_SELF'].
        "?op=update\">"; ?>
<table width="350" cellpadding="0" cellspacing="1" class="keliling" align="center" bgcolor="#999999">
<tr>
<td height="25" colspan="3"class="style2 judul" id="can_pathway" ><div align="center" class="style4"><strong>Form Input Data </strong></div></td>
</tr>
<tr bgcolor="#FFFFFF">
<td width="92" height="25">ID User</td>
<td width="3" height="25">:</td>
<td width="237" height="25"><input type="text" size="10" name="id_p" value="<?php echo"$data[id_p]"; ?>" disabled="disabled" /></td>
</tr>
<tr bgcolor="#FFFFFF">
<td width="92" height="25">Username</td>
<td width="3" height="25">:</td>
<td width="237" height="25"><input name="id_user" type="text" size="20" maxlength="50" value="<?php echo"$data[id_user]"; ?>"/></td>
</tr>
<tr bgcolor="#FFFFFF">
<td width="92" height="25">Nama Lengkap</td>
<td width="3" height="25">:</td>
<td width="237" height="25"><input name="nama" type="text" size="35" maxlength="50" value="<?php echo"$data[nama_pakar]"; ?>" /></td>
</tr>
</tr>
<tr bgcolor="#FFFFFF">
<td width="92" height="25">Password</td>
<td width="3" height="25">:</td>
<td width="237" height="25"><input type="password" size="31" maxlength="50" value="<?php echo"$data[sandi]"; ?>" disabled="disabled"/></td>
</tr>
<tr bgcolor="#FFFFFF">
<td width="92" height="25">Hak</td>
<td width="3" height="25">:</td>
<td width="237" height="25"><input name="hak" type="radio" value="Pakar" checked />
Pakar</td>
</tr>
<tr bgcolor="#FFFFFF">
<td width="92" height="25">&nbsp;</td>
<td width="3" height="25">&nbsp;</td>
<td width="237" height="25"> 
<?php
   echo " <input type=\"hidden\" name=\"id\" value=\"".$data['id']."\">
   <input type=\"hidden\" name=\"sandi\" value=\"".$data['sandi']."\">
   <input type=\"submit\" name=\"submit\"
         value=\"Simpan Perubahan\" onclick=\"return confirm('Apa Data yang Anda Update sudah Benar')\">
</td>
</tr>
</table>
   </form>";
}

else if($op == "update")
     {
 
 
$Id=$_POST['id'];
$Id_p=$_POST['id_p'];
$Iduser=$_POST['id_user'];
$Nama=$_POST['nama'];
$Sandi=md5	($_POST['sandi']);
$Hak=$_POST['hak'];
 		$query1 = "UPDATE userpass SET id_user='$Iduser', sandi='$Sandi' WHERE id = '$Id'";
        $query = "UPDATE pakar SET nama_pakar='$Nama' WHERE id_p = '$Id_p'"; 
        $hasil = mysql_query($query1);
 		$pkr = mysql_query($query);
        if ($hasil and $pkr) echo "<p>Proses Update Sukses</p>";
        else echo "<p><b>Proses Update Gagal<b></p>";
     }

$table = "userpass";
$hal = $_GET['hal'];

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
    <td align="center"  width="100"><span class="style3">ID User</span></td>
    <td align="center" width="200"><span class="style3">Username</span></td>
    <td align="center" width="200"><span class="style3">Nama Lengkap</span></td>
    <td align="center" width="200"><span class="style3">Action</span></td>
</tr>
<?php echo "<b> <a href=\"".$_SERVER['PHP_SELF']."?op=input&data\">Input Data</a></b><br />";
echo"<center>";

@$limit=$_GET['limit']; 


$start=$_GET['start'];				
if(!($start > 0)) {                         
$start = 0;
}

$eu = ($start - 0); 

if(!$limit > 0 ){ 
$limit = 10;    
}                             
$this1 = $eu + $limit; 
$back = $eu - $limit; 
$next = $eu + $limit; 


$_GET['id'];
$query2=" SELECT * FROM userpass u,pakar p where u.id_user=p.id_user and hak='Pakar' ";
$result2=mysql_query($query2);
echo mysql_error();
$nume=mysql_num_rows($result2);

$id = 1;
$query=" SELECT * FROM userpass u,pakar p where u.id_user=p.id_user and hak='Pakar' limit $eu, $limit ";
$result=mysql_query($query);
echo mysql_error();


while($data = mysql_fetch_array($result))
{
if($bgcolor=='#f1f1f1'){$bgcolor='#ffffff';}
else{$bgcolor='#f1f1f1';}

   echo "<tr>";
   echo "<td align=center width=10>".$data[id]."</td>";
   echo "<td align=center>".$data[id_user]."</td>";
   echo "<td align=center>".$data[nama_pakar]."</td>";
   echo "<td align=center><a href=\"".$_SERVER['PHP_SELF']."?op=edit&id=".$data['id']."\"> Ubah</a> | 
	<a href=\"".$_SERVER['PHP_SELF']."?op=delete&id=".$data['id']."\" onclick=\"return confirm('Klik OK untuk menghapus Data = ".$data['nama']."')\">Hapus</a> |
	<a href=\"javascript:popup('detail.php?kddetail=".$data['id']."')\">Detail</a></td>";
   echo "</td>";
   echo "</tr>";
$id++;
}
echo "</table>";



echo "<table align = 'center' width='50%'><tr><td  align='left' width='30%'>";

if($back >=0) { 
echo "<a href='$page_name?start=$back&limit=$limit'><font face='Verdana' size='2'>PREV</font></a>"; 
} 

echo "</td><td align=center width='30%'>";
$i=0;
$l=1;
for($i=0;$i < $nume;$i=$i+$limit){
if($i <> $eu){
echo " <a href='$page_name?start=$i&limit=$limit'><font face='Verdana' size='2'>$l</font></a> ";
}
else { echo "<font face='Verdana' size='4' color=red>$l</font>";}
$l=$l+1;
}


echo "</td><td  align='right' width='30%'>";
if($this1 < $nume) { 
print "<a href='$page_name?start=$next&limit=$limit'><font face='Verdana' size='2'>NEXT</font></a>";} 
echo "</td></tr></table>";


?>



</body>
</html>
<?php
}
?>