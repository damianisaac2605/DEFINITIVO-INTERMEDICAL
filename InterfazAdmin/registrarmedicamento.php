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
        <h2>MEDICAMENTOS</h2>
        <p>Registrar</p>
        <div class="input-wrapper">
            <input type="file" name="imagen" placeholder="Inserta Imagen">
            <i class="input-icon fa-solid fa-image"></i>
        </div>
        <div class="input-wrapper">
            <input type="text" name="nombre" placeholder="Nombre">
            <i class="input-icon fa-solid fa-pen"></i>
        </div>
        <div class="input-wrapper">
            <input type="text" name="tipo" placeholder="Tipo">
            <i class="input-icon fa-solid fa-pen"></i>
        </div>
        <div class="input-wrapper">
            <input type="text" name="descripcion" placeholder="Descripcion">
            <i class="input-icon fa-solid fa-pen"></i>
        </div>
        <div class="input-wrapper">
            <input type="number" name="cantidad" placeholder="Cantidad">
            <i class="input-icon fa-solid fa-boxes-stacked"></i>
        </div>
        <input id="boton" class="ctn" type="submit" name="register" value="Enviar">
    </form>

    <?php 
        include("../php/medicamento.php");
    ?>
</body>
</html>