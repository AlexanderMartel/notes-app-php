<?php
include 'conexion.php';

$usuario = mysqli_real_escape_string($conn, $_POST['usuario']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

$sentencia = "INSERT INTO usuarios VALUES '$usuario','$email','$password'";
$ejecucion = mysqli_query($conn, $sentencia);

if (mysqli_num_rows($ejecucion) > 0) {
    echo 'ok';
} else {
    echo 'error ' . mysqli_error($conn);
}
