

$(document).ready(function() {
    // Inicializar Select2 en el select
    $('#caracteristicas_internas').select2({
        placeholder: "Selecciona características internas",  // Placeholder visible cuando no se selecciona nada
        allowClear: true  // Permite limpiar la selección
    });
});


$(document).ready(function() {
    // Inicializar Select2 en el select
    $('#caracteristicas_externas').select2({
        placeholder: "Selecciona características externas",  // Placeholder visible cuando no se selecciona nada
        allowClear: true  // Permite limpiar la selección
    });
});


// Inicialización
function init() {
    // Escucha el evento submit del formulario
    $("#propiedad_form").on("submit", function (e) {
        crear_propiedad(e);
    });

}
// Función para guardar o editar la propiedad

function crear_propiedad(e) {
    e.preventDefault(); // Previene el comportamiento predeterminado del formulario
    // Recoge los datos del formulario
    var formData = new FormData($("#propiedad_form")[0]);
    $.ajax({
        url: "/inmoweb/controllers/propiedades.php?opc=insert_propiedad",
        type: "POST",
        data: formData,
        contentType: false, // Para enviar archivos o datos complejos
        processData: false,
        success: function (data) {
            Swal.fire(
                'Creado',
                'La propiedad ha sido creado correctamente.',
                'success'
            ).then(() => {
                // Recargar la tabla de agentes
                location.reload();
            });    
        }
    });
}




