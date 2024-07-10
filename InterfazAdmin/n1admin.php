<?php
    $conex = mysqli_connect("localhost","root","","intermedical");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMINISTRADOR</title>
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
            <h1>Binevenido Administrador</h1>
            <div class="line"></div>
            <h2>Damian Isaac</h2>
        </div>
        <script src="../InterfazPrincipal/interfazprincipal.js"></script>
</body>
</html>