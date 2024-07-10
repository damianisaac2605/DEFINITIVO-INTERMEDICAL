<?php 
    include("../php/conexion.php");
    $conex = mysqli_connect("localhost","root","","intermedical");

    $id=$_GET['id'];

    $sql = "SELECT * FROM doctor WHERE id_doctor='$id'";
    $result=mysqli_query($conex,$sql);
    $mostrar=mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDITAR MEDICO</title>
    <link rel="stylesheet" href="registro.css">
    <script src="https://kit.fontawesome.com/1a12489769.js" crossorigin="anonymous"></script>
</head>
<body>
    <form id="formulario" action="../php/editar_medico.php" method="post">
        <h2>Editar Medico</h2>
        <div class="input-wrapper">
            <input type="hidden" name="id" placeholder="ID" value="<?php echo $mostrar['id_doctor'] ?>">
        </div>
        <div class="input-wrapper">
            <input type="text" name="name" placeholder="Nombre" value="<?php echo $mostrar['nombre'] ?>">
            <i class="input-icon fa-solid fa-user-doctor"></i>
        </div>
        <div class="input-wrapper">
            <input type="text" name="apellido_paterno" placeholder="Apellido Paterno" value="<?php echo $mostrar['apellido_paterno'] ?>">
            <i class="input-icon fa-solid fa-pen"></i>
        </div>
        <div class="input-wrapper">
            <input type="text" name="apellido_materno" placeholder="Apellido Materno" value="<?php echo $mostrar['apellido_materno'] ?>">
            <i class="input-icon fa-solid fa-pen"></i>
        </div>
        <div class="input-wrapper">
            <input type="email" name="email" placeholder="Correo" value="<?php echo $mostrar['email'] ?>">
            <i class="input-icon fa-solid fa-envelope"></i>
        </div>
        <div class="input-wrapper">
            <input type="tel" name="phone" placeholder="Telefono" value="<?php echo $mostrar['telefono'] ?>">
            <i class="input-icon fa-solid fa-phone"></i>
        </div>
        <div class="input-wrapper">
            <input type="text" name="cedula_profesional" placeholder="Cedula Profesional" value="<?php echo $mostrar['cedula_profesional'] ?>">
            <i class="input-icon fa-solid fa-file-lines"></i>
        </div>
        <div class="input-wrapper">
            <input type="text" name="especialidad" placeholder="Especialidad" value="<?php echo $mostrar['especialidad'] ?>">
            <i class="input-icon fa-solid fa-book"></i>
        </div>
        <div class="input-wrapper">
            <input type="time" name="hora_entrada" placeholder="Hora de Entrada" value="<?php echo $mostrar['hora_entrada'] ?>">
            <i class="input-icon fa-solid fa-hourglass-start"></i>
        </div>
        <div class="input-wrapper">
            <input type="time" name="hora_salida" placeholder="Hora de Salida" value="<?php echo $mostrar['hora_salida'] ?>">
            <i class="input-icon fa-solid fa-hourglass-end"></i>
        </div>
        <div class="input-wrapper">
            <input type="password" name="password" placeholder="Contraseña" value="<?php echo $mostrar['contraseña'] ?>">
            <i class="input-icon fa-solid fa-key"></i>
        </div>
        <input class="ctn" type="submit" name="register" value="Actualizar">
    </form>
</body>
</html>