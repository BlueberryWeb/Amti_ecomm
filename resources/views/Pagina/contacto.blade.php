<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    @include('components.head')
    <title>AMTI | CONTACTO</title>
</head>
<body>
    @include('components.menu')
    <div class="bg-contacto">
        <div class="container">
            <div class="row">
                <h1 class="bold big">Contacto</h1>
            </div>
        </div>
    </div>
    <!-- FORMULARIO -->
    <div class="bg-azul-2">
        <div class="bg-continente py-5">
            <div class="container py-5">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-1"></div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-10">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-lg-6">
                                <div class="">
                                    <img src="https://res.cloudinary.com/dhigl3clg/image/upload/v1676310985/amtiEcommerce/logo-amti-gde_ff8yg0.png" alt="AMTI" class="img-fluid mb-4 logo-amti"/>
                                    <h1 class="bold extra">¿Necesitas ayuda?</h1>
                                    <h1 class="bold extra txt-azul mb-2">Contáctanos</h1>
                                    <h6 class="regular parrafos mb-4">Estaremos encantados de atenderte</h6>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-lg-6">
                                <div class="">
                                    <form class="needs-validation form-message" novalidate action="{{ route('mail') }}" method="POST">
                                        @csrf
                                        <div class="mb-4">
                                            <label for="validationCustom05" class="form-label">Nombre</label>
                                            <input type="text" class="form-control" id="validationCustom05" required name="name">
                                            <div class="invalid-feedback">
                                                Por favor ingresa un nombre.
                                            </div>
                                        </div>
                                        <div class="mb-4">
                                            <label for="validationCustom05" class="form-label">Teléfono</label>
                                            <input type="text" class="form-control" id="validationCustom05" required name="phone">
                                            <div class="invalid-feedback">
                                                Por favor ingresa un número de teléfono.
                                            </div>
                                        </div>
                                        <div class="mb-4">
                                            <label for="validationCustom05" class="form-label">Mensaje</label>
                                            <textarea class="form-control" name="message" id="floatingTextarea"></textarea>
                                            <div class="invalid-feedback">
                                                Por favor deja un mensaje.
                                            </div>
                                        </div>
                                        
                                        <div class="mb-4 text-end">
                                          <button class="btn btn-primary btn-enviar" type="submit">Enviar</button>
                                        </div>
                                      </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-1"></div>
                </div>
            </div>
            <!-- SUCURSALES -->
            <div class="container py-5">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-4 mb-4">
                        <div class="cuadro-sucursales py-5">
                            <img src="https://res.cloudinary.com/dhigl3clg/image/upload/v1676310974/amtiEcommerce/icono-ubicacion-fondo_lj1npd.png" alt="2" class="img-fluid icono-suc"/>
                            <div class="mx-5">
                                <h1 class="txt-color-tit titulos bold">Sucursal</h1>
                                <h1 class="txt-azul-oscuro titulos bold">Guadalajara</h1>
                                <div class="my-4 parrafos txt-color-parrafo">
                                    <div class="mb-4">
                                        <a href="https://goo.gl/maps/sa77LNkDxsG96Nmo6" class="a_none_style txt-color-parrafo" target="_blank">
                                            <img src="https://res.cloudinary.com/dhigl3clg/image/upload/v1676310974/amtiEcommerce/icono-ubi-azul_zotx3g.png" alt="" class="img-fluid icon-suc float-start mb-3"/>
                                            <h6 class="regular top-menu txt-color-parrafo">Av. Rubén Darío #586 int.8, Lomas de </h6>
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
                    <div class="col-12 col-sm-12 col-md-12 col-lg-4 mb-4">
                        <div class="cuadro-sucursales py-5">
                            <img src="https://res.cloudinary.com/dhigl3clg/image/upload/v1676310974/amtiEcommerce/icono-ubicacion-fondo_lj1npd.png" alt="2" class="img-fluid icono-suc"/>
                            <div class="mx-5">
                                <h1 class="txt-color-tit titulos bold">Sucursal</h1>
                                <h1 class="txt-azul-oscuro titulos bold">Monterrey</h1>
                                <div class="my-4 parrafos txt-color-parrafo">
                                    <div class="mb-4">
                                        <a href="https://goo.gl/maps/4PbNimg6pkhDrRgq9" class="a_none_style txt-color-parrafo" target="_blank">
                                            <img src="https://res.cloudinary.com/dhigl3clg/image/upload/v1676310974/amtiEcommerce/icono-ubi-azul_zotx3g.png" alt="" class="img-fluid icon-suc float-start mb-3"/>
                                            <h6 class="regular top-menu txt-color-parrafo">Av. Dr. José Eleuterio González 250, Planta  </h6>
                                            <h6 class="regular top-menu txt-color-parrafo">Alta , San Jerónimo, 64634 Monterrey, N.L.</h6>
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
                    <div class="col-12 col-sm-12 col-md-12 col-lg-4 mb-4">
                        <div class="cuadro-sucursales py-5">
                            <img src="https://res.cloudinary.com/dhigl3clg/image/upload/v1676310974/amtiEcommerce/icono-ubicacion-fondo_lj1npd.png" alt="2" class="img-fluid icono-suc"/>
                            <div class="mx-5">
                                <h1 class="txt-color-tit titulos bold">Sucursal</h1>
                                <h1 class="txt-azul-oscuro titulos bold">Ciudad de México</h1>
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
                    
        
                </div>
            </div>
        </div>
    </div>



     <!-- FOOTER -->
     @include('components.footer')
     @include('components.scripts')
</body>
</html>