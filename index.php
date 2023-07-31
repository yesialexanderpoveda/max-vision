<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="./index.css" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

</head>

<body>

<form action="recuperar.php" method="post">
    <header>
        <div class="header-content">
            <div class="logo-container">
                <img src="logo.png" alt="Logo de tu sitio web" id="logo">
            </div>
            <div class="return-button-container">
                <a href="#">Volver </a>
            </div>
        </div>
    </header>

    <br>
<br>
    <center>
        <h1 id = "titulo">Recuperacion de contraseña</h1>
    </center>


    <div class="container">
        <center>
            <br>

            <label id="correo">Correo</label>
            <br><br>
            <p><input type="email" name="correo" value="" class="cuadro-txt"></p>
            <br>
            <label id="pregunta">Color favorito</label>
            <br><br>
            <p><input type="preg_security" name="preg_security" value="" class="cuadro-txt"></p>
            <br>
            <label id="contraseña">Contraseña nueva </label>
            <br><br>
            <p><input type="password" name="password" value="" class="cuadro-txt"></p>
            <br>
            <p><input type="submit" name="" value="Confirmar" id="boton1"></p>
            <br>
        </center>
    </div>
    </div>
    </form>
</body>

</html>