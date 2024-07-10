<?php 
    include("../php/conexion.php");
    $conex = mysqli_connect("localhost","root","","intermedical");

    $id=$_GET['id'];

    $sql = "SELECT * FROM receta WHERE id_recta='$id'";
    $result=mysqli_query($conex,$sql);
    $mostrar=mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDITAR CITA</title>
    <link rel="stylesheet" href="../InterfazAdmin/registro.css">
    <script src="https://kit.fontawesome.com/1a12489769.js" crossorigin="anonymous"></script>
</head>
<body>
    <form id="formulario" action="../php/editar_receta.php" method="post">
        <h2>Editar Cita</h2>
        <div class="input-wrapper">
            <input type="hidden" name="id_recta" placeholder="ID" value="<?php echo $mostrar['id_recta'] ?>">
        </div>
        <div class="input-wrapper">
            <input type="text" name="paciente" placeholder="Paciente" value="<?php echo $mostrar['paciente'] ?>">
            <i class="input-icon fa-solid fa-pen"></i>
        </div>
        <div class="input-wrapper">
            <input type="text" name="medicamento" placeholder="Medicamento" value="<?php echo $mostrar['medicamento'] ?>">
            <i class="input-icon fa-solid fa-pen"></i>
        </div>
        <div class="input-wrapper">
            <input type="text" name="descripcion" placeholder="Descripcion" value="<?php echo $mostrar['descripcion'] ?>">
            <i class="input-icon fa-solid fa-pen"></i>
        </div>
        <input id="boton" class="ctn" type="submit" name="register" value="Enviar" onclick="mensaje();">
    </form>
</body>
</html>