<?php 
    include("../php/conexion.php");
    $conex = mysqli_connect("localhost","root","","intermedical");

    $id=$_GET['id'];

    $sql = "DELETE FROM cita WHERE id_cita='$id'";
    $result=mysqli_query($conex,$sql);
            
    if($result){
    echo "<script>
        alert('Se ha eliminado correctamente');
        window.location.href = 'n2citas.php';
        </script>";
    } else {
           echo "<script>alert('Ocurrió un Error');</script>";
    }
?>