<x-app-layout>

    <div class="row align-items-start">
        <div class="col-9">
            <h2 class="display-6"> <b style="color: #163B5B"> Pedidos Exitosos:</b> </h2>
        </div>
    </div>
    <hr>

    <div class="card card-body">

        @if ($pedidos->count() == 0)
            <div class="row p-2">
                <h3 class="text-center"> <b>No se econtraron registros.</b></h3>
            </div>
        @else
            <div class="table-responsive">
                <table data-page-length="10" id="tabla" class="table table-hover">
                    <thead class="text-white">
                        <tr style="background-color: #163B5B">
                            <th scope="col">Pedido</th>
                            <th scope="col">Nombre Completo</th>
                            <th scope="col">Teléfono</th>
                            <th scope="col">Plan</th>
                            <th scope="col">Estatus</th>
                            <th scope="col">{{-- Color identificador del vendedor --}}</th>
                            <th scope="col">Acciones</th>
                        </tr>
                        <tr class="text-white" style="background-color: #163B5B">
                            <th> 
                                <input style="border: solid #163B5B 0.5px" type="text"
                                class="form-control form-control-sm filter-input " placeholder="ID..."
                                data-column="0">
                            </th>
                            <th>
                                <input style="border: solid #163B5B 0.5px" type="text"
                                    class="form-control form-control-sm filter-input " placeholder="Nombre..."
                                    data-column="2">
                            </th>
                            <th>
                                <input style="border: solid #163B5B 0.5px" type="text"
                                class="form-control form-control-sm filter-input " placeholder="Teléfono..."
                                data-column="3">
                            </th>
                            <th></th>
                            <th>
                                <input style="border: solid #163B5B 0.5px" type="text"
                                class="form-control form-control-sm filter-input " placeholder="Estatus..."
                                data-column="5">
                            </th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pedidos as $pedido)
                            @php
                                if ($ped_vendedores) {
                                    $vendedor = $ped_vendedores->where('id_pedido', $pedido->id)->first();
                                    if ($vendedor)                                         
                                        $asignado = $todosVendedores->where('id', $vendedor->id_vendedor)->first(); //Asignado hace referencia a todos los datos del vendedor asignado                                    
                                }
                                if ($productos) 
                                    $producto = $productos->where('id', $pedido->id_producto)->first();                            
                                if($prospectos)
                                    $prospecto = $prospectos->where('id', $pedido->id_prospecto)->first();
                            @endphp

                            @if (isset($asignado))
                                <tr style="border-color: {{ $asignado->color_identificador }}">
                            @else
                                <tr>
                            @endif

                            <td scope="row">{{ $pedido->id }}</td>                         
                            <td scope="row">{{ $prospecto->nombre }}</td>
                            <td scope="row">{{ $prospecto->telefono }}</td>
                            <td scope="row">
                                @if (isset($producto))
                                    @if ($producto->vigencia == 1)
                                        1 año
                                    @else
                                        {{ $producto->vigencia }} años
                                    @endif
                                @endif
                            </td>
                            <td scope="row">{{ $pedido->estatus }}</td>
                            <td scope="row">
                                @if (isset($asignado))
                                    <button type="button" class="btn btn-light-success btn-circle btn-sm d-inline-flex align-items-center justify-content-center"
                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                        style="background-color: {{ $asignado->color_identificador }}"
                                        title="{{ $asignado->nombre}} {{$asignado->primer_apellido}} {{$asignado->segundoc_apellido}}"></button>
                                @endif
                            </td>   
                            <td scope="row">
                                <div class="d-grid gap-2 d-md-flex">
                                    <a href="{{route('portal.pedidos.detalles', $pedido->id)}}"
                                        class="btn btn-light-warning btn-circle btn-sm d-inline-flex align-items-center justify-content-center"
                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                        title="Gestionar">
                                        <i data-feather="edit" class="feather-sm fill-white"></i>
                                    </a>
                                    <button type="button"
                                        class="btn btn-light-info btn-circle btn-sm d-inline-flex align-items-center justify-content-center"
                                        data-bs-toggle="modal" data-bs-placement="top"
                                        title="Comentarios" data-bs-target="#NotasPedido-{{$pedido->id}}">
                                        <i data-feather="file-text" class="feather-sm fill-white"></i>
                                    </button>
                                    @include('Portal.Pedidos.components.comentarios_pedidos')
                                    @if (!isset($asignado))
                                        <button type="button"
                                            class="btn btn-light-success btn-circle btn-sm d-inline-flex align-items-center justify-content-center"
                                            data-bs-toggle="modal" data-bs-placement="top"
                                            title="Asignar" data-bs-target="#asignarVendedor">
                                            <i data-feather="user-check" class="feather-sm fill-white"></i>
                                        </button>
                                        @include('Portal.Pedidos.components.asignarVendedor_pedidos')
                                    @elseif ($vendedor)
                                        <button type="button"
                                            class="btn btn-light-warning btn-circle btn-sm d-inline-flex align-items-center justify-content-center"
                                            data-bs-toggle="modal" data-bs-placement="top"
                                            title="Editar" data-bs-target="#editarVendedor-{{$vendedor->id}}">
                                            <i data-feather="user-x" class="feather-sm fill-white"></i>
                                        </button>
                                        @include('Portal.Pedidos.components.editarVendedor_pedidos')
                                    @endif
                                </div>

                            </td>
                            </tr>

                            @php
                                unset($asignado);
                                unset($vendedor);
                                unset($producto);
                            @endphp
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif

    </div>
</x-app-layout>
