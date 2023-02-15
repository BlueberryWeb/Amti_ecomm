<div id="factura-{{$factura->id}}" class="modal fade" tabindex="-1" aria-labelledby="primary-header-modalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header modal-colored-header bg-primary text-white">
                <h4 class="modal-title" id="primary-header-modalLabel">Facturar pedido
                </h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-6 mb-2">
                        <p><b>Nombre/razón social: </b> {{$factura->razon_social}}</p>
                    </div>
                    <div class="col-6 mb-2">
                        <p><b>RFC: </b> {{$factura->rfc}}</p>
                    </div>
                    <div class="col-6 mb-2">
                        <p><b>Calle: </b> {{$factura->calle}}</p>
                    </div>
                    <div class="col-6 mb-2">
                        <p><b>Colonia: </b> {{$factura->colonia}}</p>
                    </div>
                    <div class="col-6 mb-2">
                        <p><b>Núm. exterior: </b> {{$factura->numExterior}}</p>
                    </div>
                    <div class="col-6 mb-2">
                        <p><b>Núm. interior: </b> {{$factura->numInterior}}</p>
                    </div>
                    <div class="col-6 mb-2">
                        <p><b>Código postal: </b> {{$factura->cp}}</p>
                    </div>
                    <div class="col-6 mb-2">
                        <p><b>Ciudad: </b> {{$factura->ciudad}}</p>
                    </div>
                    <div class="col-6 mb-2">
                        <p><b>Estado: </b> {{$factura->estado}}</p>
                    </div>
                    <div class="col-6 mb-2">
                        <p><b>País: </b> {{$factura->pais}}</p>
                    </div>
                    <div class="col-6 mb-2">
                        <p><b>Correo electrónico: </b> {{$factura->correo_electronico}}</p>
                    </div>
                    <div class="col-6 mb-2">
                        <p><b>Teléfono: </b> {{$factura->telefono}}</p>
                    </div>
                    <div class="col-6 mb-2">
                        <p><b>CFDI: </b> {{$factura->cfdi}}</p>
                    </div>
                    <div class="col-6 mb-2">
                        <p><b>Regimen fiscal: </b> {{$factura->regimen_fiscal}}</p>
                    </div>
                    <div class="col-12 mt-3">
                        <button class="justify-content-center w-100 btn btn-light-primary text-primary font-weight-medium d-flex align-items-center w-100" type="button" data-bs-toggle="collapse" data-bs-target="#constaciafiscal" aria-expanded="false" aria-controls="collapseImg" >
                            <i data-feather="eye" class="feather-sm fill-white me-2"></i>Ver constacia fiscal
                        </button>
                        <div class="collapse" id="constaciafiscal">
                            <div class="card card-body">
                                <iframe width="99%" height="500" src="{{ asset($factura->constancia_fiscal) }}"
                                    frameborder="0"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                <form action="{{route('portal.pedidos.detalles.factura', $factura)}}" method="post" id="formularioFactura">
                    @csrf @method('put')
                    <div class="row">
                        <div class="col-12 my-3">
                            <p><b>Estatus: </b></p>
                            <select name="estatus" class="form-select" onchange="guardarestatus()">
                                <option {{$factura->estatus == 'Por facturar' ? 'selected' : ''}} value="Por facturar">Por facturar</option>
                                <option {{$factura->estatus == 'Factura enviada' ? 'selected' : ''}} value="Factura enviada">Factura enviada</option>
                                <option {{$factura->estatus == 'Datos incorrectos' ? 'selected' : ''}} value="Datos incorrectos">Datos incorrectos</option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>
            
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
