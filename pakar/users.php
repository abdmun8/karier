<?php
session_start();
if(!isset(  $_SESSION[namauser],  $_SESSION[passuser])) {
header("Location: ../index.php?ke=flogin");
} else {
?>
<html>
<head>
<title>Pakar</title>
<link rel="stylesheet" href="../inc/body.css" type="text/css" />
<script language="javascript">
function popup(sFlash) {
	window.open(sFlash,'Window','scrollbar=no,width=500,height=400');
}
</script>
<style type="text/css">
<!--
.style3 {color: #FFFFFF; font-weight: bold; }
.style4 {color: #FFFFFF}
-->
</style>
</head>
<link rel="shortcut icon" href="../Gambar/favicon.ico"  />
<body>
<?php
include_once"../inc/koneksi.php";
echo"<center>";
?>
<?php $op = $_GET['op'];

$table = userpass;
$hal = $_GET[hal];

if(!isset($_GET['hal'])){ 
    $page = 1; 
} else { 
    $page = $_GET['hal']; 
}

$max_results = 10;


$from = (($page * $max_results) - $max_results); 
?>
<table border="1"> 
<tr id="can_pathway">
<td align="center"  width="100"><span class="style3">ID User</span></td>
        <td align="center" width="100"><span class="style3">Username</span></td>
<td align="center"  width="100"><span class="style3">NIS</span></td>
    <td align="center" width="200"><span class="style3">Nama Lengkap</span></td>
    <td align="center" width="200"><span class="style3">Action</span></td>
</tr>
<?php echo "<b> Daftar User Yang Terdaftar</b><br />";
echo"<center>";

@$limit=$_GET['limit']; 


$start1=$_GET['start1'];				
if(!($start1 > 0)) {                         
$start1 = 0;
}

$eu = ($start1 - 0); 

if(!$limit > 0 ){ 
$limit = 10;    
}                             
$this1 = $eu + $limit; 
$back = $eu - $limit; 
$next = $eu + $limit; 


$_GET['id'];
$query2=" SELECT * FROM userpass where hak='User' order by id";
$result2=mysql_query($query2);
echo mysql_error();
$nume=mysql_num_rows($result2);

$id = 1;
$query=" SELECT * FROM userpass u,siswa s where u.id_user=s.id_user and hak='User' order by id limit $eu, $limit ";
$result=mysql_query($query);
echo mysql_error();


while($data = mysql_fetch_array($result))
{
if($bgcolor=='#f1f1f1'){$bgcolor='#ffffff';}
else{$bgcolor='#f1f1f1';}

   echo "<tr>";
   echo "<td align=center width=10>".$data[id]."</td>";
   echo "<td align=center>".$data[id_user]."</td>";
 echo "<td align=center>".$data[nis]."</td>";
   echo "<td align=center>".$data[nama_lengkap]."</td>";
   echo "<td align=center> | 
	<a href=\"javascript:popup('detail1.php?kddetail=".$data['id']."')\">Detail</a></td>";
   echo "</td>";
   echo "</tr>";
$id++;
}
?>

</table>
<?php
echo "<table align = 'center' width='50%'><tr><td  align='left' width='30%'>";

if($back >=0) { 
echo "<a href='$page_name?start1=$back&limit=$limit'><font face='Verdana' size='2'>PREV</font></a>"; 
} 

echo "</td><td align=center width='30%'>";
$i=0;
$l=1;
for($i=0;$i < $nume;$i=$i+$limit){
if($i <> $eu){
echo " <a href='$page_name?start1=$i&limit=$limit'><font face='Verdana' size='2'>$l</font></a> ";
}
else { echo "<font face='Verdana' size='4' color=red>$l</font>";}
$l=$l+1;
}


echo "</td><td  align='right' width='30%'>";
if($this1 < $nume) { 
print "<a href='$page_name?start1=$next&limit=$limit'><font face='Verdana' size='2'>NEXT</font></a>";} 
echo "</td></tr></table>";


?>



</body>
</html>
<?php
}
?>