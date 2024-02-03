<?php 
    include("conexionDB.php");

    if(!empty($_POST['nombre']) && !empty($_POST['titulo']) && !empty($_POST['descripcion'])  && !empty($_POST['actividad']) && !empty($_POST['cantidad']) && !empty($_POST['fecha']) ){
        $nombre = $_POST['nombre'];
        $titulo = $_POST['titulo'];
        $descripcion = $_POST['descripcion'];
        $actividad = $_POST['actividad'];
        $cantidad = $_POST['cantidad'];
        $fecha = $_POST['fecha'];
        


        $sql = "INSERT INTO depositos(nombreDepositante,tituloDeposito,descripcion,actividad,cantidadDeposito,fechaDeposito) VALUES (:nombre,:titulo,:descripcion,:actividad,:cantidad,:fecha)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(":nombre",$nombre);
        $stmt->bindParam(":titulo",$titulo);
        $stmt->bindParam(":descripcion",$descripcion); 
        $stmt->bindParam(":actividad",$actividad);
        $stmt->bindParam(":cantidad",$cantidad);
        $stmt->bindParam(":fecha",$fecha);
        

        if($stmt->execute()){


            $sql3 = "SELECT totalDinero FROM cuenta";
            $stmt3 = $conn->query($sql3);
            $totalDinero = $stmt3->fetchColumn();

            if($totalDinero == false){
                $sql4 = "INSERT INTO cuenta(TotalDinero) VALUES (:cantidad)";
                $stmt4 = $conn->prepare($sql4);
                $stmt4->bindParam(":cantidad",$cantidad);

                if($stmt4->execute()){
                    header("location: ../index.php");
                } else{
                    echo "error en agregar cuenta";
                }
            }else{
                $totalDepositar = $totalDinero + $cantidad;

                $sql2 = "UPDATE cuenta SET totalDinero = :cantidadCuenta";
                $stmt2 = $conn->prepare($sql2);
                $stmt2->bindParam(":cantidadCuenta", $totalDepositar);

                if($stmt2->execute()){
                    header("location: ../Tesorero.php");
                } else{
                    echo "error en agregar cuenta";
                }
            }

            
            
        } else{
            echo "error en la subida";
        }
    }


?>