<?php

$host = 'localhost';
$user = 'root';
$conn = mysqli_connect($host, $user) or die('error de conexion');
$db = mysqli_select_db($conn, "todo_list") or die('no se encontro la base de datos');

?>