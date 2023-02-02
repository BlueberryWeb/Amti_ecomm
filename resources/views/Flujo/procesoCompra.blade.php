<!DOCTYPE html>
<html lang="en">
<head>
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
                        <img src="https://res.cloudinary.com/dra1bsh4u/image/upload/v1674070253/AMTI%20Ecommerce/logo-amti-gde_tasxta.png" alt="AMTI" class="img-fluid logo-menu"/>
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
    
    <section class="signup-step-container">
        <div class="container-fluid p-0">
            <!--- TUTORIALES -->
            <div class="row">
                <div class="videoTutorial">
                    <div class="etiquetaVerde py-2">
                        <h3 class="regular parrafos pt-1" data-bs-toggle="modal" data-bs-target="#Tutoriales">Video tutoriales <img src="https://res.cloudinary.com/dra1bsh4u/image/upload/v1674234032/AMTI%20Ecommerce/icono-video_dcfyd4.png" alt="Icono video" class="img-fluid"/></h3>
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
                                        <ul class="nav nav-tabs" role="tablist">
                                            <li role="presentation" class="active">
                                                <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" aria-expanded="true"><span class="round-tab"><h6 class="pt-2">1</h6> </span> <i> Datos iniciales</i></a>
                                            </li>
                                            <li role="presentation" class="disabled">
                                                <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" aria-expanded="false"><span class="round-tab"><h6 class="pt-2">2</h6></span> <i> Vigencia</i></a>
                                            </li>
                                            <li role="presentation" class="disabled">
                                                <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab"><span class="round-tab"><h6 class="pt-2">3</h6></span> <i>Documentos</i></a>
                                            </li>
                                            <li role="presentation" class="disabled">
                                                <a href="#step4" data-toggle="tab" aria-controls="step4" role="tab"><span class="round-tab"><h6 class="pt-2">4</h6></span> <i>Firma </i></a>
                                            </li>
                                            <li role="presentation" class="disabled">
                                                <a href="#step5" data-toggle="tab" aria-controls="step5" role="tab"><span class="round-tab"><h6 class="pt-2">5</h6></span> <i> Información</i></a>
                                            </li>
                                            <li role="presentation" class="disabled">
                                                <a href="#step6" data-toggle="tab" aria-controls="step6" role="tab"><span class="round-tab"><h6 class="pt-2">6</h6> </span> <i>Confirmar </i></a>
                                            </li>
                                            <li role="presentation" class="disabled">
                                                <a href="#step7" data-toggle="tab" aria-controls="step7" role="tab"><span class="round-tab"><h6 class="pt-2">7</h6></span> <i>Envío </i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="wizard">
                            <form role="form" action="index.html" class="login-box">
                                <div class="tab-content" id="main_form">
                                    <!-- NOMBRE Y TELÉFONO -->
                                    <div class="tab-pane active" role="tabpanel" id="step1">
                                        <div class="d-block d-sm-block d-md-none">
                                            <div class="text-center pt-5">
                                                <div class="num-paso mb-3">
                                                    <h6 class="bold titulos pt-2">1</h6>
                                                </div>
                                                <h6 class="regular parrafos">1/7</h6>
                                            </div>
                                        </div>
                                        <h4 class="text-center mt-5 bold h5">Bienvenido al trámite de tu licencia internacional</h4>
                                        <h4 class="text-center mb-5 regular h6">Te guiaremos paso a paso para tramitar correctamente tu licencia internacional</h4>
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-3"></div>
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                                <div class="mx-5">
                                                    <div class="form-bienvenida py-5">
                                                        <div class="mx-5">
                                                            <div class="text-center pb-4">
                                                                <img src="https://res.cloudinary.com/dra1bsh4u/image/upload/v1674082739/AMTI%20Ecommerce/logo-azul-gde_uhagup.png" alt="AMTI" class="img-fluid logo-menu"/>
                                                            </div>
                                                            <div class="">
                                                                <h5 class="semiBold parrafos txt-color-parrafo mb-3">Introduce a continuación los datos requeridos:</h5>
                                                                <div class="mb-3">
                                                                    <label for="exampleInputEmail1" class="form-label">Nombre completo del solicitante*</label>
                                                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                                                </div>
                                                                <div class="">
                                                                    <label for="exampleInputEmail1" class="form-label">Teléfono*</label>
                                                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
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
                                                        <li><button type="button" class="default-btn next-step">Siguiente <i class="fa-solid fa-arrow-right"></i></button></li>
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
                                                                                <h3 class="semiBold h5">3 años</h3>
                                                                            </div>
                                                                            <div class="text-center pt-4 pb-2">
                                                                                <img src="https://res.cloudinary.com/dra1bsh4u/image/upload/v1674237481/AMTI%20Ecommerce/licenciaAMTI_heavk9.png" alt="Ilustración de licencia y libro AMTI" class="img-fluid licencia-proceso"/>
                                                                            </div>
                                                                            <div class="mx-4">
                                                                                <hr/>
                                                                                <div class="row ">
                                                                                    <div class="col-12 col-sm-12 col-md-12 col-lg-10">
                                                                                        <div class="">
                                                                                            <p class="regular txt-color-parrafo parrafos">Vigencia: 3 años</p>
                                                                                            <p class="semibold txt-color-tit titulos">$2,700 MXN.</p>
                                                                                        </div>
                                                                                        <div class="form-check btn-seleccionar py-2">
                                                                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                                            <label class="form-check-label" for="flexCheckDefault">
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
                                                                                <h3 class="semiBold h5">5 años</h3>
                                                                            </div>
                                                                            <div class="text-center pt-4 pb-2">
                                                                                <img src="https://res.cloudinary.com/dra1bsh4u/image/upload/v1674237481/AMTI%20Ecommerce/licenciaAMTI_heavk9.png" alt="Ilustración de licencia y libro AMTI" class="img-fluid licencia-proceso"/>
                                                                               <div class="etiqueta-recom py-1">
                                                                                    <h6 class="regular top-menu pt-1">
                                                                                        <img src="https://res.cloudinary.com/dra1bsh4u/image/upload/v1674166879/AMTI%20Ecommerce/icono-recomendada_mvl3og.png" alt="" class="img-fluid"/>
                                                                                        Recomendada
                                                                                    </h6>
                                                                               </div>
                                                                            </div>
                                                                            <div class="mx-4">
                                                                                <hr/>
                                                                                <div class="row my-4">
                                                                                    <div class="col-12 col-sm-12 col-md-12 col-lg-10">
                                                                                        <div class="">
                                                                                            <p class="regular txt-color-parrafo parrafos">Vigencia: 5 años</p>
                                                                                            <div class="row">
                                                                                                <div class="col-12 col-sm-12 col-md-12 col-lg-5">
                                                                                                    <p class="regular parrafos tachado">$4,900 MXN</p>
                                                                                                </div>
                                                                                                <div class="col-12 col-sm-12 col-md-12 col-lg-7">
                                                                                                    <p class="semibold txt-color-tit titulos">$3,700 MXN.</p>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="form-check btn-seleccionar py-2">
                                                                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                                            <label class="form-check-label" for="flexCheckDefault">
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
                                                                    <div class="mx-3">
                                                                        <div class="cuadro-compra pb-2">
                                                                            <div class="header-cuadro py-2">
                                                                                <h3 class="semiBold h5">1 años</h3>
                                                                            </div>
                                                                            <div class="text-center pt-4 pb-2">
                                                                                <img src="https://res.cloudinary.com/dra1bsh4u/image/upload/v1674237481/AMTI%20Ecommerce/licenciaAMTI_heavk9.png" alt="Ilustración de licencia y libro AMTI" class="img-fluid licencia-proceso"/>
                                                                            </div>
                                                                            <div class="mx-4">
                                                                                <hr/>
                                                                                <div class="row">
                                                                                    <div class="col-12 col-sm-12 col-md-12 col-lg-10">
                                                                                        <div class="">
                                                                                            <p class="regular txt-color-parrafo parrafos">Vigencia: 1 año</p>
                                                                                            <p class="semibold txt-color-tit titulos">$1,450 MXN..</p>
                                                                                        </div>
                                                                                        <div class="form-check btn-seleccionar py-2">
                                                                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                                            <label class="form-check-label" for="flexCheckDefault">
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
                                                                    <img src="https://res.cloudinary.com/dra1bsh4u/image/upload/v1674243009/AMTI%20Ecommerce/identificacion-of_gx8kkt.png" alt="Ilustración de identificacion oficial" class="img-fluid"/>
                                                                </div>
                                                                <div class="col-12 col-sm-12 col-md-12 col-lg-9">
                                                                    <h1 class="txt-azul-oscuro h5 bold mb-2">Identificación oficial</h1>
                                                                    <div class="d-none d-sm-none d-md-block">
                                                                        <p class="regular top-menu txt-color-parrafo">Carga fotografías de tu identificación</p>
                                                                        <p class="regular top-menu txt-color-parrafo">oficial, INE, pasaporte o Cédula</p>
                                                                        <p class="regular top-menu txt-color-parrafo">  profesional</p>
                                                                    </div>
                                                                    <div class="d-block d-sm-block d-md-none">
                                                                        <p class="regular top-menu txt-color-parrafo">Carga fotografías de tu identificación 
                                                                            oficial, INE, pasaporte o Cédula
                                                                              profesional</p>
                                                                    </div>
                                                                    
                                                                    <div class="my-3 text-end">
                                                                        <button class="btn btn-primary btn-ejemplo" data-bs-toggle="modal" data-bs-target="#Identificacion">Ver ejemplo</button>
                                                                    </div>
                                                                </div>
                                                                <hr/>
                                                            </div>
                                                            
                                                            <div class=" parrafos txt-color-parrafo">
                                                                <div class="mb-3">
                                                                    <label for="formFileSm" class="form-label">Frente*</label>
                                                                    <input class="form-control form-control-sm" id="formFileSm" type="file">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="formFileSm" class="form-label">Vuelta*</label>
                                                                    <input class="form-control form-control-sm" id="formFileSm" type="file">
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
                                                                    <img src="https://res.cloudinary.com/dra1bsh4u/image/upload/v1674243009/AMTI%20Ecommerce/licencia-cond_f6ib3d.png" alt="Ilustración de licencia de conducir" class="img-fluid"/>
                                                                </div>
                                                                <div class="col-12 col-sm-12 col-md-12 col-lg-9">
                                                                    <h1 class="txt-azul-oscuro h5 bold mb-2">Licencia de conducir</h1>
                                                                    <div class="d-none d-sm-none d-md-block">
                                                                        <p class="regular top-menu txt-color-parrafo">Tu licencia de conducir deberá estar</p>
                                                                        <p class="regular top-menu txt-color-parrafo">vigente, y muy bien iluminada</p>
                                                                    </div>
                                                                    <div class="d-block d-sm-block d-md-none">
                                                                        <p class="regular top-menu txt-color-parrafo">Tu licencia de conducir deberá estar 
                                                                            vigente, y muy bien iluminada</p>
                                                                    </div>
                                                                    
                                                                    <div class="mt-3 mb-4 pb-3 text-end">
                                                                        <button class="btn btn-primary btn-ejemplo" data-bs-toggle="modal" data-bs-target="#Licencia">Ver ejemplo</button>
                                                                    </div>
                                                                </div>
                                                                <hr/>
                                                            </div>
                                                            
                                                            <div class=" parrafos txt-color-parrafo">
                                                                <div class="mb-3">
                                                                    <label for="formFileSm" class="form-label">Frente*</label>
                                                                    <input class="form-control form-control-sm" id="formFileSm" type="file">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="formFileSm" class="form-label">Vuelta*</label>
                                                                    <input class="form-control form-control-sm" id="formFileSm" type="file">
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
                                                                    <img src="https://res.cloudinary.com/dra1bsh4u/image/upload/v1674243009/AMTI%20Ecommerce/foto-per_eys0mr.png" alt="Ilustración de fotografía personal" class="img-fluid"/>
                                                                </div>
                                                                <div class="col-12 col-sm-12 col-md-12 col-lg-9">
                                                                    <h1 class="txt-azul-oscuro h5 bold mb-2">Fotografía personal</h1>
                                                                    <div class="d-none d-sm-none d-md-block">
                                                                        <p class="regular top-menu txt-color-parrafo">Tómate una fotografía en fondo </p>
                                                                        <p class="regular top-menu txt-color-parrafo">blanco y con muy buena iluminación</p>
                                                                    </div>
                                                                    <div class="d-block d-sm-block d-md-none">
                                                                        <p class="regular top-menu txt-color-parrafo">Tómate una fotografía en fondo 
                                                                            blanco y con muy buena iluminación</p>
                                                                    </div>
                                                                    
                                                                    <div class="mt-3 mb-4 pb-3  text-end">
                                                                        <button class="btn btn-primary btn-ejemplo" data-bs-toggle="modal" data-bs-target="#Fotografia">Ver ejemplo</button>
                                                                    </div>
                                                                </div>
                                                                <hr/>
                                                            </div>
                                                            
                                                            <div class=" parrafos txt-color-parrafo">
                                                                <div class="mb-3">
                                                                    <label for="formFileSm" class="form-label">Frente*</label>
                                                                    <input class="form-control form-control-sm" id="formFileSm" type="file">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="formFileSm" class="form-label">Vuelta*</label>
                                                                    <input class="form-control form-control-sm" id="formFileSm" type="file">
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
                                                                    <img src="https://res.cloudinary.com/dra1bsh4u/image/upload/v1674252270/AMTI%20Ecommerce/icono-firma_nib6gz.png" alt="Ilustración de firma" class="img-fluid"/>
                                                                </div>
                                                                <div class="col-12 col-sm-12 col-md-12 col-lg-9">
                                                                    <h1 class="txt-azul-oscuro h5 bold mb-2">Tu firma</h1>
                                                                    <div class="d-none d-sm-none d-md-block">
                                                                        <p class="regular top-menu txt-color-parrafo">Adjunta una fotografía de tu firma, ya sea de tu </p>
                                                                        <p class="regular top-menu txt-color-parrafo mb-4">identificación oficial o en una hoja en blanco. </p>
                                                                        <p class="regular top-menu txt-color-parrafo"> <i>Esta firma es la que se utilizará en tu licencia </i></p>
                                                                        <p class="regular top-menu txt-color-parrafo"> <i>internacional. </i></p>
                                                                    </div>
                                                                    <div class="d-block d-sm-block d-md-none">
                                                                        <p class="regular top-menu txt-color-parrafo">Adjunta una fotografía de tu firma, ya sea de tu 
                                                                            identificación oficial o en una hoja en blanco. </p>
                                                                        <p class="regular top-menu txt-color-parrafo"> <i>Esta firma es la que se utilizará en tu licencia </i>
                                                                             <i>internacional. </i></p>
                                                                    </div>
                                                                    
                                                                    <div class="my-3 text-end">
                                                                        <button class="btn btn-primary btn-ejemplo" data-bs-toggle="modal" data-bs-target="#Firma">Ver ejemplo</button>
                                                                    </div>
                                                                    @include('Flujo.components.modalFirma')
                                                                    <hr/>
                                                                    <div class="mb-3">
                                                                        <label for="formFileSm" class="form-label">Tu firma*</label>
                                                                        <input class="form-control form-control-sm" id="formFileSm" type="file">
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
                                    <!-- INFORMACIÓN COMPLEMENTARIA -->
                                    <div class="tab-pane" role="tabpanel" id="step5">
                                        <div class="d-block d-sm-block d-md-none">
                                            <div class="text-center pt-5">
                                                <div class="num-paso mb-3">
                                                    <h6 class="bold titulos pt-2">5</h6>
                                                </div>
                                                <h6 class="regular parrafos">5/7</h6>
                                            </div>
                                        </div>
                                        <h4 class="text-center my-5 bold h5">Completa la siguiente información</h4>
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-3"></div>
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                                <div class="mx-2">
                                                    <div class="form-info-compl py-5">
                                                        <div class="mx-5">
                                                            <div class="row py-4 txt-firma">
                                                                <h4 class="bold txt-color-tit mb-3 h5 ">Rasgos físicos:</h4>
                                                                <div class="row">
                                                                    <div class="col-12 col-md-12 col-sm-12 col-lg-6 mb-4">
                                                                        <label for="exampleInputEmail1" class="form-label">País de nacimiento*</label>
                                                                        <select class="form-select " aria-label=".form-select-lg example">
                                                                            <option selected>País</option>
                                                                            <option value="Afganistán">Afganistán</option>
                                                                            <option value="Albania">Albania</option>
                                                                            <option value="Alemania">Alemania</option>
                                                                            <option value="Andorra">Andorra</option>
                                                                            <option value="Angola">Angola</option>
                                                                            <option value="Anguilla">Anguilla</option>
                                                                            <option value="Antártida">Antártida</option>
                                                                            <option value="Antigua y Barbuda">Antigua y Barbuda</option>
                                                                            <option value="Antillas Holandesas">Antillas Holandesas</option>
                                                                            <option value="Arabia Saudí">Arabia Saudí</option>
                                                                            <option value="Argelia">Argelia</option>
                                                                            <option value="Argentina">Argentina</option>
                                                                            <option value="Armenia">Armenia</option>
                                                                            <option value="Aruba">Aruba</option>
                                                                            <option value="Australia">Australia</option>
                                                                            <option value="Austria">Austria</option>
                                                                            <option value="Azerbaiyán">Azerbaiyán</option>
                                                                            <option value="Bahamas">Bahamas</option>
                                                                            <option value="Bahrein">Bahrein</option>
                                                                            <option value="Bangladesh">Bangladesh</option>
                                                                            <option value="Barbados">Barbados</option>
                                                                            <option value="Bélgica">Bélgica</option>
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
                                                                            <option value="Bután">Bután</option>
                                                                            <option value="Cabo Verde">Cabo Verde</option>
                                                                            <option value="Camboya">Camboya</option>
                                                                            <option value="Camerún">Camerún</option>
                                                                            <option value="Canadá">Canadá</option>
                                                                            <option value="Chad">Chad</option>
                                                                            <option value="Chile">Chile</option>
                                                                            <option value="China">China</option>
                                                                            <option value="Chipre">Chipre</option>
                                                                            <option value="Ciudad del Vaticano">Ciudad del Vaticano (Santa Sede)</option>
                                                                            <option value="Colombia">Colombia</option>
                                                                            <option value="Comores">Comores</option>
                                                                            <option value="Congo">Congo</option>
                                                                            <option value="Congo, Republica">Congo, República Democrática del</option>
                                                                            <option value="Corea del Sur">Corea</option>
                                                                            <option value="Corea del Norte">Corea del Norte</option>
                                                                            <option value="Costa de Marfíl">Costa de Marfíl</option>
                                                                            <option value="Costa Rica">Costa Rica</option>
                                                                            <option value="Croacia">Croacia (Hrvatska)</option>
                                                                            <option value="Cuba">Cuba</option>
                                                                            <option value="Dinamarca">Dinamarca</option>
                                                                            <option value="Djibouti">Djibouti</option>
                                                                            <option value="Dominica">Dominica</option>
                                                                            <option value="Ecuador">Ecuador</option>
                                                                            <option value="Egipto">Egipto</option>
                                                                            <option value="El Salvador">El Salvador</option>
                                                                            <option value="Emiratos Árabes Unidos">Emiratos Árabes Unidos</option>
                                                                            <option value="Eritrea">Eritrea</option>
                                                                            <option value="Eslovenia">Eslovenia</option>
                                                                            <option value="España">España</option>
                                                                            <option value="USA">Estados Unidos</option>
                                                                            <option value="Estonia">Estonia</option>
                                                                            <option value="Etiopía">Etiopía</option>
                                                                            <option value="Fiji">Fiji</option>
                                                                            <option value="Filipinas">Filipinas</option>
                                                                            <option value="Finlandia">Finlandia</option>
                                                                            <option value="Francia">Francia</option>
                                                                            <option value="Gabón">Gabón</option>
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
                                                                            <option value="Haití">Haití</option>
                                                                            <option value="Honduras">Honduras</option>
                                                                            <option value="Hungría">Hungría</option>
                                                                            <option value="India">India</option>
                                                                            <option value="Indonesia">Indonesia</option>
                                                                            <option value="Irak">Irak</option>
                                                                            <option value="Irán">Irán</option>
                                                                            <option value="Irlanda">Irlanda</option>
                                                                            <option value="Isla Bouvet">Isla Bouvet</option>
                                                                            <option value="Isla de Christmas">Isla de Christmas</option>
                                                                            <option value="Islandia">Islandia</option>
                                                                            <option value="Islas Caimán">Islas Caimán</option>
                                                                            <option value="Islas Cook">Islas Cook</option>
                                                                            <option value="Islas de Cocos o Keeling">Islas de Cocos o Keeling</option>
                                                                            <option value="Islas Faroe">Islas Faroe</option>
                                                                            <option value="Islas Heard y McDonald">Islas Heard y McDonald</option>
                                                                            <option value="Islas Malvinas">Islas Malvinas</option>
                                                                            <option value="Islas Marianas del Norte">Islas Marianas del Norte</option>
                                                                            <option value="Islas Marshall">Islas Marshall</option>
                                                                            <option value="Islas menores de Estados Unidos">Islas menores de Estados Unidos</option>
                                                                            <option value="Islas Palau">Islas Palau</option>
                                                                            <option value="Islas Salomón">Islas Salomón</option>
                                                                            <option value="Islas Svalbard y Jan Mayen">Islas Svalbard y Jan Mayen</option>
                                                                            <option value="Islas Tokelau">Islas Tokelau</option>
                                                                            <option value="Islas Turks y Caicos">Islas Turks y Caicos</option>
                                                                            <option value="Islas Vírgenes (EEUU)">Islas Vírgenes (EEUU)</option>
                                                                            <option value="Islas Vírgenes (Reino Unido)">Islas Vírgenes (Reino Unido)</option>
                                                                            <option value="Islas Wallis y Futuna">Islas Wallis y Futuna</option>
                                                                            <option value="Israel">Israel</option>
                                                                            <option value="Italia">Italia</option>
                                                                            <option value="Jamaica">Jamaica</option>
                                                                            <option value="Japón">Japón</option>
                                                                            <option value="Jordania">Jordania</option>
                                                                            <option value="Kazajistán">Kazajistán</option>
                                                                            <option value="Kenia">Kenia</option>
                                                                            <option value="Kirguizistán">Kirguizistán</option>
                                                                            <option value="Kiribati">Kiribati</option>
                                                                            <option value="Kuwait">Kuwait</option>
                                                                            <option value="Laos">Laos</option>
                                                                            <option value="Lesotho">Lesotho</option>
                                                                            <option value="Letonia">Letonia</option>
                                                                            <option value="Líbano">Líbano</option>
                                                                            <option value="Liberia">Liberia</option>
                                                                            <option value="Libia">Libia</option>
                                                                            <option value="Liechtenstein">Liechtenstein</option>
                                                                            <option value="Lituania">Lituania</option>
                                                                            <option value="Luxemburgo">Luxemburgo</option>
                                                                            <option value="Macedonia">Macedonia, Ex-República Yugoslava de</option>
                                                                            <option value="Madagascar">Madagascar</option>
                                                                            <option value="Malasia">Malasia</option>
                                                                            <option value="Malawi">Malawi</option>
                                                                            <option value="Maldivas">Maldivas</option>
                                                                            <option value="Malí">Malí</option>
                                                                            <option value="Malta">Malta</option>
                                                                            <option value="Marruecos">Marruecos</option>
                                                                            <option value="Martinica">Martinica</option>
                                                                            <option value="Mauricio">Mauricio</option>
                                                                            <option value="Mauritania">Mauritania</option>
                                                                            <option value="Mayotte">Mayotte</option>
                                                                            <option value="México">México</option>
                                                                            <option value="Micronesia">Micronesia</option>
                                                                            <option value="Moldavia">Moldavia</option>
                                                                            <option value="Mónaco">Mónaco</option>
                                                                            <option value="Mongolia">Mongolia</option>
                                                                            <option value="Montserrat">Montserrat</option>
                                                                            <option value="Mozambique">Mozambique</option>
                                                                            <option value="Namibia">Namibia</option>
                                                                            <option value="Nauru">Nauru</option>
                                                                            <option value="Nepal">Nepal</option>
                                                                            <option value="Nicaragua">Nicaragua</option>
                                                                            <option value="Níger">Níger</option>
                                                                            <option value="Nigeria">Nigeria</option>
                                                                            <option value="Niue">Niue</option>
                                                                            <option value="Norfolk">Norfolk</option>
                                                                            <option value="Noruega">Noruega</option>
                                                                            <option value="Nueva Caledonia">Nueva Caledonia</option>
                                                                            <option value="Nueva Zelanda">Nueva Zelanda</option>
                                                                            <option value="Omán">Omán</option>
                                                                            <option value="Países Bajos">Países Bajos</option>
                                                                            <option value="Panamá">Panamá</option>
                                                                            <option value="Papúa Nueva Guinea">Papúa Nueva Guinea</option>
                                                                            <option value="Paquistán">Paquistán</option>
                                                                            <option value="Paraguay">Paraguay</option>
                                                                            <option value="Perú">Perú</option>
                                                                            <option value="Pitcairn">Pitcairn</option>
                                                                            <option value="Polinesia Francesa">Polinesia Francesa</option>
                                                                            <option value="Polonia">Polonia</option>
                                                                            <option value="Portugal">Portugal</option>
                                                                            <option value="Puerto Rico">Puerto Rico</option>
                                                                            <option value="Qatar">Qatar</option>
                                                                            <option value="Reino Unido">Reino Unido</option>
                                                                            <option value="República Centroafricana">República Centroafricana</option>
                                                                            <option value="República Checa">República Checa</option>
                                                                            <option value="República de Sudáfrica">República de Sudáfrica</option>
                                                                            <option value="República Dominicana">República Dominicana</option>
                                                                            <option value="República Eslovaca">República Eslovaca</option>
                                                                            <option value="Reunión">Reunión</option>
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
                                                                            <option value="Santa Lucía">Santa Lucía</option>
                                                                            <option value="Santo Tomé y Príncipe">Santo Tomé y Príncipe</option>
                                                                            <option value="Senegal">Senegal</option>
                                                                            <option value="Seychelles">Seychelles</option>
                                                                            <option value="Sierra Leona">Sierra Leona</option>
                                                                            <option value="Singapur">Singapur</option>
                                                                            <option value="Siria">Siria</option>
                                                                            <option value="Somalia">Somalia</option>
                                                                            <option value="Sri Lanka">Sri Lanka</option>
                                                                            <option value="St Pierre y Miquelon">St Pierre y Miquelon</option>
                                                                            <option value="Suazilandia">Suazilandia</option>
                                                                            <option value="Sudán">Sudán</option>
                                                                            <option value="Suecia">Suecia</option>
                                                                            <option value="Suiza">Suiza</option>
                                                                            <option value="Surinam">Surinam</option>
                                                                            <option value="Tailandia">Tailandia</option>
                                                                            <option value="Taiwán">Taiwán</option>
                                                                            <option value="Tanzania">Tanzania</option>
                                                                            <option value="Tayikistán">Tayikistán</option>
                                                                            <option value="Territorios franceses del Sur">Territorios franceses del Sur</option>
                                                                            <option value="Timor Oriental">Timor Oriental</option>
                                                                            <option value="Togo">Togo</option>
                                                                            <option value="Tonga">Tonga</option>
                                                                            <option value="Trinidad y Tobago">Trinidad y Tobago</option>
                                                                            <option value="Túnez">Túnez</option>
                                                                            <option value="Turkmenistán">Turkmenistán</option>
                                                                            <option value="Turquía">Turquía</option>
                                                                            <option value="Tuvalu">Tuvalu</option>
                                                                            <option value="Ucrania">Ucrania</option>
                                                                            <option value="Uganda">Uganda</option>
                                                                            <option value="Uruguay">Uruguay</option>
                                                                            <option value="Uzbekistán">Uzbekistán</option>
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
                                                                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required name="estatura">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 pt-4">
                                                                                <div class="pt-2">
                                                                                    <select class="form-select" aria-label="Default select example">
                                                                                        <option selected>Selecciona</option>
                                                                                        <option value="centimetros">Centímetros</option>
                                                                                        <option value="pulgadas">Pulgadas</option>
                                                                                    </select>
                                                                                </div>
                                                                                
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 col-md-12 col-sm-12 col-lg-6 mb-4">
                                                                        <label for="exampleInputEmail1" class="form-label">Sexo*</label>
                                                                        <select class="form-select " aria-label=".form-select-lg example">
                                                                            <option selected>Femenino</option>
                                                                            <option value="1">Masculino</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-12 col-md-12 col-sm-12 col-lg-6 mb-4">
                                                                        <label for="exampleInputEmail1" class="form-label">Color de cabello natural*</label>
                                                                        <select class="form-select" aria-label=".form-select-lg example">
                                                                            <option selected>México</option>
                                                                            <option value="1">One</option>
                                                                            <option value="2">Two</option>
                                                                            <option value="3">Three</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="row">
                                                                        
                                                                        <div class="col-12 col-sm-12 col-md-12 col-lg-3">
                                                                            <label for="exampleInputEmail1" class="form-label">Color de ojos*</label>
                                                                        </div>
                                                                        <div class="col-12 col-sm-12 col-md-12 col-lg-5">
                                                                            <div class="drop-image mb-4">
                                                                                <div class="option-image active placeholder" data-value="placeholder">
                                                                                    <img src="https://res.cloudinary.com/dra1bsh4u/image/upload/v1674496571/AMTI%20Ecommerce/ojo-cafe_vkklmb.png" alt="Ilustración de color de ojos" class="me-3"/>Selecciona un color de ojos
                                                                                </div>
                                                                                <div class="option-image" data-value="wow">
                                                                                    <img src="https://res.cloudinary.com/dra1bsh4u/image/upload/v1674496571/AMTI%20Ecommerce/ojo-ambar_d1yi7v.png" alt="Ilustración de color de ojos" class="me-3"/> Ambar
                                                                                </div>
                                                                                <div class="option-image" data-value="wow">
                                                                                    <img src="https://res.cloudinary.com/dra1bsh4u/image/upload/v1674496571/AMTI%20Ecommerce/ojo-castano_g8zhwc.png" alt="Ilustración de color de ojos" class="me-3"/> Castaño
                                                                                </div>
                                                                                <div class="option-image" data-value="drop-image">
                                                                                    <img src="https://res.cloudinary.com/dra1bsh4u/image/upload/v1674496571/AMTI%20Ecommerce/ojo-gris_ks0w5a.png" alt="Ilustración de color de ojos" class="me-3"/> Gris
                                                                                </div>
                                                                                <div class="option-image" data-value="select">
                                                                                    <img src="https://res.cloudinary.com/dra1bsh4u/image/upload/v1674496571/AMTI%20Ecommerce/ojo-avellana_b4mz4x.png" alt="Ilustración de color de ojos" class="me-3"/> Avellana
                                                                                </div>
                                                                                <div class="option-image" data-value="custom">
                                                                                    <img src="https://res.cloudinary.com/dra1bsh4u/image/upload/v1674496571/AMTI%20Ecommerce/ojo-verde_h0vwr7.png" alt="Ilustración de color de ojos" class="me-3"/> Verde
                                                                                </div>
                                                                                <div class="option-image" data-value="animation"> 
                                                                                    <img src="https://res.cloudinary.com/dra1bsh4u/image/upload/v1674496571/AMTI%20Ecommerce/ojo-azul_g1yxz6.png" alt="Ilustración de color de ojos" class="me-3"/> Azul
                                                                                </div>
                                                                              </div>
                                                                        </div>
                                                                        <div class="col-12 col-sm-12 col-md-12 col-lg-4"></div>
                                                                    </div>
                                                                    <hr/>
                                                                    <h4 class="bold txt-color-tit mb-3 h5 ">Dirección completa:</h4>
                                                                    <div class="row">
                                                                        <div class="col-12 col-sm-12 col-md-12 col-lg-6 mb-4">
                                                                            <div class="">
                                                                                <label for="exampleInputEmail1" class="form-label">Calle*</label>
                                                                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required name="calle">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 col-sm-12 col-md-12 col-lg-6 mb-4">
                                                                            <div class="">
                                                                                <label for="exampleInputEmail1" class="form-label">Colonia*</label>
                                                                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required name="colonia">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 col-sm-12 col-md-12 col-lg-6 mb-4">
                                                                            <div class="">
                                                                                <label for="exampleInputEmail1" class="form-label">Número exterior*</label>
                                                                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required name="NumExterior">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 col-sm-12 col-md-12 col-lg-6 mb-4">
                                                                            <div class="">
                                                                                <label for="exampleInputEmail1" class="form-label">Número interior</label>
                                                                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required name="numInterior">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 col-sm-12 col-md-12 col-lg-6 mb-4">
                                                                            <div class="">
                                                                                <label for="exampleInputEmail1" class="form-label">Ciudad*</label>
                                                                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required name="ciudad">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 col-sm-12 col-md-12 col-lg-6 mb-4">
                                                                            <div class="">
                                                                                <label for="exampleInputEmail1" class="form-label">Estado*</label>
                                                                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required name="estado">
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
                                                                <li><button type="button" class="default-btn next-step">Siguiente <i class="fa-solid fa-arrow-right"></i></button></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-12 col-lg-2"></div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <!-- CONFIRMACIÓN DE DATOS -->
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
                                                                        <img src="https://res.cloudinary.com/dra1bsh4u/image/upload/v1674245868/AMTI%20Ecommerce/foto-ejemp_pfcn3n.png" alt="Ilustración de firma" class="img-fluid"/>
                                                                    </div>
                                                                    <div class="">
                                                                        <img src="https://res.cloudinary.com/dra1bsh4u/image/upload/v1674253285/AMTI%20Ecommerce/ejemplo-firma_fnmd48.png" alt="Ilustración de firma" class="img-fluid"/>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 col-sm-12 col-md-12 col-lg-9">
                                                                    <div class="d-none d-sm-none d-md-block">
                                                                        <p class="txt-color-parrafo h6 regular mb-4"><b class="txt-azul-oscuro">FULL NAME:</b> "PRUEBAS"</p>
                                                                    </div>
                                                                    <div class="d-block d-sm-block d-md-none">
                                                                        <p class="regular h6 txt-color-parrafo"><b class="txt-azul-oscuro">FULL NAME:</b></p>
                                                                        <p class="regular h6 txt-color-parrafo mb-4">"ALDO MARTINEZ"</p>
                                                                    </div>
                                                                    <div class="d-none d-sm-none d-md-block">
                                                                        <p class="regular h6  txt-color-parrafo mb-4"><b class="txt-azul-oscuro">ADDRESS:</b> "AV. RÚBEN DARÍO #586"</p>
                                                                    </div>
                                                                    <div class="d-block d-sm-block d-md-none">
                                                                        <p class="regular h6 txt-color-parrafo"><b class="txt-azul-oscuro">ADDRESS:</b></p>
                                                                        <p class="regular h6 txt-color-parrafo mb-4">"AV. RÚBEN DARÍO #586"</p>
                                                                    </div>
                                                                    <p class="regular h6 txt-color-parrafo"><b class="txt-azul-oscuro">PLACE OF BIRTH:</b></p>
                                                                    <p class="regular h6 txt-color-parrafo mb-4">"MÉXICO"</p>
                                                                    <div class="row">
                                                                        <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4">
                                                                            <p class="regular h6 txt-color-parrafo"><b class="txt-azul-oscuro">SEX:</b></p>
                                                                            <p class="regular h6 txt-color-parrafo">"M"</p>
                                                                        </div>
                                                                        <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4">
                                                                            <p class="regular h6 txt-color-parrafo"><b class="txt-azul-oscuro">EYES:</b></p>
                                                                            <p class="regular h6 txt-color-parrafo">"EFF"</p>
                                                                        </div>
                                                                        <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4">
                                                                            <p class="regular h6 txt-color-parrafo"><b class="txt-azul-oscuro">HT:</b></p>
                                                                            <p class="regular h6 txt-color-parrafo">"150"</p>
                                                                        </div>
                                                                        <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4">
                                                                            <p class="regular h6 txt-color-parrafo"><b class="txt-azul-oscuro">HAIR:</b></p>
                                                                            <p class="regular h6 txt-color-parrafo">"VFVF"</p>
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
                                    <!-- DATOS DE ENVÍO -->
                                    <div class="tab-pane" role="tabpanel" id="step7">
                                        <div class="d-block d-sm-block d-md-none">
                                            <div class="text-center pt-5">
                                                <div class="num-paso mb-3">
                                                    <h6 class="bold titulos pt-2">7</h6>
                                                </div>
                                                <h6 class="regular parrafos">7/7</h6>
                                            </div>
                                        </div>
                                        <h4 class="text-center my-5 bold h5">Datos de envío</h4>
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-3"></div>
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                                <div class="mx-2">
                                                    <div class="form-info-envio">
                                                        <div class="mx-5">
                                                            <div class="row py-5 txt-firma">
                                                                <div class="mb-4">
                                                                    <label for="exampleInputEmail1" class="form-label">Nombre Completo*</label>
                                                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required name="calle">
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                                                        <div class="mb-4">
                                                                            <label for="exampleInputEmail1" class="form-label">Teléfono*</label>
                                                                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required name="calle">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                                                        <div class="mb-4">
                                                                            <label for="exampleInputEmail1" class="form-label">Correo electrónico*</label>
                                                                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required name="calle">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                                                        <div class="mb-4">
                                                                            <label for="exampleInputEmail1" class="form-label">Calle*</label>
                                                                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required name="calle">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                                                        <div class="mb-4">
                                                                            <label for="exampleInputEmail1" class="form-label">Colonia*</label>
                                                                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required name="calle">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                                                        <div class="mb-4">
                                                                            <label for="exampleInputEmail1" class="form-label">Número exterior*</label>
                                                                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required name="calle">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                                                        <div class="mb-4">
                                                                            <label for="exampleInputEmail1" class="form-label">Número interior</label>
                                                                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required name="calle">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                                                        <div class="mb-4">
                                                                            <label for="exampleInputEmail1" class="form-label">Ciudad*</label>
                                                                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required name="calle">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                                                        <div class="mb-4">
                                                                            <label for="exampleInputEmail1" class="form-label">Estado*</label>
                                                                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required name="calle">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="mb-4">
                                                                    <label for="exampleInputEmail1" class="form-label">Instrucciones adicionales para acceder al domicilio*</label>
                                                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required name="calle">
                                                                </div>
                                                                <div class="row mb-5">
                                                                    <label for="exampleInputEmail1" class="form-label">Selecciona tu tipo de envío*</label>
                                                                    <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input check-envio" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                                            <label class="form-check-label txt-color-tit bold" for="flexRadioDefault1">
                                                                                Envío<b class="txt-azul-oscuro"> estándar</b> <br/>
                                                                                <i class="fa-solid fa-check txt-verde"></i> <b class="txt-verde">Gratuito</b> <br/>
                                                                                <b class="top-menu regular">5 - 7 días hábiles</b>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                                                                        <div class="form-check ">
                                                                            <input class="form-check-input check-envio" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                                            <label class="form-check-label" for="flexRadioDefault1">
                                                                                Envío<b class="txt-azul-oscuro"> express</b> <br/>
                                                                                <b class="regular">$199</b> <br/>
                                                                                <b class="top-menu regular">1 a 3 días hábiles</b>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input check-envio" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                                            <label class="form-check-label" for="flexRadioDefault1">
                                                                                Recoger en<b class="txt-azul-oscuro"> sucursal</b> <br/>
                                                                                <i class="fa-solid fa-check txt-verde"></i> <b class="txt-verde">Gratuito</b> <br/>
                                                                                <b class="top-menu regular">2 a 3 días hábiles.</b>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="text-end mb-3">
                                                                    <h6 class="top-menu txt-color-parrafo"><i>*Los días de entrega pueden variar según sea la zona de entrega por políticas de paqueterías.</i></h6>
                                                                </div>

                                                                <div class="accordion" id="accordionPanelsStayOpenExample">
                                                                    <div class="accordion-item">
                                                                      <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                                                          <div class="form-check mt-1">
                                                                            <input class="form-check-input chkAll" type="checkbox" value="" id="chkAccordion2All">
                                                                          </div>
                                                                          Requiero factura
                                                                        </button>
                                                                      </h2>
                                                                      <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                                                                        <div class="accordion-body ms-3">
                                                                            <div class="row">
                                                                                <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                                                                    <div class="mb-4">
                                                                                        <label for="exampleInputEmail1" class="form-label">Nombre o Razón Social</label>
                                                                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required name="calle">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                                                                    <div class="mb-4">
                                                                                        <label for="exampleInputEmail1" class="form-label">RFC*</label>
                                                                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required name="calle">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                                                                    <div class="mb-4">
                                                                                        <label for="exampleInputEmail1" class="form-label">Calle*</label>
                                                                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required name="calle">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                                                                    <div class="mb-4">
                                                                                        <label for="exampleInputEmail1" class="form-label">Colonia*</label>
                                                                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required name="calle">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                                                                    <div class="mb-4">
                                                                                        <label for="exampleInputEmail1" class="form-label">Número exterior*</label>
                                                                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required name="calle">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                                                                    <div class="mb-4">
                                                                                        <label for="exampleInputEmail1" class="form-label">Numero interior</label>
                                                                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required name="calle">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                                                                    <div class="mb-4">
                                                                                        <label for="exampleInputEmail1" class="form-label">Código Postal*</label>
                                                                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required name="calle">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                                                                    <div class="mb-4">
                                                                                        <label for="exampleInputEmail1" class="form-label">Ciudad*</label>
                                                                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required name="calle">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                                                                    <div class="mb-4">
                                                                                        <label for="exampleInputEmail1" class="form-label">Estado*</label>
                                                                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required name="calle">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                                                                    <div class="mb-4">
                                                                                        <label for="exampleInputEmail1" class="form-label">País*</label>
                                                                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required name="calle">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                                                                    <div class="mb-4">
                                                                                        <label for="exampleInputEmail1" class="form-label">Correo electrónico*</label>
                                                                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required name="calle">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                                                                    <div class="mb-4">
                                                                                        <label for="exampleInputEmail1" class="form-label">Teléfono*</label>
                                                                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required name="calle">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                                                                    <div class="mb-4">
                                                                                        <label for="exampleInputEmail1" class="form-label">Uso del CFDI*</label>
                                                                                        <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                                                                            <option selected>Femenino</option>
                                                                                            <option value="1">Masculino</option>
                                                                                        </select>
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
                                                                <li><a type="button" class="default-btn next-step a_none_style text-white" href="{{route('checkout') }}">Siguiente <i class="fa-solid fa-arrow-right"></i></a></li>
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
                <img src="https://res.cloudinary.com/dra1bsh4u/image/upload/v1673275337/Jeanswest/pagos/icono-secure_r1fnlg.png" alt="Certificado SecureTrust" class="img-fluid secure-trust"/>
                <img src="https://res.cloudinary.com/dra1bsh4u/image/upload/v1673275337/Jeanswest/pagos/icono-ssl_dnzh3m.png" alt="Certificado SSL" class="img-fluid ssl"/>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-5"></div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                <div class="text-end">
                    <h6 class="parrafos txt-color-parrafo bold">Medios y soluciones de pago</h6>
                    <img src="https://res.cloudinary.com/dra1bsh4u/image/upload/v1673275337/Jeanswest/pagos/icono-visa_emqhjy.png" alt="Visa" class="img-fluid icono-pagos"/>
                    <img src="https://res.cloudinary.com/dra1bsh4u/image/upload/v1673275234/Jeanswest/footer/icono-master_nemers.png" alt="Mastercard" class="img-fluid icono-pagos"/>
                    <img src="https://res.cloudinary.com/dra1bsh4u/image/upload/v1673275234/Jeanswest/footer/icono-maestro_wbtgcr.png" alt="Maestro" class="img-fluid icono-pagos"/>
                    <img src="https://res.cloudinary.com/dra1bsh4u/image/upload/v1673275234/Jeanswest/footer/icono-american_na2mcs.png" alt="American Express" class="img-fluid icono-pagos"/>
                    <img src="https://res.cloudinary.com/dra1bsh4u/image/upload/v1673275235/Jeanswest/footer/icono-oxxo_ofuq4d.png" alt="Oxxo" class="img-fluid icono-pagos"/>
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
                        <img src="https://res.cloudinary.com/dra1bsh4u/image/upload/v1674595263/Cosas%20generales/blueberry-tech_se5b3f.gif" alt="Materialized by Blueberry" class="img-fluid bb-logo"/>
                    </a>
                </div>
                
            </div>
        </div>
    </div>

    @include('components.scripts')
</body>
</html>