<!DOCTYPE html>
<html lang="en">
<head>
    {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    @include('components.head')
    <title>AMTI | Carrito de compra</title>
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
                        <a href="https://api.whatsapp.com/send?phone=525540324042" class="btn text-light btn-bordes-azul regular" target="_blank">
                            <i class="fa-brands fa-whatsapp me-3"></i> 55 4032 4042
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <section class="signup-step-container">
        <div class="container-fluid p-0">
            <!--- TUTORIALES -->
            <div class="row">
                <div class="videoTutorial">
                    <div class="etiquetaVerde py-2">
                        <h3 class="regular parrafos pt-1" data-bs-toggle="modal" data-bs-target="#Tutoriales">Video tutoriales <img src="https://res.cloudinary.com/dhigl3clg/image/upload/v1676310975/amtiEcommerce/icono-video_pjp2xo.png" alt="Icono video" class="img-fluid"/></h3>
                    </div>
                    @include('Flujo.components.modalTutoriales')
                </div>
            </div>
            <!-- PROCESO COMPRA -->
            <div class="row d-flex justify-content-center">
                <div class="col-md-12 col-lg-12">
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <div class="d-none d-sm-none d-md-block">
                                <div class="wizard">
                                    <div class="wizard-inner">
                                        <div class="connecting-line"></div>
                                        <ul class="nav nav-tabs" role="tablist" id="steps">
                                            <li role="presentation" class="active" onclick="validateFlujo(this)">
                                                <a href="#step1"  id="_steps" data-toggle="tab" aria-controls="step1" role="tab"  aria-expanded="true"><span class="round-tab"><h6 class="pt-2">1</h6> </span> <i> Datos iniciales</i></a>
                                            </li>
                                            <li role="presentation" class="disabled" onclick="validateFlujo(this)">
                                                <a href="#step2"  id="_steps" data-toggle="tab" aria-controls="step2" role="tab"  aria-expanded="false"><span class="round-tab"><h6 class="pt-2">2</h6></span> <i> Vigencia</i></a>
                                            </li>
                                            <li role="presentation" class="disabled" onclick="validateFlujo(this)">
                                                <a href="#step3" id="_steps" data-toggle="tab" aria-controls="step3" role="tab"><span class="round-tab"><h6 class="pt-2">3</h6></span> <i>Documentos</i></a>
                                            </li>
                                            <li role="presentation" class="disabled" onclick="validateFlujo(this)">
                                                <a href="#step4" id="_steps" data-toggle="tab" aria-controls="step4" role="tab"><span class="round-tab"><h6 class="pt-2">4</h6></span> <i>Firma </i></a>
                                            </li>
                                            <li role="presentation" class="disabled" onclick="validateFlujo(this)">
                                                <a href="#step5" id="_steps" data-toggle="tab" aria-controls="step5" role="tab"><span class="round-tab"><h6 class="pt-2">5</h6></span> <i> Informaci??n</i></a>
                                            </li>
                                            <li role="presentation" class="disabled" onclick="validateFlujo(this)">
                                                <a href="#step6" id="_steps" data-toggle="tab" aria-controls="step6" role="tab"><span class="round-tab"><h6 class="pt-2">6</h6> </span> <i>Confirmar </i></a>
                                            </li>
                                            <li role="presentation" class="disabled" onclick="validateFlujo(this)">
                                                <a href="#step7" id="_steps" data-toggle="tab" aria-controls="step7" role="tab"><span class="round-tab"><h6 class="pt-2">7</h6></span> <i>Env??o </i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="wizard">
                            <form class="login-box needs-validation" role="form" action="{{ route('licencia.pedido.add')}}" enctype="multipart/form-data" method="POST" id="register_form" name="register_form">
                                <div class="tab-content" id="main_form">
                                    @csrf
                                    <!-- NOMBRE Y TEL??FONO -->
                                    <div class="tab-pane active" role="tabpanel" id="step1">
                                        <div class="d-block d-sm-block d-md-none">
                                            <div class="text-center pt-5">
                                                <div class="num-paso mb-3">
                                                    <h6 class="bold titulos pt-2">1</h6>
                                                </div>
                                                <h6 class="regular parrafos">1/7</h6>
                                            </div>
                                        </div>
                                        <h4 class="text-center mt-5 bold h5">Bienvenido al tr??mite de tu licencia internacional</h4>
                                        <h4 class="text-center mb-5 regular h6">Te guiaremos paso a paso para tramitar correctamente tu licencia internacional</h4>
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-3"></div>
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                                <div class="mx-5">
                                                    <div class="form-bienvenida py-5">
                                                        <div class="mx-5">
                                                            <div class="text-center pb-4">
                                                                <img src="https://res.cloudinary.com/dhigl3clg/image/upload/v1676310986/amtiEcommerce/logo-azul-gde_mffzut.png" alt="AMTI" class="img-fluid logo-menu"/>
                                                            </div>
                                                            <div class="">
                                                                <h5 class="semiBold parrafos txt-color-parrafo mb-3">Introduce a continuaci??n los datos requeridos:</h5>
                                                                <div class="mb-3">
                                                                    <label for="exampleInputEmail1" class="form-label">Nombre completo del solicitante*</label>
                                                                    <input type="text" class="form-control text" id="fullName" name="fullName" aria-describedby="" required>
                                                                </div>
                                                                <div class="">
                                                                    <label for="exampleInputEmail1" class="form-label">Tel??fono*</label>
                                                                    <input type="text" class="form-control number" id="phone" name="phone" aria-describedby="" maxlength="10" required>
                                                                </div>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-3"></div>  
                                        </div>
                                        
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-12 col-sm-12 col-md-12 col-lg-8"></div>
                                                <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                                                    <ul class="list-inline pull-right">
                                                        <li><button type="button"  id="btnProspectos" name="btnProspectos" class="default-btn next-step">Siguiente <i class="fa-solid fa-arrow-right"></i></button></li>
                                                    </ul>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <!-- SELECCIONA LA VIGENCIA --> 
                                    <div class="tab-pane" role="tabpanel" id="step2">
                                        <div class="d-block d-sm-block d-md-none">
                                            <div class="text-center pt-5">
                                                <div class="num-paso mb-3">
                                                    <h6 class="bold titulos pt-2">2</h6>
                                                </div>
                                                <h6 class="regular parrafos">2/7</h6>
                                            </div>
                                        </div>
                                        <h4 class="text-center mt-5 bold h5 mb-5">Elige la vigencia de tu licencia AMTI</h4>
                                        <div class="bg-azul-3">
                                            <div class="bg-continente py-5">
                                                <div class="container-fluid">
                                                    <div class="row">
                                                        <div class="col-12 col-sm-12 col-md-12 col-lg-1"></div>
                                                        <div class="col-12 col-sm-12 col-md-12 col-lg-10">
                                                            <div class="row">
                                                                <div class="col-12 col-sm-12 col-md-12 col-lg-4 mb-4">
                                                                    <div class="mx-3">
                                                                        <div class="cuadro-compra pb-2">
                                                                            <div class="header-cuadro py-2">
                                                                                <h3 class="semiBold h5">3 a??os</h3>
                                                                            </div>
                                                                            <div class="text-center pt-4 pb-2">
                                                                                <img src="https://res.cloudinary.com/dhigl3clg/image/upload/v1676310985/amtiEcommerce/licenciaAMTI_nibmnp.png" alt="Ilustraci??n de licencia y libro AMTI" class="img-fluid licencia-proceso"/>
                                                                            </div>
                                                                            <div class="mx-4 precioVigencia">
                                                                                <hr/>
                                                                                <div class="row ">
                                                                                    <div class="col-12 col-sm-12 col-md-12 col-lg-10">
                                                                                        <div class="">
                                                                                            <p class="regular txt-color-parrafo parrafos">Vigencia: 3 a??os</p>
                                                                                            <p class="semibold txt-color-tit titulos" id="precio">$2,700 MXN.</p>
                                                                                        </div>
                                                                                        <div class="form-check btn-seleccionar py-2">
                                                                                            <input class="form-check-input checks_vigencia" onclick="reset_checbox(this, 'checks_vigencia')" required type="checkbox" value="3" id="vigencia" name="vigencia" >
                                                                                            <label class="form-check-label" for="vigencia">
                                                                                              Seleccionar
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                </div>
                                                                <div class="col-12 col-sm-12 col-md-12 col-lg-4 mb-4">
                                                                    <div class="">
                                                                        <div class="cuadro-compra pb-3">
                                                                            <div class="header-cuadro-2 py-2">
                                                                                <h3 class="semiBold h5">5 a??os</h3>
                                                                            </div>
                                                                            <div class="text-center pt-4 pb-2">
                                                                                <img src="https://res.cloudinary.com/dhigl3clg/image/upload/v1676310985/amtiEcommerce/licenciaAMTI_nibmnp.png" alt="Ilustraci??n de licencia y libro AMTI" class="img-fluid licencia-proceso"/>
                                                                               <div class="etiqueta-recom py-1">
                                                                                    <h6 class="regular top-menu pt-1">
                                                                                        <img src="https://res.cloudinary.com/dhigl3clg/image/upload/v1676310973/amtiEcommerce/icono-recomendada_qlwq7s.png" alt="" class="img-fluid"/>
                                                                                        Recomendada
                                                                                    </h6>
                                                                               </div>
                                                                            </div>
                                                                            <div class="mx-4 precioVigencia">
                                                                                <hr/>
                                                                                <div class="row my-4">
                                                                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                                                                        <div class="">
                                                                                            <p class="regular txt-color-parrafo parrafos">Vigencia: 5 a??os</p>
                                                                                            <div class="row">
                                                                                                <div class="col-12 col-sm-12 col-md-12 col-lg-5">
                                                                                                    <p class="regular parrafos tachado" id="precio">$4,900 MXN</p>
                                                                                                </div>
                                                                                                <div class="col-12 col-sm-12 col-md-12 col-lg-7">
                                                                                                    <p class="semibold txt-color-tit titulos">$3,700 MXN.</p>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="form-check btn-seleccionar py-2">
                                                                                            <input class="form-check-input checks_vigencia" onclick="reset_checbox(this, 'checks_vigencia')" required type="checkbox" value="5" id="vigencia2" name="vigencia">
                                                                                            <label class="form-check-label" for="vigencia2">
                                                                                              Seleccionar
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 d-flex justify-content-end">
                                                                                            <img src="img/green_Check.png" alt="" class="img-fluid" width="50"/>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <input type="hidden" id="vigenciaSent" name="vigenciaSent" value="">
                                                                        </div>
                                                                    </div>
                                                                    
                                                                </div>
                                                                <div class="col-12 col-sm-12 col-md-12 col-lg-4 mb-4">
                                                                    <div class="mx-3">
                                                                        <div class="cuadro-compra pb-2">
                                                                            <div class="header-cuadro py-2">
                                                                                <h3 class="semiBold h5">1 a??o</h3>
                                                                            </div>
                                                                            <div class="text-center pt-4 pb-2">
                                                                                <img src="https://res.cloudinary.com/dhigl3clg/image/upload/v1676310985/amtiEcommerce/licenciaAMTI_nibmnp.png" alt="Ilustraci??n de licencia y libro AMTI" class="img-fluid licencia-proceso"/>
                                                                            </div>
                                                                            <div class="mx-4 precioVigencia">
                                                                                <hr/>
                                                                                <div class="row">
                                                                                    <div class="col-12 col-sm-12 col-md-12 col-lg-10">
                                                                                        <div class="">
                                                                                            <p class="regular txt-color-parrafo parrafos">Vigencia: 1 a??o</p>
                                                                                            <p class="semibold txt-color-tit titulos" id="precio">$1,450 MXN..</p>
                                                                                        </div>
                                                                                        <div class="form-check btn-seleccionar py-2">
                                                                                            <input class="form-check-input checks_vigencia" onclick="reset_checbox(this, 'checks_vigencia')" required type="checkbox" value="1" id="vigencia3" name="vigencia">
                                                                                            <label class="form-check-label" for="vigencia3">
                                                                                              Seleccionar
                                                                                            </label>
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
                                            </div>
                                        </div>
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-12 col-sm-12 col-md-12 col-lg-3">
                                                    <ul class="list-inline pull-right">
                                                        <li><button type="button" class="default-btn prev-step regular"><i class="fa-solid fa-arrow-left"></i> Anterior</button></li>
                                                    </ul>
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-12 col-lg-6"></div>
                                                <div class="col-12 col-sm-12 col-md-12 col-lg-3">
                                                    <ul class="list-inline pull-right">
                                                        <li><button type="button" class="default-btn next-step">Siguiente <i class="fa-solid fa-arrow-right"></i></button></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <!-- SUBE TUS DOCUMENTOS -->
                                    <div class="tab-pane" role="tabpanel" id="step3">
                                        <div class="d-block d-sm-block d-md-none">
                                            <div class="text-center pt-5">
                                                <div class="num-paso mb-3">
                                                    <h6 class="bold titulos pt-2">3</h6>
                                                </div>
                                                <h6 class="regular parrafos">3/7</h6>
                                            </div>
                                        </div>
                                        <div class="container py-5">
                                            <div class="row">
                                                <div class="mb-4 text-center">
                                                    <h1 class="bold txt-color-tit titulos">Sube tus documentos</h1>
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-12 col-lg-4 mb-4">
                                                    <div class="cuadro-documentos py-5">
                                                        <div class="mx-5">
                                                            <div class="row">
                                                                <div class="col-12 col-sm-12 col-md-12 col-lg-3">
                                                                    <img src="https://res.cloudinary.com/dhigl3clg/image/upload/v1676310974/amtiEcommerce/identificacion-of_ppgcid.png" alt="Ilustraci??n de identificacion oficial" class="img-fluid"/>
                                                                </div>
                                                                <div class="col-12 col-sm-12 col-md-12 col-lg-9">
                                                                    <h1 class="txt-azul-oscuro h5 bold mb-2">Identificaci??n oficial</h1>
                                                                    <div class="d-none d-sm-none d-md-block">
                                                                        <p class="regular top-menu txt-color-parrafo">Carga fotograf??as de tu identificaci??n</p>
                                                                        <p class="regular top-menu txt-color-parrafo">oficial, INE, pasaporte o C??dula</p>
                                                                        <p class="regular top-menu txt-color-parrafo">  profesional</p>
                                                                    </div>
                                                                    <div class="d-block d-sm-block d-md-none">
                                                                        <p class="regular top-menu txt-color-parrafo">Carga fotograf??as de tu identificaci??n 
                                                                            oficial, INE, pasaporte o C??dula
                                                                              profesional</p>
                                                                    </div>
                                                                    
                                                                    <div class="my-3 text-end">
                                                                        <a class="btn-ejemplo" data-bs-toggle="modal" data-bs-target="#Identificacion">Ver ejemplo</a>
                                                                    </div>
                                                                </div>
                                                                <hr/>
                                                            </div>
                                                            
                                                            <div class=" parrafos txt-color-parrafo">
                                                                <div class="mb-3">
                                                                    <label for="identificacionFrente" class="form-label">Frente*</label>
                                                                    <input class="form-control form-control-sm" type="file" id="identificacionFrente" name="identificacionFrente" 
                                                                    required accept="image/png, image/jpeg">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="identeificacionVuelta" class="form-label">Vuelta*</label>
                                                                    <input class="form-control form-control-sm" type="file" id="identeificacionVuelta" name="identeificacionVuelta" required accept="image/png,image/jpeg">
                                                                </div>
                                                                
                                                            </div>
                                                        </div>
                                                        @include('Flujo.components.modalIdentificacion')
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-12 col-lg-4 mb-4">
                                                    <div class="cuadro-documentos py-5">
                                                        <div class="mx-5">
                                                            <div class="row">
                                                                <div class="col-12 col-sm-12 col-md-12 col-lg-3">
                                                                    <img src="https://res.cloudinary.com/dhigl3clg/image/upload/v1676310981/amtiEcommerce/licencia-cond_heqoa5.png" alt="Ilustraci??n de licencia de conducir" class="img-fluid"/>
                                                                </div>
                                                                <div class="col-12 col-sm-12 col-md-12 col-lg-9">
                                                                    <h1 class="txt-azul-oscuro h5 bold mb-2">Licencia de conducir</h1>
                                                                    <div class="d-none d-sm-none d-md-block">
                                                                        <p class="regular top-menu txt-color-parrafo">Tu licencia de conducir deber?? estar</p>
                                                                        <p class="regular top-menu txt-color-parrafo">vigente, y muy bien iluminada</p>
                                                                    </div>
                                                                    <div class="d-block d-sm-block d-md-none">
                                                                        <p class="regular top-menu txt-color-parrafo">Tu licencia de conducir deber?? estar 
                                                                            vigente, y muy bien iluminada</p>
                                                                    </div>
                                                                    
                                                                    <div class="mt-3 mb-4 pb-3 text-end">
                                                                        <a class="btn-ejemplo" data-bs-toggle="modal" data-bs-target="#Licencia">Ver ejemplo</a>
                                                                    </div>
                                                                </div>
                                                                <hr/>
                                                            </div>
                                                            
                                                            <div class=" parrafos txt-color-parrafo">
                                                                <div class="mb-3">
                                                                    <label for="licenciaFrente" class="form-label">Frente*</label>
                                                                    <input class="form-control form-control-sm" id="licenciaFrente" name="licenciaFrente" type="file" required accept="image/png,image/jpeg">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="licenciaVuelta" class="form-label">Vuelta*</label>
                                                                    <input class="form-control form-control-sm" id="licenciaVuelta" name="licenciaVuelta" type="file" required accept="image/png,image/jpeg">
                                                                </div>
                                                                
                                                            </div>
                                                            @include('Flujo.components.modalLicencia')
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-12 col-lg-4 mb-4">
                                                    <div class="cuadro-documentos py-5">
                                                        <div class="mx-5">
                                                            <div class="row">
                                                                <div class="col-12 col-sm-12 col-md-12 col-lg-3">
                                                                    <img src="https://res.cloudinary.com/dhigl3clg/image/upload/v1676310965/amtiEcommerce/foto-per_hy6un8.png" alt="Ilustraci??n de fotograf??a personal" class="img-fluid"/>
                                                                </div>
                                                                <div class="col-12 col-sm-12 col-md-12 col-lg-9">
                                                                    <h1 class="txt-azul-oscuro h5 bold mb-2">Fotograf??a personal</h1>
                                                                    <div class="d-none d-sm-none d-md-block">
                                                                        <p class="regular top-menu txt-color-parrafo">T??mate una fotograf??a en fondo </p>
                                                                        <p class="regular top-menu txt-color-parrafo">blanco y con muy buena iluminaci??n</p>
                                                                    </div>
                                                                    <div class="d-block d-sm-block d-md-none">
                                                                        <p class="regular top-menu txt-color-parrafo">T??mate una fotograf??a en fondo 
                                                                            blanco y con muy buena iluminaci??n</p>
                                                                    </div>
                                                                    
                                                                    <div class="mt-3 mb-4 pb-3  text-end">
                                                                        <a class="btn-ejemplo" data-bs-toggle="modal" data-bs-target="#Fotografia">Ver ejemplo</a>
                                                                    </div>
                                                                </div>
                                                                <hr/>
                                                            </div>
                                                            
                                                            <div class=" parrafos txt-color-parrafo">
                                                                <div class="mb-5">
                                                                    <label for="imgPersonalFrente" class="form-label">Frente*</label>
                                                                    <input class="form-control form-control-sm" id="imgPersonalFrente" name="imgPersonalFrente" type="file" required  accept="image/png,image/jpeg">
                                                                    <br>
                                                                    <br>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @include('Flujo.components.modalFotografia')
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-12 col-sm-12 col-md-12 col-lg-3">
                                                    <ul class="list-inline pull-right">
                                                        <li><button type="button" class="default-btn prev-step regular"><i class="fa-solid fa-arrow-left"></i> Anterior</button></li>
                                                    </ul>
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-12 col-lg-6"></div>
                                                <div class="col-12 col-sm-12 col-md-12 col-lg-3">
                                                    <ul class="list-inline pull-right">
                                                        <li><button type="button" class="default-btn next-step">Siguiente <i class="fa-solid fa-arrow-right"></i></button></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- SUBE TU FIRMA -->
                                    <div class="tab-pane" role="tabpanel" id="step4">
                                        <div class="d-block d-sm-block d-md-none">
                                            <div class="text-center pt-5">
                                                <div class="num-paso mb-3">
                                                    <h6 class="bold titulos pt-2">4</h6>
                                                </div>
                                                <h6 class="regular parrafos">4/7</h6>
                                            </div>
                                        </div>
                                        <h4 class="text-center my-5 bold h5">Sube tu firma</h4>
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-3"></div>
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                                <div class="mx-5">
                                                    <div class="form-bienvenida py-3">
                                                        <div class="mx-5">
                                                            <div class="row py-4 txt-firma">
                                                                <div class="col-12 col-sm-12 col-md-12 col-lg-3">
                                                                    <img src="https://res.cloudinary.com/dhigl3clg/image/upload/v1676310970/amtiEcommerce/icono-firma_i2pgbv.png" alt="Ilustraci??n de firma" class="img-fluid"/>
                                                                </div>
                                                                <div class="col-12 col-sm-12 col-md-12 col-lg-9">
                                                                    <h1 class="txt-azul-oscuro h5 bold mb-2">Tu firma</h1>
                                                                    <div class="d-none d-sm-none d-md-block">
                                                                        <p class="regular top-menu txt-color-parrafo">Adjunta una fotograf??a de tu firma, ya sea de tu </p>
                                                                        <p class="regular top-menu txt-color-parrafo mb-4">identificaci??n oficial o en una hoja en blanco. </p>
                                                                        <p class="regular top-menu txt-color-parrafo"> <i>Esta firma es la que se utilizar?? en tu licencia </i></p>
                                                                        <p class="regular top-menu txt-color-parrafo"> <i>internacional. </i></p>
                                                                    </div>
                                                                    <div class="d-block d-sm-block d-md-none">
                                                                        <p class="regular top-menu txt-color-parrafo">Adjunta una fotograf??a de tu firma, ya sea de tu 
                                                                            identificaci??n oficial o en una hoja en blanco. </p>
                                                                        <p class="regular top-menu txt-color-parrafo"> <i>Esta firma es la que se utilizar?? en tu licencia </i>
                                                                             <i>internacional. </i></p>
                                                                    </div>
                                                                    
                                                                    <div class="my-3 text-end">
                                                                        <a class="btn-ejemplo" data-bs-toggle="modal" data-bs-target="#Firma">Ver ejemplo</a>
                                                                    </div>
                                                                    @include('Flujo.components.modalFirma')
                                                                    <hr/>
                                                                    <div class="mb-3">
                                                                        <label for="formFileSm" class="form-label">Tu firma*</label>
                                                                        <input class="form-control form-control-sm"  id="imgFirma" name="imgFirma" type="file" type="file" accept="image/png,image/jpeg" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                               
                                                                
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-12 col-sm-12 col-md-12 col-lg-2"></div>
                                                        <div class="col-12 col-sm-12 col-md-12 col-lg-8">
                                                            <div class="row">
                                                                <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                                                                    <ul class="list-inline pull-right">
                                                                        <li><button type="button" class="default-btn prev-step regular"><i class="fa-solid fa-arrow-left"></i> Anterior</button></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="col-12 col-sm-12 col-md-12 col-lg-4"></div>
                                                                <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                                                                    <ul class="list-inline pull-right">
                                                                        <li><button type="button" class="default-btn next-step">Siguiente <i class="fa-solid fa-arrow-right"></i></button></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            
                                                        </div>
                                                        <div class="col-12 col-sm-12 col-md-12 col-lg-2"></div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-3"></div>
                                        </div>
                                    </div>
                                    <!-- INFORMACI??N COMPLEMENTARIA -->
                                    <div class="tab-pane" role="tabpanel" id="step5">
                                        <div class="d-block d-sm-block d-md-none">
                                            <div class="text-center pt-5">
                                                <div class="num-paso mb-3">
                                                    <h6 class="bold titulos pt-2">5</h6>
                                                </div>
                                                <h6 class="regular parrafos">5/7</h6>
                                            </div>
                                        </div>
                                        <h4 class="text-center my-5 bold h5">Completa la siguiente informaci??n</h4>
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-3"></div>
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                                <div class="mx-2">
                                                    <div class="form-info-compl py-5">
                                                        <div class="mx-5">
                                                            <div class="row py-4 txt-firma">
                                                                <h4 class="bold txt-color-tit mb-3 h5 ">Rasgos f??sicos:</h4>
                                                                <div class="row">
                                                                    <div class="col-12 col-md-12 col-sm-12 col-lg-6 mb-4">
                                                                        <label for="exampleInputEmail1" class="form-label">Pa??s de nacimiento*</label>
                                                                        <select class="form-select" id="pais" name="pais" aria-label=".form-select-lg example" required>
                                                                            <option selected value="">Pa??s</option>
                                                                            <option value="Afganist??n">Afganist??n</option>
                                                                            <option value="Albania">Albania</option>
                                                                            <option value="Alemania">Alemania</option>
                                                                            <option value="Andorra">Andorra</option>
                                                                            <option value="Angola">Angola</option>
                                                                            <option value="Anguilla">Anguilla</option>
                                                                            <option value="Ant??rtida">Ant??rtida</option>
                                                                            <option value="Antigua y Barbuda">Antigua y Barbuda</option>
                                                                            <option value="Antillas Holandesas">Antillas Holandesas</option>
                                                                            <option value="Arabia Saud??">Arabia Saud??</option>
                                                                            <option value="Argelia">Argelia</option>
                                                                            <option value="Argentina">Argentina</option>
                                                                            <option value="Armenia">Armenia</option>
                                                                            <option value="Aruba">Aruba</option>
                                                                            <option value="Australia">Australia</option>
                                                                            <option value="Austria">Austria</option>
                                                                            <option value="Azerbaiy??n">Azerbaiy??n</option>
                                                                            <option value="Bahamas">Bahamas</option>
                                                                            <option value="Bahrein">Bahrein</option>
                                                                            <option value="Bangladesh">Bangladesh</option>
                                                                            <option value="Barbados">Barbados</option>
                                                                            <option value="B??lgica">B??lgica</option>
                                                                            <option value="Belice">Belice</option>
                                                                            <option value="Benin">Benin</option>
                                                                            <option value="Bermudas">Bermudas</option>
                                                                            <option value="Bielorrusia">Bielorrusia</option>
                                                                            <option value="Birmania">Birmania</option>
                                                                            <option value="Bolivia">Bolivia</option>
                                                                            <option value="Bosnia">Bosnia y Herzegovina</option>
                                                                            <option value="Botswana">Botswana</option>
                                                                            <option value="Brasil">Brasil</option>
                                                                            <option value="Brunei">Brunei</option>
                                                                            <option value="Bulgaria">Bulgaria</option>
                                                                            <option value="Burkina Faso">Burkina Faso</option>
                                                                            <option value="Burundi">Burundi</option>
                                                                            <option value="But??n">But??n</option>
                                                                            <option value="Cabo Verde">Cabo Verde</option>
                                                                            <option value="Camboya">Camboya</option>
                                                                            <option value="Camer??n">Camer??n</option>
                                                                            <option value="Canad??">Canad??</option>
                                                                            <option value="Chad">Chad</option>
                                                                            <option value="Chile">Chile</option>
                                                                            <option value="China">China</option>
                                                                            <option value="Chipre">Chipre</option>
                                                                            <option value="Ciudad del Vaticano">Ciudad del Vaticano (Santa Sede)</option>
                                                                            <option value="Colombia">Colombia</option>
                                                                            <option value="Comores">Comores</option>
                                                                            <option value="Congo">Congo</option>
                                                                            <option value="Congo, Republica">Congo, Rep??blica Democr??tica del</option>
                                                                            <option value="Corea del Sur">Corea</option>
                                                                            <option value="Corea del Norte">Corea del Norte</option>
                                                                            <option value="Costa de Marf??l">Costa de Marf??l</option>
                                                                            <option value="Costa Rica">Costa Rica</option>
                                                                            <option value="Croacia">Croacia (Hrvatska)</option>
                                                                            <option value="Cuba">Cuba</option>
                                                                            <option value="Dinamarca">Dinamarca</option>
                                                                            <option value="Djibouti">Djibouti</option>
                                                                            <option value="Dominica">Dominica</option>
                                                                            <option value="Ecuador">Ecuador</option>
                                                                            <option value="Egipto">Egipto</option>
                                                                            <option value="El Salvador">El Salvador</option>
                                                                            <option value="Emiratos ??rabes Unidos">Emiratos ??rabes Unidos</option>
                                                                            <option value="Eritrea">Eritrea</option>
                                                                            <option value="Eslovenia">Eslovenia</option>
                                                                            <option value="Espa??a">Espa??a</option>
                                                                            <option value="USA">Estados Unidos</option>
                                                                            <option value="Estonia">Estonia</option>
                                                                            <option value="Etiop??a">Etiop??a</option>
                                                                            <option value="Fiji">Fiji</option>
                                                                            <option value="Filipinas">Filipinas</option>
                                                                            <option value="Finlandia">Finlandia</option>
                                                                            <option value="Francia">Francia</option>
                                                                            <option value="Gab??n">Gab??n</option>
                                                                            <option value="Gambia">Gambia</option>
                                                                            <option value="Georgia">Georgia</option>
                                                                            <option value="Ghana">Ghana</option>
                                                                            <option value="Gibraltar">Gibraltar</option>
                                                                            <option value="Granada">Granada</option>
                                                                            <option value="Grecia">Grecia</option>
                                                                            <option value="Groenlandia">Groenlandia</option>
                                                                            <option value="Guadalupe">Guadalupe</option>
                                                                            <option value="Guam">Guam</option>
                                                                            <option value="Guatemala">Guatemala</option>
                                                                            <option value="Guayana">Guayana</option>
                                                                            <option value="Guayana Francesa">Guayana Francesa</option>
                                                                            <option value="Guinea">Guinea</option>
                                                                            <option value="Guinea Ecuatorial">Guinea Ecuatorial</option>
                                                                            <option value="Guinea-Bissau">Guinea-Bissau</option>
                                                                            <option value="Hait??">Hait??</option>
                                                                            <option value="Honduras">Honduras</option>
                                                                            <option value="Hungr??a">Hungr??a</option>
                                                                            <option value="India">India</option>
                                                                            <option value="Indonesia">Indonesia</option>
                                                                            <option value="Irak">Irak</option>
                                                                            <option value="Ir??n">Ir??n</option>
                                                                            <option value="Irlanda">Irlanda</option>
                                                                            <option value="Isla Bouvet">Isla Bouvet</option>
                                                                            <option value="Isla de Christmas">Isla de Christmas</option>
                                                                            <option value="Islandia">Islandia</option>
                                                                            <option value="Islas Caim??n">Islas Caim??n</option>
                                                                            <option value="Islas Cook">Islas Cook</option>
                                                                            <option value="Islas de Cocos o Keeling">Islas de Cocos o Keeling</option>
                                                                            <option value="Islas Faroe">Islas Faroe</option>
                                                                            <option value="Islas Heard y McDonald">Islas Heard y McDonald</option>
                                                                            <option value="Islas Malvinas">Islas Malvinas</option>
                                                                            <option value="Islas Marianas del Norte">Islas Marianas del Norte</option>
                                                                            <option value="Islas Marshall">Islas Marshall</option>
                                                                            <option value="Islas menores de Estados Unidos">Islas menores de Estados Unidos</option>
                                                                            <option value="Islas Palau">Islas Palau</option>
                                                                            <option value="Islas Salom??n">Islas Salom??n</option>
                                                                            <option value="Islas Svalbard y Jan Mayen">Islas Svalbard y Jan Mayen</option>
                                                                            <option value="Islas Tokelau">Islas Tokelau</option>
                                                                            <option value="Islas Turks y Caicos">Islas Turks y Caicos</option>
                                                                            <option value="Islas V??rgenes (EEUU)">Islas V??rgenes (EEUU)</option>
                                                                            <option value="Islas V??rgenes (Reino Unido)">Islas V??rgenes (Reino Unido)</option>
                                                                            <option value="Islas Wallis y Futuna">Islas Wallis y Futuna</option>
                                                                            <option value="Israel">Israel</option>
                                                                            <option value="Italia">Italia</option>
                                                                            <option value="Jamaica">Jamaica</option>
                                                                            <option value="Jap??n">Jap??n</option>
                                                                            <option value="Jordania">Jordania</option>
                                                                            <option value="Kazajist??n">Kazajist??n</option>
                                                                            <option value="Kenia">Kenia</option>
                                                                            <option value="Kirguizist??n">Kirguizist??n</option>
                                                                            <option value="Kiribati">Kiribati</option>
                                                                            <option value="Kuwait">Kuwait</option>
                                                                            <option value="Laos">Laos</option>
                                                                            <option value="Lesotho">Lesotho</option>
                                                                            <option value="Letonia">Letonia</option>
                                                                            <option value="L??bano">L??bano</option>
                                                                            <option value="Liberia">Liberia</option>
                                                                            <option value="Libia">Libia</option>
                                                                            <option value="Liechtenstein">Liechtenstein</option>
                                                                            <option value="Lituania">Lituania</option>
                                                                            <option value="Luxemburgo">Luxemburgo</option>
                                                                            <option value="Macedonia">Macedonia, Ex-Rep??blica Yugoslava de</option>
                                                                            <option value="Madagascar">Madagascar</option>
                                                                            <option value="Malasia">Malasia</option>
                                                                            <option value="Malawi">Malawi</option>
                                                                            <option value="Maldivas">Maldivas</option>
                                                                            <option value="Mal??">Mal??</option>
                                                                            <option value="Malta">Malta</option>
                                                                            <option value="Marruecos">Marruecos</option>
                                                                            <option value="Martinica">Martinica</option>
                                                                            <option value="Mauricio">Mauricio</option>
                                                                            <option value="Mauritania">Mauritania</option>
                                                                            <option value="Mayotte">Mayotte</option>
                                                                            <option value="M??xico">M??xico</option>
                                                                            <option value="Micronesia">Micronesia</option>
                                                                            <option value="Moldavia">Moldavia</option>
                                                                            <option value="M??naco">M??naco</option>
                                                                            <option value="Mongolia">Mongolia</option>
                                                                            <option value="Montserrat">Montserrat</option>
                                                                            <option value="Mozambique">Mozambique</option>
                                                                            <option value="Namibia">Namibia</option>
                                                                            <option value="Nauru">Nauru</option>
                                                                            <option value="Nepal">Nepal</option>
                                                                            <option value="Nicaragua">Nicaragua</option>
                                                                            <option value="N??ger">N??ger</option>
                                                                            <option value="Nigeria">Nigeria</option>
                                                                            <option value="Niue">Niue</option>
                                                                            <option value="Norfolk">Norfolk</option>
                                                                            <option value="Noruega">Noruega</option>
                                                                            <option value="Nueva Caledonia">Nueva Caledonia</option>
                                                                            <option value="Nueva Zelanda">Nueva Zelanda</option>
                                                                            <option value="Om??n">Om??n</option>
                                                                            <option value="Pa??ses Bajos">Pa??ses Bajos</option>
                                                                            <option value="Panam??">Panam??</option>
                                                                            <option value="Pap??a Nueva Guinea">Pap??a Nueva Guinea</option>
                                                                            <option value="Paquist??n">Paquist??n</option>
                                                                            <option value="Paraguay">Paraguay</option>
                                                                            <option value="Per??">Per??</option>
                                                                            <option value="Pitcairn">Pitcairn</option>
                                                                            <option value="Polinesia Francesa">Polinesia Francesa</option>
                                                                            <option value="Polonia">Polonia</option>
                                                                            <option value="Portugal">Portugal</option>
                                                                            <option value="Puerto Rico">Puerto Rico</option>
                                                                            <option value="Qatar">Qatar</option>
                                                                            <option value="Reino Unido">Reino Unido</option>
                                                                            <option value="Rep??blica Centroafricana">Rep??blica Centroafricana</option>
                                                                            <option value="Rep??blica Checa">Rep??blica Checa</option>
                                                                            <option value="Rep??blica de Sud??frica">Rep??blica de Sud??frica</option>
                                                                            <option value="Rep??blica Dominicana">Rep??blica Dominicana</option>
                                                                            <option value="Rep??blica Eslovaca">Rep??blica Eslovaca</option>
                                                                            <option value="Reuni??n">Reuni??n</option>
                                                                            <option value="Ruanda">Ruanda</option>
                                                                            <option value="Rumania">Rumania</option>
                                                                            <option value="Rusia">Rusia</option>
                                                                            <option value="Sahara Occidental">Sahara Occidental</option>
                                                                            <option value="Saint Kitts y Nevis">Saint Kitts y Nevis</option>
                                                                            <option value="Samoa">Samoa</option>
                                                                            <option value="Samoa Americana">Samoa Americana</option>
                                                                            <option value="San Marino">San Marino</option>
                                                                            <option value="San Vicente y Granadinas">San Vicente y Granadinas</option>
                                                                            <option value="Santa Helena">Santa Helena</option>
                                                                            <option value="Santa Luc??a">Santa Luc??a</option>
                                                                            <option value="Santo Tom?? y Pr??ncipe">Santo Tom?? y Pr??ncipe</option>
                                                                            <option value="Senegal">Senegal</option>
                                                                            <option value="Seychelles">Seychelles</option>
                                                                            <option value="Sierra Leona">Sierra Leona</option>
                                                                            <option value="Singapur">Singapur</option>
                                                                            <option value="Siria">Siria</option>
                                                                            <option value="Somalia">Somalia</option>
                                                                            <option value="Sri Lanka">Sri Lanka</option>
                                                                            <option value="St Pierre y Miquelon">St Pierre y Miquelon</option>
                                                                            <option value="Suazilandia">Suazilandia</option>
                                                                            <option value="Sud??n">Sud??n</option>
                                                                            <option value="Suecia">Suecia</option>
                                                                            <option value="Suiza">Suiza</option>
                                                                            <option value="Surinam">Surinam</option>
                                                                            <option value="Tailandia">Tailandia</option>
                                                                            <option value="Taiw??n">Taiw??n</option>
                                                                            <option value="Tanzania">Tanzania</option>
                                                                            <option value="Tayikist??n">Tayikist??n</option>
                                                                            <option value="Territorios franceses del Sur">Territorios franceses del Sur</option>
                                                                            <option value="Timor Oriental">Timor Oriental</option>
                                                                            <option value="Togo">Togo</option>
                                                                            <option value="Tonga">Tonga</option>
                                                                            <option value="Trinidad y Tobago">Trinidad y Tobago</option>
                                                                            <option value="T??nez">T??nez</option>
                                                                            <option value="Turkmenist??n">Turkmenist??n</option>
                                                                            <option value="Turqu??a">Turqu??a</option>
                                                                            <option value="Tuvalu">Tuvalu</option>
                                                                            <option value="Ucrania">Ucrania</option>
                                                                            <option value="Uganda">Uganda</option>
                                                                            <option value="Uruguay">Uruguay</option>
                                                                            <option value="Uzbekist??n">Uzbekist??n</option>
                                                                            <option value="Vanuatu">Vanuatu</option>
                                                                            <option value="Venezuela">Venezuela</option>
                                                                            <option value="Vietnam">Vietnam</option>
                                                                            <option value="Yemen">Yemen</option>
                                                                            <option value="Yugoslavia">Yugoslavia</option>
                                                                            <option value="Zambia">Zambia</option>
                                                                            <option value="Zimbabue">Zimbabue</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-12 col-md-12 col-sm-12 col-lg-6 mb-4">
                                                                        <div class="row">
                                                                            <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                                                                <div class="mb-3">
                                                                                    <label for="exampleInputEmail1" class="form-label">Estatura*</label>
                                                                                    <input type="text" class="form-control number" id="estatura" name="estatura" aria-describedby="" required>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 pt-4">
                                                                                <div class="pt-2">
                                                                                    <select class="form-select" id="medida" name="medida" aria-label="Default select example">
                                                                                        <option selected>Selecciona</option>
                                                                                        <option value="centimetros">Cent??metros</option>
                                                                                        <option value="pulgadas">Pulgadas</option>
                                                                                    </select>
                                                                                </div>
                                                                                
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 col-md-12 col-sm-12 col-lg-6 mb-4">
                                                                        <label for="exampleInputEmail1" class="form-label">Sexo*</label>
                                                                        <select class="form-select" id="sexo" name="sexo" aria-label=".form-select-lg example" required>
                                                                            <option value="" selected>Seleccione un opci??n</option>
                                                                            <option value="Femenino">Femenino</option>
                                                                            <option value="Masculino">Masculino</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-12 col-md-12 col-sm-12 col-lg-6 mb-4">
                                                                        <label for="exampleInputEmail1" class="form-label">Color de cabello natural*</label>
                                                                        <select class="form-select" id="colorCabello" name="colorCabello" aria-label=".form-select-lg example" required>
                                                                            <option value="" selected>Seleccione un opci??n</option>
                                                                            <option value="Negro">Caf??</option>
                                                                            <option value="Oscuro">Negro</option>
                                                                            <option value="Rubio">Rubio</option>
                                                                            <option value="Casta??o">Gris</option>
                                                                            <option value="Platino">Rojo</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-12 col-sm-12 col-md-12 col-lg-3">
                                                                            <label for="exampleInputEmail1" class="form-label">Color de ojos*</label>
                                                                        </div>
                                                                        <div class="col-12 col-sm-12 col-md-12 col-lg-5">
                                                                            <div class="drop-image mb-4" id="drop-image">
                                                                                <div class="option-image active placeholder" data-value="placeholder">
                                                                                    <img  src="https://res.cloudinary.com/dhigl3clg/image/upload/v1676310995/amtiEcommerce/ojo-cafe_gmhmit.png" alt="Ilustraci??n de color de ojos" class="me-3"/>Selecciona un color de ojos
                                                                                </div>
                                                                                <div class="option-image" data-value="wow" onclick="getEyes(this)">
                                                                                    <img src="https://res.cloudinary.com/dhigl3clg/image/upload/v1676310995/amtiEcommerce/ojo-cafe_gmhmit.png" alt="Ilustraci??n de color de ojos" class="me-3"/> Caf??
                                                                                </div>
                                                                                <div class="option-image" data-value="wow" onclick="getEyes(this)">
                                                                                    <img src="img/black-eye.png" alt="Ilustraci??n de color de ojos" class="me-3" width="45" /> Negro
                                                                                </div>
                                                                                <div class="option-image" data-value="custom" onclick="getEyes(this)">
                                                                                    <img src="https://res.cloudinary.com/dhigl3clg/image/upload/v1676310995/amtiEcommerce/ojo-verde_hmbkqc.png" alt="Ilustraci??n de color de ojos" class="me-3"/> Verde
                                                                                </div>
                                                                                <div class="option-image" data-value="animation" onclick="getEyes(this)"> 
                                                                                    <img src="https://res.cloudinary.com/dhigl3clg/image/upload/v1676310992/amtiEcommerce/ojo-azul_hijizp.png" alt="Ilustraci??n de color de ojos" class="me-3"/> Azul
                                                                                </div>
                                                                              </div>
                                                                        </div>
                                                                        <input type="hidden" class="form-control " name="color_ojos" id="color_ojos" value="" required>
                                                                        <div class="col-12 col-sm-12 col-md-12 col-lg-4"></div>
                                                                    </div>
                                                                    <hr/>
                                                                    <h4 class="bold txt-color-tit mb-3 h5 ">Direcci??n completa:</h4>
                                                                    <div class="row">
                                                                        <div class="col-12 col-sm-12 col-md-12 col-lg-6 mb-4">
                                                                            <div class="">
                                                                                <label for="exampleInputEmail1" class="form-label">Calle*</label>
                                                                                <input type="text" class="form-control" id="calle" name="calle" aria-describedby="" required >
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 col-sm-12 col-md-12 col-lg-6 mb-4">
                                                                            <div class="">
                                                                                <label for="exampleInputEmail1" class="form-label">Colonia*</label>
                                                                                <input type="text" class="form-control" id="colonia" name="colonia" aria-describedby="" required >
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 col-sm-12 col-md-12 col-lg-6 mb-4">
                                                                            <div class="">
                                                                                <label for="exampleInputEmail1" class="form-label">N??mero exterior*</label>
                                                                                <input type="text" class="form-control number" id="numExterior" name="numExterior" aria-describedby="" required >
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 col-sm-12 col-md-12 col-lg-6 mb-4">
                                                                            <div class="">
                                                                                <label for="exampleInputEmail1" class="form-label">N??mero interior</label>
                                                                                <input type="text" class="form-control number" id="numInterior" name="numInterior" aria-describedby="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 col-sm-12 col-md-12 col-lg-6 mb-4">
                                                                            <div class="">
                                                                                <label for="exampleInputEmail1" class="form-label">Ciudad*</label>
                                                                                <input type="text" class="form-control text" id="ciudad" name="ciudad" aria-describedby="" required >
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 col-sm-12 col-md-12 col-lg-6 mb-4">
                                                                            <div class="">
                                                                                <label for="exampleInputEmail1" class="form-label">Estado*</label>
                                                                                <input type="text" class="form-control text" id="estado" name="estado" aria-describedby="" required >
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
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-12 col-sm-12 col-md-12 col-lg-2"></div>
                                                <div class="col-12 col-sm-12 col-md-12 col-lg-8">
                                                    <div class="row">
                                                        <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                                                            <ul class="list-inline pull-right">
                                                                <li><button type="button" class="default-btn prev-step regular"><i class="fa-solid fa-arrow-left"></i> Anterior</button></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-12 col-sm-12 col-md-12 col-lg-4"></div>
                                                        <div class="col-12 col-sm-12 col-md-12 col-lg-3">
                                                            <ul class="list-inline pull-right">
                                                                <li><button type="button" id="btnInformacion" onclick="previewAddres();" class="default-btn next-step">Siguiente <i class="fa-solid fa-arrow-right"></i></button></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-12 col-lg-2"></div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <!-- CONFIRMACI??N DE DATOS -->
                                    <div class="tab-pane" role="tabpanel" id="step6">
                                        <div class="d-block d-sm-block d-md-none">
                                            <div class="text-center pt-5">
                                                <div class="num-paso mb-3">
                                                    <h6 class="bold titulos pt-2">6</h6>
                                                </div>
                                                <h6 class="regular parrafos">6/7</h6>
                                            </div>
                                        </div>
                                        <h4 class="text-center my-5 bold h5">Por favor, confirma que tus datos sean correctos</h4>
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-3"></div>
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                                <div class="mx-5">
                                                    <div class="form-confirmacion">
                                                        <div class="header-lic py-1">
                                                            <h6 class="bold  pt-1">INTERNATIONAL DRIVING PERMIT</h6>
                                                            <h6 class="regular tags">TRANSLATION OF FOREIG DRIVER'S LICENCE</h6>
                                                        </div>
                                                        <div class="mx-5">
                                                            <div class="row py-4 txt-firma">
                                                                <div class="col-12 col-sm-12 col-md-12 col-lg-3">
                                                                    <div class="mb-3">
                                                                        <img src="https://res.cloudinary.com/dhigl3clg/image/upload/v1676310962/amtiEcommerce/foto-ejemp_oddwge.png" 
                                                                        id="previewImgPersonal" alt="Ilustraci??n de firma" class="img-fluid"/>
                                                                    </div>
                                                                    <div class="">
                                                                        <img src="https://res.cloudinary.com/dhigl3clg/image/upload/v1676310963/amtiEcommerce/ejemplo-firma_s0kjwn.png"
                                                                        id="previewImgFirma" alt="Ilustraci??n de firma" class="img-fluid"/>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 col-sm-12 col-md-12 col-lg-9">
                                                                    <div class="d-none d-sm-none d-md-block">
                                                                        <p class="txt-color-parrafo h6 regular mb-4"><b class="txt-azul-oscuro">FULL NAME:</b>
                                                                        <span id="previewName"></span></p>
                                                                    </div>
                                                                    <div class="d-block d-sm-block d-md-none">
                                                                        <p class="regular h6 txt-color-parrafo"><b class="txt-azul-oscuro">FULL NAME:</b></p>
                                                                        <p class="regular h6 txt-color-parrafo mb-4" id="previewName2"></p>
                                                                    </div>
                                                                    <div class="d-none d-sm-none d-md-block">
                                                                        <p class="regular h6  txt-color-parrafo mb-4"><b class="txt-azul-oscuro">ADDRESS:</b>
                                                                        <span id="previewDireccion"></span></p>
                                                                    </div>
                                                                    <div class="d-block d-sm-block d-md-none">
                                                                        <p class="regular h6 txt-color-parrafo"><b class="txt-azul-oscuro">ADDRESS:</b></p>
                                                                        <p class="regular h6 txt-color-parrafo mb-4" id="previewDireccion2"></p>
                                                                    </div>
                                                                    <p class="regular h6 txt-color-parrafo"><b class="txt-azul-oscuro">PLACE OF BIRTH:</b></p>
                                                                    <p class="regular h6 txt-color-parrafo mb-4" id="previewPais"></p>
                                                                    <div class="row">
                                                                        <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4">
                                                                            <p class="regular h6 txt-color-parrafo"><b class="txt-azul-oscuro">SEX:</b></p>
                                                                            <p class="regular h6 txt-color-parrafo" id="previewSexo"></p>
                                                                        </div>
                                                                        <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4">
                                                                            <p class="regular h6 txt-color-parrafo"><b class="txt-azul-oscuro">EYES:</b></p>
                                                                            <p class="regular h6 txt-color-parrafo" id="previewOjos"></p>
                                                                        </div>
                                                                        <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4">
                                                                            <p class="regular h6 txt-color-parrafo"><b class="txt-azul-oscuro">HT:</b></p>
                                                                            <p class="regular h6 txt-color-parrafo" id="previewEstatura"></p>
                                                                        </div>
                                                                        <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4">
                                                                            <p class="regular h6 txt-color-parrafo"><b class="txt-azul-oscuro">HAIR:</b></p>
                                                                            <p class="regular h6 txt-color-parrafo" id="previewCabello"></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                               
                                                                
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-12 col-sm-12 col-md-12 col-lg-2"></div>
                                                        <div class="col-12 col-sm-12 col-md-12 col-lg-8">
                                                            <div class="d-flex justify-content-center">
                                                                <div class="form-check pt-2">
                                                                    <input class="form-check-input" type="checkbox" value="" id="terminos" name="terminos" required>
                                                                    <label class="form-check-label" for="terminos">
                                                                       Confirmo que mis datos estan correctos
                                                                    </label>
                                                                  </div>
                                                                <div class="form-check pt-2">
                                                                    <input class="form-check-input" type="checkbox" value="" id="terminos" name="terminos" required>
                                                                    <label class="form-check-label" for="terminos">
                                                                        He le??do y acepto los 
                                                                        <a class="txt-color-parrafo a_none_style a_hover_style" href="{{ route('terminos') }}" target="_blank"><u>t??rminos y condiciones.</u> </a>
                                                                    </label>
                                                                  </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                                                                    <ul class="list-inline pull-right">
                                                                        <li><button type="button" class="default-btn prev-step regular"><i class="fa-solid fa-arrow-left"></i> Anterior</button></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="col-12 col-sm-12 col-md-12 col-lg-4"></div>
                                                                <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                                                                    <ul class="list-inline pull-right">
                                                                        <li><button type="button" class="default-btn next-step">Siguiente <i class="fa-solid fa-arrow-right"></i></button></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            
                                                        </div>
                                                        <div class="col-12 col-sm-12 col-md-12 col-lg-2"></div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-3"></div>
                                        </div>
                                        
                                    </div>
                                    <!-- DATOS DE ENV??O -->
                                    <div class="tab-pane" role="tabpanel" id="step7">
                                        <div class="d-block d-sm-block d-md-none">
                                            <div class="text-center pt-5">
                                                <div class="num-paso mb-3">
                                                    <h6 class="bold titulos pt-2">7</h6>
                                                </div>
                                                <h6 class="regular parrafos">7/7</h6>
                                            </div>
                                        </div>
                                        <h4 class="text-center my-5 bold h5">Datos de env??o</h4>
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-3"></div>
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                                <div class="mx-2">
                                                    <div class="accordion" id="accordionEnvioExample">
                                                        <div class="accordion-item">
                                                            <div class="row mb-5">
                                                                <label for="exampleInputEmail1" class="form-label">Selecciona tu tipo de env??o*</label>
                                                                <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input checks_envio" onclick="reset_checbox(this, 'checks_envio')" type="checkbox" name="tipoEnvio" id="tipoEnvio1" value="Estandar" required>
                                                                        <label class="form-check-label txt-color-tit bold" for="tipoEnvio1">Env??o<b class="txt-azul-oscuro"> est??ndar</b> <br/>
                                                                            <i class="fa-solid fa-check txt-verde"></i> <b class="txt-verde">Gratuito</b> <br/>
                                                                            <b class="top-menu regular">5 - 7 d??as h??biles</b>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                                                                    <div class="form-check ">
                                                                        <input class="form-check-input checks_envio" onclick="reset_checbox(this, 'checks_envio')" type="checkbox" name="tipoEnvio" id="tipoEnvio2" value="Express" required>
                                                                        <label class="form-check-label" for="tipoEnvio2">Env??o<b class="txt-azul-oscuro" data-bs-target="#panelEnvio2" data-bs-toggle="collapse" aria-expanded="false" aria-controls="panelEnvio2"> express</b><br/>
                                                                            <b class="regular">$199</b> <br/>
                                                                            <b class="top-menu regular">1 a 3 d??as h??biles</b>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input checks_envio" onclick="reset_checbox(this, 'checks_envio')" type="checkbox" name="tipoEnvio" id="tipoEnvio3" value="Recogerla" aria-controls="panelEnvio" aria-expanded="false" required>
                                                                        <label class="form-check-label" for="tipoEnvio3">Recoger en<b class="txt-azul-oscuro"> sucursal</b> <br/>
                                                                            <i class="fa-solid fa-check txt-verde"></i> <b class="txt-verde">Gratuito</b> <br/>
                                                                            <b class="top-menu regular">2 a 3 d??as h??biles.</b>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="text-end mb-3 pt-3">
                                                                    <h6 class="top-menu txt-color-parrafo"><i>*Los d??as de entrega pueden variar seg??n sea la zona de entrega por pol??ticas de paqueter??as.</i></h6>
                                                                </div>
                                                            </div>
                                                            <div id="panelEnvio" class="accordion-collapse collapse">
                                                                <div class="accordion-body ms-3">
                                                                    <div class="row txt-firma">
                                                                        <div class="mb-4">
                                                                            <label for="nombreEnvio" class="form-label">Nombre Completo*</label>
                                                                            <input type="text" class="form-control text" id="nombreEnvio" name="nombreEnvio" aria-describedby="" required>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                                                                <div class="mb-4">
                                                                                    <label for="telefonoEnvio" class="form-label">Tel??fono*</label>
                                                                                    <input type="text" class="form-control number" id="telefonoEnvio" name="telefonoEnvio" maxlength="10" aria-describedby="" required>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                                                                <div class="mb-4">
                                                                                    <label for="correoEnvio" class="form-label">Correo electr??nico*</label>
                                                                                    <input type="email" class="form-control" id="correoEnvio" name="correoEnvio" aria-describedby="" required>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                                                                <div class="mb-4">
                                                                                    <label for="calleEnvio" class="form-label">Calle*</label>
                                                                                    <input type="text" class="form-control" id="calleEnvio" name="calleEnvio" aria-describedby="" required>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                                                                <div class="mb-4">
                                                                                    <label for="coloniaEnvio" class="form-label">Colonia*</label>
                                                                                    <input type="text" class="form-control" id="coloniaEnvio" name="coloniaEnvio" aria-describedby="" required>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                                                                                <div class="mb-4">
                                                                                    <label for="numeroExtEnvio" class="form-label">N??mero exterior*</label>
                                                                                    <input type="text" class="form-control number" id="numeroExtEnvio" name="numeroExtEnvio" aria-describedby="" required>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                                                                                <div class="mb-4">
                                                                                    <label for="numeroIntEnvio" class="form-label">N??mero interior</label>
                                                                                    <input type="text" class="form-control number" id="numeroIntEnvio" name="numeroIntEnvio" aria-describedby="">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                                                                                <div class="mb-4">
                                                                                    <label for="cp" class="form-label">C??digo Postal*</label>
                                                                                    <input type="text" class="form-control number" id="cpEnvio" name="cpEnvio" aria-describedby="" maxlength="5" required>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                                                                <div class="mb-4">
                                                                                    <label for="ciudadEnvio" class="form-label">Ciudad*</label>
                                                                                    <input type="text" class="form-control text" id="ciudadEnvio" name="ciudadEnvio" aria-describedby="" required>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                                                                <div class="mb-4">
                                                                                    <label for="estadoEnvio" class="form-label">Estado*</label>
                                                                                    <input type="text" class="form-control text" id="estadoEnvio" name="estadoEnvio" aria-describedby="" required>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="mb-4">
                                                                            <label for="instrucciones" class="form-label">Instrucciones adicionales para acceder al domicilio*</label>
                                                                            <input type="text" class="form-control" id="instrucciones" name="instrucciones" aria-describedby="" required >
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div id="panelEnvio2" class="accordion-collapse collapse">
                                                                <div class="accordion-body ms-3">
                                                                    <div class="row txt-firma">
                                                                        <div class="row">
                                                                            <div class="py-2">
                                                                                <div class="row">
                                                                                    <div class="col-12 col-sm-12 col-md-12 col-lg-4 mb-4">
                                                                                        <div class="col">
                                                                                            <div class="cuadro-sucursales py-4">
                                                                                                <img src="https://res.cloudinary.com/dhigl3clg/image/upload/v1676310974/amtiEcommerce/icono-ubicacion-fondo_lj1npd.png" alt="2" class="img-fluid icono-suc"/>
                                                                                                <div class="mx-5">
                                                                                                    <h1 class="txt-color-tit titulos bold">Sucursal</h1>
                                                                                                    <h1 class="txt-azul-oscuro titulos bold">Guadalajara</h1>
                                                                                                    <div class="my-4 parrafos txt-color-parrafo">
                                                                                                        <div class="mb-4">
                                                                                                            <a href="https://goo.gl/maps/sa77LNkDxsG96Nmo6" class="a_none_style txt-color-parrafo" target="_blank">
                                                                                                                <img src="https://res.cloudinary.com/dhigl3clg/image/upload/v1676310974/amtiEcommerce/icono-ubi-azul_zotx3g.png" alt="" class="img-fluid icon-suc float-start mb-3"/>
                                                                                                                <h6 class="regular top-menu txt-color-parrafo">Av. Rub??n Dar??o #586 int.8, Lomas de </h6>
                                                                                                                <h6 class="regular top-menu txt-color-parrafo">Guevara, CP: 44657 Guadalajara, Jal.</h6>
                                                                                                            </a>
                                                                                                        </div>
                                                                                                        <div class="">
                                                                                                            <a href="tel:+523327903393" class="a_none_style txt-color-parrafo" target="_blank">
                                                                                                                <img src="https://res.cloudinary.com/dhigl3clg/image/upload/v1676310973/amtiEcommerce/icono-tel-azul_gk6ccf.png" alt="" class="img-fluid icon-suc float-start"/>
                                                                                                                <h6 class="semiBold top-menu txt-color-parrafo">33 2790 3393</h6>
                                                                                                            </a>
                                                                                                            
                                                                                                        </div>
                                                                                                        <div class="">
                                                                                                            <a href="https://api.whatsapp.com/send?phone=525540324042" class="a_none_style txt-color-parrafo" target="_blank">
                                                                                                                <img src="https://res.cloudinary.com/dhigl3clg/image/upload/v1676310975/amtiEcommerce/icono-whats-azul_yyetea.png" alt="" class="img-fluid icon-suc float-start"/>
                                                                                                                <h6 class="semiBold top-menu txt-color-parrafo">55 4032 4042</h6>
                                                                                                            </a>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col d-flex justify-content-center pt-2">
                                                                                            <div class="form-check">
                                                                                                <input class="form-check-input checks_sucursal" onclick="reset_checbox(this, 'checks_sucursal')" type="checkbox" name="sucursalEntrega" id="guadalajara" value="Guadalajara" required>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-12 col-sm-12 col-md-12 col-lg-4 mb-4">
                                                                                        <div class="col">
                                                                                            <div class="cuadro-sucursales py-4">
                                                                                                <img src="https://res.cloudinary.com/dhigl3clg/image/upload/v1676310974/amtiEcommerce/icono-ubicacion-fondo_lj1npd.png" alt="2" class="img-fluid icono-suc"/>
                                                                                                <div class="mx-5">
                                                                                                    <h1 class="txt-color-tit titulos bold">Sucursal</h1>
                                                                                                    <h1 class="txt-azul-oscuro titulos bold">Monterrey</h1>
                                                                                                    <div class="my-4 parrafos txt-color-parrafo">
                                                                                                        <div class="mb-4">
                                                                                                            <a href="https://goo.gl/maps/4PbNimg6pkhDrRgq9" class="a_none_style txt-color-parrafo" target="_blank">
                                                                                                                <img src="https://res.cloudinary.com/dhigl3clg/image/upload/v1676310974/amtiEcommerce/icono-ubi-azul_zotx3g.png" alt="" class="img-fluid icon-suc float-start mb-3"/>
                                                                                                                <h6 class="regular top-menu txt-color-parrafo">Av. Dr. Jos?? Eleuterio Gonz??lez 250, Planta  </h6>
                                                                                                                <h6 class="regular top-menu txt-color-parrafo">Alta , San Jer??nimo, 64634 Monterrey, N.L.</h6>
                                                                                                            </a>
                                                                                                           
                                                                                                        </div>
                                                                                                        <div class="">
                                                                                                            <a href="tel:+528132532915" class="a_none_style txt-color-parrafo" target="_blank">
                                                                                                                <img src="https://res.cloudinary.com/dhigl3clg/image/upload/v1676310973/amtiEcommerce/icono-tel-azul_gk6ccf.png" alt="" class="img-fluid icon-suc float-start"/>
                                                                                                                <h6 class="semiBold top-menu txt-color-parrafo">81 3253 2915</h6>
                                                                                                            </a>
                                                                                                            
                                                                                                        </div>
                                                                                                        <div class="">
                                                                                                            <a href="https://api.whatsapp.com/send?phone=525540324042" class="a_none_style txt-color-parrafo" target="_blank">
                                                                                                                <img src="https://res.cloudinary.com/dhigl3clg/image/upload/v1676310975/amtiEcommerce/icono-whats-azul_yyetea.png" alt="" class="img-fluid icon-suc float-start"/>
                                                                                                                <h6 class="semiBold top-menu txt-color-parrafo">55 4032 4042</h6>
                                                                                                            </a>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col d-flex justify-content-center pt-2">
                                                                                            <div class="form-check">
                                                                                                <input class="form-check-input checks_sucursal" onclick="reset_checbox(this, 'checks_sucursal')" type="checkbox" name="sucursalEntrega" id="monterrey" value="Monterrey" required>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-12 col-sm-12 col-md-12 col-lg-4 mb-4">
                                                                                        <div class="col">
                                                                                            <div class="cuadro-sucursales py-4">
                                                                                                <img src="https://res.cloudinary.com/dhigl3clg/image/upload/v1676310974/amtiEcommerce/icono-ubicacion-fondo_lj1npd.png" alt="2" class="img-fluid icono-suc"/>
                                                                                                <div class="mx-5">
                                                                                                    <h1 class="txt-color-tit titulos bold">Sucursal</h1>
                                                                                                    <h1 class="txt-azul-oscuro titulos bold">Ciudad de M??xico</h1>
                                                                                                    <div class="my-4 parrafos txt-color-parrafo">
                                                                                                        <div class="mb-4">
                                                                                                            <a href="https://goo.gl/maps/md8kcMi73iA7ALxZ6" class="a_none_style txt-color-parrafo" target="_blank">
                                                                                                                <img src="https://res.cloudinary.com/dhigl3clg/image/upload/v1676310974/amtiEcommerce/icono-ubi-azul_zotx3g.png" alt="" class="img-fluid icon-suc float-start mb-3"/>
                                                                                                                <h6 class="regular top-menu txt-color-parrafo">Av. Presidente Masaryk #61, Piso 9 Col. </h6>
                                                                                                                <h6 class="regular top-menu txt-color-parrafo">Polanco V secc, CP 11560, CDMX.</h6>
                                                                                                            </a>
                                                                                                           
                                                                                                        </div>
                                                                                                        <div class="">
                                                                                                            <a href="https://api.whatsapp.com/send?phone=525540324042" class="a_none_style txt-color-parrafo" target="_blank">
                                                                                                                <img src="https://res.cloudinary.com/dhigl3clg/image/upload/v1676310973/amtiEcommerce/icono-tel-azul_gk6ccf.png" alt="" class="img-fluid icon-suc float-start"/>
                                                                                                                <h6 class="semiBold top-menu txt-color-parrafo">55 4032 4042</h6>
                                                                                                            </a>
                                                                                                            
                                                                                                        </div>
                                                                                                        <div class="">
                                                                                                            <a href="tel:+525536891390" class="a_none_style txt-color-parrafo" target="_blank">
                                                                                                                <img src="https://res.cloudinary.com/dhigl3clg/image/upload/v1676310975/amtiEcommerce/icono-whats-azul_yyetea.png" alt="" class="img-fluid icon-suc float-start"/>
                                                                                                                <h6 class="semiBold top-menu txt-color-parrafo">55 3689 1390</h6>
                                                                                                            </a>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col d-flex justify-content-center pt-2">
                                                                                            <div class="form-check">
                                                                                                <input class="form-check-input checks_sucursal" onclick="reset_checbox(this, 'checks_sucursal')" type="checkbox" name="sucursalEntrega" id="mexico" value="Ciudad de M??xico" required>
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
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-3"></div>
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                                <div class="mx-2">
                                                    <div class="accordion" id="accordionPanelsStayOpenExample">
                                                        <div class="accordion-item">
                                                            <div class="form-check">
                                                                <input class="form-check-input chkAll" type="checkbox" value="" id="chkFactura" name="chkFactura" data-bs-target="#panelsStayOpen-collapseTwo" data-bs-toggle="collapse" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                                                <label class="form-check-label pb-2" for="chkFactura" id="btnFactura" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                                                    Requiero factura
                                                                </label>
                                                                <input type="hidden" id="factura" name="factura" value="No">
                                                            </div>
                                                            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
                                                                <div class="accordion-body ms-3">
                                                                    <div class="row">
                                                                        <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                                                            <div class="mb-4">
                                                                                <label for="razonSocial" class="form-label">Nombre o Raz??n Social</label>
                                                                                <input type="text" class="form-control text" id="razonSocial" name="razonSocial" aria-describedby="" required >
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                                                            <div class="mb-4">
                                                                                <label for="rfc" class="form-label">RFC*</label>
                                                                                <input type="text" class="form-control" id="rfc" name="rfc" aria-describedby="" required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                                                            <div class="mb-4">
                                                                                <label for="calleFactura" class="form-label">Calle*</label>
                                                                                <input type="text" class="form-control" id="calleFactura" name="calleFactura" aria-describedby="" required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                                                            <div class="mb-4">
                                                                                <label for="coloniaFactua" class="form-label">Colonia*</label>
                                                                                <input type="text" class="form-control" id="coloniaFactua" name="coloniaFactura" aria-describedby="" required >
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                                                            <div class="mb-4">
                                                                                <label for="numExteriorFactura" class="form-label">N??mero exterior*</label>
                                                                                <input type="text" class="form-control number" id="numExteriorFactura" name="numExteriorFactura" aria-describedby="" required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                                                            <div class="mb-4">
                                                                                <label for="numInteriorFactura" class="form-label">N??mero interior</label>
                                                                                <input type="text" class="form-control number" id="numInteriorFactura" name="numInteriorFactura" aria-describedby="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                                                            <div class="mb-4">
                                                                                <label for="cpFactutra" class="form-label">C??digo Postal*</label>
                                                                                <input type="text" class="form-control number" id="cpFactutra" name="cpFactutra" aria-describedby="" maxlength="5" required >
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                                                            <div class="mb-4">
                                                                                <label for="ciudadFactura" class="form-label">Ciudad*</label>
                                                                                <input type="text" class="form-control text" id="ciudadFactura" name="ciudadFactura" aria-describedby="" required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                                                            <div class="mb-4">
                                                                                <label for="estadoFactura" class="form-label">Estado*</label>
                                                                                <input type="text" class="form-control text" id="estadoFactura" name="estadoFactura" aria-describedby="" required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                                                            <div class="mb-4">
                                                                                <label for="paisFactura" class="form-label">Pa??s*</label>
                                                                                <input type="text" class="form-control text" id="paisFactura" name="paisFactura" aria-describedby="" required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                                                            <div class="mb-4">
                                                                                <label for="emailFactura" class="form-label">Correo electr??nico*</label>
                                                                                <input type="email" class="form-control" id="emailFactura" name="emailFactura" aria-describedby="" required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                                                            <div class="mb-4">
                                                                                <label for="telefonoFactura" class="form-label">Tel??fono*</label>
                                                                                <input type="text" class="form-control number" id="telefonoFactura" maxlength="10" name="telefonoFactura" aria-describedby="" required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                                                            <div class="mb-4">
                                                                                <label for="exampleInputEmail1" class="form-label">Uso del CFDI*</label>
                                                                                <select required class="form-select f-italic bg-obscuro txt-blanco t-s"
                                                                                aria-label="Default select example" name="cfdi" id="cfdi">
                                                                                <option value="">Selecciona una opci??n</option>
                                                                                <option value="G01">Adquisici??n de mercanc??as.</option>
                                                                                <option value="G02">Devoluciones, descuentos o bonificaciones.</option>
                                                                                <option value="G03">Gastos en general.</option>
                                                                                <option value="I01">Construcciones.</option>
                                                                                <option value="I02">Mobiliario y equipo de oficina por inversiones.</option>
                                                                                <option value="I03">Equipo de transporte.</option>
                                                                                <option value="I04">Equipo de computo y accesorios.</option>
                                                                                <option value="I05">Dados, troqueles, moldes, matrices y herramental.</option>
                                                                                <option value="I06">Comunicaciones telef??nicas.</option>
                                                                                <option value="I07">Comunicaciones satelitales.</option>
                                                                                <option value="I08">Otra maquinaria y equipo.</option>
                                                                                <option value="D01">Honorarios m??dicos, dentales y gastos hospitalarios.
                                                                                </option>
                                                                                <option value="D02">Gastos m??dicos por incapacidad o discapacidad.</option>
                                                                                <option value="D03">Gastos funerales.</option>
                                                                                <option value="D04">Donativos.</option>
                                                                                <option value="D05">Intereses reales efectivamente pagados por cr??ditos
                                                                                    hipotecarios (casa habitaci??n).</option>
                                                                                <option value="D06">Aportaciones voluntarias al SAR.</option>
                                                                                <option value="D07">Primas por seguros de gastos m??dicos.</option>
                                                                                <option value="D08">Gastos de transportaci??n escolar obligatoria.</option>
                                                                                <option value="D09">Dep??sitos en cuentas para el ahorro, primas que tengan como
                                                                                    base planes de pensiones.</option>
                                                                                <option value="D10">Pagos por servicios educativos (colegiaturas).</option>
                                                                                <option value="S01">Sin efectos fiscales.</option>
                                                                                <option value="CP01">Pagos.</option>
                                                                                <option value="CN01">N??mina.</option>
                                                                            </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                                                            <div class="mb-4">
                                                                                <label for="exampleInputEmail1" class="form-label">Regimen Fiscal*</label>
                                                                                <select required class="form-select f-italic bg-obscuro txt-blanco t-s"
                                                                                aria-label="Default select example" name="regimen_fiscal" id="regimen_fiscal">
                                                                                <option value="">Selecciona una opci??n</option>
                                                                                <option value="601">General de Ley Personas Morales</option>
                                                                                <option value="603">Personas Morales con Fines no Lucrativos</option>
                                                                                <option value="605">Sueldos y Salarios e Ingresos Asimilados a Salarios</option>
                                                                                <option value="606">Arrendamiento</option>
                                                                                <option value="607">R??gimen de Enajenaci??n o Adquisici??n de Bienes</option>
                                                                                <option value="608">Dem??s ingresos</option>
                                                                                <option value="610">Residentes en el Extranjero sin Establecimiento Permanente
                                                                                    en M??xico</option>
                                                                                <option value="611">Ingresos por Dividendos (socios y accionistas)</option>
                                                                                <option value="612">Personas F??sicas con Actividades Empresariales y
                                                                                    Profesionales</option>
                                                                                <option value="614">Ingresos por intereses</option>
                                                                                <option value="615">R??gimen de los ingresos por obtenci??n de premios</option>
                                                                                <option value="616">Sin obligaciones fiscales</option>
                                                                                <option value="620">Sociedades Cooperativas de Producci??n que optan por diferir
                                                                                    sus ingresos</option>
                                                                                <option value="621">Incorporaci??n Fiscal</option>
                                                                                <option value="622">Actividades Agr??colas, Ganaderas, Silv??colas y Pesqueras
                                                                                </option>
                                                                                <option value="623">Opcional para Grupos de Sociedades</option>
                                                                                <option value="624">Coordinados</option>
                                                                                <option value="625">R??gimen de las Actividades Empresariales con ingresos a
                                                                                    trav??s de Plataformas Tecnol??gicas</option>
                                                                                <option value="626">R??gimen Simplificado de Confianza</option>
                                                                            </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                                                            <div class="mb-4">
                                                                                <label class="txt-obscuro f-semibold" for="constancia">Sube tu constancia fiscal*</label>
                                                                                <input required type="file" id="constancia_fiscal" name="constancia_fiscal" class="form-control addimg mb-2"  accept="application/pdf"/>
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
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-12 col-sm-12 col-md-12 col-lg-2"></div>
                                                <div class="col-12 col-sm-12 col-md-12 col-lg-8">
                                                    <div class="row">
                                                        <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                                                            <ul class="list-inline pull-right">
                                                                <li><button type="button" class="default-btn prev-step regular"><i class="fa-solid fa-arrow-left"></i> Anterior</button></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-12 col-sm-12 col-md-12 col-lg-4"></div>
                                                        <div class="col-12 col-sm-12 col-md-12 col-lg-3">
                                                            <ul class="list-inline pull-right">
                                                                <li><a type="button" onclick="agregarPedido()" class="default-btn next-step a_none_style text-white">Siguiente <i class="fa-solid fa-arrow-right"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-12 col-lg-2"></div>
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </form>     
                        </div>
                    </div><!-- row -->
                </div><!-- col-md-12 -->
            </div> <!-- row -->
        </div><!--container-->
    </section>

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
                    <img src="https://res.cloudinary.com/dra1bsh4u/image/upload/v1673275234/Jeanswest/footer/icono-maestro_wbtgcr.png" alt="Maestro" class="img-fluid icono-pagos"/>
                    <img src="https://res.cloudinary.com/dhigl3clg/image/upload/v1676313844/amtiEcommerce/icono-america_jtnih0.png" alt="American Express" class="img-fluid icono-pagos"/>
                    <img src="https://res.cloudinary.com/dhigl3clg/image/upload/v1676313866/amtiEcommerce/icono-oxxo_ajvd37.png" alt="Oxxo" class="img-fluid icono-pagos"/>
                </div>
                
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                <h6 class="txt-color-parrafo regular parrafos">?? 2023 AMTI, Todos los derechos reservados</h6>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                <h6 class="txt-color-parrafo regular parrafos"><a href="{{ route('terminos') }}" class="a_none_style txt-color-parrafo regular parrafos">T??rminos y condiciones </a> ??? <a href="{{ route('aviso') }}" class="a_none_style txt-color-parrafo regular parrafos">Aviso de privacidad</a> </h6>
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