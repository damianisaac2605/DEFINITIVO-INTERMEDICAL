<?php 
    include("../php/conexion.php");
    $conex = mysqli_connect("localhost","root","","intermedical");

    $id=$_GET['id'];

    $sql = "SELECT * FROM servicio WHERE id_servicio='$id'";
    $result=mysqli_query($conex,$sql);
    $mostrar=mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDITAR SERVICIO</title>
    <link rel="stylesheet" href="registro.css">
    <script src="https://kit.fontawesome.com/1a12489769.js" crossorigin="anonymous"></script>
</head>
<body>
    <form id="formulario" action="../php/editar_servicio.php" method="post">
        <h2>Editar Paciente</h2>
        <div class="input-wrapper">
            <input type="hidden" name="id" placeholder="ID" value="<?php echo $mostrar['id_servicio'] ?>">
        </div>
        <div class="input-wrapper">
            <input type="text" name="servicio" placeholder="Servicio" value="<?php echo $mostrar['servicio'] ?>">
            <i class="input-icon fa-solid fa-file-medical"></i>
        </div>
        <div class="input-wrapper">
            <input type="text" name="nombre" placeholder="Nombre" value="<?php echo $mostrar['nombre'] ?>">
            <i class="input-icon fa-solid fa-pen"></i>
        </div>
        <div class="input-wrapper">
            <input type="text" name="descripcion" placeholder="Descripcion" value="<?php echo $mostrar['descripcion'] ?>">
            <i class="input-icon fa-solid fa-pen"></i>
        </div>
        <input id="boton" class="ctn" type="submit" name="registerr" value="Actualizar">
    </form>
</body>
</html>