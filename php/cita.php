<?php
    include("conexion.php");
    if(isset($_POST['register'])){
        
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
                $dia = date("y-m-d");

                // Validación de la hora
                $inicio = "08:00";
                $fin = "20:00";

                if ($hora >= $inicio && $hora <= $fin) {
                    $consulta = "INSERT INTO cita(fecha, hora, estado, motivo, diaregistro)
                        VALUES('$fecha', '$hora', '$estado', '$motivo', '$dia')";
                    $resultado = mysqli_query($conex, $consulta);
                    if($resultado){
                        echo "<script>
                            alert('Tu Cita se ha registrado con Exito');
                            window.location.href = '../InterfazPaciente/n2citas.php';
                        </script>";
                    }else{
                        echo "<script>alert('Ocurrio un Error');</script>";
                    }
                } else {
                    echo "<script>alert('La hora debe estar entre las 8:00 AM y las 8:00 PM');</script>";
                }
            }else{
                echo "<script>alert('Llenar todos los Campos');</script>";
            }
    }
?>