$(document).ready(function () {
    var propiedad_id = $("#id_propiedad").val();

    //limpiar fondo del modal
    $('#propiedadModal').on('hidden.bs.modal', function () {
        $('body').removeClass('modal-open');
        $('.modal-backdrop').remove();
    });
    

    // Cargar los propiedades de la primera página al inicio
    cargarPropiedades(1);

    // Cargar propiedades según la página seleccionada
    $(document).on('click', '.paginacion-link', function (e) {
        e.preventDefault();
        var pagina = $(this).data('pagina'); // Obtener el número de página
        cargarPropiedades(pagina); // Cargar los datos para esa página
    });
    
    function cargarPropiedades(pagina) {
        $.get("/inmoweb/controllers/propiedades.php?opc=mostrar_propiedades&pagina=" + pagina, function (data) {
            data = JSON.parse(data);

            // Construir las filas de la tabla
            let filas = '';
            data.propiedades.forEach(function (propiedad) {
                filas += `
                    <tr>
                        <th scope="row">${propiedad.id_propiedad}</th>
                        <td>
                            <img src="/inmoweb/public/img/${propiedad.img_principal}" alt="Imagen"" class="img_portada_admin">
                        </td>
                        <td>${propiedad.nombre}</td>
                        <td>${propiedad.categoria}</td>
                        <td>${propiedad.estado_comercial}</td>
                        <td>${propiedad.precio}</td>
                        <td>${propiedad.areaConstruida}</td>
                        <td>${propiedad.ciudad}</td>
                   
                        
                        <td>
                            <button class="btn btn-warning text-white" onclick="propiedadXid(${propiedad.id_propiedad})"><i class="bi bi-pencil-square"></i></button>
                            <button class="btn btn-danger" onclick="delete_propiedad(${propiedad.id_propiedad})"><i class="bi bi-x-circle"></i></button>
                        </td>
                    </tr>
                `;
            });

            // Insertar las filas en el cuerpo de la tabla
            $("#tablaPropiedades tbody").html(filas);

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

    //dandole accion al boton de cerrar del modal
    document.querySelector(".btn-cerrarModal").addEventListener("click", function() {
        const modal = bootstrap.Modal.getInstance(document.getElementById('propiedadModal'));
        modal.hide();
    });

});


function propiedadXid(id_propiedad) {
    // Hacer la solicitud AJAX para obtener los datos del agente
    $.get("/inmoweb/controllers/propiedades.php?opc=propiedadXid&id_propiedad=" + id_propiedad, function(data) {
        data = JSON.parse(data);
        console.log(data);
        // Llenar los campos del modal con los datos del agente
        $("#nombre").val(data.nombre);
        $("#descripcion").val(data.descripcion);
        $("#vista_img_principal").attr("src", "/inmoweb/public/img/" + data.img_principal);
        $("#img_detalle").val(data.img_detalle);
        $("#precio").val(data.precio);
        $("#areaConstruida").val(data.areaConstruida);
        $("#añoConstruccion").val(data.añoConstruccion);
        $("#baños").val(data.baños);
        $("#habitaciones").val(data.habitaciones);
        $("#pisos").val(data.pisos);
        $("#garaje").val(data.garaje);
        $("#estrato").val(data.estrato);
        $("#estado_comercial").val(data.id_estado);
        $("#id_ciudad").val(data.id_ciudad);
        $("#id_departamento").val(data.id_departamento);
        $("#id_categoria").val(data.id_categoria);
        $("#id_agente").val(data.id_agente);
        $("#caracteristicas_internas").val(data.caracteristicas_internas).trigger('change');
        $("#caracteristicas_externas").val(data.caracteristicas_externas).trigger('change');
        
        // Mostrar el modal
        const modal = new bootstrap.Modal(document.getElementById('propiedadModal'));
        modal.show();
        // Actualizar el id_agente con el valor correcto
        $("#id_propiedad").val(data.id_propiedad);  // Si no tienes este campo oculto en tu modal, añádelo
        propiedad_id = data.id_propiedad;  // Actualizar el valor de age_id
    });
    
}

// funcion para eliminar una propiedad
function delete_propiedad(id_propiedad) {
    // Mostrar confirmación al usuario antes de eliminar
    Swal.fire({
        title: 'Eliminar registro',
        text: "¿Desea eliminar el registro?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Aceptar',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        // Solo ejecutar si el usuario confirma
        if (result.isConfirmed) {
            // Realizar la solicitud AJAX
            $.post("/inmoweb/controllers/propiedades.php?opc=delete_propiedad", { id_propiedad: id_propiedad }, function (data) {
                // Mostrar mensaje de éxito
                Swal.fire(
                    'Eliminado',
                    'El agente ha sido eliminado correctamente.',
                    'success'
                ).then(() => {
                    // Recargar la tabla de agentes
                    location.reload();
                });
            }).fail(function () {
                // Manejar errores en la solicitud AJAX
                Swal.fire(
                    'Error',
                    'No se pudo eliminar el agente. Intente nuevamente.',
                    'error'
                );
            });
        }
    });
}

// filtro estado comercial
$(document).ready(function() {
    $('#btnAplicarFiltro').on('click', function() {
        const id_estado = $('#filtro_estado_comercial').val();

        $.ajax({
            url: '/inmoweb/controllers/propiedades.php', // ruta a tu controlador
            method: 'GET',
            data: {
                opc: 'filtrar_x_estado_comercial',
                id_estado: id_estado
            },
            success: function(response) {
                let propiedades;
                try {
                    propiedades = JSON.parse(response);
                } catch (e) {
                    Swal.fire('Error', 'Respuesta del servidor no es válida', 'error');
                    return;
                }

                let html = '';

                if (propiedades.length === 0) {
                    html = '<p class="text-center">No se encontraron propiedades.</p>';
                } else {
                    propiedades.forEach(function(propiedad) {
                        const precioFormateado = new Intl.NumberFormat('es-CO').format(propiedad.precio);
                        const img = '../public/img/' + propiedad.img_principal;

                        html += `
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="card-custom p-0">
                                    <figure>
                                        <img src="${img}" alt="" class="img-card w-100">
                                    </figure>
                                    <p class="text-secondary mx-2 my-0">Casa en ${propiedad.estado_comercial}</p>
                                    <p class="fw-bold mx-2 my-0">${propiedad.nombre}</p>
                                    <p class="fw-bold mx-2 my-0">$${precioFormateado}</p>
                                    <p class="mx-2 my-0">${propiedad.ciudad}</p>
                                    <div class="text-center mb-2">
                                        <a href="detalle_propiedad.php?id_propiedad=${propiedad.id_propiedad}" class="btn btn-info text-white fw-bold">Ver detalle</a>
                                    </div>
                                </div>
                            </div>
                        `;
                    });
                }

                $('#contenedor_propiedades').html(html);
            },
            error: function() {
                Swal.fire('Error', 'No se pudieron cargar las propiedades filtradas', 'error');
            }
        });
    });
});






init();