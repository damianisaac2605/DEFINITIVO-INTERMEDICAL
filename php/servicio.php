<?php
    include("conexion.php");
    if(isset($_POST['register'])){
        if(
            strlen($_POST['servicio']) >= 1 &&
            strlen($_POST['nombre']) >= 1 &&
            strlen($_POST['descripcion']) >= 1 
           ) {
                $servicio = trim($_POST['servicio']);
                $nombre = trim($_POST['nombre']);
                $descripcion = trim($_POST['descripcion']);
                $consulta = "INSERT INTO servicio(servicio, nombre, descripcion)
                    VALUES('$servicio','$nombre', '$descripcion')";
                
                $resultado = mysqli_query($conex, $consulta);
                if($resultado){
                    echo "<script>
                        alert('Servicio Registrtado Correctamente');
                        window.location.href = 'n4servicios.php';
                    </script>";
                }else{
                    echo "<script>alert('Ocurrio un Error');</script>";
                }
            }else{
                echo "<script>alert('Llenar todos los Campos');</script>";
            }
    }
?>