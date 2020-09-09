<?php

$host = 'localhost';
$usuario = 'root';
$password = '';
$db = 'todo_list';

$conn = new mysqli($host, $usuario, $password, $db);

if(mysqli_connect_errno($conn)) {
    echo 'error de conexion ' . mysqli_connect_error($conn);
    exit();
} else {
    echo 'conectado correctamente';
}
?>