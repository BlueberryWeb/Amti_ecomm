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

                                <a href="tel:+523327903393" class="a_none_style text-white" target="_blank">
                                    <h4 class="regular titulos"><b class="bold">GDL:</b> 332 790 3393</h4>
                                </a>
                                <a href="tel:+525540324042" class="a_none_style text-white" target="_blank">
                                    <h4 class="regular titulos"><b class="bold">CDMX: </b> 554 032 4042</h4>
                                </a>
                                <a href="tel:+528132532915" class="a_none_style text-white" target="_blank">
                                    <h4 class="regular titulos"><b class="bold">MTY:</b>  813 253 2915</h4>
                                </a>
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
    </div>
</div>