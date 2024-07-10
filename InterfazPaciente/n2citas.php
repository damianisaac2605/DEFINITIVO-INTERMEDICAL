<?php
    $conex = mysqli_connect("localhost","root","","intermedical");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CITAS</title>
    <link rel="stylesheet" href="../InterfazAdmin/tablas.css">
    <link rel="website icon" type="png" href="../Imagenes/INTERMEDICALLOGO.png">
    <script src="https://kit.fontawesome.com/1a12489769.js" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar">
        <h1 class="logo">Inter-Medical</h1>
        <ul class="nav-links">
            <li><a href="n1paciente.php"><i class="fa-solid fa-user-tie"></i>Paciente</a></li>
            <li><a href="n2citas.php"><i class="fa-solid fa-calendar-days"></i>Citas</a></li>
            <li class="ctn"><a href="../InterfazPrincipal/5iniciarsesion.php"><i class="fa-solid fa-arrow-right-from-bracket"></i> Cerrar Sesion</a></li>
        </ul>
        <img src="../Imagenes/menu-btn.png" alt="" class="menu-btn">
    </nav>
        <div class="header-content">
            <h1>Citas Registradas</h1>
            <div class="line"></div>
        </div>

    <ul><li><a href="registrarcita.php"><i class="fa-solid fa-calendar-plus"></i>Agregar Cita</a></li></ul><br>

    <div>
        <input type="text" id="buscar" placeholder="Buscar...">
    </div><br>

    <div id="tabla" class="table-responsive">
    <table>
        <tr style="border:3px #28537e solid">
            <th>ID</th>
            <th>Fecha</th>
            <th>Hora</th>
            <th>Estado</th>
            <th>Motivo</th>
            <th>Dia de Registro</th>
            <th colspan="2">Operaciones</th>
        </tr>
        <?php
            $sql="SELECT * FROM cita";
            $result=mysqli_query($conex,$sql);
            while($mostrar=mysqli_fetch_array($result)){
        ?>
        <tr style="border:3px #28537e solid">
            <td><?php echo $mostrar['id_cita'] ?></td>
            <td><?php echo $mostrar['fecha'] ?></td>
            <td><?php echo $mostrar['hora'] ?></td>
            <td><?php echo $mostrar['estado'] ?></td>
            <td><?php echo $mostrar['motivo'] ?></td>
            <td><?php echo $mostrar['diaregistro'] ?></td>
            <td><a href="editarcita.php?id=<?php echo $mostrar['id_cita'] ?>"><i class="fa-solid fa-pen-to-square"></i>Editar</a></td>
            <td><a href="eliminarcita.php?id=<?php echo $mostrar['id_cita'] ?>"><i class="fa-solid fa-trash-can"></i>Eliminar</a></td>
        </tr>
        <?php 
            }
        ?>
    </table>
    </div>
    <script src="../InterfazAdmin/buscar.js"></script>
    <script src="../InterfazPrincipal/interfazprincipal.js"></script>
</body>
</html>