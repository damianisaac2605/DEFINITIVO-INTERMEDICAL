<?php
    $conex = mysqli_connect("localhost","root","","intermedical");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MEDICAMENTOS</title>
    <link rel="stylesheet" href="../InterfazAdmin/tablas.css">
    <link rel="website icon" type="png" href="../Imagenes/INTERMEDICALLOGO.png">
    <script src="https://kit.fontawesome.com/1a12489769.js" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar">
        <h1 class="logo">Inter-Medical</h1>
        <ul class="nav-links">
            <li><a href="n1medico.php"><i class="fa-solid fa-user-doctor"></i>Medico</a></li>
            <li><a href="n2recetas.php"><i class="fa-solid fa-file"></i>Recetas</a></li>
            <li><a href="n3medicamentos.php"><i class="fa-solid fa-suitcase-medical"></i>Medicamentos</a></li>
            <li><a href="n4pacientes.php"><i class="fa-solid fa-user"></i>Pacientes</a></li>
            <li class="ctn"><a href="../InterfazPrincipal/5iniciarsesion.php"><i class="fa-solid fa-arrow-right-from-bracket"></i> Cerrar Sesion</a></li>
        </ul>
        <img src="../Imagenes/menu-btn.png" alt="" class="menu-btn">
    </nav>
        <div class="header-content">
            <h1>Medicamentos Disponibles</h1>
            <div class="line"></div>
        </div>

    <div>
        <input type="text" id="buscar" placeholder="Buscar...">
    </div><br>

    <div id="tabla" class="table-responsive">
    <table>
        <tr style="border:3px #28537e solid">
            <th>ID</th>
            <th>Imagen</th>
            <th>Tipo</th>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Cantidad</th>
        </tr>
        <?php
            $sql="SELECT * FROM medicamento";
            $result=mysqli_query($conex,$sql);
            while($mostrar=mysqli_fetch_array($result)){
        ?>
        <tr style="border:3px #28537e solid">
            <td><?php echo $mostrar['id_medicamento'] ?></td>
            <td><img src="../Imagenes/<?php echo $mostrar['imagen']; ?>" width="50" height="70"></td>
            <td><?php echo $mostrar['nombre'] ?></td>
            <td><?php echo $mostrar['tipo'] ?></td>
            <td><?php echo $mostrar['descripcion'] ?></td>
            <td><?php echo $mostrar['cantidad'] ?></td>
        </tr>
        <?php 
            }
        ?>
    </table>
    </div><br>
    <script src="../InterfazAdmin/buscar.js"></script>
    <script src="../InterfazPrincipal/interfazprincipal.js"></script>
</body>
</html>