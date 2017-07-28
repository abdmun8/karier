<?php
session_start();
if(!isset(  $_SESSION[namauser],  $_SESSION[passuser])) {
header("Location: ../index.php?ke=flogin");
} else {
$op=$_GET['op'];
if ($op=="pengetahuan") {
	if(file_exists ("tahu.php")) {
	require_once "tahu.php";
	}
	else {
		echo "FILE PROGRAM PENYAKIT TIDAK ADA";
	}
}
elseif ($op=="bulges") {
	if(file_exists ("tahu.php")) {
		require_once "tahu.php";
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