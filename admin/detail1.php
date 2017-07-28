<?php
session_start();
if(!isset(  $_SESSION[namauser],  $_SESSION[passuser])) {
header("Location: ../index.php?ke=flogin");
} else {
?>
<html>
<head>
<link href="../inc/body.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style1 {color: #FFFFFF}
-->
</style>
</head>
<link rel="shortcut icon" href="../img/favicon.ico" />
<?php
if (! $_GET['kddetail']=="") {
include_once "../inc/koneksi.php";

$sql="SELECT * FROM userpass u,siswa s WHERE s.id_user=u.id_user and id='".$_GET['kddetail']."'";
$qry=mysql_query($sql) or die ("Mysql Gagal !");
$data=mysql_fetch_array($qry);

$ID=$data['id'];
$NIS =$data['nis'];
$IDUSER =$data['id_user'];
$NAMA =$data['nama_lengkap'];
$NAMA_ORTU =$data['nama_ortu'];
$TEMPAT =$data['tempat_lahir'];
$TANGGAL =$data['tanggal_lahir'];
$HAK =$data['hak'];
}
?>

<body>
<table width="350" cellpadding="0" cellspacing="1" class="keliling" align="center" bgcolor="#999999">
<tr>
<td height="25" colspan="3" align="center" class="judul style1" id="can_pathway"><div align="center" class="style1"><strong>Data Detail</strong></div></td>
</tr>
<tr bgcolor="#FFFFFF">
<td width="96" height="25" class="judul2">Username</td>
<td width="10" height="25">:</td>
<td width="238" height="25"><?php echo $IDUSER;?></td>
</tr>
<tr bgcolor="#FFFFFF">
<td width="96" height="25" class="judul2">NIS</td>
<td width="10" height="25">:</td>
<td width="238" height="25"><?php echo $NIS;?></td>
</tr>
<tr bgcolor="#FFFFFF">
<td width="96" height="25" class="judul2">Nama Lengkap</td>
<td width="10" height="25">:</td>
<td width="238" height="25"><?php echo $NAMA;?></td>
</tr>
<tr bgcolor="#FFFFFF">
<td width="96" height="25" class="judul2">Tempat Lahir</td>
<td width="10" height="25">:</td>
<td width="238" height="25"><?php echo $TEMPAT;?></td>
</tr>
<tr bgcolor="#FFFFFF">
<td width="96" height="25" class="judul2">Tanggal Lahir</td>
<td width="10" height="25">:</td>
<td width="238" height="25"><?php echo $TANGGAL;?></td>
</tr>
<tr bgcolor="#FFFFFF">
<td width="96" height="25" class="judul2">Nama Ortu</td>
<td width="10" height="25">:</td>
<td width="238" height="25"><?php echo $NAMA_ORTU;?></td>
</tr>
<tr bgcolor="#FFFFFF">
<td width="96" height="25" class="judul2">Hak Akses</td>
<td width="10" height="25">:</td>
<td width="238" height="25"><?php echo $HAK;?></td>
</tr>
</table>
<hr>
<center>
<h2>Riwayat Konsultasi</h2>
<table border="1" align="center">
<tr align="center" id="can_pathway"><td><span class="style1">NO</span></td><td><span class="style1">
Tanggal Konsul</span></td><td><span class="style1">Riwayat Konsul</span></td></tr>
<?php
$sql1="SELECT * FROM siswa s,analisa_hasil a WHERE s.nis=a.nis and s.nis='$NIS'";
$qry1=mysql_query($sql1) or die ("Query Gagal !");
$brs = mysql_num_rows($qry1);
if ($brs==0) { echo"<tr align=\"center\"><td colspan=4>Siswa ini Belum Konsultasi</td></tr>"; }
else {
$no = 1;
while($data1=mysql_fetch_array($qry1)){ 
echo "<tr align=\"center\">";
echo "<td>".$no."</td>";
echo "<td>".$data1['tgl_konsul']."</td><td width=155>".$data1['riwayat_karier']."</td>";
echo "<tr>";
$no++;
}
}

?>
</table></center>
</body>
</html>
<?php
}
?>