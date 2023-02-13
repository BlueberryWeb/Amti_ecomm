<div id="asignarVendedor" class="modal fade" tabindex="-1" aria-labelledby="info-header-modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content modal-filled bg-info">
            <div class="modal-header modal-colored-header text-white">
                <h4 class="modal-title" id="info-header-modalLabel">Asignar vendedor</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            @php
                $disponibles = $todosVendedores->where('estatus', '<>', '4');
            @endphp
            @if ($disponibles)
                <form action=" {{route('portal.pedidos.asignar')}} " method="POST">
                    @csrf
                    <div class="modal-body">
                        <h5 class="mt-0 text-white">Vendedores</h5>
                        <select required name="vendedor" class="form-select" aria-label="Default select example">
                            <option value="">Selecciona un vendedor</option>
                            @foreach ($disponibles as $vendedor)
                                <option value=" {{$vendedor->id}} ">{{$vendedor->nombre}} {{$vendedor->primer_apellido}} {{$vendedor->segundo_apellido}}</option>
                            @endforeach
                        </select>
                        <input name="pedido" type="hidden" value=" {{$pedido->id}}">
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
