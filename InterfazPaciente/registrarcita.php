<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRAR CITA</title>
    <link rel="stylesheet" href="../InterfazAdmin/registro.css">
    <script src="https://kit.fontawesome.com/1a12489769.js" crossorigin="anonymous"></script>
    <script>
        // Esta función se ejecuta cuando la página se carga
        window.onload = function() {
            // Obtener la fecha actual en formato YYYY-MM-DD
            var today = new Date().toISOString().split('T')[0];
            // Establecer el valor mínimo del campo de fecha
            document.getElementById("fecha").setAttribute("min", today);
        };
        function validarHora() {
            var inputHora = document.querySelector('input[name="hora"]');
            var hora = inputHora.value;
            var inicio = "08:00";
            var fin = "20:00";

            if (hora < inicio || hora > fin) {
                alert("La hora debe estar entre las 8:00 AM y las 8:00 PM");
                return false;
            }
            return true;
        }
    </script>
</head>
<body>
    <form method="post">
        <h2>CITA</h2>
        <p>Agendala</p>
        <div class="input-wrapper">
            <input type="date" id="fecha" name="fecha" placeholder="Fecha">
            <i class="input-icon fa-solid fa-calendar-day"></i>
        </div>
        <div class="input-wrapper">
            <input type="time" name="hora" placeholder="Hora">
            <i class="input-icon fa-solid fa-clock"></i>
        </div>
        <div class="input-wrapper">
            <input type="text" name="estado" placeholder="Estado">
            <i class="input-icon fa-solid fa-file-waveform"></i>
        </div>
        <div class="input-wrapper">
            <input type="text" name="motivo" placeholder="Motivo">
            <i class="input-icon fa-solid fa-file-signature"></i>
        </div>
        <input id="boton" class="ctn" type="submit" name="register" value="Enviar">
    </form>

    <?php 
        include("../php/cita.php");
    ?>
</body>
</html>