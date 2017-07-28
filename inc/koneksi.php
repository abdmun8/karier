<?php
$host="localhost";
$user="root";
$pwd="";
$db="karier";

$Qry=mysql_connect($host,$user,$pwd);
if ($Qry) 	{
	mysql_select_db($db);
}
?>
