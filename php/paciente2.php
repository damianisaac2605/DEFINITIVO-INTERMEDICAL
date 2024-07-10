<?php
    include("conexion.php");
    if(isset($_POST['register'])){
        if(
            strlen($_POST['name']) >= 1 &&
            strlen($_POST['apellido_paterno']) >= 1 &&
            strlen($_POST['apellido_materno']) >= 1 &&
            strlen($_POST['email']) >= 1 &&
            strlen($_POST['phone']) >= 1 &&
            strlen($_POST['password']) >= 1
           ) {
                $name = trim($_POST['name']);
                $paterno = trim($_POST['apellido_paterno']);
                $materno = trim($_POST['apellido_materno']);
                $email = trim($_POST['email']);
                $phone = trim($_POST['phone']);
                $password = trim($_POST['password']);
                $fecha = date("y-m-d");
                $consulta = "INSERT INTO paciente(nombre, apellido_paterno, apellido_materno, email, telefono, contraseña, fecha)
                    VALUES('$name', '$paterno', '$materno', '$email', '$phone', '$password', '$fecha')";

                $verificar_correo = mysqli_query($conex, "SELECT * FROM paciente WHERE email='$email'");
                if(mysqli_num_rows($verificar_correo) > 0){
                    echo "<script>
                        alert('Este correo ya esta registrado, intente con otro diferente');
                        window.location.href = '../InterfazPrincipal/5iniciarsesion.php';
                    </script>
                    ";
                    exit();
                }

                $resultado = mysqli_query($conex, $consulta);
                if($resultado){
                    echo "<script>
                        alert('Tu Registro se ha Completado');
                        window.location.href = '../InterfazPrincipal/5iniciarsesion.php';
                    </script>";
                }else{
                    echo "<script>alert('Ocurrio un Error');</script>";
                }
            }else{
                echo "<script>alert('Llenar todos los Campos');</script>";
            }
    }
?>