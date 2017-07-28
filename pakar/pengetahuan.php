<html><head>
<script type="text/javascript">
function cek(){
  var id = document.tambah.id.value;
  var pert = document.tambah.pertanyaan.value;
  var y = document.tambah.ifyes.value;
  var n = document.tambah.ifno.value;
  var ket = document.tambah.ket.value;

  if (id=="") { alert('Isi ID !'); return false; }
  else if (pert==""||y==""||n==""||ket=="") { alert('Isi Semua Field !'); return false; }
  else { alert("Apakah Anda yakin!"); return true; }
}
</script>
</head>
<?php
include "../inc/koneksi.php";
	if(!isset(  $_SESSION[namauser],  $_SESSION[passuser])) {
header("Location: ../index.php?ke=flogin");
	}else{
		//echo("<a href=\"logout.php\">Logout</a>");
		echo ("Pengetahuan Karier Siswa");
		echo("<br/><br/>");
		$tblData	= "pertanyaan";
		
		$action		= $_GET['action'];
		if(!$action){
			$result 	= mysql_query("select * from {$tblData} order by ID");
			if(mysql_num_rows($result)){
				echo("<table border=\"1\" cellspacing=\"0\" bordercolor=\"black\">");
					echo("<tr><td><b>ID</b></td><td><b>Pertanyaan</b></td><td><b>IfYes</b></td><td><b>IfNo</b></td><td colspan=\"2\"><b>Action</b></td></tr>");
				while($row=mysql_fetch_array($result)){
					echo("<tr valign=\"top\"><td>{$row['ID']}</td><td>{$row['pertanyaan']}</td>
					<td align='center'>{$row['ifyes']}</td><td align='center'>{$row['ifno']}</td><td><a href=\"?pilih=pengetahuan
					&action=edit&id={$row['ID']}\">Edit</a></td><td><a href=\"?pilih=pengetahuan&action=hapus&id={$row['ID']}\"
					onclick=\"return confirm('Apakah Anda Yakin Untuk Menghapus data dengan ID = {$row['ID']} ?')\">Hapus</a></td></tr>");
				}
				echo("</table>");
			}
			echo("<br/><br/>");
			?>
			<hr/>
			<h2>Tambah Pengetahuan </h2>
			<form name="tambah" method="post" action="?pilih=pengetahuan&action=tambah" onSubmit="return cek();">
				<table bgcolor="#33FFFF" >
					<tr><td>ID</td><td>:</td><td><input type="text" name="id" size="3" maxlength="2"/>
					<a onMouseOver="alert('ID harus diisi dengan angka')"> ? </a></td></tr>
					<tr valign="top"><td>Pertanyaan</td><td>:</td><td><textarea name="pertanyaan" cols="23" rows="2"></textarea></td></tr>
					<tr><td>IfYes</td><td>:</td><td><input type="text" name="ifyes" size="3" maxlength="2"/>
					<a onMouseOver="alert('Field ini harus diisi dengan angka')"> ? </a></td></tr>
					<tr><td>IfNo</td><td>:</td><td><input type="text" name="ifno" size="3" maxlength="2"/>
					<a onMouseOver="alert('Field ini harus diisi dengan angka')"> ? </a></td></tr>
					<tr valign="top"><td>Keterangan</td><td>:</td><td><textarea name="ket" cols="23" rows="2"></textarea></td></tr>
					<tr><td colspan="3" align="right"><input type="submit" value="Submit"/></td></tr>
				</table>
			</form>
			<?php
		}elseif($action=="tambah"){
			$id 		= $_POST['id'];
			$pertanyaan = $_POST['pertanyaan'];
			$ifyes		= $_POST['ifyes'];
			$ifno		= $_POST['ifno'];
			$ket		= $_POST['ket'];
			
			mysql_query("insert into data (ID,pertanyaan,ifyes,ifno,ket) values('{$id}', '{$pertanyaan}', '{$ifyes}', '{$ifno}', '{$ket}')");
			echo("<script language=\"javascript\">window.location='?pilih=pengetahuan';</script>");
			
		}elseif($action=="edit"){
			$id			= $_GET['id'];
			$result		= mysql_query("select * from {$tblData} where ID='{$id}'");
			$row		= mysql_fetch_array($result);
			echo("
			<form method=\"post\" action=\"?pilih=pengetahuan&action=edit2\">
				<table>
					<tr><td>ID</td><td>:</td><td><input type=\"text\" name=\"id\" size=\"3\" maxlength=\"2\" value=\"{$row['ID']}\"/>
					<input type=\"hidden\" name=\"id_asli\" size=\"3\" value=\"{$row['ID']}\"/></td></tr>
					<tr valign=\"top\"><td>Pertanyaan</td><td>:</td><td><textarea name=\"pertanyaan\" cols=\"23\" rows=\"2\">{$row['pertanyaan']}</textarea></td></tr>
					<tr><td>IfYes</td><td>:</td><td><input type=\"text\" name=\"ifyes\" size=\"30\" value=\"{$row['ifyes']}\"/></td></tr>
					<tr><td>IfNo</td><td>:</td><td><input type=\"text\" name=\"ifno\" size=\"30\" value=\"{$row['ifno']}\"/></td></tr>
					<tr><td colspan=\"3\" align=\"right\"><input type=\"submit\" value=\"Submit\"/></td></tr>
				</table>
			</form>");
		}elseif($action=="edit2"){
			$id 		= $_POST['id'];
			$id_asli	= $_POST['id_asli'];
			$pertanyaan = $_POST['pertanyaan'];
			$ifyes		= $_POST['ifyes'];
			$ifno		= $_POST['ifno'];
			
			mysql_query("update {$tblData} set pertanyaan='{$pertanyaan}', id='{$id}', ifyes='{$ifyes}', ifno='{$ifno}' where ID='{$id_asli}'");
			echo("<script language=\"javascript\">window.location='?pilih=pengetahuan';</script>");
		}elseif($action=="hapus"){
			$id	= $_GET['id'];
			mysql_query("delete from {$tblData} where ID='{$id}'");
			echo("<script language=\"javascript\">window.location='?pilih=pengetahuan';</script>");
		}
	}
?>
</html>