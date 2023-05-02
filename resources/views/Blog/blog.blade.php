<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    @include('components.head')
    <title>AMTI | BLOG AMTI</title>
</head>
<body>
    @include('components.menu')

    <div class="container regular txt-color-parrafo">
        <div class="row pt-5">
            <div class="col-12 col-lg-1 col-sm-12 col-md-12"></div>
            <div class="col-12 col-lg-10 col-sm-12 col-md-12 pt-5">
                <h1 class="bold text-center big txt-color-tit pb-5">BLOG</h1>

                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-4 mb-4">
                        <div class="cuadro-blog py-5">
                            <img src="https://res.cloudinary.com/dhigl3clg/image/upload/v1676310974/amtiEcommerce/icono-ubicacion-fondo_lj1npd.png" alt="2" class="img-fluid icono-blog"/>
                            <div class="mx-5">
                                <img src="https://res.cloudinary.com/dhigl3clg/image/upload/v1676310997/amtiEcommerce/portada-video_iigwmb.png" alt="Imagen representativa del blog" class="img-fluid"/>
                                <div class=" my-3">
                                    <a href="{{ route('articulo') }}" class="a_none_style txt-azul-oscuro">
                                        <h1 class="txt-azul-oscuro titulos bold">Beneficios de una licencia internacional</h1>
                                    </a>
                                </div>
                                <br>
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-4 mb-4">
                        <div class="cuadro-blog py-5">
                            <img src="https://res.cloudinary.com/dhigl3clg/image/upload/v1676310974/amtiEcommerce/icono-ubicacion-fondo_lj1npd.png" alt="2" class="img-fluid icono-blog"/>
                            <div class="mx-5">
                                <img src="https://res.cloudinary.com/dhigl3clg/image/upload/v1676310997/amtiEcommerce/portada-video_iigwmb.png" alt="Imagen representativa del blog" class="img-fluid"/>
                                <div class=" my-3">
                                    <a href="{{ route('articulo') }}" class="a_none_style txt-azul-oscuro">
                                        <h1 class="txt-azul-oscuro titulos bold">Beneficios de una licencia internacional</h1>
                                    </a>
                                </div>
                                <br>
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-4 mb-4">
                        <div class="cuadro-blog py-5">
                            <img src="https://res.cloudinary.com/dhigl3clg/image/upload/v1676310974/amtiEcommerce/icono-ubicacion-fondo_lj1npd.png" alt="2" class="img-fluid icono-blog"/>
                            <div class="mx-5">
                                <img src="https://res.cloudinary.com/dhigl3clg/image/upload/v1676310997/amtiEcommerce/portada-video_iigwmb.png" alt="Imagen representativa del blog" class="img-fluid"/>
                                <div class=" my-3">
                                    <a href="{{ route('articulo') }}" class="a_none_style txt-azul-oscuro">
                                        <h1 class="txt-azul-oscuro titulos bold">Beneficios de una licencia internacional</h1>
                                    </a>
                                </div>
                                <br>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-1 col-sm-12 col-md-12"></div>
        </div>
    </div>



    <!-- FOOTER -->

    @include('components.footer')
    @include('components.scripts')
    
</body>
</html>