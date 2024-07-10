<?php
    include("conexion.php");
    if(isset($_POST['register'])){
        if(
            strlen($_POST['nombre']) >= 1 &&
            strlen($_POST['tipo']) >= 1 &&
            strlen($_POST['descripcion']) >= 1 &&
            strlen($_POST['cantidad']) >= 1 
            ){
                $nombre = trim($_POST['nombre']);
                $tipo = trim($_POST['tipo']);
                $descripcion = trim($_POST['descripcion']);
                $cantidad = trim($_POST['cantidad']);

                if(isset($_POST['imagen']) && !empty($_POST['imagen'])){
                    $imagen = $_POST['imagen'];
                }else{
                    $imagen = '';
                }

                $consulta = "INSERT INTO medicamento(imagen, nombre, tipo, descripcion, cantidad)
                    VALUES('$imagen','$nombre', '$tipo', '$descripcion', '$cantidad')";
                
                $resultado = mysqli_query($conex, $consulta);
                if($resultado){
                    echo "<script>
                        alert('Medicamento Registrtado Correctamente');
                        window.location.href = '../InterfazAdmin/n5medicamentos.php';
                    </script>";
                }else{
                    echo "<script>alert('Ocurrio un Error');</script>";
                }
        }else{
            echo "<script>alert('Llenar todos los Campos');</script>";
        }
    }
?>