<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    @include('components.head')
    <title>AMTI | ¿CÓMO FUNCIONA?</title>
</head>
<body>
    @include('components.menu')
    <div class="bg-comoFunciona">
        <div class="container">
            <div class="row">
                <div class="txt-como">
                    <h1 class="bold big">Tu licencia de conducir</h1>
                    <h1 class="bold txt-azul big">internacional AMTI</h1>
                    <h6 class="parrafos regular">(International Driver’s Permit)</h6>
                </div>
                

            </div>
        </div>
    </div>
    <!-- POR QUÉ NECESITO UNA LICENCIA -->
    <div class="bg-blanco py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-1"></div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-10">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-6 mb-4 mt-5">
                            <div class="mt-5">
                                <h1 class="bold big txt-color-tit">¿Por qué necesito mi</h1>
                                <h1 class="bold big txt-azul">licencia internacional de conducir?</h1>
                                <div class="d-none d-sm-none d-md-block">
                                    <h1 class="titulos regular txt-color-tit">UNA LICENCIA de conducir internacional </h1>
                                    <h1 class="titulos regular txt-color-tit">ayuda a asegurar tu viaje en el extranjero.</h1>
                                </div>
                                <div class="d-block d-sm-block d-md-none">
                                    <h1 class="titulos regular txt-color-tit">UNA LICENCIA de conducir internacional 
                                        ayuda a asegurar tu viaje en el extranjero.</h1>
                                </div>
                                <div class="my-4">
                                    <a href="{{ route('procesoCompra') }}" class="btn btn-primary btn-lista py-2">Tramitar mi licencia</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-1"></div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-5">
                            <div class="text-center">
                                <img src="https://res.cloudinary.com/dra1bsh4u/image/upload/v1674061491/AMTI%20Ecommerce/licencia-libro_swjrdf.png" alt="Ilustración libro y licencia" class="img-fluid"/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-1"></div>
            </div>
        </div>
    </div>
    
    <!-- TU LICENCIA DIGITAL -->
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-7">
                <div class="p-0">
                    <img src="https://res.cloudinary.com/dra1bsh4u/image/upload/v1674587139/AMTI%20Ecommerce/licencia-digital_ck6vfy.png" alt="Ilustración de licencia digital" class="img-fluid"/>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-5">
                <div class="txt-licencia-digital">
                    <img src="https://res.cloudinary.com/dra1bsh4u/image/upload/v1674082739/AMTI%20Ecommerce/logo-azul-gde_uhagup.png" alt="AMTI" class="img-fluid logo-amti"/>
                    <div class="mt-4">
                        <h1 class="txt-color-tit bold big">Tu licencia digital</h1>
                        <h1 class="txt-azul bold big mb-3">con tecnología QR</h1>
                        <p class="top-menu txt-color-parrafo regular">Tu booklet contiene un código QR, el cual podrás </p>
                        <p class="top-menu txt-color-parrafo regular">escanear y tener tu licencia internacional digital </p>
                        <p class="top-menu txt-color-parrafo regular">disponible en todo momento.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- GARANTIZANDO TU SEGURIDAD, ROMPIENDO BARRERAS, SEGURIDAD Y TRANQUILIDAD -->
    <div class="bg-blanco py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                    <div class="cuadro-como-funciona pt-4">
                        <div class="mx-5">
                            <div class="">
                                <img src="https://res.cloudinary.com/dra1bsh4u/image/upload/v1674061490/AMTI%20Ecommerce/garantizando-seguridad_xctweg.png" alt="" class="img-fluid"/>
                                <h1 class="txt-color-tit titulos bold">Garantizando</h1>
                                <h1 class="txt-azul-oscuro titulos bold mb-4">tu seguridad</h1>
                                <div class="d-none d-sm-none d-md-block">
                                    <p class="top-menu regular txt-color-parrafo">Tu IDP te garantiza el alquiler de un auto y el </p>
                                    <p class="top-menu regular txt-color-parrafo">poder manejar sin preocupaciones, ya que </p>
                                    <p class="top-menu regular txt-color-parrafo">varios países te exigen cumplir con este </p>
                                    <p class="top-menu regular txt-color-parrafo">requisito y las autoridades pueden solicitarte</p>
                                    <p class="top-menu regular txt-color-parrafo">que se los muestres. </p>
                                </div>
                                <div class="d-block d-sm-block d-md-none">
                                    <p class="top-menu regular txt-color-parrafo">Tu IDP te garantiza el alquiler de un auto y el 
                                        poder manejar sin preocupaciones, ya que 
                                        varios países te exigen cumplir con este 
                                        requisito y las autoridades pueden solicitarte
                                        que se los muestres. </p>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                    <div class="cuadro-como-funciona pt-4">
                        <div class="mx-5">
                            <div class="">
                                <img src="https://res.cloudinary.com/dra1bsh4u/image/upload/v1674061492/AMTI%20Ecommerce/rompiedo-barreras_rixmbm.png" alt="" class="img-fluid"/>
                                <h1 class="txt-color-tit titulos bold">Rompiendo</h1>
                                <h1 class="txt-azul-oscuro titulos bold mb-4">barreras</h1>
                                <div class="d-none d-sm-none d-md-block">
                                    <p class="top-menu regular txt-color-parrafo">Tu IDP está diseñado para romper  </p>
                                    <p class="top-menu regular txt-color-parrafo">la barrera del idioma y evitar </p>
                                    <p class="top-menu regular txt-color-parrafo">cualquier tipo de dificultad que </p>
                                    <p class="top-menu regular txt-color-parrafo">podría presentarse. </p>
                                </div>
                                <div class="d-block d-sm-block d-md-none">
                                    <p class="top-menu regular txt-color-parrafo">Tu IDP está diseñado para romper  
                                        la barrera del idioma y evitar 
                                        cualquier tipo de dificultad que 
                                        podría presentarse. </p>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                    <div class="cuadro-como-funciona pt-4">
                        <div class="mx-5">
                            <div class="">
                                <img src="https://res.cloudinary.com/dra1bsh4u/image/upload/v1674061493/AMTI%20Ecommerce/seguridad-tranquilidad_kyikzx.png" alt="" class="img-fluid"/>
                                <h1 class="txt-color-tit titulos bold">Seguridad y</h1>
                                <h1 class="txt-azul-oscuro titulos bold mb-4">tranquilidad</h1>
                                <div class="d-none d-sm-none d-md-block">
                                    <p class="top-menu regular txt-color-parrafo">Aunque no quieras conducir ni rentar un carro</p>
                                    <p class="top-menu regular txt-color-parrafo">durante tu próximo viaje en el extranjero, </p>
                                    <p class="top-menu regular txt-color-parrafo">poseer tu licencia internacional de conducir </p>
                                    <p class="top-menu regular txt-color-parrafo">como identificación te ofrece seguridad y </p>
                                    <p class="top-menu regular txt-color-parrafo">tranquilidad ya que puede ser utilizado en </p>
                                    <p class="top-menu regular txt-color-parrafo">circunstancias inesperadas.</p>
                                </div>
                                <div class="d-block d-sm-block d-md-none">
                                    <p class="top-menu regular txt-color-parrafo">Aunque no quieras conducir ni rentar un carro
                                        durante tu próximo viaje en el extranjero, 
                                        poseer tu licencia internacional de conducir 
                                        como identificación te ofrece seguridad y 
                                        tranquilidad ya que puede ser utilizado en 
                                        circunstancias inesperadas.</p>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- QUÉ CONTIENE MI IDP -->
    <div class="bg-azul-2">
        <div class="bg-continente py-5">
            <div class="container py-5">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-1"></div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-10">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-7">
                                <div class="">
                                    <h1 class="bold txt-color-tit big text-white">¿Qué contiene mi IDP?</h1>
                                    <h1 class="bold txt-azul big mb-3">International Driving Permit</h1>
                                    <p class="text-white regular h5">Tu booklet internacional de conducir incluye la siguiente</p>
                                    <p class="text-white regular h5">información traducida en 9 idiomas (portugués, chino, </p>
                                    <p class="text-white regular h5 mb-3">alemán, español, francés, inglés, árabe, italiano y ruso):</p>

                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                            <ul class="regular text-white">
                                                <li class="mb-2">Periodo de vigencia</li>
                                                <li class="mb-2">Vehículos que puedes conducir</li>
                                                <li class="mb-2">Tu fotografía</li>
                                                <li class="mb-2">Tu firma</li>
                                            </ul>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                            <ul class="text-white regular">
                                                <li class="mb-2">Tu nombre y apellidos</li>
                                                <li class="mb-2">Tu país de nacimiento</li>
                                                <li class="mb-2">Tu fecha de nacimiento</li>
                                                <li class="mb-2">Tu país de residencia </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-5">
                                    <a href="{{ route('procesoCompra') }}" class="btn btn-primary btn-bordes-azul">Tamitar mi licencia</a>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-5">
                                <img src="https://res.cloudinary.com/dra1bsh4u/image/upload/v1674061491/AMTI%20Ecommerce/licencia-libro-2_nfb1us.png" alt="" class="img-fluid"/>
                                <h6 class="text-white regular parrafo text-center">Cubierta de cuero de alta calidad</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-1"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- ILUSTRACIÓN DEL CONTENIDO DEL LIBRO AMTI -->
    <div class="bg-blanco py-3">
        <div class="container py-5">
            <div class="row txt-ilustracion-lib">
                <div class="col-12 col-sm-12 col-md-12 col-lg-4 mb-5">
                    <div class="text-center mx-5">
                        <img src="https://res.cloudinary.com/dra1bsh4u/image/upload/v1674148581/AMTI%20Ecommerce/libro-sello_pfb0jt.png" alt="Ilustración página principal" class="img-fluid"/>
                        <div class="my-4">
                            <p class="regular parrafos">Página principal con sello de la </p>
                            <p class="regular parrafos">autoridad emisora.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-4 mb-5">
                    <div class="text-center mx-5">
                        <img src="https://res.cloudinary.com/dra1bsh4u/image/upload/v1674148581/AMTI%20Ecommerce/libro-clausulas_bioyka.png" alt="Ilustración de cláusulas" class="img-fluid"/>
                        <div class="my-4">
                            <p class="regular parrafos">Fragmento de cláusulas</p>
                            <p class="regular parrafos">de la convención.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-4 mb-5">
                    <div class="text-center mx-5">
                        <img src="https://res.cloudinary.com/dra1bsh4u/image/upload/v1674148581/AMTI%20Ecommerce/libro-paises_hlgqon.png" alt="Ilustración de países" class="img-fluid"/>
                        <div class="my-4">
                            <p class="regular parrafos">Listado de países</p>
                            <p class="regular parrafos">con cobertura.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-4 mb-5">
                    <div class="text-center mx-5">
                        <img src="https://res.cloudinary.com/dra1bsh4u/image/upload/v1674148580/AMTI%20Ecommerce/libro-descripcion_c3jxe1.png" alt="Ilustración de descripción" class="img-fluid"/>
                        <div class="my-4">
                            <p class="regular parrafos">Descripción general de tipos </p>
                            <p class="regular parrafos">de vehículos (A, B, C, D, E).</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-4 mb-5">
                    <div class="text-center mx-5">
                        <img src="https://res.cloudinary.com/dra1bsh4u/image/upload/v1674148580/AMTI%20Ecommerce/libro-vehiculos_ssd5wc.png" alt="Ilustración de vehículos" class="img-fluid"/>
                        <div class="my-4">
                            <p class="regular parrafos">Tipos de vehículos con</p>
                            <p class="regular parrafos">ilustraciones.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-4 mb-5">
                    <div class="text-center mx-5">
                        <img src="https://res.cloudinary.com/dra1bsh4u/image/upload/v1674586933/AMTI%20Ecommerce/libro-datos-personales_f53qnm.png" alt="Ilustración de datos personales" class="img-fluid"/>
                        <div class="my-4">
                            <p class="regular parrafos">Datos personales incluídos de </p>
                            <p class="regular parrafos">la persona (Foto, firma, QR).</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <!-- SOBRE EL BUEN USO -->
    <div class="bg-azul-2">
        <div class="bg-continente py-5">
            <div class="container py-5">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-1"></div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-10">
                        <div class="text-center">
                            <h1 class="bold text-white big">Sobre el buen uso</h1>
                            <h1 class="bold txt-azul big">Y sus restricciones</h1>
                        </div>
                        <div class="row my-5 txt-buen-uso">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-5 ">
                                <div class="text-center">
                                    <img src="https://res.cloudinary.com/dra1bsh4u/image/upload/v1674061490/AMTI%20Ecommerce/icono-red_hgdbgt.png" alt="" class="img-fluid"/>
                                </div>
                                <div class="d-none d-sm-none d-md-block">
                                    <div class="my-5 mx-5">
                                        <p class="regular parrafos text-white">Con tu licencia internacional de conducir puedes</p>
                                        <p class="regular parrafos text-white">recorrer el mundo sin preocupaciones, mientras </p>
                                        <p class="regular parrafos text-white">este vigente.</p>
                                        <p class="regular parrafos text-white">Podrás presentarla junto con tu booklet para</p>
                                        <p class="regular parrafos text-white">facilitar la comprensión del permiso a cualquier</p>
                                        <p class="regular parrafos text-white">autoridad local. </p>
                                    </div>
                                </div>
                                <div class="d-block d-sm-block d-md-none">
                                    <div class="my-5 mx-5">
                                        <p class="regular parrafos text-white">Con tu licencia internacional de conducir puedes
                                            recorrer el mundo sin preocupaciones, mientras 
                                            este vigente.
                                            Podrás presentarla junto con tu booklet para
                                            facilitar la comprensión del permiso a cualquier
                                            autoridad local. </p>
                                    </div>
                                </div>
                                
                                
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-1 border-left"></div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-1 "></div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-5">
                                <div class="text-center">
                                    <img src="https://res.cloudinary.com/dra1bsh4u/image/upload/v1674061490/AMTI%20Ecommerce/icono-perfil_bcjg93.png" alt="" class="img-fluid"/>
                                </div>
                                <div class="d-none d-sm-none d-md-block">
                                    <div class="my-5 mx-5">
                                        <p class="regular parrafos text-white">El IDP, únicamente es una traducción de su </p>
                                        <p class="regular parrafos text-white">licencia de conducir, si no existe un permiso de </p>
                                        <p class="regular parrafos text-white">conducir válido éste no tendrá validez ante la </p>
                                        <p class="regular parrafos text-white">autoridad. Si decide permanecer y establecer una</p>
                                        <p class="regular parrafos text-white">residencia en el país de visita, deberá solicitar un</p>
                                        <p class="regular parrafos text-white">permiso de conducir local. </p>
                                    </div>
                                </div>
                                <div class="d-block d-sm-block d-md-none">
                                    <div class="my-5 mx-5">
                                        <p class="regular parrafos text-white">El IDP, únicamente es una traducción de su 
                                            licencia de conducir, si no existe un permiso de 
                                            conducir válido éste no tendrá validez ante la 
                                            autoridad. Si decide permanecer y establecer una
                                            residencia en el país de visita, deberá solicitar un
                                            permiso de conducir local. </p>
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
    <!-- MAPA DE 130 PAÍSES -->
    @include('components.mapa')
    <!-- CÓMO COMPRAR MI LICENCIA INTERNACIONAL -->
    @include('components.comoComprar')
    <!-- CON LA CONFIANZA DE MILES DE CLIENTES -->
    <div class="bg-blanco">
        <div class="container pt-5">
            <div class="row">
                <div class="text-center">
                    <h1 class="bold txt-color-tit extra">Con la confianza de </h1>
                    <h1 class="bold txt-azul extra ">miles de clientes</h1>
                    <h1 class="regular parrafos txt-color-parrafo mb-5">Por todo el mundo</h1>
                </div>
            </div>
        </div>
    </div>
    @include('components.confianzaClientes')
    <!-- FORMULARIO -->
    @include('components.formulario')
    <!-- FOOTER -->
    @include('components.footer')
    @include('components.scripts')
</body>
</html>