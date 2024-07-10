<?php
    include("conexion.php");

    $correo = $_POST['email'];
    $contraseña =$_POST['contraseña'];

    session_start();
    $_SESSION['email']=$correo;

    $validar_sesion = mysqli_query($conex, "SELECT * FROM usuario WHERE email='$correo' and contraseña='$contraseña'");

    $filas=mysqli_fetch_array( $validar_sesion );

    if($filas['id_cargo']==1){//administrador
        header("location: ../InterfazAdmin/n1admin.php");
        exit();
    }else
    if($filas["id_cargo"]== 3){//paciente
        header("location: ../InterfazPaciente/n1paciente.php");
        exit();
    }else
    if($filas["id_cargo"]== 2){//medico
        header("location: ../InterfazMedico/n1medico.php");
        exit();
    }else
        echo "
            <script>
                alert('Usuario no existe, porfavor verifique los datos introducidos');  
                window.location ='../InterfazPrincipal/5iniciarsesion.php';
            </script>";
            exit();
?>