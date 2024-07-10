<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRAR RECETA</title>
    <link rel="stylesheet" href="../InterfazAdmin/registro.css">
    <script src="https://kit.fontawesome.com/1a12489769.js" crossorigin="anonymous"></script>
</head>
<body>
    <form method="post">
        <h2>RECETA</h2>
        <p>Crea la Receta</p>
        <div class="input-wrapper">
            <input type="date" name="fecha" id="fecha" placeholder="Fecha">
            <i class="input-icon fa-solid fa-file-medical"></i>
        </div>
        <div class="input-wrapper">
            <input type="text" name="paciente" placeholder="Paciente">
            <i class="input-icon fa-solid fa-pen"></i>
        </div>
        <div class="input-wrapper">
            <input type="text" name="medicamento" placeholder="Medicamento">
            <i class="input-icon fa-solid fa-pen"></i>
        </div>
        <div class="input-wrapper">
            <input type="text" name="descripcion" placeholder="Descripcion">
            <i class="input-icon fa-solid fa-pen"></i>
        </div>
        <input id="boton" class="ctn" type="submit" name="register" value="Enviar" onclick="mensaje();">
    </form>

    <?php 
        include("../php/receta.php");
    ?>

    <script>
        // Obtener la fecha actual
        var today = new Date().toISOString().split('T')[0];
        // Establecer la fecha mínima en el input de fecha
        document.getElementById('fecha').setAttribute('min', today);
    </script>
</body>
</html>
