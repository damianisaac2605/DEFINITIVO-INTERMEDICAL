<?php
    include("conexion.php");
    if(isset($_POST['register'])){
        $id = $_POST['id_recta'];
        
        if(
            strlen($_POST['paciente']) >= 1 &&
            strlen($_POST['medicamento']) >= 1 &&
            strlen($_POST['descripcion']) >= 1
        ) {
            $paciente = mysqli_real_escape_string($conex, trim($_POST['paciente']));
            $medicamento = mysqli_real_escape_string($conex, trim($_POST['medicamento']));
            $descripcion = mysqli_real_escape_string($conex, trim($_POST['descripcion']));
            

            $consulta = "UPDATE receta SET paciente='$paciente', medicamento='$medicamento', descripcion='$descripcion' WHERE id_recta='$id'";
            $resultado = mysqli_query($conex, $consulta);
            
            if($resultado){
                echo "<script>
                        alert('Se actualizo correctamente');
                        window.location.href = '../InterfazMedico/n2recetas.php';
                      </script>";
            } else {
                echo "<script>alert('Ocurrió un Error');</script>";
            }
        } else {
            echo "<script>alert('Llenar todos los Campos');</script>";
        }
    }
?>