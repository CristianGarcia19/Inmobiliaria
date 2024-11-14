<!-- Modal -->
<div class="modal fade" id="agenteModal" tabindex="-1" aria-labelledby="agenteModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title fw-bold text-white" id="agenteModalLabel">Detalles del Agente</h5>
                <button type="button" class="btn text-white ms-auto" data-bs-dismiss="modal"><i class="bi bi-x-lg"></i></button>
            </div>
            <div class="modal-body">
                
                <div class="container">
                    <div class="row">
                        <input type="hidden" id="id_agente" />
                            <div class="col mb-3">
                                <label for="modal-nombre" class="form-label fw-bold">Nombre</label>
                                <input type="text" class="form-control" id="nombre" name="nombre">
                            </div>
                            <div class="col mb-3">
                                <label for="modal-apellidoP" class="form-label fw-bold">Apellido Paterno</label>
                                <input type="text" class="form-control" id="apellidoP" name="apellidoP">
                            </div>
                            <div class="col mb-3">
                                <label for="modal-apellidoM" class="form-label fw-bold">Apellido Materno</label>
                                <input type="text" class="form-control" id="apellidoM" name="apellidoM">
                            </div>
                            <div class="col mb-3">
                                <label class="fw-bold form-label">Sexo</label>
                                <select class="form-select" name="sexo" id="sexo">
                                    <option class="dropdown-toggle"></option>
                                    <option value="F">Femenino</option>
                                    <option value="M">Masculino</option>
                                </select>
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="col-3 mb-3">
                                <label for="modal-telefono" class="form-label fw-bold">Teléfono</label>
                                <input type="text" class="form-control" id="telefono" name="telefono">
                            </div>
                            <div class="col-3 mb-3">
                                <label for="modal-contraseña" class="form-label fw-bold">Contraseña</label>
                                <input type="text" class="form-control" id="contraseña" name="contraseña">
                            </div>
                            <div class="col-6 mb-3">
                                <label for="modal-correo" class="form-label fw-bold">Correo</label>
                                <input type="email" class="form-control" id="correo" name="correo">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                            <button type="button" class="btn btn-success" id="btnactualizarAgente" >Guardar</button>
                        </div>
                </div>
            </div>
            
        </div>
    </div>
</div>
