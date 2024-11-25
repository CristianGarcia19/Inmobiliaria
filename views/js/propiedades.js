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