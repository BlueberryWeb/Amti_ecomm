<div class="modal fade" id="eliminarComentario-{{$comentario->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content modal-filled bg-light-danger">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Eliminar comentario.</h5>
        </div>
        <div class="modal-body">
          ¿Deseas continuar con el proceso?
        </div>
        <div class="modal-footer">
            <div class="row">
                <div class="col-9">
                    <small>Para cerrar/cancelar de 'click' fuera de la etiqueta.</small>
                </div>
                <div class="col-3">
                    <form action="{{route('eliminar.comentario', $comentario->id)}}" method="post">
                        @csrf @method('delete')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>