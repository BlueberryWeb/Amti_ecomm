<div class="modal fade" id="editarVendedor-{{$vendedor->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="scroll-long-outer-modal" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header modal-colored-header bg-warning text-white">
                <h3 class="modal-title" id="myLargeModalLabel">Editar vendedor: {{$vendedor->nombre}} {{$vendedor->primer_apellido}} {{$vendedor->segundo_apellido}} </h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div><br>
            <form action=" {{route('editar.vendedor', $vendedor->id)}} " method="POST">
                @csrf @method('put')
                <div class="modal-body">

                    <div class="form-floating mb-3">
                        <input required name="nombre" type="text" class="form-control border border-warning" value="{{$vendedor->nombre}}">
                        <label><span class="border-start border-warning ps-2">Nombre(s):</span></label>
                    </div>

                    <div class="form-floating mb-3">
                        <input required name="primer_apellido" type="text" class="form-control border border-warning" value=" {{$vendedor->primer_apellido}} ">
                        <label><span class="border-start border-warning ps-2">Primer Apellido:</span></label>
                    </div>

                    <div class="form-floating mb-3">
                        <input name="segundo_apellido" type="text" class="form-control border border-warning" value=" {{$vendedor->segundo_apellido}} ">
                        <label><span class="border-start border-warning ps-2">Segundo Apellido (opcional):</span></label>
                    </div>

                    <div class="row">
                        <div class="col-3">
                            <label><span class="border-start border-warning ps-2">Color Identificador:</span></label>
                        </div>
                        <div class="col-9">
                            @php
                                $color = $vendedor->color_identificador;
                            @endphp
                            <input required name="color_identificador" type="color" class="form-control" value="{{$color}}">
                        </div>
                    </div><br>

                    <div class="form-floating mb-3">
                        <select required name="estatus" class="form-select border border-warning"
                            aria-label="Default select example">
                            <option value=" {{$vendedor->estatus}} ">
                                @if ($vendedor->estatus == 1)
                                    Vigente
                                @elseif ($vendedor->estatus == 2)
                                    Baja temporal
                                @elseif ($vendedor->estatus == 3)
                                    Vacaciones
                                @elseif ($vendedor->estatus == 4)
                                    Baja total
                                @endif    
                            </option>
                            @if ($vendedor->estatus != 1)
                                <option value="1">Vigente</option>
                            @endif
                            @if ($vendedor->estatus != 2)
                                <option value="2">Baja temporal</option>
                            @endif
                            @if ($vendedor->estatus != 3)
                                <option value="3">Vacaciones</option>
                            @endif
                            @if ($vendedor->estatus != 4)
                                <option value="4">Baja total</option>
                            @endif             
                        </select>
                        <label><span class="border-start border-warning ps-2">Estatus:</span></label>
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
