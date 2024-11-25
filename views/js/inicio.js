$(document).ready(function () {
    $.post(
        "/inmoweb/controllers/admAgentes.php?opc=total_agentes",  // URL a tu controlador
        function (data) {
            data = JSON.parse(data);  // Convertimos la respuesta JSON
            $("#total_agentes").html(data.total_agentes);  // Mostramos el total en el HTML
        }
    );
});

$(document).ready(function () {
    $.post(
        "/inmoweb/controllers/clientes.php?opc=total_clientes",  // URL a tu controlador
        function (data) {
            data = JSON.parse(data);  // Convertimos la respuesta JSON
            $("#total_clientes").html(data.total_clientes);  // Mostramos el total en el HTML
        }
    );
});