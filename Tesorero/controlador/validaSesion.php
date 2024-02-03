<?php
    $correo = $_POST['usuario'];
    $contrasena = $_POST['clave'];
    session_start();
    $_SESSION['usuario'] = $correo;

    $conexion =mysqli_connect("localhost","root","root","db_atocha");

    $consulta = "SELECT * FROM usuarios WHERE matricula= '$correo' AND clave ='$contrasena'";
    $resultado =mysqli_query($conexion,$consulta);

    $filas=mysqli_fetch_array($resultado);

    if($filas==true){
        header("location:../Tesorero.php");
    }

?>