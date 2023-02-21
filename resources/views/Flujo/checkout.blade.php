<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    @include('components.head')
    <title>AMTI | Checkout</title>
</head>
<body>
    <div class="bg-azul-3 py-4">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-2">
                    <a class="a_none_style" href="{{ url('/') }}">
                        <img src="https://res.cloudinary.com/dhigl3clg/image/upload/v1676310985/amtiEcommerce/logo-amti-gde_ff8yg0.png" alt="AMTI" class="img-fluid logo-menu"/>
                    </a>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-8"></div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-2">
                    <div class="">
                        <a href="https://api.whatsapp.com/send?phone=525540324042" class="btn btn-primary btn-bordes-azul regular" target="_blank">
                            <i class="fa-brands fa-whatsapp me-3"></i> 55 4032 4042
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid p-0 py-5">
        <div class="row">
            <div class="pago-rechazado py-2">
                <h5 class="bold parrafos pt-1">Lo sentimos, no hemos podido procesar tu pago, por favor intenta con otro método de pago</h5>
            </div>
        </div>
    </div>
    <div class="container py-5">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-1"></div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-10">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 mb-4">
                        
                        <div class="">
                            <div class="">
                                <div class="form-chekout py-4">
                                    <div class="mx-5">
                                        <h6 class="bold h5 mb-3">Tu pedido:</h6>
                                        <div class="">
                                            <div class="cuadro-compra-2 pb-4">
                                                <div class="header-cuadro-2 py-2">
                                                    @if( $producto->vigencia == 1)
                                                        <h3 class="semiBold h5">{{ $producto->vigencia }} año</h3>
                                                    @else
                                                        <h3 class="semiBold h5">{{ $producto->vigencia }} años</h3>
                                                    @endif
                                                </div>
                                                <div class="row">
                                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                                        <div class="text-center pt-4 pb-2 mx-3">
                                                            <img src="https://res.cloudinary.com/dhigl3clg/image/upload/v1676310985/amtiEcommerce/licenciaAMTI_nibmnp.png" alt="Ilustración de licencia y libro AMTI" class="img-fluid licencia-proceso"/> 
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                                        <div class="mt-5">
                                                            @if( $producto->vigencia == 1 )
                                                                <p class="regular txt-color-parrafo parrafos mb-0">Vigencia: {{ $producto->vigencia }} año</p>
                                                                <p class="bold txt-color-tit h5">${{ $producto->precio}} MXN.</p>
                                                            @elseif( $producto->vigencia == 3 )
                                                                <p class="regular txt-color-parrafo parrafos mb-0">Vigencia: {{ $producto->vigencia }} años</p>
                                                                <p class="bold txt-color-tit h5">${{ $producto->precio}} MXN.</p>
                                                            @elseif( $producto->vigencia == 5 )
                                                                <p class="regular txt-color-parrafo parrafos mb-0">Vigencia: {{ $producto->vigencia }} años</p>
                                                                <p class="regular parrafos tachado my-0">$4,900 MXN</p>
                                                                <p class="bold txt-color-tit h5">${{ $producto->precio}} MXN.</p>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                
                                            </div>
                                        </div>
                                        <div class="text-end mt-4">
                                            <h6 class="regular txt-color-parrafo top-menu"><i>El precio ya incluye Iva</i></h6>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 mb-4">
                        <div class="">
                            <div class="">
                                <div class="form-chekout py-4">
                                    <div class="mx-5 pt-4">
                                        <h6 class="bold h5 mb-3">Elige tu método de pago:</h6>
                                        <div class="accordion" id="accordionPanelsStayOpenExample">
                                            <div class="accordion-item txt-color-parrafo border-bottom">
                                              <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                                  <div class="form-check mt-1 accordion-fact">
                                                    <input class="form-check-input chkAll" type="checkbox" value="" id="chkAccordion2All">
                                                  </div>
                                                  Tarjeta de crédito o débito
                                                  <img src="https://res.cloudinary.com/dhigl3clg/image/upload/v1676313844/amtiEcommerce/icono-visa_z6ckyo.png" alt="Visa" class="img-fluid icono-visa"/>
                                                  <img src="https://res.cloudinary.com/dhigl3clg/image/upload/v1676313866/amtiEcommerce/icono-master_wyj2k0.png" alt="Mastercard" class="img-fluid icono-master"/>
                                                  <img src="https://res.cloudinary.com/dhigl3clg/image/upload/v1676313847/amtiEcommerce/icono-maestro_qf48fu.png" alt="Maestro" class="img-fluid icono-mestro"/>
                                                  <img src="https://res.cloudinary.com/dhigl3clg/image/upload/v1676313844/amtiEcommerce/icono-america_jtnih0.png" alt="American Express" class="img-fluid icono-american"/>
                                                </button>
                                              </h2>
                                              <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                                                <div class="accordion-body ms-3">
                                                    <form action="" class="form-efectivo regular txt-color-parrafo">
                                                        <div class="row">
                                                            <div class="mb-4">
                                                                <label for="exampleInputEmail1" class="form-label">Nombre del titular*</label>
                                                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required name="calle">
                                                            </div>
                                                            <div class="mb-4">
                                                                <label for="exampleInputEmail1" class="form-label">Número de tarjeta*</label>
                                                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required name="nTarjeta" placeholder="XXXX XXXX XXXX XXXX">
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-12 col-sm-12 col-md-12 col-lg-7">
                                                                    <div class="row">
                                                                        <label for="exampleInputEmail1" class="form-label">Fecha de expiración*</label>
                                                                        <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                                                            <div class="mb-4">
                                                                                <select class="form-select" aria-label="Default select example">
                                                                                    <option selected>Mes</option>
                                                                                    <option value="Enero">Enero</option>
                                                                                    <option value="Febrero">Febrero</option>
                                                                                    <option value="Marzo">Marzo</option>
                                                                                    <option value="Abril">Abril</option>
                                                                                    <option value="Mayo">Mayo</option>
                                                                                    <option value="Junio">Junio</option>
                                                                                    <option value="Julio">Julio</option>
                                                                                    <option value="Agosto">Agosto</option>
                                                                                    <option value="Septiembre">Septiembre</option>
                                                                                    <option value="Octubre">Octubre</option>
                                                                                    <option value="Noviembre">Noviembre</option>
                                                                                    <option value="Diciembre">Diciembre</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                                                            <div class="mb-4">
                                                                                <select class="form-select" aria-label="Default select example">
                                                                                    <option selected>Año</option>
                                                                                    <option value="Enero">Enero</option>
                                                                                    <option value="Febrero">Febrero</option>
                                                                                    <option value="Marzo">Marzo</option>
                                                                                    <option value="Abril">Abril</option>
                                                                                    <option value="Mayo">Mayo</option>
                                                                                    <option value="Junio">Junio</option>
                                                                                    <option value="Julio">Julio</option>
                                                                                    <option value="Agosto">Agosto</option>
                                                                                    <option value="Septiembre">Septiembre</option>
                                                                                    <option value="Octubre">Octubre</option>
                                                                                    <option value="Noviembre">Noviembre</option>
                                                                                    <option value="Diciembre">Diciembre</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                </div>
                                                                <div class="col-12 col-sm-12 col-md-12 col-lg-5">
                                                                    <label for="exampleInputEmail1" class="form-label">CVC*</label>
                                                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required name="nTarjeta">
                                                                </div>
                                                            </div>
                                                            
                                                            
                                                            <div class="text-center my-3">
                                                                <a href="" class="btn btn-primary btn-generar-ficha" data-bs-toggle="modal" data-bs-target="#Pago">Pagar</a>
                                                            </div>
                                                          </div>
                                                    </form>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="accordion-item txt-color-parrafo border-bottom">
                                                <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-interbancaria" aria-expanded="false" aria-controls="panelsStayOpen-interbancaria">
                                                    <div class="form-check mt-1 accordion-fact">
                                                      <input class="form-check-input chkAll" type="checkbox" value="" id="chkAccordion2All">
                                                    </div>
                                                    Transferencia interbancaria
                                                  </button>
                                                </h2>
                                                <div id="panelsStayOpen-interbancaria" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                                                  <div class="accordion-body ms-3">
                                                    <form action="" class="form-efectivo regular txt-color-parrafo">
                                                        <div class="row">
                                                            <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                                                <div class="mb-4">
                                                                    <label for="exampleInputEmail1" class="form-label">Nombre*</label>
                                                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required name="calle">
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                                                <div class="mb-4">
                                                                    <label for="exampleInputEmail1" class="form-label">Correo electrónico*</label>
                                                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required name="calle">
                                                                </div>
                                                            </div>
                                                            <div class="text-center mb-3">
                                                                <a href="" class="btn btn-primary btn-generar-ficha">Generar ficha</a>
                                                            </div>
                                                            <h5 class="top-menu regular txt-color-parrafo text-end"><i>Se generará una referencia por pago*</i></h5>
                                                          </div>
                                                    </form>
                                                  </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item txt-color-parrafo border-bottom">
                                                <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-efectivo" aria-expanded="false" aria-controls="panelsStayOpen-efectivo">
                                                    <div class="form-check mt-1 accordion-fact">
                                                      <input class="form-check-input chkAll" type="checkbox" value="" id="chkAccordion2All">
                                                    </div>
                                                    Pago en efectivo
                                                    <img src="https://res.cloudinary.com/dhigl3clg/image/upload/v1676313866/amtiEcommerce/icono-oxxo_ajvd37.png" alt="Oxxo" class="img-fluid icono-oxxo"/>
                                                  </button>
                                                </h2>
                                                <div id="panelsStayOpen-efectivo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                                                  <div class="accordion-body ms-3">
                                                    <form action="" class="form-efectivo regular txt-color-parrafo">
                                                        <div class="row">
                                                            <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                                                <div class="mb-4">
                                                                    <label for="exampleInputEmail1" class="form-label">Nombre*</label>
                                                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required name="calle">
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                                                <div class="mb-4">
                                                                    <label for="exampleInputEmail1" class="form-label">Correo electrónico*</label>
                                                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required name="calle">
                                                                </div>
                                                            </div>
                                                            <div class="text-center mb-3">
                                                                <a href="" class="btn btn-primary btn-generar-ficha">Generar ficha</a>
                                                            </div>
                                                            <h5 class="top-menu regular txt-color-parrafo text-end"><i>Se generará una referencia por pago*</i></h5>
                                                          </div>
                                                    </form>
                                                      
                                                  </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-1"></div>
        </div>
    </div>

    @include('Flujo.components.modalPago')


    <!-- FOOTER -->
    <div class="container">
        <div class="row mb-3">
            <div class="col-12 col-sm-12 col-md-12 col-lg-3">
                <h6 class="parrafos txt-color-parrafo bold">Pagos del checkout seguros</h6>
                <img src="https://res.cloudinary.com/dhigl3clg/image/upload/v1676313844/amtiEcommerce/icono-secure_yvj46c.png" alt="Certificado SecureTrust" class="img-fluid secure-trust"/>
                <img src="https://res.cloudinary.com/dhigl3clg/image/upload/v1676313844/amtiEcommerce/icono-ssl_doufze.png" alt="Certificado SSL" class="img-fluid ssl"/>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-5"></div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                <div class="text-end">
                    <h6 class="parrafos txt-color-parrafo bold">Medios y soluciones de pago</h6>
                    <img src="https://res.cloudinary.com/dhigl3clg/image/upload/v1676313844/amtiEcommerce/icono-visa_z6ckyo.png" alt="Visa" class="img-fluid icono-pagos"/>
                    <img src="https://res.cloudinary.com/dhigl3clg/image/upload/v1676313866/amtiEcommerce/icono-master_wyj2k0.png" alt="Mastercard" class="img-fluid icono-pagos"/>
                    <img src="https://res.cloudinary.com/dhigl3clg/image/upload/v1676313847/amtiEcommerce/icono-maestro_qf48fu.png" alt="Maestro" class="img-fluid icono-pagos"/>
                    <img src="https://res.cloudinary.com/dhigl3clg/image/upload/v1676313844/amtiEcommerce/icono-america_jtnih0.png" alt="American Express" class="img-fluid icono-pagos"/>
                    <img src="https://res.cloudinary.com/dhigl3clg/image/upload/v1676313866/amtiEcommerce/icono-oxxo_ajvd37.png" alt="Oxxo" class="img-fluid icono-pagos"/>
                </div>
                
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                <h6 class="txt-color-parrafo regular parrafos">© 2023 AMTI, Todos los derechos reservados</h6>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                <h6 class="txt-color-parrafo regular parrafos"><a href="{{ route('terminos') }}" class="a_none_style txt-color-parrafo regular parrafos">Términos y condiciones </a> • <a href="{{ route('aviso') }}" class="a_none_style txt-color-parrafo regular parrafos">Aviso de privacidad</a> </h6>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                <div class="text-end">
                    <a href="https://blueberry.mx/" class="a_none_style" target="_blank">
                        <img src="https://res.cloudinary.com/dej55trpk/image/upload/v1675785357/Blueberry%20animtion%20footer/blueberry-tech_smhi55.gif" alt="Materialized by Blueberry" class="img-fluid bb-logo"/>
                    </a>
                </div>
                
            </div>
        </div>
    </div>
    @include('components.scripts')
</body>
</html>