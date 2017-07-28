<?php 
session_start();
include_once "../inc/koneksi.php";

$user = $_SESSION[namauser];
$pert=$_GET['pert'];

$query = "SELECT * from siswa where id_user='$user'"; 
$siswa = mysql_query($query) or die ("Query Salah");
$data = mysql_fetch_array($siswa);
echo "Hasil Konsultasi adalah ";
echo $pert." <br> Nama : ";
echo $data['nama_lengkap']."<br>";
$nis = $data['nis'];
echo $nis."<br>Tanggal : ";
$tgl = date("Y-m-d");
echo $tgl;
	$simpan = "INSERT into analisa_hasil (tgl_konsul,riwayat_karier,nis) VALUE ('$tgl','$pert','$nis')";
	$hasil = mysql_query($simpan);
    if ($hasil) echo "<br><p>Proses Input Data Sukses.</p><a href='index.php'>Kembali</a>";
     else echo "<br><p>Proses Input Data Gagal<br></p><a href='index.php'>Kembali</a>";
		

		?>