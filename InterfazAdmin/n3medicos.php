<?php
    $conex = mysqli_connect("localhost","root","","intermedical");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MEDICOS</title>
    <link rel="stylesheet" href="tablas.css">
    <link rel="website icon" type="png" href="../Imagenes/INTERMEDICALLOGO.png">
    <script src="https://kit.fontawesome.com/1a12489769.js" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar">
        <h1 class="logo">Inter-Medical</h1>
        <ul class="nav-links">
            <li><a href="n1admin.php"><i class="fa-solid fa-user-tie"></i>Admin</a></li>
            <li><a href="n2pacientes.php"><i class="fa-regular fa-user"></i> Pacientes</a></li>
            <li><a href="n3medicos.php"><i class="fa-solid fa-user-doctor"></i> Medicos</a></li>
            <li><a href="n4servicios.php"><i class="fa-solid fa-file-medical"></i>Servicios</a></li>
            <li><a href="n5medicamentos.php"><i class="fa-solid fa-suitcase-medical"></i>Medicamentos</a></li>
            <li class="ctn"><a href="../InterfazPrincipal/5iniciarsesion.php"><i class="fa-solid fa-arrow-right-from-bracket"></i> Cerrar Sesion</a></li>
        </ul>
        <img src="../Imagenes/menu-btn.png" alt="" class="menu-btn">
    </nav>
        <div class="header-content">
            <h1>Medicos Registrados</h1>
            <div class="line"></div>
        </div>

        <ul><li><a href="registrarmedico.php"><i class="fa-solid fa-user-plus"></i>Agregar Medico</a></li></ul><br>

    <div>
        <input type="text" id="buscar" placeholder="Buscar...">
    </div><br>

    <div class="table-responsive">
    <table>
        <tr style="border:3px #28537e solid">
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Email</th>
            <th>Telefono</th>
            <th>Cedula Profesional</th>
            <th>Especialidad</th>
            <th>Hora de Entrada</th>
            <th>Hora de Salida</th>
            <th>Contraseña</th>
            <th>Fecha</th>
            <th colspan="2">Operaciones</th>
        </tr>
        <?php
            $sql="SELECT * FROM doctor";
            $result=mysqli_query($conex,$sql);
            while($mostrar=mysqli_fetch_array($result)){
        ?>
        <tr style="border:3px #28537e solid">
            <td><?php echo $mostrar['id_doctor'] ?></td>
            <td><?php echo $mostrar['nombre'] ?></td>
            <td><?php echo $mostrar['apellido_paterno'] ?></td>
            <td><?php echo $mostrar['apellido_materno'] ?></td>
            <td><?php echo $mostrar['email'] ?></td>
            <td><?php echo $mostrar['telefono'] ?></td>
            <td><?php echo $mostrar['cedula_profesional'] ?></td>
            <td><?php echo $mostrar['especialidad'] ?></td>
            <td><?php echo $mostrar['hora_entrada'] ?></td>
            <td><?php echo $mostrar['hora_salida'] ?></td>
            <td><?php echo $mostrar['contraseña'] ?></td>
            <td><?php echo $mostrar['fecha'] ?></td>
            <td><a href="editarmedico.php?id=<?php echo $mostrar['id_doctor'] ?>"><i class="fa-solid fa-pen-to-square"></i> Editar</a></td>
            <td><a href="eliminarmedico.php?id=<?php echo $mostrar['id_doctor'] ?>"><i class="fa-solid fa-trash-can"></i> Eliminar</a></td>
        </tr>
        <?php 
            }
        ?>
    </table>
    </div>

    <script src="../InterfazPrincipal/interfazprincipal.js"></script>
</body>
</html>