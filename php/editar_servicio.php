<?php
    include("conexion.php");
    if(isset($_POST['registerr'])){
        $id = $_POST['id'];
        
        if(
            strlen($_POST['servicio']) >= 1 &&
            strlen($_POST['nombre']) >= 1 &&
            strlen($_POST['descripcion']) >= 1
        ) {
            $servicio = trim($_POST['servicio']);
            $nombre = trim($_POST['nombre']);
            $descripcion = trim($_POST['descripcion']);

            $consulta = "UPDATE servicio SET servicio='$servicio', nombre='$nombre', descripcion='$descripcion' WHERE id_servicio='$id'";
            $resultado = mysqli_query($conex, $consulta);
            
            if($resultado){
                echo "<script>
                        alert('Se actualizo correctamente');
                        window.location.href = '../InterfazAdmin/n4servicios.php';
                      </script>";
            } else {
                echo "<script>alert('Ocurrió un Error');</script>";
            }
        } else {
            echo "<script>alert('Llenar todos los Campos');</script>";
        }
    }
?>
