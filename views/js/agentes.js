function agenteXid(id_agente) {
    // Hacer la solicitud AJAX para obtener los datos del agente
    $.get("/inmoweb/controllers/admagentes.php?opc=agenteXid&id_agente=" + id_agente, function(data) {
        data = JSON.parse(data);
        console.log(data);
        // Llenar los campos del modal con los datos del agente
        $("#nombre").val(data.nombre);
        $("#apellidoP").val(data.apellidoP);
        $("#apellidoM").val(data.apellidoM);
        $("#sexo").val(data.sexo);
        $("#telefono").val(data.telefono);
        $("#contraseña").val(data.contraseña);
        $("#correo").val(data.correo);
        
        // Actualizar el id_agente con el valor correcto
        $("#id_agente").val(data.id_agente);  // Si no tienes este campo oculto en tu modal, añádelo
        age_id = data.id_agente;  // Actualizar el valor de age_id
    });
    // Mostrar el modal
    const modal = new bootstrap.Modal(document.getElementById('agenteModal'));
    modal.show();
    
}

$(document).ready(function () {
    var age_id = $("#id_agente").val();

    //limpiar fondo del modal
    $('#agenteModal').on('hidden.bs.modal', function () {
        $('body').removeClass('modal-open');
        $('.modal-backdrop').remove();
    });
    

    // Cargar los agentes de la primera página al inicio
    cargarAgentes(1);

    // Cargar agentes según la página seleccionada
    $(document).on('click', '.paginacion-link', function (e) {
        e.preventDefault();
        var pagina = $(this).data('pagina'); // Obtener el número de página
        cargarAgentes(pagina); // Cargar los datos para esa página
    });
    
    function cargarAgentes(pagina) {
        $.get("/inmoweb/controllers/admagentes.php?opc=mostrarAgentes&pagina=" + pagina, function (data) {
            data = JSON.parse(data);

            // Construir las filas de la tabla
            let filas = '';
            data.agentes.forEach(function (agente) {
                filas += `
                    <tr>
                        <th scope="row">${agente.id_agente}</th>
                        <td>${agente.nombre}</td>
                        <td>${agente.apellidoP}</td>
                        <td>${agente.apellidoM}</td>
                        <td>${agente.sexo}</td>
                        <td>${agente.telefono}</td>
                        <td>${agente.contraseña}</td>
                        <td>${agente.correo}</td>
                        
                        <td>
                            <button class="btn btn-warning text-white" data-bs-toggle="modal" data-bs-target="#agenteModal" onclick="agenteXid(${agente.id_agente})"><i class="bi bi-pencil-square"></i></button>
                            <button class="btn btn-danger"><i class="bi bi-x-circle"></i></button>
                        </td>
                    </tr>
                `;
            });

            // Insertar las filas en el cuerpo de la tabla
            $("#tablaAgentes tbody").html(filas);

            // Generar los enlaces de paginación
            let paginacion = '';
            for (let i = 1; i <= data.totalPaginas; i++) {
                paginacion += `
                    <a href="#" class="btn btn-primary paginacion-link" data-pagina="${i}">${i}</a>
                `;
            }

            // Insertar los enlaces de paginación debajo de la tabla
            $("#paginacion").html(paginacion);
        });
    }

    //dandole accion al boton de cerrar del modal
    document.querySelector(".btn-cerrarModal").addEventListener("click", function() {
        const modal = bootstrap.Modal.getInstance(document.getElementById('agenteModal'));
        modal.hide();
    });
});

$(document).on("click", "#btnactualizarAgente", function () { 
    // Realizar la solicitud AJAX para actualizar el agente
    $.post(
        "/inmoweb/controllers/admagentes.php?opc=actualizarAgente",
        {
            id_agente: age_id,
            nombre: $("#nombre").val(),
            apellidoP: $("#apellidoP").val(),
            apellidoM: $("#apellidoM").val(),
            sexo: $("#sexo").val(),
            telefono: $("#telefono").val(),
            contraseña: $("#contraseña").val(),
            correo: $("#correo").val()        
        }, function (data) {
            // Al finalizar la solicitud, mostramos el SweetAlert
            Swal.fire({
                title: 'Correcto',
                text: 'Se actualizó correctamente',
                icon: 'success',
                confirmButtonText: 'Aceptar'
            }).then((result) => {
                // Si el usuario hace clic en "Aceptar" (result.isConfirmed)
                if (result.isConfirmed) {
                    // Cerrar el modal
                    const modal = bootstrap.Modal.getInstance(document.getElementById('agenteModal'));
                    modal.hide();
                    location.reload();
                }
            });
        }
    );
});


