

<div class="modal fade" id="eliminarVendedor-{{$vendedor->id}}" tabindex="-1" aria-labelledby="vertical-center-modal" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content modal-filled bg-light-danger">
            <div class="modal-body p-4">
                <div class="text-center text-danger">
                    <i data-feather="alert-octagon" class="fill-white feather-lg"></i>
                    <h4 class="mt-2">Eliminaras al vendedor:</h4>
                    <p class="mt-3"><b class="text-danger">{{$vendedor->nombre}} {{$vendedor->primer_apellido}} {{$vendedor->segundo_apellido}} </b></p>
                    <p class="mt-3">¿Deseas continuar con el proceso?</p>
                </div>
            </div>
            <div class="modal-footer">
                <form action=" {{route('eliminar.vendedor', $vendedor->id)}} " method="POST">
                    @csrf @method('delete')
                    <button type="button"
                        class="btn btn-light-warning text-warning font-weight-medium waves-effect text-start"
                        data-bs-dismiss="modal">
                        <i data-feather="x" class="feather-sm fill-white me-2"></i> Cerrar
                    </button>
                    <button
                        class="btn btn-danger text-white font-weight-medium waves-effect text-start"
                        type="submit">
                        <i data-feather="trash" class="feather-sm fill-white me-2"></i> Eliminar
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
