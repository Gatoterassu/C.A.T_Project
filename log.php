<?php

include_once 'conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

session_start();

        

$username = $_POST["username"];
$password = $_POST["password"];



$Consulta = "SELECT * FROM usuarios WHERE  username = '$username' and password = '$password'";

$resultado = $conexion->prepare($consulta);
        $resultado->execute(); 

           



if ($resultado){
    echo "<script>alert('Se ha iniciado sesión con éxito'); window.location='/C_A_T/index.html'</script>";
}
else{
    echo "<script>alert('No se pudo iniciar sesión'); window.history.go(-1);</script>";
}

mysqli_free_result($resultado);
mysqli_close($connection);