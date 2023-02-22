<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    @include('components.head')
    <title>AMTI | Vigencias y Precios</title>
</head>
<body>
    @include('components.menu')
    <div class="bg-vigencias">
        <div class="container">
            <div class="row">
                <div class="txt-como">
                    <h1 class="bold big">Vigencias <b class="txt-azul">y precios</b> </h1>
                    <h6 class="parrafos regular">(International Driver’s Permit)</h6>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-azul-3">
        <div class="bg-continente py-5">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-4 mb-4">
                        <div class="mx-3">
                            <div class="cuadro-vigencias">
                                <div class="header-cuadro py-2">
                                    <h3 class="semiBold h5">3 años</h3>
                                </div>
                                <div class="text-center pt-4 pb-2">
                                    <img src="https://res.cloudinary.com/dhigl3clg/image/upload/v1676988817/amtiEcommerce/Booklet-2_mg8mbs.png" alt="Ilustración de licencia y libro AMTI" class="img-fluid licencia-vigencia"/>
                                </div>
                                <div class="mx-4">
                                    <hr/>
                                    <div class="row ">
                                        <div class="col-9 col-sm-9 col-md-9 col-lg-6">
                                            <div class="">
                                                <p class="regular txt-color-parrafo parrafos">Vigencia: 3 años</p>
                                                <p class="semibold txt-color-tit titulos precio">$2,700 MXN.</p>
                                            </div>
                                            <div class="">
                                                <a href="{{ route('procesoCompra') }}" class="btn btn-primary btn-lista py-2">Comprar licencia</a>
                                            </div>
                                        </div>
                                        <div class="col-3 col-sm-3 col-md-3 col-lg-6 mt-5 sellos">
                                            <div class="text-end">
                                                <img src="https://res.cloudinary.com/dhigl3clg/image/upload/v1676313844/amtiEcommerce/icono-ssl_doufze.png" alt="Certificado SSL" class="img-fluid ssl-vigencia"/>
                                            </div>
                                            <div class="text-end">
                                                <img src="https://res.cloudinary.com/dhigl3clg/image/upload/v1676313844/amtiEcommerce/icono-secure_yvj46c.png" alt="Certificado SecureTrust" class="img-fluid secure-trust-vigencia"/>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-4 mb-4">
                        <div class="mx-3">
                            <div class="cuadro-vigencias-2">
                                <div class="header-cuadro-2 py-2">
                                    <h3 class="semiBold h5">5 años</h3>
                                </div>
                                <div class="text-center pt-4 pb-2">
                                    <img src="https://res.cloudinary.com/dhigl3clg/image/upload/v1676988817/amtiEcommerce/Booklet-2_mg8mbs.png" alt="Ilustración de licencia y libro AMTI" class="img-fluid licencia-vigencia"/>
                                   <div class="etiqueta-recom py-1">
                                        <h6 class="regular top-menu pt-1">
                                            <img src="https://res.cloudinary.com/dhigl3clg/image/upload/v1676310973/amtiEcommerce/icono-recomendada_qlwq7s.png" alt="" class="img-fluid"/>
                                            Recomendada
                                        </h6>
                                   </div>
                                </div>
                                <div class="mx-4">
                                    <hr/>
                                    <div class="row mt-4">
                                        <div class="col-9 col-sm-9 col-md-9 col-lg-6">
                                            <div class="">
                                                <p class="regular txt-color-parrafo parrafos mb-0">Vigencia: 5 años</p>
                                                <p class="regular parrafos tachado my-0">$4,900 MXN</p>
                                                <p class="semibold txt-color-tit titulos precio">$3,700 MXN.</p>
                                            </div>
                                            <div class="">
                                                <a href="{{ route('procesoCompra') }}" class="btn btn-primary btn-lista py-2">Comprar licencia</a>
                                            </div>
                                        </div>
                                        <div class="col-3 col-sm-3 col-md-3 col-lg-6 mt-5 sellos">
                                            <div class="text-end">
                                                <img src="https://res.cloudinary.com/dhigl3clg/image/upload/v1676313844/amtiEcommerce/icono-ssl_doufze.png" alt="Certificado SSL" class="img-fluid ssl-vigencia"/>
                                            </div>
                                            <div class="text-end">
                                                <img src="https://res.cloudinary.com/dhigl3clg/image/upload/v1676313844/amtiEcommerce/icono-secure_yvj46c.png" alt="Certificado SecureTrust" class="img-fluid secure-trust-vigencia"/>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-4 mb-4">
                        <div class="mx-3">
                            <div class="cuadro-vigencias">
                                <div class="header-cuadro py-2">
                                    <h3 class="semiBold h5">1 años</h3>
                                </div>
                                <div class="text-center pt-4 pb-2">
                                    <img src="https://res.cloudinary.com/dhigl3clg/image/upload/v1676988817/amtiEcommerce/Booklet-2_mg8mbs.png" alt="Ilustración de licencia y libro AMTI" class="img-fluid licencia-vigencia"/>
                                </div>
                                <div class="mx-4">
                                    <hr/>
                                    <div class="row">
                                        <div class="col-9 col-sm-9 col-md-9 col-lg-6">
                                            <div class="">
                                                <p class="regular txt-color-parrafo parrafos">Vigencia: 1 año</p>
                                                <p class="semibold txt-color-tit titulos precio">$1,450 MXN..</p>
                                            </div>
                                            <div class="">
                                                <a href="" class="btn btn-primary btn-lista py-2">Comprar licencia</a>
                                            </div>
                                        </div>
                                        <div class="col-3 col-sm-3 col-md-3 col-lg-6 mt-5 sellos">
                                            <div class="text-end">
                                                <img src="https://res.cloudinary.com/dhigl3clg/image/upload/v1676313844/amtiEcommerce/icono-ssl_doufze.png" alt="Certificado SSL" class="img-fluid ssl-vigencia"/>
                                            </div>
                                            <div class="text-end">
                                                <img src="https://res.cloudinary.com/dhigl3clg/image/upload/v1676313844/amtiEcommerce/icono-secure_yvj46c.png" alt="Certificado SecureTrust" class="img-fluid secure-trust-vigencia"/>
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

    <!-- INFORMACIÓN DE ENVÍO -->
    <div class="container py-5">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                <div class="mx-4 mb-5">
                    <h1 class="txt-color-tit bold big">Información</h1>
                    <h1 class="txt-azul bold big">de envío</h1>
                </div>
                <div class="mx-5">
                    <div class="mb-4">
                        <h4 class="bold txt-color-tit">Envío <b class="txt-azul-oscuro">estándar</b></h4>
                        <h6 class="txt-verde top-menu semiBold"><i class="fa-solid fa-check"></i> Gratuito</h6>
                        <h6 class="top-menu regular txt-color-parrafo">5 - 7 días hábiles</h6>
                    </div>
                    <div class="mb-4">
                        <h4 class="bold txt-color-tit">Envío <b class="txt-azul-oscuro">express</b></h4>
                        <h6 class="top-menu semiBold">$199</h6>
                        <h6 class="top-menu regular txt-color-parrafo">1 - 3 días hábiles</h6>
                    </div>
                    <div class="mb-4">
                        <h4 class="bold txt-color-tit">Recoger en <b class="txt-azul-oscuro">sucursal</b></h4>
                        <h6 class="txt-verde top-menu semiBold"><i class="fa-solid fa-check"></i> Gratuito</h6>
                        <h6 class="top-menu regular mb-0 txt-color-parrafo">Recógela en cualquiera de nuestras </h6>
                        <h6 class="top-menu regular mt-0 txt-color-parrafo">sucursales en 2 a 3 días hábiles.</h6>
                    </div>
                    
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-4 mb-4">
                <div class="cuadro-envios mb-4">
                    <div class="mx-5 py-5">
                        <h1 class="bold txt-color-tit titulos">Confirmaciones </h1>
                        <h1 class="bold txt-azul-oscuro mb-3 titulos">de pago</h1>
                        <div class="d-none d-sm-none d-md-block">
                            <p class="regular txt-color-parrafo top-menu">Todas las confirmaciones de pago se envían </p>
                            <p class="regular txt-color-parrafo top-menu">automáticamente a través del correo </p>
                            <p class="regular txt-color-parrafo top-menu">electrónico.</p>
                        </div>
                        <div class="d-block d-sm-block d-md-none">
                            <p class="regular txt-color-parrafo top-menu">Todas las confirmaciones de pago se envían 
                                automáticamente a través del correo 
                                electrónico.</p>
                        </div>
                        
                    </div>
                </div>
                <div class="cuadro-envios">
                    <div class="mx-5 py-5">
                        <h1 class="bold txt-color-tit titulos">Rastreo del envío</h1>
                        <h1 class="bold txt-azul-oscuro mb-3 titulos">(Express)</h1>
                        <div class="d-none d-sm-none d-md-block">
                            <p class="regular txt-color-parrafo top-menu">En los envíos express su número de guía se </p>
                            <p class="regular txt-color-parrafo top-menu">le envía ese mismo día (de ser hábil) o en lo </p>
                            <p class="regular txt-color-parrafo top-menu">sucesivo dentro del primer día hábil después</p>
                            <p class="regular txt-color-parrafo top-menu">del pago.</p>
                        </div>
                        <div class="d-block d-sm-block d-md-none">
                            <p class="regular txt-color-parrafo top-menu">En los envíos express su número de guía se 
                                le envía ese mismo día (de ser hábil) o en lo 
                                sucesivo dentro del primer día hábil después 
                                del pago.</p>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                <div class="cuadro-envios mb-4">
                   <div class="mx-5 py-5">
                        <h1 class="bold txt-color-tit titulos">Rastreo del envío</h1>
                        <h1 class="bold txt-azul-oscuro mb-3 titulos">(Estándar)</h1>
                        <div class="d-none d-sm-none d-md-block">
                            <p class="regular txt-color-parrafo top-menu">En envío estándar su número de guía le </p>
                            <p class="regular txt-color-parrafo top-menu">estará llegando vía correo electrónico dentro </p>
                            <p class="regular txt-color-parrafo top-menu">de los 4-5 días hábiles siguientes. </p>
                        </div>
                        <div class="d-block d-sm-block d-md-none">
                            <p class="regular txt-color-parrafo top-menu">En envío estándar su número de guía le 
                                estará llegando vía correo electrónico dentro
                                de los 4-5 días hábiles siguientes. </p>
                        </div>
                        
                        
                    </div> 
                </div>
                <div class="cuadro-envios">
                    <div class="mx-5 py-5">
                        <h1 class="bold txt-color-tit titulos">Servicio</h1>
                        <h1 class="bold txt-azul-oscuro mb-3 titulos">Express</h1>
                        <div class="d-none d-sm-none d-md-block">
                            <p class="regular txt-color-parrafo top-menu"> Aplica a pedidos realizados antes de las </p>
                            <p class="regular txt-color-parrafo top-menu">2:30pm de lunes a viernes. Si el pago y el </p>
                            <p class="regular txt-color-parrafo top-menu">registro quedan después de este horario o es</p>
                            <p class="regular txt-color-parrafo top-menu">realizado en sábado o domingo, el envío se </p>
                            <p class="regular txt-color-parrafo top-menu">realizará hasta el siguiente día hábil.</p>
                        </div>
                        <div class="d-block d-sm-block d-md-none">
                            <p class="regular txt-color-parrafo top-menu"> Aplica a pedidos realizados antes de las 
                                2:30pm de lunes a viernes. Si el pago y el 
                                registro quedan después de este horario o es
                                realizado en sábado o domingo, el envío se 
                                realizará hasta el siguiente día hábil.</p>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- FORMULARIO -->
    @include('components.formulario')

    <!-- FOOTER -->
    @include('components.footer')
    @include('components.scripts')
    
</body>
</html>