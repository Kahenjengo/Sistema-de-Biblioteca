<?php
/*
$conectar = mysql_connect("localhost","root","") or die ("Erro na conexão");
mysql_select_db("bd")or die ("Base não encontrada");
*/


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tfc";

$mysqli = mysqli_connect($servername, $username, $password, $dbname);
?>

