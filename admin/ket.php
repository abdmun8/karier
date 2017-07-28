<?php
if(!isset(  $_SESSION['namauser'],  $_SESSION['passuser'])) {
header("Location: ../index.php?ke=flogin");
} else {
?>
<div align="center">
<title>Halaman Admin</title>
<body>
<p>Selamat Datang di halaman Admin disini Anda dapat melakukan beberapa kelebihan :</p><br />
<p>1. Menambah,menampilkan, merubah dan menghapus <em>pakar.</em></p>
<p>2. Menambah,menampilkan, merubah dan menghapus <em>user.</em>
</p><br />
<p><img width="70" height="75" src="../img/user.gif" /></p>
</body>
</div>
<?php
}
?>