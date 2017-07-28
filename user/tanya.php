<head>
<script language="javascript">
function simpan() {
if (confirm('Apakah Anda akan menyimpan hasil Konsultasi ?'))
{  window.location.href='simpan.php'; }
else { window.location.href='index.php';}
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
<?php
session_start();
include_once "../inc/koneksi.php";
$user = $_SESSION[namauser];

	//cek load
	$siswa = "SELECT * from siswa where id_user='$user'";
	$siswa1 = mysql_query($siswa) or die ("Query Salah");
	$siswa2 = mysql_fetch_array($siswa1);
	$nis = $siswa2['nis'];

	$query = mysql_query("SELECT * from analisa_hasil where nis='$nis' order by tgl_konsul DESC");
	$hasil = mysql_fetch_array($query);
	$brs = mysql_num_rows($query);
	if ($brs==0) { $tgl1 = date("Y-m-d")+10; }
	else { $tgl1 = $hasil['tgl_konsul']; }
	$tgl2 = date("Y-m-d");
 
$pecah1 = explode("-", $tgl1);
$date1 = $pecah1[2];
$month1 = $pecah1[1];
$year1 = $pecah1[0];

$pecah2 = explode("-", $tgl2);
$date2 = $pecah2[2];
$month2 = $pecah2[1];
$year2 =  $pecah2[0];

$jd1 = GregorianToJD($month1, $date1, $year1);
$jd2 = GregorianToJD($month2, $date2, $year2);
// hitung selisih hari kedua tanggal
$sel = $jd2 - $jd1;
//echo $tgl1;
//echo $tgl2;
//echo "Selisih kedua tanggal adalah ".$sel." hari<br>";
if ($sel >= "7" ) {

	
	if(ereg("tanya.php", $_SERVER['PHP_SELF']))
	{
		header('Location: index.php');
		exit;
	}
	
	$answer		= $_GET['answer'];
	$tblData	= "pertanyaan";
	
	if(!$answer) $answer = 1;
	
	$result 	= mysql_query("select* from {$tblData} where id='{$answer}'");
	if(mysql_num_rows($result) )
	{
		$row 		= mysql_fetch_array($result);
		$pertanyaan = nl2br($row['pertanyaan']);
		$ket		= $row['ket'];
		
		if ($row['ifyes']=="0") {
		$font = "<font color='blue' size='4'>";
		$font1 = "</font>";
		}
		echo ($font);
		
		echo($pertanyaan);
		echo ($font1);
		
		echo("<br/><br/>");
		if($row['ifyes'] != "0" && $row['ifno'] != "0"){
			echo("<a href=\"?pilih=tanya&answer={$row['ifyes']}\">Ya</a>&nbsp;<a href=\"?pilih=tanya&answer={$row['ifno']}\">Tidak</a>");
			
		}else{
			echo("<a href=\"javascript:if (confirm('Apakah anda akan menyimpan hasil konsultasi?')) { window.location.href='index.php?pilih=simpan&pert=".$ket."' } else { window.location.href='index.php' }; \">Back To Home</a>");
		}
	}
	}
	else { echo "Anda Belum bisa Konsultasi.<br> Tunggu dalam waktu 7 hari lagi anda bisa konsultasi."; }
?>