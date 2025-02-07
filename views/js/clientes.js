//metodo para crear un cliente
// Inicialización
function init() {
    // Escucha el evento submit del formulario
    $("#formularioCliente").on("submit", function (e) {
        crear_cliente(e);
    });

    // Escucha el evento submit del formulario
    $("#contacto_form").on("submit", function (o) {
        formulario_contacto(o);
    });

    // Limpiar formulario antes de mostrar el modal
    $("#addClienteModal").on("show.bs.modal", function () {
        limpiarFormulario();
    });
}

// Función para guardar o editar el cliente
function crear_cliente(e) {
    e.preventDefault(); // Previene el comportamiento predeterminado del formulario
    // Recoge los datos del formulario
    var formData = new FormData($("#formularioCliente")[0]);
    $.ajax({
        url: "/inmoweb/controllers/clientes.php?opc=insert_cliente", // Cambia la ruta según corresponda
        type: "POST",
        data: formData,
        contentType: false, // Para enviar archivos o datos complejos
        processData: false,
        success: function (data) {
            Swal.fire(
                'Creado',
                'El cliente ha sido registrado correctamente.',
                'success'
            ).then(() => {
                // Recargar la tabla de agentes
                location.reload();
            });    
        }
    });
}


// Función para guardar o editar el cliente
function formulario_contacto(o) {
    o.preventDefault(); // Previene el comportamiento predeterminado del formulario
    // Recoge los datos del formulario
    var formData = new FormData($("#contacto_form")[0]);
    $.ajax({
        url: "/inmoweb/controllers/clientes.php?opc=insert_cliente", // Cambia la ruta según corresponda
        type: "POST",
        data: formData,
        contentType: false, // Para enviar archivos o datos complejos
        processData: false,
        success: function (data) {
            Swal.fire(
                'Enviado',
                'Nos contactaremos dentro de poco con usted, gracias!',
                'success'
            ).then(() => {
                // Recargar la tabla de agentes
                location.reload();
            });    
        }
    });
}




$(document).ready(function () {
        // Cargar los agentes de la primera página al inicio
    cargarClientesDash(1);
    cargarClientes(1);

    // Cargar agentes según la página seleccionada
    $(document).on('click', '.paginacion-link', function (e) {
        e.preventDefault();
        var pagina = $(this).data('pagina'); // Obtener el número de página
        cargarClientesDash(pagina); // Cargar los datos para esa página
    });
    function cargarClientesDash(pagina) {
        $.get("/inmoweb/controllers/clientes.php?opc=mostrarClientes&pagina=" + pagina, function (data) {
            data = JSON.parse(data);

            // Construir las filas de la tabla
            let filas = '';
            data.clientes.forEach(function (cliente) {
                filas += `
                    <tr>
                        <th scope="row">${cliente.id_cliente}</th>
                        <td>${cliente.nombres}</td>
                        <td>${cliente.apellidoP}</td>
                        <td>${cliente.telefono}</td>
                        <td>
                            <button class="btn btn-info text-white"><i class="bi bi-eye"></i></button>
                            <button class="btn btn-danger"><i class="bi bi-x-circle"></i></button>
                        </td>
                    </tr>
                `;
            });

            // Insertar las filas en el cuerpo de la tabla
            $("#tablaClientesDash tbody").html(filas);

            // Generar los enlaces de paginación
            let paginacion = '';
            for (let i = 1; i <= data.totalPaginas; i++) {
                paginacion += `
                    <a href="#" class="btn btn-dark paginacion-link" data-pagina="${i}">${i}</a>
                `;
            }

            // Insertar los enlaces de paginación debajo de la tabla
            $("#paginacion").html(paginacion);
        });
    }
    function cargarClientes(pagina) {
        $.get("/inmoweb/controllers/clientes.php?opc=mostrarClientes&pagina=" + pagina, function (data) {
            data = JSON.parse(data);

            // Construir las filas de la tabla
            let filas = '';
            data.clientes.forEach(function (cliente) {
                filas += `
                    <tr>
                        <th scope="row">${cliente.id_cliente}</th>
                        <td>${cliente.nombres}</td>
                        <td>${cliente.apellidoP}</td>
                        <td>${cliente.apellidoM}</td>
                        <td>${cliente.sexo}</td>
                        <td>${cliente.correo}</td>
                        <td>${cliente.telefono}</td>
                        <td>${cliente.observaciones}</td>
                        <td>
                            <button class="btn btn-info text-white"><i class="bi bi-eye"></i></button>
                            <button class="btn btn-danger"><i class="bi bi-x-circle"></i></button>
                        </td>
                    </tr>
                `;
            });

            // Insertar las filas en el cuerpo de la tabla
            $("#tablaClientes tbody").html(filas);

            // Generar los enlaces de paginación
            let paginacion = '';
            for (let i = 1; i <= data.totalPaginas; i++) {
                paginacion += `
                    <a href="#" class="btn btn-dark paginacion-link" data-pagina="${i}">${i}</a>
                `;
            }

            // Insertar los enlaces de paginación debajo de la tabla
            $("#paginacion").html(paginacion);
        });
    }
    init();
});


