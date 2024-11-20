<!-- Modal para agregar un agente -->
<div class="modal fade" id="addAgenteModal" tabindex="-1" aria-labelledby="addAgenteModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title fw-bold text-white" id="addAgenteModalLabel">Agregar Nuevo Agente</h5>
                <button type="button" class="btn text-white ms-auto" data-bs-dismiss="modal"><i class="bi bi-x-lg"></i></button>
            </div>
            <form id="agente_form" method="POST">
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <!-- Campos del formulario -->
                            <div class="col mb-3">
                                <label for="add-nombre" class="form-label fw-bold">Nombre</label>
                                <input type="text" class="form-control" id="add_nombre" name="nombre" required>
                            </div>
                            <div class="col mb-3">
                                <label for="add-apellidoP" class="form-label fw-bold">Apellido Paterno</label>
                                <input type="text" class="form-control" id="add_apellidoP" name="apellidoP" required>
                            </div>
                            <div class="col mb-3">
                                <label for="add-apellidoM" class="form-label fw-bold">Apellido Materno</label>
                                <input type="text" class="form-control" id="add_apellidoM" name="apellidoM" required>
                            </div>
                            <div class="col mb-3">
                                <label class="fw-bold form-label">Sexo</label>
                                <select class="form-select" name="sexo" id="add_sexo" required>
                                    <option value="" selected disabled>Seleccionar...</option>
                                    <option value="F">Femenino</option>
                                    <option value="M">Masculino</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3 mb-3">
                                <label for="add-telefono" class="form-label fw-bold">Teléfono</label>
                                <input type="text" class="form-control" id="add_telefono" name="telefono" required>
                            </div>
                            <div class="col-3 mb-3">
                                <label for="add-contraseña" class="form-label fw-bold">Contraseña</label>
                                <input type="password" class="form-control" id="add_contraseña" name="contraseña" required>
                            </div>
                            <div class="col-6 mb-3">
                                <label for="add-correo" class="form-label fw-bold">Correo</label>
                                <input type="email" class="form-control" id="add_correo" name="correo" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <!-- Botones del modal -->
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-success">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>
