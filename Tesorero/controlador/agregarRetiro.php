<?php
    include("conexionDB.php");

    if(!empty($_POST['nombre']) && !empty($_POST['descripcion']) && !empty($_POST['cantidad']) && !empty($_POST['fecha']))

    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $cantidad = $_POST['cantidad'];
    $fecha = $_POST['fecha'];
    

    $sql = "INSERT INTO retiros(nombreRetirante,descripcionRetiro,cantidadRetiro,fecha)VALUES(:nombre,:descripcion,:cantidad,:fecha)";
    $stmt= $conn->prepare($sql);
    $stmt->bindParam(":nombre",$nombre);
    $stmt->bindParam(":descripcion",$descripcion);
    $stmt->bindParam(":cantidad",$cantidad);
    $stmt->bindParam("fecha",$fecha);

    if($stmt->execute()){
        $sql3 = "SELECT totalDinero FROM cuenta";
        $stmt3 = $conn->query($sql3);
        $totalDinero = $stmt3->fetchColumn();

        $totalDepositar = $totalDinero - $cantidad;

        $sql2 = "UPDATE cuenta SET totalDinero = :cantidadCuenta";
        $stmt2 = $conn->prepare($sql2);
        $stmt2->bindParam(":cantidadCuenta", $totalDepositar);

        if($stmt2->execute()){
            header("location: ../Tesorero.php");
        } else{
            echo "error en agregar cuenta";
        }

    }else{
        echo "error";
    }

?>