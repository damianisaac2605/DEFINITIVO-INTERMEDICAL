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
            strlen($_POST['password'])
        ) {
            $name = mysqli_real_escape_string($conex, trim($_POST['name']));
            $paterno = mysqli_real_escape_string($conex, trim($_POST['apellido_paterno']));
            $materno = mysqli_real_escape_string($conex, trim($_POST['apellido_materno']));
            $email = mysqli_real_escape_string($conex, trim($_POST['email']));
            $phone = mysqli_real_escape_string($conex, trim($_POST['phone']));
            $contraseña = mysqli_real_escape_string($conex, trim($_POST['password']));
            $fecha = date("d-m-y");
            

            $consulta = "UPDATE paciente SET nombre='$name', apellido_paterno='$paterno', apellido_materno='$materno', email='$email', telefono='$phone', contraseña='$contraseña' WHERE id_paciente='$id'";
            $resultado = mysqli_query($conex, $consulta);
            
            if($resultado){
                echo "<script>
                        alert('Se actualizo correctamente');
                        window.location.href = '../InterfazAdmin/n2pacientes.php';
                      </script>";
            } else {
                echo "<script>alert('Ocurrió un Error');</script>";
            }
        } else {
            echo "<script>alert('Llenar todos los Campos');</script>";
        }
    }
?>
