<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    @include('components.head')
    <script src="https://js.stripe.com/v3/"></script>
    <title>AMTI | Checkout</title>
</head>

<body>
    <div class="bg-azul-3 py-4">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-2">
                    <a class="a_none_style" href="{{ url('/') }}">
                        <img src="https://res.cloudinary.com/dhigl3clg/image/upload/v1676310985/amtiEcommerce/logo-amti-gde_ff8yg0.png"
                            alt="AMTI" class="img-fluid logo-menu" />
                    </a>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-8"></div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-2">
                    <div class="">
                        <a href="https://api.whatsapp.com/send?phone=525540324042"
                            class="btn btn-primary btn-bordes-azul regular" target="_blank">
                            <i class="fa-brands fa-whatsapp me-3"></i> 55 4032 4042
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="container-fluid p-0 py-5">
        <div class="row">
            <div class="pago-rechazado py-2">
                <h5 class="bold parrafos pt-1">Lo sentimos, no hemos podido procesar tu pago, por favor intenta con otro
                    método de pago</h5>
            </div>
        </div>
    </div> --}}
   
    <div class="container my-5">
        <div class="row">
            <div class="text-center mb-4">
                <img src="https://res.cloudinary.com/dhigl3clg/image/upload/v1676310960/amtiEcommerce/check_q2ila7.png" alt="Ilustración de Check" class="img-fluid check-img"/>
            </div>
            <div class="text-center mb-4">
                <h1 class="regular titulos mb-3">¡Enhorabuena!</h1>
                <h2 class="bold big mb-5">¡Tu pago ha sido confirmado!</h2>
                <p class="regular parrafos mb-0">En breve recibirás un correo electrónico con todos los detalles</p>
                <p class="regular parrafos mt-0">para la adquisición de tu licencia internacional AMTI</p>
            </div>
            <div class="text-center">
                <a href="{{ url('/')  }}" class="btn btn-primary regular">
                    Regresar al sitio
                </a>
            </div>
        </div>
    </div>


    @include('Flujo.components.modalPago')
    <!-- FOOTER -->
    <div class="container">
        <div class="row mb-3">
            <div class="col-12 col-sm-12 col-md-12 col-lg-3">
                <h6 class="parrafos txt-color-parrafo bold">Pagos del checkout seguros</h6>
                <img src="https://res.cloudinary.com/dhigl3clg/image/upload/v1676313844/amtiEcommerce/icono-secure_yvj46c.png"
                    alt="Certificado SecureTrust" class="img-fluid secure-trust" />
                <img src="https://res.cloudinary.com/dhigl3clg/image/upload/v1676313844/amtiEcommerce/icono-ssl_doufze.png"
                    alt="Certificado SSL" class="img-fluid ssl" />
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-5"></div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                <div class="text-end">
                    <h6 class="parrafos txt-color-parrafo bold">Medios y soluciones de pago</h6>
                    <img src="https://res.cloudinary.com/dhigl3clg/image/upload/v1676313844/amtiEcommerce/icono-visa_z6ckyo.png"
                        alt="Visa" class="img-fluid icono-pagos" />
                    <img src="https://res.cloudinary.com/dhigl3clg/image/upload/v1676313866/amtiEcommerce/icono-master_wyj2k0.png"
                        alt="Mastercard" class="img-fluid icono-pagos" />
                    <img src="https://res.cloudinary.com/dhigl3clg/image/upload/v1676313847/amtiEcommerce/icono-maestro_qf48fu.png"
                        alt="Maestro" class="img-fluid icono-pagos" />
                    <img src="https://res.cloudinary.com/dhigl3clg/image/upload/v1676313844/amtiEcommerce/icono-america_jtnih0.png"
                        alt="American Express" class="img-fluid icono-pagos" />
                    <img src="https://res.cloudinary.com/dhigl3clg/image/upload/v1676313866/amtiEcommerce/icono-oxxo_ajvd37.png"
                        alt="Oxxo" class="img-fluid icono-pagos" />
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                <h6 class="txt-color-parrafo regular parrafos">© 2023 AMTI, Todos los derechos reservados</h6>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                <h6 class="txt-color-parrafo regular parrafos"><a href="{{ route('terminos') }}"
                        class="a_none_style txt-color-parrafo regular parrafos">Términos y condiciones </a> • <a
                        href="{{ route('aviso') }}" class="a_none_style txt-color-parrafo regular parrafos">Aviso de
                        privacidad</a> </h6>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                <div class="text-end">
                    <a href="https://blueberry.mx/" class="a_none_style" target="_blank">
                        <img src="https://res.cloudinary.com/dej55trpk/image/upload/v1675785357/Blueberry%20animtion%20footer/blueberry-tech_smhi55.gif"
                            alt="Materialized by Blueberry" class="img-fluid bb-logo" />
                    </a>
                </div>

            </div>
        </div>
    </div>
    @include('components.scripts')

</body>

</html>
