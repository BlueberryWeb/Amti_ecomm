<x-app-layout>

    <div class="row align-items-start">
        <div class="col-9">
            <h2 class="display-6"> <b style="color: #163B5B"> PROSPECTOS:</b> </h2>
        </div>
    </div>
    <hr>

    <div class="card card-body">

        @if ($prospectos->count() == 0)
            <div class="row p-2">
                <h3 class="text-center"> <b>No se econtraron registros.</b></h3>
            </div>
        @else
            <div class="table-responsive">
                <table data-page-length="10" id="tabla" class="table table-hover">
                    <thead class="text-white">
                        <tr style="background-color: #163B5B">
                            <th scope="col">Nombre</th>
                            <th scope="col">Teléfono</th>
                            <th scope="col">Creación</th>
                            <th scope="col">Comentarios</th>
                        </tr>
                        <tr style="background-color: #163B5B">
                            <th>
                                <input style="border: solid #163B5B 0.5px" type="text"
                                    class="form-control form-control-sm filter-input " placeholder="Nombre..."
                                    data-column="0">
                            </th>
                            <th>
                                <input style="border: solid #163B5B 0.5px" type="text"
                                    class="form-control form-control-sm filter-input " placeholder="Teléfono..."
                                    data-column="1">
                            </th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($prospectos as $prospecto)
                            <tr>
                                <td scope="row">{{$prospecto->nombre}}</td>
                                <td scope="row">{{$prospecto->telefono}}</td>
                                <td scope="row">{{$prospecto->created_at}}</td>
                                <td scope="row">
                                    <button type="button" class="justify-content-center w-100 btn btn-rounded btn-light-info text-info font-weight-medium d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#NotasProspecto-{{$prospecto->id}}" >
                                        <i data-feather="file-text" class="feather-sm fill-white me-2"></i>
                                    </button>
                                    @include('Portal.Prospectos.components.comentarios_prospectos')
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif

    </div>
</x-app-layout>
