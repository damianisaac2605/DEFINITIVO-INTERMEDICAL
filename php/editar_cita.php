<?php
    include("conexion.php");
    if(isset($_POST['register'])){
        $id = $_POST['id_cita'];

        if(
            strlen($_POST['fecha']) >= 1 &&
            strlen($_POST['hora']) >= 1 &&
            strlen($_POST['estado']) >= 1 &&
            strlen($_POST['motivo']) >= 1
           ) {
                $fecha = trim($_POST['fecha']);
                $hora = trim($_POST['hora']);
                $estado = trim($_POST['estado']);
                $motivo = trim($_POST['motivo']);

                // Validación de la hora
                $inicio = "08:00";
                $fin = "20:00";

                if ($hora >= $inicio && $hora <= $fin) {
                    $consulta = "UPDATE cita SET fecha='$fecha', hora='$hora', estado='$estado', motivo='$motivo' WHERE id_cita='$id'";
                    $resultado = mysqli_query($conex, $consulta);
                    if($resultado){
                        echo "<script>
                            alert('Tu Cita se Actualizo Correctamente');
                            window.location.href = '../InterfazPaciente/n2citas.php';
                        </script>";
                    }else{
                        echo "<script>alert('Ocurrio un Error')
                            window.location.href = '../InterfazPaciente/n2citas.php';
                        </script>";
                    }
                } else {
                    echo "<script>alert('La hora debe estar entre las 8:00 AM y las 8:00 PM')
                        window.location.href = '../InterfazPaciente/n2citas.php';
                    </script>";
                }
            }else{
                echo "<script>alert('Llenar todos los Campos')
                    window.location.href = '../InterfazPaciente/n2citas.php';
                </script>";
            }
    }
?>
