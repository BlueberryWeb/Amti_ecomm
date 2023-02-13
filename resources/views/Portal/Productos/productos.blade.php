<x-app-layout>
    {{--PRODUCTOS Y ENVIOS--}}
    <div class="row align-items-start">
        <div class="col-9">
            <h2 class="display-8"> <b style="color: #163B5B"> Productos:</b> </h2>
        </div>
    </div>
    <hr>
    <div class="card card-body">
        <div class="row">
            <div class="col">
                <h4><b>Nombre:</b></h4>
            </div>
            <div class="col">
                <h4><b>Vigencia:</b></h4>
            </div>
            <div class="col">
                <h4><b>Precio:</b></h4>
            </div>
        </div><hr>
        @foreach ($productos as $producto)
            <div class="row">
                <div class="col">
                    <p>{{$producto->nombre}}</p>
                </div>
                <div class="col">
                    <p>{{$producto->vigencia}}</p>
                </div>
                <div class="col">
                    <p>${{$producto->precio}}</p>
                </div>
                <hr>
            </div>            
        @endforeach
    </div>

    <div class="row align-items-start">
        <div class="col-9">
            <h2 class="display-8"> <b style="color: #163B5B"> Envios:</b> </h2>
        </div>
    </div>
    <hr>
    <div class="card card-body">
        <div class="row">
            <div class="col">
                <h4><b>Tipo:</b></h4>
            </div>
            <div class="col">
                <h4><b>Días de entrega (mínimo):</b></h4>
            </div>
            <div class="col">
                <h4><b>Días de entrega (máximo):</b></h4>
            </div>
            <div class="col">
                <h4><b>Descripción:</b></h4>
            </div>
        </div><hr>
        @foreach ($envios as $envio)
            <div class="row">
                <div class="col">
                    <p>{{$envio->nombre}}</p>
                </div>
                <div class="col">
                    <p>{{$envio->dias_entrega_min}}</p>
                </div>
                <div class="col">
                    <p>{{$envio->dias_entrega_max}}</p>
                </div>
                <div class="col">
                    <p>{{$envio->descripcion}}</p>
                </div>
                <hr>
            </div>            
        @endforeach
    </div>
</x-app-layout>