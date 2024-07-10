<?php
    include("conexion.php");
    if(isset($_POST['register'])){
        if(
            strlen($_POST['fecha']) >= 1 &&
            strlen($_POST['paciente']) >= 1 &&
            strlen($_POST['medicamento']) >= 1 &&
            strlen($_POST['descripcion']) >= 1 
           ) {
                $fecha = trim($_POST['fecha']);
                $paciente = trim($_POST['paciente']);
                $medicamento = trim($_POST['medicamento']);
                $descripcion = trim($_POST['descripcion']);
                $consulta = "INSERT INTO receta(fecha, paciente, medicamento, descripcion)
                    VALUES('$fecha','$paciente', '$medicamento', '$descripcion')";
                
                $resultado = mysqli_query($conex, $consulta);
                if($resultado){
                    echo "<script>
                        alert('Receta Creada Correctamente');
                        window.location.href = 'n2recetas.php';
                    </script>";
                }else{
                    echo "<script>alert('Ocurrio un Error');</script>";
                }
            }else{
                echo "<script>alert('Llenar todos los Campos');</script>";
            }
    }
?>