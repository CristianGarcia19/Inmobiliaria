$(document).ready(function () {
    $.post(
        "/inmoweb/controllers/admAgentes.php?opc=total_agentes",  // URL a tu controlador
        function (data) {
            data = JSON.parse(data);  // Convertimos la respuesta JSON
            $("#total_agentes").html(data.total_agentes);  // Mostramos el total en el HTML
        }
    );
});
