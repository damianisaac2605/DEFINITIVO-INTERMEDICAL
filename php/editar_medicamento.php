<?php
include("conexion.php");

if(isset($_POST['register'])){
    $id = $_POST['id_medicamento'];
    $nombre = trim($_POST['nombre']);
    $tipo = trim($_POST['tipo']);
    $descripcion = trim($_POST['descripcion']);
    $cantidad = trim($_POST['cantidad']);

    $imagen = isset($_POST['imagen']) ? $_POST['imagen'] : '';

    $consulta = "UPDATE medicamento SET imagen='$imagen', nombre='$nombre', tipo='$tipo', descripcion='$descripcion', cantidad='$cantidad' WHERE id_medicamento='$id'";
    
    $resultado = mysqli_query($conex, $consulta);

    if($resultado){
        echo "<script>
                alert('Medicamento Actualizado Correctamente');
                window.location.href = '../InterfazAdmin/n5medicamentos.php';
              </script>";
    } else {
        echo "<script>alert('Ocurrió un Error al actualizar el medicamento');</script>";
    }
} else {
    echo "<script>alert('Llenar todos los Campos');</script>";
}
?>
