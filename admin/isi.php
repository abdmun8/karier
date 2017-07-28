<?php
if(!isset(  $_SESSION['namauser'],  $_SESSION['passuser'])) {
header("Location: ../index.php?ke=flogin");
} else {	


$op=$_GET['op'];
if ($op=="pakar") {
	if(file_exists ("pkr.php")) {
		require_once "pkr.php";
	}
	else {
		echo "FILE PROGRAM PENYAKIT TIDAK ADA";
	}
}
elseif ($op=="input") {
	if(file_exists ("pkr.php")) {
		require_once "pkr.php";
	}
	else {
		echo "FILE PROGRAM PENYAKIT TIDAK ADA";
	}
}
elseif ($op=="insert") {
	if(file_exists ("pkr.php")) {
		require_once "pkr.php";
	}
	else {
		echo "FILE PROGRAM PENYAKIT TIDAK ADA";
	}
}
elseif ($op=="delete") {
	if(file_exists ("pkr.php")) {
		require_once "pkr.php";
	}
	else {
		echo "FILE PROGRAM PENYAKIT TIDAK ADA";
	}
}
elseif ($op=="edit") {
	if(file_exists ("pkr.php")) {
		require_once "pkr.php";
	}
	else {
		echo "FILE PROGRAM PENYAKIT TIDAK ADA";
	}
}
elseif ($op=="update") {
	if(file_exists ("pkr.php")) {
		require_once "pkr.php";
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
elseif ($op=="delete1") {
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
elseif ($op=="update1") {
	if(file_exists ("users.php")) {
		require_once "users.php";
	}
	else {
		echo "FILE PROGRAM PENYAKIT TIDAK ADA";
	}
}
elseif ($_REQUEST['start1']) {
	if(file_exists ("users.php")) {
		require_once "users.php";
	}
	else {
		echo "FILE PROGRAM PENYAKIT TIDAK ADA";
	}
}
elseif ($_REQUEST['start1']=="0") {
	if(file_exists ("users.php")) {
		require_once "users.php";
	}
	else {
		echo "FILE PROGRAM PENYAKIT TIDAK ADA";
	}
}
elseif ($_REQUEST['start']) {
	if(file_exists ("pkr.php")) {
		require_once "pkr.php";
	}
	else {
		echo "FILE PROGRAM PENYAKIT TIDAK ADA";
	}
}
elseif ($_REQUEST['start']=="0") {
	if(file_exists ("pkr.php")) {
		require_once "pkr.php";
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