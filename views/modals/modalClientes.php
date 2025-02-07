<!-- Modal para agregar un agente -->
<div class="modal fade" id="insertClienteModal" tabindex="-1" aria-labelledby="ClienteModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title fw-bold text-white" id="addClienteModalLabel">Agregar Nuevo Cliente</h5>
                <button type="button" class="btn text-white ms-auto" data-bs-dismiss="modal"><i class="bi bi-x-lg"></i></button>
            </div>
            <form id="formularioCliente" method="POST"> 
                <div class="card p-5">
                    <div class="container">
                        <div class="row">
                            <!-- Campos del formulario -->
                            <div class="col-12 col-md-6 mb-3">
                                <label for="nombres" class="form-label fw-bold">Nombres</label>
                                <input type="text" class="form-control" id="nombres" name="nombres" required placeholder="Ingresa el nombre">
                            </div>
                            <div class="col-12 col-md-6 mb-3">
                                <label for="apellidoP" class="form-label fw-bold">Apellido Paterno</label>
                                <input type="text" class="form-control" id="apellidoP" name="apellidoP" required placeholder="Ingresa el apellido paterno">
                            </div>
                            <div class="col-12 col-md-6 mb-3">
                                <label for="apellidoM" class="form-label fw-bold">Apellido Materno</label>
                                <input type="text" class="form-control" id="apellidoM" name="apellidoM" required placeholder="Ingresa el apellido materno">
                            </div>
                            <div class="col-12 col-md-6 mb-3">
                                <label class="fw-bold form-label">Sexo</label>
                                <select class="form-select" name="sexo" id="sexo" required>
                                    <option value="" selected disabled>Seleccionar...</option>
                                    <option value="F">Femenino</option>
                                    <option value="M">Masculino</option>
                                </select>
                            </div>
                            <div class="col-12 col-md-12 mb-3">
                                <label for="correo" class="form-label fw-bold">Correo</label>
                                <input type="email" class="form-control" id="correo" name="correo" required placeholder="Ingresa el correo">
                            </div>
                            <div class="col-12 col-md-6 mb-3">
                                <label for="telefono" class="form-label fw-bold">Teléfono</label>
                                <input type="text" class="form-control" id="telefono" name="telefono" required placeholder="Ingresa el teléfono">
                            </div>  
                            <div class="col-12 col-md-12 mb-3 d-flex flex-column">
                                <label for="observaciones" class="form-label fw-bold">Observaciones:</label>
                                <textarea name="observaciones" id="observaciones" rows="4" required placeholder="Escribe aqui tus observaciones"></textarea>
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
