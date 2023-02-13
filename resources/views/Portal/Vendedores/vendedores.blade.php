<x-app-layout>

    <div class="row align-items-start">
        <div class="col-9">
            <h2 class="display-6"> <b style="color: #163B5B"> Vendedores:</b> </h2>
        </div>
        <div class="col-3">
            <button type="button"
                class="justify-content-center w-100 btn btn-rounded btn-outline-info d-flex align-items-center"
                data-bs-toggle="modal" data-bs-target="#agregarVendedor">
                <i class="mdi mdi-pencil feather-sm fill-white me-2"></i> Agregar
            </button>
            @include('Portal.Vendedores.components.agregar-vendedores')
        </div>
    </div>
    <hr>

    <div class="card card-body">

        @if ($todosVendedores->count() == 0)
            <div class="row p-2">
                <h3 class="text-center"> <b>No se econtraron registros.</b></h3>
            </div>
        @else
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead class="text-white">
                        <tr style="background-color: #163B5B">
                            <th scope="col"></th>
                            <th scope="col">Nombre Completo</th>
                            <th scope="col">Estatus</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($todosVendedores as $vendedor)
                            <tr style="border-color: {{ $vendedor->color_identificador }}">
                                <td scope="row">
                                    <button type="button"
                                        class="btn btn-light-success btn-circle btn-sm d-inline-flex align-items-center justify-content-center"
                                        style="background-color: {{ $vendedor->color_identificador }}"></button>
                                </td>
                                <td scope="row">{{ $vendedor->nombre }} {{ $vendedor->primer_apellido }}
                                    {{ $vendedor->segundo_apellido }}</td>
                                <td scope="row">
                                    @if ($vendedor->estatus == 1)
                                        Vigente
                                    @elseif ($vendedor->estatus == 2)
                                        Baja temporal
                                    @elseif ($vendedor->estatus == 3)
                                        Vacaciones
                                    @elseif ($vendedor->estatus == 4)
                                        Baja total
                                    @endif
                                </td>
                                <td scope="row">
                                    <button type="button"
                                        class="btn btn-light-warning btn-circle btn-sm d-inline-flex align-items-center justify-content-center"
                                        data-bs-toggle="modal" data-bs-placement="top" title="Editar"
                                        data-bs-target="#editarVendedor-{{ $vendedor->id }}">
                                        <i data-feather="edit" class="feather-sm fill-white"></i>
                                    </button>
                                    @include('Portal.Vendedores.components.editar-vendedores')
                                    <button type="button"
                                        class="btn btn-light-danger btn-circle btn-sm d-inline-flex align-items-center justify-content-center"
                                        data-bs-toggle="modal" data-bs-target="#eliminarVendedor-{{ $vendedor->id }}" title="Eliminar">
                                        <i data-feather="trash" class="feather-sm fill-white"></i>
                                    </button>
                                    @include('Portal.Vendedores.components.eliminar-vendedores')
                                    <button type="button"
                                        class="btn btn-light-info btn-circle btn-sm d-inline-flex align-items-center justify-content-center"
                                        data-bs-toggle="modal" data-bs-target="#detalle_vendedor-{{$vendedor->id}}" title="Más">
                                        <i data-feather="more-horizontal" class="feather-sm fill-white"></i>
                                    </button>
                                    @include('Portal.Vendedores.components.detalles_vendedor')
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>
    
</x-app-layout>
