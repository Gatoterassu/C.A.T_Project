<?php
include_once 'conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$username = (isset($_POST['username'])) ? $_POST['username'] : '';
$first_name = (isset($_POST['first_name'])) ? $_POST['first_name'] : '';
$last_name = (isset($_POST['last_name'])) ? $_POST['last_name'] : '';
$gender = (isset($_POST['gender'])) ? $_POST['gender'] : '';
$password = (isset($_POST['password'])) ? $_POST['password'] : '';


$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';
$user_id = (isset($_POST['user_id'])) ? $_POST['user_id'] : '';


$consulta = "INSERT INTO usuarios(username, first_name, last_name, gender, password) 
VALUES('$username', '$first_name', '$last_name', '$gender', '$password') ";			
        $resultado = $conexion->prepare($consulta);
        $resultado->execute(); 

        $consulta = "SELECT * FROM usuarios ORDER BY user_id DESC LIMIT 1";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);       


if ($resultado){
    echo "<script>alert('Se ha registrado con exito'); window.location='/C_A_T/login.php'</script>";
}else {
    echo "<script>alert('No se ha podido registrar'); window.history.go(-1)='/C_A_T'</script>";
}
$conexion=null;