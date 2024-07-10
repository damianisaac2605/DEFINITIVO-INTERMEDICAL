<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRAR MEDICO</title>
    <link rel="stylesheet" href="registro.css">
    <script src="https://kit.fontawesome.com/1a12489769.js" crossorigin="anonymous"></script>
</head>
<body>
    <form method="post">
        <h2>MEDICO</h2>
        <p>Inicia tu Registro</p>
        <div class="input-wrapper">
            <input type="text" name="name" placeholder="Nombre">
            <i class="input-icon fa-solid fa-user-doctor"></i>
        </div>
        <div class="input-wrapper">
            <input type="text" name="apellido_paterno" placeholder="Apellido Paterno">
            <i class="input-icon fa-solid fa-pen"></i>
        </div>
        <div class="input-wrapper">
            <input type="text" name="apellido_materno" placeholder="Apellido Materno">
            <i class="input-icon fa-solid fa-pen"></i>
        </div>
        <div class="input-wrapper">
            <input type="email" name="email" placeholder="Correo">
            <i class="input-icon fa-solid fa-envelope"></i>
        </div>
        <div class="input-wrapper">
            <input type="text" name="phone" placeholder="Telefono">
            <i class="input-icon fa-solid fa-phone"></i>
        </div>
        <div class="input-wrapper">
            <input type="text" name="cedula_profesional" placeholder="Cedula Profesional">
            <i class="input-icon fa-solid fa-file-lines"></i>
        </div>
        <div class="input-wrapper">
            <input type="text" name="especialidad" placeholder="Especialidad">
            <i class="input-icon fa-solid fa-book"></i>
        </div>
        <div class="input-wrapper">
            <input type="time" name="hora_entrada" placeholder="Hora de Entrada">
            <i class="input-icon fa-solid fa-hourglass-start"></i>
        </div>
        <div class="input-wrapper">
            <input type="time" name="hora_salida" placeholder="Hora de Salida">
            <i class="input-icon fa-solid fa-hourglass-end"></i>
        </div>
        <div class="input-wrapper">
            <input type="password" name="password" placeholder="Contraseña">
            <i class="input-icon fa-solid fa-key"></i>
        </div>
        <input class="ctn" type="submit" name="register" value="Enviar">
    </form>

    <?php 
        include("../php/medico.php");
    ?>
</body>
</html>