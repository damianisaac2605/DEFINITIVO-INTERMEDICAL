<?php
    include("conexion.php");
    if(isset($_POST['register'])){
        $id = $_POST['id'];
        
        if(
            strlen($_POST['name']) >= 1 &&
            strlen($_POST['apellido_paterno']) >= 1 &&
            strlen($_POST['apellido_materno']) >= 1 &&
            strlen($_POST['email']) >= 1 &&
            strlen($_POST['phone']) >= 1 &&
            strlen($_POST['cedula_profesional']) >= 1 &&
            strlen($_POST['especialidad']) >= 1 &&
            strlen($_POST['hora_entrada']) >= 1 &&
            strlen($_POST['hora_salida']) >= 1 &&
            strlen($_POST['password']) >= 1
        ) {
            $name = trim($_POST['name']);
            $paterno = trim($_POST['apellido_paterno']);
            $materno = trim($_POST['apellido_materno']);
            $email = trim($_POST['email']);
            $phone = trim($_POST['phone']);
            $cedula = trim($_POST['cedula_profesional']);
            $especialidad = trim($_POST['especialidad']);
            $entrada = trim($_POST['hora_entrada']);
            $salida = trim($_POST['hora_salida']);
            $contraseña = trim($_POST['password']);
            $fecha = date("d-m-y");
            

            $consulta = "UPDATE doctor SET nombre='$name', apellido_paterno='$paterno', apellido_materno='$materno', email='$email', telefono='$phone', cedula_profesional='$cedula', especialidad='$especialidad', hora_entrada='$entrada', hora_salida='$salida', contraseña='$contraseña' WHERE id_doctor='$id'";
            $resultado = mysqli_query($conex, $consulta);
            
            if($resultado){
                echo "<script>
                        alert('Se actualizo correctamente');
                        window.location.href = '../InterfazAdmin/n3medicos.php';
                      </script>";
            } else {
                echo "<script>alert('Ocurrió un Error');</script>";
            }
        } else {
            echo "<script>alert('Llenar todos los Campos');</script>";
        }
    }
?>