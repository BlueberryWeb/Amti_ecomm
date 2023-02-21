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
                                                    <h3 class="semiBold h5">5 años</h3>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                                        <div class="text-center pt-4 pb-2 mx-3">
                                                            <img src="https://res.cloudinary.com/dhigl3clg/image/upload/v1676310985/amtiEcommerce/licenciaAMTI_nibmnp.png"
                                                                alt="Ilustración de licencia y libro AMTI"
                                                                class="img-fluid licencia-proceso" />

                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                                        <div class="mt-5">
                                                            <p class="regular txt-color-parrafo parrafos mb-0">Vigencia:
                                                                5 años</p>
                                                            <p class="regular parrafos tachado my-0">$4,900 MXN</p>
                                                            <p class="bold txt-color-tit h5">$3,700 MXN.</p>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                        <div class="text-end mt-4">
                                            <h6 class="regular txt-color-parrafo top-menu"><i>El precio ya incluye
                                                    Iva</i></h6>
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
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#panelsStayOpen-collapseTwo"
                                                        aria-expanded="false"
                                                        aria-controls="panelsStayOpen-collapseTwo">
                                                        Tarjeta de crédito o débito
                                                        <img src="https://res.cloudinary.com/dhigl3clg/image/upload/v1676313844/amtiEcommerce/icono-visa_z6ckyo.png"
                                                            alt="Visa" class="img-fluid icono-visa" />
                                                        <img src="https://res.cloudinary.com/dhigl3clg/image/upload/v1676313866/amtiEcommerce/icono-master_wyj2k0.png"
                                                            alt="Mastercard" class="img-fluid icono-master" />
                                                        <img src="https://res.cloudinary.com/dhigl3clg/image/upload/v1676313847/amtiEcommerce/icono-maestro_qf48fu.png"
                                                            alt="Maestro" class="img-fluid icono-mestro" />
                                                        <img src="https://res.cloudinary.com/dhigl3clg/image/upload/v1676313844/amtiEcommerce/icono-america_jtnih0.png"
                                                            alt="American Express" class="img-fluid icono-american" />
                                                    </button>
                                                </h2>
                                                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse"
                                                    aria-labelledby="panelsStayOpen-headingTwo">
                                                    <div class="accordion-body ms-3">
                                                        <form name="miformulario" action="{{ route('pedido.tarjeta') }}"
                                                            method="POST" style="margin-top: 1rem" id="card-form"
                                                            enctype="multipart/form-data" class="require-validation"
                                                            data-cc-on-file="false"
                                                            data-stripe-publishable-key="{{ env('STRIPE_KEY') }}">
                                                            {{ csrf_field() }}
                                                            <div id="pago_tarjeta">
                                                                <div class='form-row row'>
                                                                    <div class='col-xs-12 form-group required'>
                                                                        <label
                                                                            class='control-label'>Tarjetahabiente</label>
                                                                        <input class='form-control' size='4'
                                                                            type='text'>
                                                                    </div>
                                                                </div>
                                                                <br>
                                                                <div class='form-row row'>
                                                                    <div class='col-xs-12 form-group required'>
                                                                        <label class='control-label'>Numero de
                                                                            tarjeta</label> <input autocomplete='off'
                                                                            class='form-control card-number'
                                                                            size='20' type='text'>
                                                                    </div>
                                                                </div>
                                                                <br>
                                                                <div class='form-row row'>
                                                                    <div
                                                                        class='col-xs-12 col-md-4 form-group cvc required'>
                                                                        <label class='control-label'>CVC</label> <input
                                                                            autocomplete='off'
                                                                            class='form-control card-cvc'
                                                                            placeholder='ex. 311' size='4'
                                                                            type='text'>
                                                                    </div>
                                                                    <div
                                                                        class='col-xs-12 col-md-4 form-group expiration required'>
                                                                        <label class='control-label'>Mes</label> <input
                                                                            class='form-control card-expiry-month'
                                                                            placeholder='MM' size='2'
                                                                            type='text'>
                                                                    </div>
                                                                    <div
                                                                        class='col-xs-12 col-md-4 form-group expiration required'>
                                                                        <label class='control-label'>Año</label> <input
                                                                            class='form-control card-expiry-year'
                                                                            placeholder='YYYY' size='4'
                                                                            type='text'>
                                                                    </div>
                                                                </div>
                                                                <br>
                                                                <div class='form-row row text-center'>
                                                                    <div class='col-md-12 error form-group hide'>
                                                                        <div class='alert-info alert'>Llene los
                                                                            siguientes campos</div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-xs-12 text-center">
                                                                        <button id="realizar_pedido"
                                                                            style="background: #203c5c; color: white;"
                                                                            class="btn btn-primary btn-block"
                                                                            type="submit">Pagar</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <input type="hidden" name="total"
                                                                value="3700">
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- <div class="accordion-item txt-color-parrafo border-bottom">
                                                <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#panelsStayOpen-interbancaria"
                                                        aria-expanded="false"
                                                        aria-controls="panelsStayOpen-interbancaria">
                                                        <div class="form-check mt-1 accordion-fact">
                                                            <input class="form-check-input chkAll" type="checkbox"
                                                                value="" id="chkAccordion2All">
                                                        </div>
                                                        Transferencia interbancaria
                                                    </button>
                                                </h2>
                                                <div id="panelsStayOpen-interbancaria"
                                                    class="accordion-collapse collapse"
                                                    aria-labelledby="panelsStayOpen-headingTwo">
                                                    <div class="accordion-body ms-3">
                                                        <form action=""
                                                            class="form-efectivo regular txt-color-parrafo">
                                                            <div class="row">
                                                                <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                                                    <div class="mb-4">
                                                                        <label for="exampleInputEmail1"
                                                                            class="form-label">Nombre*</label>
                                                                        <input type="text" class="form-control"
                                                                            id="exampleInputEmail1"
                                                                            aria-describedby="emailHelp" required
                                                                            name="calle">
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                                                    <div class="mb-4">
                                                                        <label for="exampleInputEmail1"
                                                                            class="form-label">Correo
                                                                            electrónico*</label>
                                                                        <input type="text" class="form-control"
                                                                            id="exampleInputEmail1"
                                                                            aria-describedby="emailHelp" required
                                                                            name="calle">
                                                                    </div>
                                                                </div>
                                                                <div class="text-center mb-3">
                                                                    <a href=""
                                                                        class="btn btn-primary btn-generar-ficha">Generar
                                                                        ficha</a>
                                                                </div>
                                                                <h5
                                                                    class="top-menu regular txt-color-parrafo text-end">
                                                                    <i>Se generará una referencia por pago*</i></h5>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div> --}}
                                            <div class="accordion-item txt-color-parrafo border-bottom">
                                                <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#panelsStayOpen-efectivo"
                                                        aria-expanded="false" aria-controls="panelsStayOpen-efectivo">
                                                        Pago en efectivo
                                                        <img src="https://res.cloudinary.com/dhigl3clg/image/upload/v1676313866/amtiEcommerce/icono-oxxo_ajvd37.png"
                                                            alt="Oxxo" class="img-fluid icono-oxxo" />
                                                    </button>
                                                </h2>
                                                <div id="panelsStayOpen-efectivo" class="accordion-collapse collapse"
                                                    aria-labelledby="panelsStayOpen-headingTwo">
                                                    <div class="accordion-body ms-3">
                                                        <form id="payment-form">
                                                            <input type="hidden" name="total" value="3700">
                                                            <div class="form-group">
                                                                <div class="form-row">
                                                                    <label for="name">
                                                                        Nombre
                                                                    </label>
                                                                    <input class="form-control" id="name" name="name" required>
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <div class="form-group">
                                                                <div class="form-row">
                                                                    <label for="email">
                                                                        Correo electronico
                                                                    </label>
                                                                    <input class="form-control" id="email" name="email" required>
                                                                </div>
                                                            </div>
                                                            <input id="secret" value="{{ $secret }}" type="hidden" />
                                                            <!-- Used to display form errors. -->
                                                            <div id="error-message" role="alert"></div>
                                                            <br>
                                                            <div class="text-center">
                                                                <button id="submit-button" style="background: #203c5c; color: white;"
                                                                    class="btn btn-primary btn-block">Pagar con OXXO</button>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
        integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        const stripe = Stripe(
            'pk_test_51Low5nJFjkWFGhqUZZwP8ONNCCb8Wa70A0HZMmfK6d5jw1rdURoluCw2I9iDlmOUiKamidbJaoXbqoL6giC8mfDu00Ka1Ljq3J'
        );
        const form = document.getElementById('payment-form');
        const secretIntent = document.getElementById('secret').value;
        console.log(secretIntent);
        form.addEventListener('submit', async (event) => {
            event.preventDefault();

            const result = await stripe.confirmOxxoPayment(
                document.getElementById('secret').value, {
                    payment_method: {
                        billing_details: {
                            name: document.getElementById('name').value,
                            email: document.getElementById('email').value,
                        },
                    },
                });
            // Stripe.js will open a modal to display the OXXO voucher to your customer
            // This async function finishes when the customer closes the modal

            if (result.error) {
                // Display error to your customer
                const errorMsg = document.getElementById('error-message');
                errorMsg.innerText = result.error.message;
            }
        });
    </script>
    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
    <script type="text/javascript">
        $(function() {
            var $form = $(".require-validation");
            $('form.require-validation').bind('submit', function(e) {

                var $form = $(".require-validation"),
                    inputSelector = ['input[type=email]', 'input[type=password]',
                        'input[type=text]', 'input[type=file]',
                        'textarea'
                    ].join(', '),
                    $inputs = $form.find('.required').find(inputSelector),
                    $errorMessage = $form.find('div.error'),
                    valid = true;
                $errorMessage.addClass('hide');

                $('.has-error').removeClass('has-error');
                $inputs.each(function(i, el) {
                    var $input = $(el);
                    if ($input.val() === '') {
                        $input.parent().addClass('has-error');
                        $errorMessage.removeClass('hide');
                        e.preventDefault();
                    }
                });

                if (!$form.data('cc-on-file')) {
                    e.preventDefault();
                    Stripe.setPublishableKey($form.data('stripe-publishable-key'));
                    Stripe.createToken({
                        number: $('.card-number').val(),
                        cvc: $('.card-cvc').val(),
                        exp_month: $('.card-expiry-month').val(),
                        exp_year: $('.card-expiry-year').val()
                    }, stripeResponseHandler);
                }

            });

            function stripeResponseHandler(status, response) {
                if (response.error) {
                    $('.error')
                        .removeClass('hide')
                        .find('.alert')
                        .text(response.error.message);
                } else {
                    // token contains id, last4, and card type
                    pagar = document.getElementById('realizar_pedido');
                    pagar.disabled = true;
                    $('#loader').modal('show');
                    var token = response['id'];
                    // insert the token into the form so it gets submitted to the server
                    $form.find('input[type=text]').empty();
                    $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
                    $form.get(0).submit();
                }
            }
        });
    </script>
</body>

</html>
