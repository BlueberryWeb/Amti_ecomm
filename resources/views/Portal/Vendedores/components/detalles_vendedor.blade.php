<div class="modal fade" id="detalle_vendedor-{{ $vendedor->id }}" tabindex="-1"  aria-labelledby="vertical-center-modal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center">
                <h4 class="modal-title" id="myLargeModalLabel"> Pedidos: <b
                        style="color: {{ $vendedor->color_identificador }}">{{ $vendedor->nombre }}
                        {{ $vendedor->primer_apellido }} {{ $vendedor->segundo_apellido }}</b> </h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <ul class="list-unstyled mt-5">
                    @php
                        if ($pedidos_vendedores) {
                            $asignados = $pedidos_vendedores->where('id_vendedor', $vendedor->id);
                        }
                    @endphp

                    @if (isset($asignados))
                        @forelse ($asignados as $vendedor_pedido)
                            @php
                                $pedido_asignado = $pedidos->where('id', $vendedor_pedido->id_pedido)->first();
                                $prospecto = $prospectos->where('id', $pedido_asignado->id_prospecto)->first();
                            @endphp
                            <div class="row">
                                <div class="col-10"></div>
                                <div class="col-2">
                                    <a href="{{route('portal.pedidos.detalles', $pedido_asignado->id)}}"
                                        class="btn btn-light-info btn-circle btn-sm d-inline-flex align-items-center justify-content-center">
                                        <i data-feather="arrow-up-right" class="feather-sm fill-white text-info"></i>
                                    </a>
                                </div>
                            </div>
                            <li class="d-flex align-items-start">
                                <img class="me-3 rounded" src="{{ asset('assets/images/users/2.jpg') }} " width="60"
                                    alt="Generic placeholder image">
                                <div class="media-body">
                                    <small><b>Pedido: #</b>{{ $pedido_asignado->id }}</small><br>
                                    <small><b>Cliente: </b>{{ $prospecto->nombre }}</small><br>
                                    <small><b>Correo: </b>{{ $prospecto->telefono }}</small><br>
                                    <small> <b>Estatus:</b><br> {{ $pedido_asignado->estatus }}</small>
                                </div>
                            </li>
                            <hr>
                        @empty
                            <li class="d-flex align-items-start">
                                <div class="media-body">
                                    <h4>No cuenta con pedidos asignados este vendedor.</h4>
                                </div>
                            </li>
                        @endforelse
                    @endif
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button"
                    class="btn btn-light-danger text-danger font-weight-medium waves-effect text-start"
                    data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
