<?php
    include("controlador/conexionDB.php");

    
    $query = "SELECT * FROM Depositos";
    $stmt = $conn->query($query);
    $registros = $stmt->fetchAll(PDO::FETCH_OBJ);

    $query3 = "SELECT * FROM Retiros";
    $stmt3 = $conn->query($query3);
    $registros2 = $stmt3->fetchAll(PDO::FETCH_OBJ);


    $query2 = "SELECT * FROM cuenta";
    $stmt2 = $conn->query($query2);
    $DineroCuenta = $stmt2->fetchColumn();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="shortcut icon" href="css/banco.ico" type="image/x-icon">
    <title>Document</title>
</head>
<body>

    <nav class="navbar navbar-expand-lg ">
        <div class="container-fluid">
            <a class="navbar-brand" href="Index.php" style="color:white;">Niño de Atocha</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            
            <form class="d-flex">
                <a href="controlador/inicioSesion.php" class="btn btn-success">Iniciar Sesion</a>
            </form>
        </div>
    </nav>
    <a href="movimientos.php">
        <div class="cuenta">
            <p><?php if($DineroCuenta == false){
                echo "0";
            } else{
                echo '$'.$DineroCuenta.'.00';
            }
            ?></p>
        </div>
    </a>
    

    

    
    
    

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>