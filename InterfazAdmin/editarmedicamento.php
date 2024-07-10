<?php 
    include("../php/conexion.php");
    $conex = mysqli_connect("localhost","root","","intermedical");

    $id=$_GET['id'];

    $sql = "SELECT * FROM medicamento WHERE id_medicamento='$id'";
    $result=mysqli_query($conex,$sql);
    $mostrar=mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDITAR MEDICAMENTO</title>
    <link rel="stylesheet" href="registro.css">
    <script src="https://kit.fontawesome.com/1a12489769.js" crossorigin="anonymous"></script>
</head>
<body>
    <form id="formulario" action="../php/editar_medicamento.php" method="post">
        <h2>Editar Medicamento</h2>
        <div class="input-wrapper">
            <input type="hidden" name="id_medicamento" placeholder="ID" value="<?php echo $mostrar['id_medicamento'] ?>">
        </div>
        <div class="input-wrapper">
            <input type="file" name="imagen" placeholder="Inserta Imagen" value="<?php echo $mostrar['imagen'] ?>">
            <i class="input-icon fa-solid fa-image"></i>
        </div>
        <div class="input-wrapper">
            <input type="text" name="nombre" placeholder="Nombre" value="<?php echo $mostrar['nombre'] ?>">
            <i class="input-icon fa-solid fa-pen"></i>
        </div>
        <div class="input-wrapper">
            <input type="text" name="tipo" placeholder="Tipo" value="<?php echo $mostrar['tipo'] ?>">
            <i class="input-icon fa-solid fa-pen"></i>
        </div>
        <div class="input-wrapper">
            <input type="text" name="descripcion" placeholder="Descripcion" value="<?php echo $mostrar['descripcion'] ?>">
            <i class="input-icon fa-solid fa-pen"></i>
        </div>
        <div class="input-wrapper">
            <input type="number" name="cantidad" placeholder="Cantidad" value="<?php echo $mostrar['cantidad'] ?>">
            <i class="input-icon fa-solid fa-boxes-stacked"></i>
        </div>
        <input id="boton" class="ctn" type="submit" name="register" value="Enviar">
    </form>
</body>
</html>