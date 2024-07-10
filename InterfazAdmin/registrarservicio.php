<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRAR SERVICIO</title>
    <link rel="stylesheet" href="registro.css">
    <script src="https://kit.fontawesome.com/1a12489769.js" crossorigin="anonymous"></script>

</head>
<body>
    <form method="post">
        <h2>SERVICIO</h2>
        <p>Inicia el Registro</p>
        <div class="input-wrapper">
            <input type="text" name="servicio" placeholder="Servicio">
            <i class="input-icon fa-solid fa-file-medical"></i>
        </div>
        <div class="input-wrapper">
            <input type="text" name="nombre" placeholder="Nombre">
            <i class="input-icon fa-solid fa-pen"></i>
        </div>
        <div class="input-wrapper">
            <input type="text" name="descripcion" placeholder="Descripcion">
            <i class="input-icon fa-solid fa-pen"></i>
        </div>
        <input id="boton" class="ctn" type="submit" name="register" value="Enviar" onclick="mensaje();">
    </form>

    <?php 
        include("../php/servicio.php");
    ?>
</body>
</html>