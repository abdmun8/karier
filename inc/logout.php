<?php
session_start();
unset($_SESSION[namauser],  $_SESSION[passuser]);
session_destroy();
header("Location: ../index.php?ke=flogin");
?>
