<?php
session_start();
if(!isset(  $_SESSION[namauser],  $_SESSION[passuser])) {
header("Location: ../index.php?ke=flogin");
} else {
$op=$_GET['op'];

if ($op=="pengetahuan") {
	if(file_exists ("pengetahuan.php")) {
		require_once "pengetahuan.php";
	}
	else {
		echo "FILE PROGRAM PENYAKIT TIDAK ADA";
	}
}
elseif ($op=="user") {
	if(file_exists ("users.php")) {
		require_once "users.php";
	}
	else {
		echo "FILE PROGRAM PENYAKIT TIDAK ADA";
	}
}
elseif ($op=="edit1") {
	if(file_exists ("users.php")) {
		require_once "users.php";
	}
	else {
		echo "FILE PROGRAM PENYAKIT TIDAK ADA";
	}
}
elseif ($op=="input1") {
	if(file_exists ("users.php")) {
		require_once "users.php";
	}
	else {
		echo "FILE PROGRAM PENYAKIT TIDAK ADA";
	}
}
elseif ($op=="insert1") {
	if(file_exists ("users.php")) {
		require_once "users.php";
	}
	else {
		echo "FILE PROGRAM PENYAKIT TIDAK ADA";
	}
}
elseif ($op=="update1") {
	if(file_exists ("users.php")) {
		require_once "users.php";
	}
	else {
		echo "FILE PROGRAM PENYAKIT TIDAK ADA";
	}
}
elseif ($op=="delete1") {
	if(file_exists ("users.php")) {
		require_once "users.php";
	}
	else {
		echo "FILE PROGRAM PENYAKIT TIDAK ADA";
	}
}
elseif ($_REQUEST[start1]) {
	if(file_exists ("users.php")) {
		require_once "users.php";
	}
	else {
		echo "FILE PROGRAM PENYAKIT TIDAK ADA";
	}
}
elseif ($_REQUEST[start1]=="0") {
	if(file_exists ("users.php")) {
		require_once "users.php";
	}
	else {
		echo "FILE PROGRAM PENYAKIT TIDAK ADA";
	}
}
elseif ($op=="tm") {
	if(file_exists ("tm.php")) {
		require_once "menu.php";
		require_once "tm.php";
	}
	else {
		echo "FILE PROGRAM PENYAKIT TIDAK ADA";
	}
}
elseif ($tm=="input") {
	if(file_exists ("tm.php")) {
	require_once "menu.php";
	require_once "tm.php";
	}
	else {
		echo "FILE PROGRAM PENYAKIT TIDAK ADA";
	}
}
elseif ($tm=="insert") {
	if(file_exists ("tm.php")) {
	require_once "menu.php";
	require_once "tm.php";
	}
	else {
		echo "FILE PROGRAM PENYAKIT TIDAK ADA";
	}
}
elseif ($tm=="edit") {
	if(file_exists ("tm.php")) {
	require_once "menu.php";
	require_once "tm.php";
	}
	else {
		echo "FILE PROGRAM PENYAKIT TIDAK ADA";
	}
}
elseif ($tm=="update") {
	if(file_exists ("tm.php")) {
	require_once "menu.php";
	require_once "tm.php";
	}
	else {
		echo "FILE PROGRAM PENYAKIT TIDAK ADA";
	}
}
elseif ($tm=="delete") {
	if(file_exists ("tm.php")) {
	require_once "menu.php";
	require_once "tm.php";
	}
	else {
		echo "FILE PROGRAM PENYAKIT TIDAK ADA";
	}
}
elseif ($_REQUEST[start]) {
	if(file_exists ("tm.php")) {
		require_once "menu.php";
		require_once "tm.php";
	}
	else {
		echo "FILE PROGRAM PENYAKIT TIDAK ADA";
	}
}
elseif ($_REQUEST[start]=="0") {
	if(file_exists ("tm.php")) {
		require_once "menu.php";
		require_once "tm.php";
	}
	else {
		echo "FILE PROGRAM PENYAKIT TIDAK ADA";
	}
}
elseif ($op=="ps") {
	if(file_exists ("ps.php")) {
		require_once "menu.php";
		require_once "ps.php";
	}
	else {
		echo "FILE PROGRAM PENYAKIT TIDAK ADA";
	}
}
elseif ($ps=="input") {
	if(file_exists ("ps.php")) {
	require_once "menu.php";
	require_once "ps.php";
	}
	else {
		echo "FILE PROGRAM PENYAKIT TIDAK ADA";
	}
}
elseif ($ps=="insert") {
	if(file_exists ("ps.php")) {
	require_once "menu.php";
	require_once "ps.php";
	}
	else {
		echo "FILE PROGRAM PENYAKIT TIDAK ADA";
	}
}
elseif ($ps=="edit") {
	if(file_exists ("ps.php")) {
	require_once "menu.php";
	require_once "ps.php";
	}
	else {
		echo "FILE PROGRAM PENYAKIT TIDAK ADA";
	}
}
elseif ($ps=="update") {
	if(file_exists ("ps.php")) {
	require_once "menu.php";
	require_once "ps.php";
	}
	else {
		echo "FILE PROGRAM PENYAKIT TIDAK ADA";
	}
}
elseif ($ps=="delete") {
	if(file_exists ("ps.php")) {
	require_once "menu.php";
	require_once "ps.php";
	}
	else {
		echo "FILE PROGRAM PENYAKIT TIDAK ADA";
	}
}
elseif ($_REQUEST[start2]) {
	if(file_exists ("ps.php")) {
	require_once "menu.php";
		require_once "ps.php";
	}
	else {
		echo "FILE PROGRAM PENYAKIT TIDAK ADA";
	}
}
elseif ($_REQUEST[start2]=="0") {
	if(file_exists ("ps.php")) {
	require_once "menu.php";
		require_once "ps.php";
	}
	else {
		echo "FILE PROGRAM PENYAKIT TIDAK ADA";
	}
}
elseif ($op=="bs") {
	if(file_exists ("bs.php")) {
		require_once "menu.php";
		require_once "bs.php";
	}
	else {
		echo "FILE PROGRAM PENYAKIT TIDAK ADA";
	}
}
elseif ($bs=="input") {
	if(file_exists ("bs.php")) {
	require_once "menu.php";
	require_once "bs.php";
	}
	else {
		echo "FILE PROGRAM PENYAKIT TIDAK ADA";
	}
}
elseif ($bs=="insert") {
	if(file_exists ("bs.php")) {
	require_once "menu.php";
	require_once "bs.php";
	}
	else {
		echo "FILE PROGRAM PENYAKIT TIDAK ADA";
	}
}
elseif ($bs=="edit") {
	if(file_exists ("bs.php")) {
	require_once "menu.php";
	require_once "bs.php";
	}
	else {
		echo "FILE PROGRAM PENYAKIT TIDAK ADA";
	}
}
elseif ($bs=="update") {
	if(file_exists ("bs.php")) {
	require_once "menu.php";
	require_once "bs.php";
	}
	else {
		echo "FILE PROGRAM PENYAKIT TIDAK ADA";
	}
}
elseif ($bs=="delete") {
	if(file_exists ("bs.php")) {
	require_once "menu.php";
	require_once "bs.php";
	}
	else {
		echo "FILE PROGRAM PENYAKIT TIDAK ADA";
	}
}
elseif ($_REQUEST[start3]) {
	if(file_exists ("bs.php")) {
	require_once "menu.php";
		require_once "bs.php";
	}
	else {
		echo "FILE PROGRAM PENYAKIT TIDAK ADA";
	}
}
elseif ($_REQUEST[start3]=="0") {
	if(file_exists ("bs.php")) {
	require_once "menu.php";
		require_once "bs.php";
	}
	else {
		echo "FILE PROGRAM PENYAKIT TIDAK ADA";
	}
}
elseif ($op=="be") {
	if(file_exists ("be.php")) {
		require_once "menu.php";
		require_once "be.php";
	}
	else {
		echo "FILE PROGRAM PENYAKIT TIDAK ADA";
	}
}
elseif ($be=="input") {
	if(file_exists ("be.php")) {
	require_once "menu.php";
	require_once "be.php";
	}
	else {
		echo "FILE PROGRAM PENYAKIT TIDAK ADA";
	}
}
elseif ($be=="insert") {
	if(file_exists ("be.php")) {
	require_once "menu.php";
	require_once "be.php";
	}
	else {
		echo "FILE PROGRAM PENYAKIT TIDAK ADA";
	}
}
elseif ($be=="edit") {
	if(file_exists ("be.php")) {
	require_once "menu.php";
	require_once "be.php";
	}
	else {
		echo "FILE PROGRAM PENYAKIT TIDAK ADA";
	}
}
elseif ($be=="update") {
	if(file_exists ("be.php")) {
	require_once "menu.php";
	require_once "be.php";
	}
	else {
		echo "FILE PROGRAM PENYAKIT TIDAK ADA";
	}
}
elseif ($be=="delete") {
	if(file_exists ("be.php")) {
	require_once "menu.php";
	require_once "be.php";
	}
	else {
		echo "FILE PROGRAM PENYAKIT TIDAK ADA";
	}
}
elseif ($_REQUEST[start4]) {
	if(file_exists ("be.php")) {
	require_once "menu.php";
		require_once "be.php";
	}
	else {
		echo "FILE PROGRAM PENYAKIT TIDAK ADA";
	}
}
elseif ($_REQUEST[start4]=="0") {
	if(file_exists ("be.php")) {
	require_once "menu.php";
		require_once "be.php";
	}
	else {
		echo "FILE PROGRAM PENYAKIT TIDAK ADA";
	}
}
elseif ($op=="bu") {
	if(file_exists ("bu.php")) {
		require_once "menu.php";
		require_once "bu.php";
	}
	else {
		echo "FILE PROGRAM PENYAKIT TIDAK ADA";
	}
}
elseif ($bu=="input") {
	if(file_exists ("bu.php")) {
	require_once "menu.php";
	require_once "bu.php";
	}
	else {
		echo "FILE PROGRAM PENYAKIT TIDAK ADA";
	}
}
elseif ($bu=="insert") {
	if(file_exists ("bu.php")) {
	require_once "menu.php";
	require_once "bu.php";
	}
	else {
		echo "FILE PROGRAM PENYAKIT TIDAK ADA";
	}
}
elseif ($bu=="edit") {
	if(file_exists ("bu.php")) {
	require_once "menu.php";
	require_once "bu.php";
	}
	else {
		echo "FILE PROGRAM PENYAKIT TIDAK ADA";
	}
}
elseif ($bu=="update") {
	if(file_exists ("bu.php")) {
	require_once "menu.php";
	require_once "bu.php";
	}
	else {
		echo "FILE PROGRAM PENYAKIT TIDAK ADA";
	}
}
elseif ($bu=="delete") {
	if(file_exists ("bu.php")) {
	require_once "menu.php";
	require_once "bu.php";
	}
	else {
		echo "FILE PROGRAM PENYAKIT TIDAK ADA";
	}
}
elseif ($_REQUEST[start5]) {
	if(file_exists ("bu.php")) {
	require_once "menu.php";
		require_once "bu.php";
	}
	else {
		echo "FILE PROGRAM PENYAKIT TIDAK ADA";
	}
}
elseif ($_REQUEST[start5]=="0") {
	if(file_exists ("bu.php")) {
	require_once "menu.php";
		require_once "bu.php";
	}
	else {
		echo "FILE PROGRAM PENYAKIT TIDAK ADA";
	}
}
elseif ($op=="tp") {
	if(file_exists ("tp.php")) {
		require_once "menu.php";
		require_once "tp.php";
	}
	else {
		echo "FILE PROGRAM PENYAKIT TIDAK ADA";
	}
}
elseif ($tp=="input") {
	if(file_exists ("tp.php")) {
	require_once "menu.php";
	require_once "tp.php";
	}
	else {
		echo "FILE PROGRAM PENYAKIT TIDAK ADA";
	}
}
elseif ($tp=="insert") {
	if(file_exists ("tp.php")) {
	require_once "menu.php";
	require_once "tp.php";
	}
	else {
		echo "FILE PROGRAM PENYAKIT TIDAK ADA";
	}
}
elseif ($tp=="edit") {
	if(file_exists ("tp.php")) {
	require_once "menu.php";
	require_once "tp.php";
	}
	else {
		echo "FILE PROGRAM PENYAKIT TIDAK ADA";
	}
}
elseif ($tp=="update") {
	if(file_exists ("tp.php")) {
	require_once "menu.php";
	require_once "tp.php";
	}
	else {
		echo "FILE PROGRAM PENYAKIT TIDAK ADA";
	}
}
elseif ($tp=="delete") {
	if(file_exists ("tp.php")) {
	require_once "menu.php";
	require_once "tp.php";
	}
	else {
		echo "FILE PROGRAM PENYAKIT TIDAK ADA";
	}
}
elseif ($_REQUEST[start6]) {
	if(file_exists ("tp.php")) {
	require_once "menu.php";
		require_once "tp.php";
	}
	else {
		echo "FILE PROGRAM PENYAKIT TIDAK ADA";
	}
}
elseif ($_REQUEST[start6]=="0") {
	if(file_exists ("tp.php")) {
	require_once "menu.php";
		require_once "tp.php";
	}
	else {
		echo "FILE PROGRAM PENYAKIT TIDAK ADA";
	}
}
elseif ($op=="") {
	if(file_exists ("ket.php")) {
		require_once "ket.php";
	}
	else {
		echo "FILE HALAMAN UTAMA KITA TIDAK ADA";
	}
}
}

?>