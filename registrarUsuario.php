<?php

include './config/conexion.php';

$usuario = $_POST['usuario'];
$email = $_POST['email'];
$password = $_POST['password'];

$sentencia = mysqli_query($conn, "INSERT INTO usuarios 
                VALUES(null, '$usuario', '$email', '$password', NOW())");

if(mysqli_num_rows($sentencia) > 0) {
    echo json_encode('ok');
} else {
    echo 'error' . mysqli_connect_error($conn);
}

?>