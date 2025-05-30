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

$(document).ready(function () {
    $.post(
        "/inmoweb/controllers/propiedades.php?opc=total_casas_en_venta",  // URL a tu controlador
        function (data) {
            data = JSON.parse(data);  // Convertimos la respuesta JSON
            $("#total_casas_en_venta").html(data.total_casas_en_venta);  // Mostramos el total en el HTML
        }
    );
});

$(document).ready(function () {
    $.post(
        "/inmoweb/controllers/propiedades.php?opc=total_casas_en_arriendo",  // URL a tu controlador
        function (data) {
            data = JSON.parse(data);  // Convertimos la respuesta JSON
            $("#total_casas_en_arriendo").html(data.total_casas_en_arriendo);  // Mostramos el total en el HTML
        }
    );
});

$(document).ready(function () {
    $.post(
        "/inmoweb/controllers/propiedades.php?opc=total_apartamentos_en_venta",  // URL a tu controlador
        function (data) {
            data = JSON.parse(data);  // Convertimos la respuesta JSON
            $("#total_apartamentos_en_venta").html(data.total_apartamentos_en_venta);  // Mostramos el total en el HTML
        }
    );
});

$(document).ready(function () {
    $.post(
        "/inmoweb/controllers/propiedades.php?opc=total_apartamentos_en_arriendo",  // URL a tu controlador
        function (data) {
            data = JSON.parse(data);  // Convertimos la respuesta JSON
            $("#total_apartamentos_en_arriendo").html(data.total_apartamentos_en_arriendo);  // Mostramos el total en el HTML
        }
    );
});