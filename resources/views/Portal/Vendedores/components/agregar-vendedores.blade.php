<div class="modal fade" id="agregarVendedor" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="scroll-long-outer-modal" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header modal-colored-header bg-info text-white">
                <h3 class="modal-title" id="myLargeModalLabel">Agregar vendedores.</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div><br>
            <form action="{{ route('agregar.vendedor') }}" method="POST">
                @csrf
                <div class="modal-body">

                    <div class="form-floating mb-3">
                        <input required name="nombre" type="text" class="form-control border border-info">
                        <label><span class="border-start border-info ps-2">Nombre(s):</span></label>
                    </div>

                    <div class="form-floating mb-3">
                        <input required name="primer_apellido" type="text" class="form-control border border-info">
                        <label><span class="border-start border-info ps-2">Primer Apellido:</span></label>
                    </div>

                    <div class="form-floating mb-3">
                        <input name="segundo_apellido" type="text" class="form-control border border-info">
                        <label><span class="border-start border-info ps-2">Segundo Apellido (opcional):</span></label>
                    </div>

                    <div class="row">
                        <div class="col-4">
                            <label><span class="border-start border-info ps-2">Color Identificador:</span></label>
                        </div>
                        <div class="col-8"><input required name="color_identificador" type="color"
                                class="form-control"></div>
                    </div><br>

                    <div class="form-floating mb-3">
                        <select required name="estatus" class="form-select border border-info"
                            aria-label="Default select example">
                            <option value="">Selecciona una opción:</option>
                            <option value="1">Vigente</option>
                            <option value="2">Baja temporal</option>
                            <option value="3">Vacaciones</option>
                            <option value="4">Baja total</option>
                        </select>
                        <label><span class="border-start border-info ps-2">Estatus:</span></label>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button"
                        class="btn btn-light-danger text-danger font-weight-medium waves-effect text-start"
                        data-bs-dismiss="modal">
                        <i data-feather="x" class="feather-sm fill-white me-2"></i> Cerrar
                    </button>
                    <button
                        class="btn btn-light-info text-info font-weight-medium waves-effect text-start"
                        type="submit">
                        <i data-feather="save" class="feather-sm fill-white me-2"></i> Guardar
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
