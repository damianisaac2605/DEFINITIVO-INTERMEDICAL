document.getElementById("buscar").addEventListener("input", function() {
    var filtro = this.value.toLowerCase();
    var filas = document.querySelectorAll("#tabla tbody tr");
    filas.forEach(function(fila) {
        var mostrar = false;
        fila.querySelectorAll("td").forEach(function(celda) {
            if (celda.textContent.toLowerCase().indexOf(filtro) > -1) {
                mostrar = true;
            }
        });
        if (mostrar) {
            fila.style.display = "";
        } else {
            fila.style.display = "none";
        }
    });
});