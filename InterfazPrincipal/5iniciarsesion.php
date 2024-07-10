<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/estilos_iniciar_sesion.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/1a12489769.js" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar">
        <ul class="nav-links">
            <li class="logo"><a class="entrar" href="../index.html"><i class="fa-solid fa-house"></i><b> Inter-Medical</b></a></li>
        </ul>
    </nav>
    <main>
        <div class="contenedor__todo">
            <div class="caja__trasera">
                <div class="caja__trasera-login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p2>Inicia sesion para entrar en la pagina</p2> 
                    <button  id="btn__iniciar-sesion">Iniciar Sesion</button>
                </div>
                <div class="caja__trasera-register">
                    <h3>¿Aun no tienes una cuenta?</h3>
                    <p2>Registrate para iniciar sesion</p2> 
                    <button id="btn__registrarse">Registrarse</button>
                </div>
            </div>

            <div class="contenedor__login-register">
                <form action="../php/iniciar_sesion.php" method="post" class="formulario__login">
                    <h2>Iniciar Sesion</h2>
                    <input type="text" name="email" placeholder="Correo Electronico" required>
                    <input type="password" name="contraseña" placeholder="Contraseña" required>
                    <button class="ctn">Entrar</button>
                </form>

                <form method="post" action="" class="formulario__register">
                    <h2>Registrarse</h2>
                    <div class="input-wrapper">
                        <input type="text" name="name" placeholder="Nombre">
                    </div>
                    <div class="input-wrapper">
                        <input type="text" name="apellido_paterno" placeholder="Apellido Paterno">
                    </div>
                    <div class="input-wrapper">
                        <input type="text" name="apellido_materno" placeholder="Apellido Materno">
                    </div>
                    <div class="input-wrapper">
                        <input type="email" name="email" placeholder="Correo">
                    </div>
                    <div class="input-wrapper">
                        <input type="tel" name="phone" placeholder="Telefono">
                    </div>
                    <div class="input-wrapper">
                        <input type="password" name="password" placeholder="Contraseña">
                    </div>
                    <button id="boton" class="ctn" type="submit" name="register" value="Enviar" onclick="mensaje();">Registrarse</button>
                </form>
                <?php 
                    include("../php/paciente2.php");
                ?>
            </div>
        </div>
    </main><br><br><br><br><br><br><br><br><br><br><br>
    <section class="footer">
        <p>Consultorio Toñitos | Calle 22, Colonia El sol | 55 3668 5095 | Facebook | Whatsapp | Instagram</p>
        <p>Copyright &copy; 2024 Inter-Medical</p>
    </section>
    <script src="inicio_sesion.js"></script>
</body>
</html>