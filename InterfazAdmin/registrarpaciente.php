<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRAR PACIENTE</title>
    <link rel="stylesheet" href="registro.css">
    <script src="https://kit.fontawesome.com/1a12489769.js" crossorigin="anonymous"></script>

</head>
<body>
    <form method="post">
        <h2>PACIENTE</h2>
        <p>Inicia tu Registro</p>
        <div class="input-wrapper">
            <input type="text" name="name" placeholder="Nombre">
            <i class="input-icon fa-solid fa-user"></i>
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
            <input type="tel" name="phone" placeholder="Telefono">
            <i class="input-icon fa-solid fa-phone"></i>
        </div>
        <div class="input-wrapper">
            <input type="password" name="password" placeholder="Contraseña">
            <i class="input-icon fa-solid fa-key"></i>
        </div>
        <input id="boton" class="ctn" type="submit" name="register" value="Enviar" onclick="mensaje();">
    </form>

    <?php 
        include("../php/paciente.php");
    ?>
</body>
</html>