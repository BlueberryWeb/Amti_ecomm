<div class="container-fluid bg-menu py-4 p-0">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-2">
                <div class="">
                    <a href="https://api.whatsapp.com/send?phone=5255403240423" class="a_none_style text-white" target="_blank">
                        <h6>
                            <img src="https://res.cloudinary.com/dhigl3clg/image/upload/v1676310969/amtiEcommerce/icono-cel-menu_u0i6in.png" alt="" class="img-fluid icono-menu"/>
                            55 4032 4042
                        </h6>
                    </a>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-2">
                <div class="">
                    <a href="mailto:contacto@amti.mx?Subject=Contactar%20para%20informes%20en%20AMTI" class="a_none_style text-white" target="_blank">
                        <i class="fa-regular fa-envelope me-3"></i>
                        contacto@amti.me
                    </a>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-3"></div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-5">
                <div class="">
                    <a href="https://goo.gl/maps/sPQYLW6SRJ1wTTbm6" class="a_none_style text-white" target="_blank">
                        <img src="https://res.cloudinary.com/dhigl3clg/image/upload/v1676310973/amtiEcommerce/icono-ubi-menu_cokbre.png" alt="" class="img-fluid icono-menu"/>
                        Av. Rubén Darío #586 int.8, Lomas de Guevara, CP: 44657 Guadalajara, Jal.
                    </a>
                </div>
            </div>
        </div>
    </div>
    <hr/>
    <nav class="navbar navbar-expand-lg navbar-light regular">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="https://res.cloudinary.com/dhigl3clg/image/upload/v1676310985/amtiEcommerce/logo-amti-gde_ff8yg0.png" alt="AMTI" class="img-fluid logo-menu"/>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon pt-1">
                    <i class="fa-solid fa-bars"></i>
                </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active text-white me-4 ms-4 top-menu" aria-current="page" href="{{ url('/') }}">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white me-4 top-menu" href="{{ route('comoFunciona') }}">¿Cómo funciona?</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white me-4 top-menu" href="{{ route('vigencias') }}">Vigencias y precios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white me-4 top-menu" href="{{ route('contacto') }}">Contacto</a>
                    </li>
               
                </ul>
                <div class="d-flex">
                    <div class="">
                        <a href="{{ route('procesoCompra')  }}" class="btn btn-primary btn-bordes-azul">Tamitar mi licencia</a>
                    </div>
                    <div class="ms-4 bolsa">
                        <a href="{{ route('procesoCompra')  }}" class="a_none_style text-white">
                            <img src="https://res.cloudinary.com/dhigl3clg/image/upload/v1676310968/amtiEcommerce/icono-bolsa-menu_lacrxb.png" alt="" class="img-fluid icono-bolsa"/>
                        </a>
                        <div class="items">
                            <h6 class="regular">6</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</div>
