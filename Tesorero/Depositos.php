<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo2.css">
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="Tesorero.php" style="color:white;">Niño de Atocha</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link" aria-current="page" href="Depositos.php">Deposito</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="Retiros.php">Retiros</a>
                </li>
                
            </ul>
            </div>
        </div>
    </nav>

    <div class="movimientos">
        <div class="agregar">
            <br>
            <center><h3>Agregar Deposito a la cuenta</h3></center>
            <br><br>
            <form action="controlador/agregarDeposito.php" method="post">
                <div class="form-floating mb-3">
                    <input name="nombre" type="text" class="form-control" id="floatingInput" placeholder="name@example.com" required>
                    <label for="floatingInput">Nombre del Depositante</label>
                </div>
                <br>
                <div class="form-floating mb-3">
                    <input name="titulo" type="text" class="form-control" id="floatingInput" placeholder="name@example.com" required>
                    <label for="floatingInput">Titulo del Deposito</label> 
                </div>
                <br>
                <div class="form-floating mb-3">
                    <input name="descripcion" type="text" class="form-control" id="floatingInput" placeholder="name@example.com" required>
                    <label for="floatingInput">Descripcion</label>
                </div>
                <br>
                <div class="form-floating mb-3">
                    <input name="actividad" type="text" class="form-control" id="floatingInput" placeholder="name@example.com" required>
                    <label class="label" for="floatingInput">Actividad Realizada</label>
                </div>
                <br>
                <div class="form-floating mb-3">
                    <input name="cantidad" type="number" class="form-control" id="floatingInput" placeholder="name@example.com" required>
                    <label for="floatingInput">Cuanto es el Deposito</label>
                </div>
                <br>
                <div class="form-floating mb-1">
                    <input name="fecha" type="date" class="form-control" id="floatingInput" placeholder="name@example.com" required>
                    <label for="floatingInput">Fecha de Deposito</label>
                </div>
                <br>
                <input type="submit" class="btn btn-success" value="Agregar">
            </form>
    
            
        </div>
        
    </div>
    



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>