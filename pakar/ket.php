<?php
session_start();
if(!isset(  $_SESSION[namauser],  $_SESSION[passuser])) {
header("Location: ../index.php?ke=flogin");
} else {
?>
<html>
<head>
<title>Halaman Pakar</title>
<link rel="stylesheet" href="../inc/body.css" type="text/css">
<link rel="shortcut icon" href="../img/favicon.ico" />
<style type="text/css">
<!--
.style1 {
	color: #FFFFFF;
	font-weight: bold;
}
-->
</style>
</head>
<body><div align="center">
<h1>Tabel Bimbingan Karir:</h1>
<div align="center">
  <table width="100%" border="1">
    <tr>
      <td width="40%">&nbsp;</td>
      <td colspan="3" id="can_pathway"><div align="center" class="style1 style1">Bimbingan Karir</div></td>
    </tr>
    <tr bgcolor="">
      <td width="20%" id="can_pathway"><div align="center" class="style1 style1"><strong> Karakteristik Siswa</strong></div></td>
	<td width="20%"><div align="center"><strong> Mahasiswa</strong></div></td>
      <td width="20%" ><div align="center"><strong> Karyawan</strong></div></td>
      <td width="20%"><div align="center"><strong> Wiraswasta</strong></div></td>
      </tr>
    <tr bgcolor="#666666">
      <td><strong>Kecerdasan </strong></td>
      <td><div align="center">Cerdas</div></td>
      <td><div align="center"> Rata-rata</div></td>
      <td><div align="center">cerdas</div></td>
    </tr>
    <tr>
      <td><p><strong>Watak</strong></p>
        </td>
      <td><div align="center">Disiplin</div></td>
      <td><div align="center">Tanggungjawab</div></td>
      <td><div align="center">Tanggungjawab</div></td>
    </tr>
    <tr bgcolor="#999999">
      <td><strong>Temperamen / Sifat </strong></td>
      <td><div align="center">Periang</div></td>
      <td><div align="center">Agresif</div></td>
      <td><div align="center">Agresif</div></td>
      </tr>
    <tr>
      <td><strong>Sikap</strong></td>
      <td><div align="center">Sopan</div></td>
      <td><div align="center">Sopan</div></td>
      <td><div align="center">Sopan</div></td>
      </tr>
    <tr bgcolor="#CCCCCC">
      <td><strong>Hobi Membaca</strong></td>
      <td><div align="center"> Ya </div></td>
      <td><div align="center"> Ya </div></td>
      <td><div align="center"> Tidak  </div></td>
      </tr>
    <tr>
      <td><strong>Minat	</strong></td>
      <td><div align="center">Ada</div></td>
      <td><div align="center">Ada</div></td>
      <td><div align="center">Ada</div></td>
      </tr>
    <tr bgcolor="#CCCCCC">
      <td><strong>Motvasi</strong></td>
      <td><div align="center"> Semangat </div></td>
      <td><div align="center"> Semangat </div></td>
      <td><div align="center"> Kurang Semangat  </div></td>
      </tr>    <tr>
      <td><strong>Kalangan Ekonomi </strong></td>
      <td><div align="center">Menengah</div></td>
      <td><div align="center">Rendah</div></td>
      <td><div align="center">Menengah</div></td>
      </tr>
    <tr bgcolor="#CCCCCC">
      <td><strong>Penampilan</strong></td>
      <td><div align="center"> Rapi  </div></td>
      <td><div align="center"> Kurang Rapi </div></td>
      <td><div align="center"> Kurang Rapi </div></td>
      </tr>
  </table>
</div>
<br />
<p>&nbsp;</p>
</div>
</body>
</html>
<?php
}
?>