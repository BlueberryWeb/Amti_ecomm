<div id="editarVendedor-{{$vendedor->id}}" class="modal fade" tabindex="-1" aria-labelledby="warning-header-modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header modal-colored-header bg-warning text-white">
                <h4 class="modal-title" id="warning-header-modalLabel">Editar vendedor</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            @php
                $disponibles = $todosVendedores->where('estatus', '<>', '4');
            @endphp
            @if ($disponibles)
                <form action="{{route('portal.pedidos.asignar.editar', $vendedor->id)}}" method="POST">
                    @csrf @method('put')
                    <div class="modal-body">

                        <h5 class="mt-0">Vendedor actual:</h5><hr>
                        <div class="row">
                            <div class="col-2">
                                <button type="button" class="btn btn-light-success btn-circle btn-sm d-inline-flex align-items-center justify-content-center"
                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                    style="background-color: {{ $asignado->color_identificador }}">
                                </button>
                            </div>
                            <div class="col-8">
                                <p><b>{{$asignado->nombre}} {{$asignado->primer_apellido}} {{$asignado->segundo_apellido}}</b></p>
                            </div>
                        </div><hr>

                        <h5 class="mt-0">Vendedores:</h5>
                        <select required name="vendedor" class="form-select" aria-label="Default select example">
                            <option value="">Selecciona un vendedor</option>
                            @foreach ($disponibles as $otro_vendedor)
                                @if ($otro_vendedor->id != $asignado->id)
                                    <option value=" {{$otro_vendedor->id}} ">{{$otro_vendedor->nombre}} {{$otro_vendedor->primer_apellido}} {{$otro_vendedor->segundo_apellido}}</option>
                                @endif
                            @endforeach
                        </select><br>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light-danger" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-light-info" >Asignar</button>
                    </div>
                </form>
            @else
                <div class="modal-body">
                    <h5 class="mt-0 text-white">No cuentas con vendedores registrados.</h5>
                </div>
                <div class="modal-footer">
                    <form action="" method="post">
                        @csrf
                        <button type="button" class="btn btn-light-danger" data-bs-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-light-info" data-bs-dismiss="modal">Ir a vendedores</button>
                    </form>
                </div>    
            @endif
        </div>
    </div>
</div>
