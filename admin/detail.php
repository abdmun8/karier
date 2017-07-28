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

$sql="SELECT * FROM userpass u,pakar p WHERE u.id_user=p.id_user and id ='".$_GET['kddetail']."'";
$qry=mysql_query($sql) or die ("Mysql Gagal !");
$data=mysql_fetch_array($qry);

$ID=$data['id'];
$IDUSER =$data['id_user'];
$NAMA =$data['nama_pakar'];

$HAK =$data['hak'];
}
?>

<body>
<table width="350" cellpadding="0" cellspacing="1" class="keliling" align="center" bgcolor="#999999">
<tr>
<td height="25" colspan="3" align="center" class="judul style1" id="can_pathway"><div align="center" class="style1"><strong>Data Detail</strong></div></td>
</tr>
<tr bgcolor="#FFFFFF">
<td width="96" height="25" class="judul2">ID User</td>
<td width="10" height="25">:</td>
<td width="238" height="25">  <?php echo $ID;?></td>
</tr>
<tr bgcolor="#FFFFFF">
<td width="96" height="25" class="judul2">Username</td>
<td width="10" height="25">:</td>
<td width="238" height="25"><?php echo $IDUSER;?></td>
</tr>
<tr bgcolor="#FFFFFF">
<td width="96" height="25" class="judul2">Nama Lengkap</td>
<td width="10" height="25">:</td>
<td width="238" height="25"><?php echo $NAMA;?></td>
</tr>
<tr bgcolor="#FFFFFF">
<td width="96" height="25" class="judul2">Hak Akses</td>
<td width="10" height="25">:</td>
<td width="238" height="25"><?php echo $HAK;?></td>
</tr>
</table>
</body>
</html>
<?php
}
?>