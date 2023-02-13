<div id="NotasProspecto-{{$prospecto->id}}" class="modal fade"  data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="scroll-long-outer-modal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content modal-filled bg-light-info">
            <div class="modal-header d-flex align-items-center">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="card-body anyClass-coments">
                    <h3 class="modal-title text-info">Comentarios:</h3>
                    <ul class="list-unstyled mt-5">
                        @if ($countcoments != 0)
                            @foreach ($comentarios as $comentario)
                                @if ($prospecto->id == $comentario->id_delConcepto)
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
                                            <small><b>Prospecto: </b>{{$prospecto->nombre}}</small><br>
                                            <small> <b>Comentario:</b><br> {{ $comentario->comentario }}</small>
                                        </div>
                                    </li>
                                    <hr>
                                @endif
                            @endforeach
                        @else
                            <h3 class="modal-title">Agrega tu primer comentario</h3>
                        @endif

                    </ul>
                </div>
            </div>
            <div class="modal-footer">

                <div class="container">
                    <form action="{{ route('agregar.comentario') }}" method="POST">
                        @csrf

                        <input name="id_delConcepto" type="hidden" value="{{ $prospecto->id }}">
                        <div class="form-floating">
                            <textarea required class="form-control" placeholder="Leave a comment here" id="floatingTextarea" name="comentario"
                                style="height: 100px"></textarea>
                            <label for="floatingTextarea">Nuevo comentario:</label>
                        </div>
                        <input name="concepto" type="hidden" value="prospectos"><br>
                        <button
                            class="justify-content-center w-100 btn btn-rounded btn-outline-info d-flex align-items-center"
                            type="submit" id="button-addon2">
                            <i data-feather="save" class="feather-sm fill-white me-2"></i> Guardar
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
