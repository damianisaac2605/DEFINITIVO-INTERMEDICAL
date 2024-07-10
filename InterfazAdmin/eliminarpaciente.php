<?php 
    include("../php/conexion.php");
    $conex = mysqli_connect("localhost","root","","intermedical");

    $id=$_GET['id'];

    $sql = "DELETE FROM paciente WHERE id_paciente='$id'";
    $result=mysqli_query($conex,$sql);
            
    if($result){
    echo "<script>
        alert('Se ha eliminado correctamente');
        window.location.href = '../InterfazAdmin/n2pacientes.php';
        </script>";
    } else {
           echo "<script>alert('Ocurrió un Error');</script>";
    }
?>