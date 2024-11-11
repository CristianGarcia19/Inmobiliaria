$(document).ready(function () {
    var usu_id = $("#id_usuarios").val();
  
    // Obtener los datos del usuario al cargar la página
    $.post(
        "/inmoweb/controllers/perfilusuario.php?opc=mostrarPerfil",
        { id_usuarios: usu_id },
        function (data) {
        data = JSON.parse(data);
        $("#nombre").val(data.nombre);
        $("#apellidoP").val(data.apellidoP);
        $("#apellidoM").val(data.apellidoM);
        $("#correo").val(data.correo);
        $("#telefono").val(data.telefono);
        $("#contraseña").val(data.contraseña);
        $("#sexo").val(data.sexo).trigger("change");
    }
    );

    $(document).on("click", "#btnactualizar", function () {
        $.post(
            "/inmoweb/controllers/perfilusuario.php?opc=actualizarPerfil",
            {
            id_usuarios: usu_id,
            nombre: $("#nombre").val(),
            apellidoP: $("#apellidoP").val(),
            apellidoM: $("#apellidoM").val(),
            correo: $("#correo").val(),
            telefono: $("#telefono").val(),
            contraseña: $("#contraseña").val(),
            sexo: $("#sexo").val()
            }, function (data) {
        });
        Swal.fire({
            title: 'Correcto',
            text: 'Se actualizo Correctamente',
            icon: 'success',
            confirmButtonText: 'Aceptar'
        });
    });




});

