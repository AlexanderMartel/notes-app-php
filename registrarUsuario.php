<?php

include './config/conexion.php';

$usuario = $_POST['usuario'];
$email = $_POST['email'];
$password = $_POST['password'];

$sentencia = mysqli_query($conn, "INSERT INTO usuarios 
                VALUES(null, '$usuario', '$email', '$password', NOW())");

if($sentencia) {
    echo 'ok';
} else {
    echo 'error';
}

?>