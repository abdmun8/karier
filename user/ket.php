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
<p>Di Halaman ini Anda dapat Berkonsultasi 
tentang Type pesawat sesuai attribut yang dipilih</p>
<p>attribut disini contohnya adalah ( Tipe Mesin, Posisi Sayap, Bentuk 
  Sayap, Bentuk Ekor dan Bulges ).</p>
<p>Di sini Konsultasi dibagi menjadi 2 ( konsultasi 1 dan Konsultasi 2 
  ).</p>
<p>Dimana Konsultasi 1 pemilihan attributnya lengkap kalau yang Konsultasi 
  2 pemilihan dengan attribut yang<em><strong> Unique</strong></em> yaitu 
  attribu (<em> Bulges ) </em>jadi dimana memilih attribut ini dapat langsung 
  tahu type pesawatnya..</p>
<p>Dibawah ini Tabel Type Pesawatnya :</p>
<div align="center">
  <table width="100%" height="228" border="1">
    <tr>
      <td width="20%" rowspan="2">&nbsp;</td>
      <td colspan="4" id="can_pathway"><div align="center" class="style1 style1">Type 
        Pesawat </div></td>
    </tr>
    <tr bgcolor="">
      <td width="25%"><div align="center"><strong> C130 </strong></div></td>
      <td width="20%" ><div align="center"><strong> C141 </strong></div></td>
      <td width="20%"><div align="center"><strong> C5A </strong></div></td>
      <td width="25%"><div align="center"><strong> B747 </strong></div></td>
    </tr>
    <tr bgcolor="#666666">
      <td><strong>Tipe Mesin </strong></td>
      <td><div align="center">PROP</div></td>
      <td><div align="center"> JET </div></td>
      <td><div align="center">JET</div></td>
      <td><div align="center">JET</div></td>
    </tr>
    <tr>
      <td><p><strong>Posisi Sayap</strong></p>
        </td>
      <td><div align="center">HIGH</div></td>
      <td><div align="center">HIGH</div></td>
      <td><div align="center">HIGH</div></td>
      <td><div align="center"> LOW </div></td>
    </tr>
    <tr bgcolor="#999999">
      <td><strong>Bentuk Sayap </strong></td>
      <td><div align="center">CONVENTIONAL</div></td>
      <td><div align="center">SWEPT-BACK</div></td>
      <td><div align="center">SWEPT-BACK</div></td>
      <td><div align="center">SWEPT-BACK</div></td>
    </tr>
    <tr>
      <td><strong>Bentuk Ekor </strong></td>
      <td><div align="center">CONVENTIONAL</div></td>
      <td><div align="center">T-TAIL</div></td>
      <td><div align="center">T-TAIL</div></td>
      <td><div align="center">CONVENTIONAL</div></td>
    </tr>
    <tr bgcolor="#CCCCCC">
      <td><strong>Bulges</strong></td>
      <td><div align="center"> UNDER WINGS </div></td>
      <td><div align="center">AFT WINGS</div></td>
      <td><div align="center"> NONE </div></td>
      <td><div align="center">AFT COCKFIT</div></td>
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