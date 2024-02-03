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
    <link rel="stylesheet" href="css/style_movi.css">
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
                <a href="controlador/inicioSesion.php" class="btn btn-success">Inicio Sesion</a>
            </form>
        </div>
    </nav>
    <div class="cuenta">
        <p><?php if($DineroCuenta == false){
            echo "0";
        } else{
            echo '$'.$DineroCuenta.'.00';
        }
        ?></p>
    </div>

    
    <div class="vista">
        <div class="tabla_depositos">
            <center><h2>Depositos</h2></center>
            <hr>
            <center>

            <?php foreach($registros as $fila) : ?>
                        <tr>
                            <td>  </td>
                            <td>  </td>
                        
                        </tr>
                        <div class="article">
                            <div class="titulo_y_actividad">
                                <div class="titulo">
                                    <p><?php echo $fila->tituloDeposito; ?></p>
                                </div>
                                
                                <div class="actividad">
                                    <p><?php echo $fila->actividad; ?></p>
                                </div>
                            </div>
                            <div class="cantidad_y_fecha">
                                <div class="cantidad">
                                    <p><?php echo $fila->cantidadDeposito; ?></p>
                                </div>
                                <div class="fecha">
                                    <p><?php echo $fila->fechaDeposito; ?></p>
                                </div>
                            </div>
                        
                        </div>
            <?php endforeach; ?>
            
            
            </center>
            
            
        </div>

        

        <div class="tabla_retiros">
            <center><h2>Retiros</h2></center>
            <hr>
            <center>

            <?php foreach($registros2 as $fila2) : ?>
                <div class="article">
                <div class="titulo_y_actividad">
                    <div class="titulo">
                        <p><?php echo $fila2->descripcionRetiro; ?></p>
                    </div>
                    
                    <div class="actividad">
                        <p><?php echo $fila2->nombreRetirante; ?></p>
                    </div>
                </div>
                <div class="cantidad_y_fecha">
                    <div class="cantidad">
                        <p><?php echo $fila->cantidadRetiro; ?></p>
                    </div>
                    <div class="fecha">
                        <p><?php echo $fila2->fecha; ?></p>
                    </div>
                </div>
            
            </div>
            <?php endforeach; ?>

            </center>
        </div>
        
    </div>
    
    
    

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>