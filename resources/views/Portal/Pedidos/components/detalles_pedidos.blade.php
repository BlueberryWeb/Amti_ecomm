<x-app-layout>

    @php
        if ($vendedor_pedido) 
            $vendedor = $todosVendedores->where('id', $vendedor_pedido->id_vendedor)->first();
    @endphp

    <div class="row align-items-start">
        <div class="col-2">
            <h2 class="display-10"> <b style="color: #163B5B">Pedido: #</b> {{ $pedido->id }} </h2>
        </div>
        <div class="col-3">
            <h2 class="display-10"> <b style="color: #163B5B"> Cliente: </b> {{ $prospecto->nombre }} </h2>
        </div>
        <div class="col-3">
            <h2 class="display-10"> <b style="color: #163B5B"> Teléfono: </b> {{ $prospecto->telefono }} </h2>
        </div>
        <div class="col">
            @if (isset($vendedor))
                <button type="button" class="btn btn-light-success btn-circle btn-sm d-inline-flex align-items-center justify-content-center"
                    data-bs-toggle="tooltip" data-bs-placement="top"
                    style="background-color: {{ $vendedor->color_identificador }}"
                    title=" Vendedor asignado: {{ $vendedor->nombre}} {{$vendedor->primer_apellido}} {{$vendedor->segundoc_apellido}}">
                </button>
            @endif
        </div>
        <div class="col-3">
            @if (!isset($vendedor))
                <button type="button"
                    class="justify-content-center w-100 btn btn-rounded btn-light-info text-info font-weight-medium d-flex align-items-center"
                    data-bs-toggle="modal" data-bs-placement="top"
                    title="Asignar" data-bs-target="#asignarVendedor">
                    <i data-feather="user-check" class="feather-sm fill-white me-2"></i> Asignar Vendedor
                </button>
                @include('Portal.Pedidos.components.asignarVendedor_pedidos')
            @else
                <button type="button" class="justify-content-center w-100 btn btn-rounded btn-light-warning text-warning font-weight-medium d-flex align-items-center"
                    data-bs-toggle="modal" data-bs-placement="top"
                    title="Asignar" data-bs-target="#editarVendedor-{{$vendedor_pedido->id}}">
                    <i data-feather="user-x" class="feather-sm fill-white me-2"></i> Editar Vendedor
                </button>
                @include('Portal.Pedidos.components.editarVendedor_pedidosDetalles')
            @endif
        </div>
    </div>
    <hr>

    <div class="row">

        <!-- Información ligada a la Plaza -->
        <div class="col-9">
            <div class="card card-body">
                <div class="row">
                    <div class="col-8">
                        <h3> <b style="color: #163B5B"> Datos personales: </b> </h3>
                    </div>
                    <div class="col-4 d-flex justify-content-end">
                        @if ($factura)
                            <button type="button" class="justify-content-center w-100 btn btn-rounded btn-light-primary text-primary font-weight-medium d-flex align-items-center" data-bs-toggle="modal" data-bs-placement="top"
                                title="Asignar" data-bs-target="#factura-{{$factura->id}}">
                                <i data-feather="file-text" class="feather-sm fill-white me-2"></i> Facturar
                            </button>
                            @include('Portal.Pedidos.components.facturas')
                        @endif
                    </div>
                </div>
               
                <hr>
                <div class="row mb-2">
                    <div class="col py-2 px-3">
                        <h4> <b style="color: #163B5B">Dirección: </b> </h4>
                        <p>{{ $pedido->direccion }}</p>
                    </div>
                    <div class="col py-2 px-3">
                        <h4> <b style="color: #163B5B">País: </b> </h4>
                        <p>{{ $pedido->pais }}</p>
                    </div>
                    <div class="col py-2 px-3">
                        <h4> <b style="color: #163B5B">Sexo: </b> </h4>
                        <p>{{ $pedido->sexo }}</p>
                    </div>
                    <div class="col py-2 px-3">
                        <h4> <b style="color: #163B5B">Estatura: </b> </h4>
                        <p>{{ $pedido->estatura }} {{$pedido->tipo_medida}} </p>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-3 py-2 px-3">
                        <h4> <b style="color: #163B5B">Color de ojos: </b> </h4>
                        <p>{{ $pedido->color_ojos }}</p>
                    </div>
                    <div class="col-3 py-2 px-3">
                        <h4> <b style="color: #163B5B">Color del cabello: </b> </h4>
                        <p>{{ $pedido->color_cabello }}</p>
                    </div>
                </div>

                <hr>
                <h3> <b style="color: #163B5B">Datos de envío: </b> </h3>
                <hr>
                <div class="row mb-2">
                    <div class="col py-2 px-3">
                        <h4> <b style="color: #163B5B">Tipo de envío: </b> </h4>
                        <p>{{ $envio->nombre }}</p>
                    </div>
                    <div class="col py-2 px-3">
                        <h4> <b style="color: #163B5B">Nombre: </b> </h4>
                        <p>{{ $pedido->nombre }}</p>
                    </div>
                    <div class="col py-2 px-3">
                        <h4> <b style="color: #163B5B">Teléfono: </b> </h4>
                        <p>{{ $pedido->telefono }}</p>
                    </div>
                    <div class="col py-2 px-3">
                        <h4> <b style="color: #163B5B">Correo: </b> </h4>
                        <p>{{ $pedido->correo }}</p>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col py-2 px-3">
                        <h4> <b style="color: #163B5B">Calle: </b> </h4>
                        <p>{{ $pedido->calle }}</p>
                    </div>
                    <div class="col py-2 px-3">
                        <h4> <b style="color: #163B5B">Ciudad: </b> </h4>
                        <p>{{ $pedido->ciudad }}</p>
                    </div>
                    <div class="col py-2 px-3">
                        <h4> <b style="color: #163B5B">Código Postal: </b> </h4>
                        <p>{{ $pedido->cp }}</p>
                    </div>
                    <div class="col py-2 px-3">
                        <h4> <b style="color: #163B5B">Instrucciones: </b> </h4>
                        <p>{{ $pedido->instrucciones }}</p>
                    </div>
                </div>
                <hr>
                <h3> <b style="color: #163B5B">Imágenes: </b> </h3>
                <hr>
                <div class="row mb-2">
                    <div class="col py-2 px-3">
                        <h4> <b style="color: #163B5B">Frente INE: </b> </h4>
                        <div class="card card-body">
                            <img src="{{ $pedido->frente_ine }}" class="rounded mx-auto d-block" alt="..." width="80">
                        </div>
                    </div>
                    <div class="col py-2 px-3">
                        <h4> <b style="color: #163B5B">Vuelta INE: </b> </h4>
                        <div class="card card-body">
                            <img src="{{ $pedido->vuelta_ine }}" class="rounded mx-auto d-block" alt="..." width="80">
                        </div>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col py-2 px-3">
                        <h4> <b style="color: #163B5B">Frente Licencia: </b> </h4>
                        <div class="card card-body">
                            <img src="{{ $pedido->frente_licencia }}" class="rounded mx-auto d-block" alt="..." width="80">
                        </div>
                    </div>
                    <div class="col py-2 px-3">
                        <h4> <b style="color: #163B5B">Vuelta Licencia: </b> </h4>
                        <div class="card card-body">
                            <img src="{{ $pedido->vuelta_licencia }}" class="rounded mx-auto d-block" alt="..." width="80">
                        </div>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-6 py-2 px-3">
                        <h4> <b style="color: #163B5B">Fotografia Personal: </b> </h4>
                        <div class="card card-body">
                            <img src="{{ $pedido->personal_frente }}" class="rounded mx-auto d-block"
                                alt="..." width="80">
                        </div>
                    </div>
                </div>

            </div>

        </div>

        <!-- Datos de la proyecto -->
        <div class="col-3">

            <div class="card card-body">
                <form action="{{route('portal.pedidos.detalles.editar.estatus', $pedido->id)}}" method="POST" >
                    @csrf @method('put')
                    <h3 class="text-info">Estatus:</h3><br>
                    <div class="input-group">
                        <select name="estatus" class="form-select" id="inputGroupSelect04"
                            aria-label="Example select with button addon">
                            <option selected value=" {{ $pedido->estatus }}">{{ $pedido->estatus }}</option>
                                @if ($pedido->estatus != 'Exitoso')
                                    <option value="Exitoso">Pago validado / Exitoso</option>
                                @endif
                                @if ($pedido->estatus != 'No exitoso')
                                    <option value="No exitoso">Pago no validado / No exitoso</option>
                                @endif
                                @if ($pedido->estatus != 'Finalizado')
                                    <option value="Finalizado">Finalizado</option>
                                @endif
                                @if ($pedido->estatus != 'En validación')
                                    <option value="En validación">En validación</option>
                                @endif
                                @if ($pedido->estatus != 'Datos no validos')
                                    <option value="Datos no validos">Datos no validos</option> 
                                @endif
                                @if ($pedido->estatus != 'En ruta')
                                    <option value="En ruta">En ruta</option>
                                @endif                               
                        </select>
                        <button class="justify-content-center btn btn-outline-info d-flex align-items-center" type="submit">
                            <i data-feather="save" class="feather-sm fill-white"></i>
                        </button>
                    </div>
                </form>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="card-body anyClass-coments">
                        <h3 class="modal-title text-info">Comentarios:</h3>
                        <ul class="list-unstyled mt-5">
                            @forelse ($comentarios as $comentario)
                                @if ($pedido->id == $comentario->id_delConcepto)
                                    <div class="row">
                                        <div class="col-10"></div>
                                        <div class="col-2">
                                            <button type="button" class="btn btn-light-danger btn-circle btn-sm d-inline-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#eliminarComentario-{{$comentario->id}}" >
                                                <i data-feather="trash" class="feather-sm fill-white text-danger"></i>
                                            </button>
                                            @include('Portal.Comentarios.eliminar-comentario')
                                        </div>
                                    </div>
                                    <li class="d-flex align-items-start">
                                        <img class="me-3 rounded" src="{{ asset('assets/images/users/1.jpg') }} "
                                            width="60" alt="Generic placeholder image">
                                        <div class="media-body">
                                            @foreach ($usuarios as $usuario)
                                                @if ($usuario->id == $comentario->id_usuario)
                                                    <h5 class="mt-0 mb-1"><b>Escrito por:</b> {{ $usuario->name }}</h5>
                                                @endif
                                            @endforeach
                                            <small><b>Fecha: </b>{{ $comentario->created_at->format('d-m-Y | H:i') }}</small><br>
                                            <small><b>ID Pedido: </b>#{{$pedido->id}}</small><br>
                                            <small><b>Nombre del cliente: </b>{{$prospecto->nombre}}</small><br>
                                            <small> <b>Comentario: </b><br> {{ $comentario->comentario }}</small>
                                        </div>
                                    </li>
                                    <hr>
                                @endif
                            @empty
                                <h3 class="modal-title">Agrega tu primer comentario</h3>
                            @endforelse
                        </ul>
                    </div>
                    <div class="container">
                        <form action="{{ route('agregar.comentario') }}" method="POST">
                            @csrf
                            <input name="id_delConcepto" type="hidden" value="{{ $pedido->id }}">
                            <div class="form-floating">
                                <textarea required class="form-control" placeholder="Leave a comment here" id="floatingTextarea" name="comentario"
                                    style="height: 100px"></textarea>
                                <label for="floatingTextarea">Nuevo comentario:</label>
                            </div>
                            <input name="concepto" type="hidden" value="pedidos"><br>
                            <button
                                class="justify-content-center w-100 btn btn-rounded btn-outline-info d-flex align-items-center"
                                type="submit" id="button-addon2">
                                <i data-feather="save" class="feather-sm fill-white me-2"></i> Guardar
                            </button>
                        </form>
                    </div>
                </div>
                <div class="card-footer">
                    
                </div>

            </div>


        </div>



    </div>


</x-app-layout>
