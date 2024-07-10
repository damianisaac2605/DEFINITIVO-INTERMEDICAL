<?php 
    include("../php/conexion.php");
    $conex = mysqli_connect("localhost","root","","intermedical");

    $id=$_GET['id'];

    $sql = "SELECT * FROM paciente WHERE id_paciente='$id'";
    $result=mysqli_query($conex,$sql);
    $mostrar=mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDITAR PACIENTE</title>
    <link rel="stylesheet" href="registro.css">
    <script src="https://kit.fontawesome.com/1a12489769.js" crossorigin="anonymous"></script>
</head>
<body>
<form id="formulario" action="../php/editar_paciente.php" method="post">
        <h2>Editar Paciente</h2>
        <div class="input-wrapper">
            <input type="hidden" name="id" placeholder="ID" value="<?php echo $mostrar['id_paciente'] ?>">
        </div>
        <div class="input-wrapper">
            <input type="text" name="name" placeholder="Nombre" value="<?php echo $mostrar['nombre'] ?>">
            <i class="input-icon fa-solid fa-user"></i>
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
            <input type="password" name="password" placeholder="Contraseña" value="<?php echo $mostrar['contraseña'] ?>">
            <i class="input-icon fa-solid fa-key"></i>
        </div>
        <input class="ctn" type="submit" name="register" value="Actualizar">
    </form>
</body>
</html>