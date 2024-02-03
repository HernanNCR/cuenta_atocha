<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/estilo_sesion.css">
    <title>Document</title>
</head>
<body>

    <nav class="navbar navbar-expand-lg ">
        <div class="container-fluid">
            <a class="navbar-brand" href="../Index.php" style="color:white;">Menu principal</a>   
        </div>
    </nav>
    <div class="cuenta">
        <center><h3>Inicio de Sesion</h3></center>
        <br><br>
        <form action="validaSesion.php" method="post">
            <div class="form-floating mb-3">
                <input name="usuario" type="text" class="form-control" id="floatingInput" placeholder="name@example.com" required>
                <label for="floatingInput">Matricula</label>
            </div>
            <br>
            <div class="form-floating mb-3">
                <input name="clave" type="password" class="form-control" id="floatingInput" placeholder="name@example.com" required>
                <label for="floatingInput">Clave</label>
            </div>
            <br>
            <input type="submit" class="btn btn-success" value="Iniciar">
        </form>
    </div>
    

    

    
    
    

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>