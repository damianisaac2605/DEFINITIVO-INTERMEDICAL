<?php 
    include("../php/conexion.php");
    $conex = mysqli_connect("localhost","root","","intermedical");

    $id=$_GET['id'];

    $sql = "SELECT * FROM cita WHERE id_cita='$id'";
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
    <form id="formulario" action="../php/editar_cita.php" method="post">
        <h2>Editar Cita</h2>
        <div class="input-wrapper">
            <input type="hidden" name="id_cita" placeholder="ID" value="<?php echo $mostrar['id_cita'] ?>">
        </div>
        <div class="input-wrapper">
            <input type="date" id="fecha" name="fecha" placeholder="Fecha" value="<?php echo $mostrar['fecha'] ?>">
            <i class="input-icon fa-solid fa-calendar-day"></i>
        </div>
        <div class="input-wrapper">
            <input type="time" name="hora" placeholder="Hora" value="<?php echo $mostrar['hora'] ?>">
            <i class="input-icon fa-solid fa-clock"></i>
        </div>
        <div class="input-wrapper">
            <input type="text" name="estado" placeholder="Estado" value="<?php echo $mostrar['estado'] ?>">
            <i class="input-icon fa-solid fa-file-waveform"></i>
        </div>
        <div class="input-wrapper">
            <input type="text" name="motivo" placeholder="Motivo" value="<?php echo $mostrar['motivo'] ?>">
            <i class="input-icon fa-solid fa-file-signature"></i>
        </div>
        <input id="boton" class="ctn" type="submit" name="register" value="Actualizar">
    </form>
</body>
</html>