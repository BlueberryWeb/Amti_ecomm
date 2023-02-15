<x-app-layout>

    @php
        $semaforo = true;
        $date = $startDay;
        
        for ($i = 0; $i < $semanas; $i++) {
            $pivot = $date;
            $semana_dias = intval(7 - date('w', strtotime($date)));
            $date = date('Y-m-d', strtotime($date . '+ '. $semana_dias .' days'));
            switch ($i) {
                case '0':
                    if ($semana_dias == 7) {
                        $prospectosS1 = $prospectosDelMes->where('created_at', $startDay)->count();
                        $pedidosS1 = $pedidosDelMes->where('created_at', $startDay)->count();                        
                    } else {
                        $prospectosS1 = $prospectosDelMes
                            ->where('created_at', '>=', $startDay)
                            ->where('created_at', '<=', $date)
                            ->count();
                        $pedidosS1 = $pedidosDelMes
                            ->where('created_at', '>=', $startDay)
                            ->where('created_at', '<=', $date)
                            ->count();                       
                    }
                    break;
        
                case '1':
                    $prospectosS2 = $prospectosDelMes
                        ->where('created_at', '>=', $pivot)
                        ->where('created_at', '<=', $date)
                        ->count();
                    $pedidosS2 = $pedidosDelMes
                        ->where('created_at', '>=', $pivot)
                        ->where('created_at', '<=', $date)
                        ->count();              
                    break;
        
                case '2':
                    $prospectosS3 = $prospectosDelMes
                        ->where('created_at', '>=', $pivot)
                        ->where('created_at', '<=', $date)
                        ->count();
                    $pedidosS3 = $pedidosDelMes
                        ->where('created_at', '>=', $pivot)
                        ->where('created_at', '<=', $date)
                        ->count();
                    break;
        
                case '3':
                    $prospectosS4 = $prospectosDelMes
                        ->where('created_at', '>=', $pivot)
                        ->where('created_at', '<=', $date)
                        ->count();
                    $pedidosS4 = $pedidosDelMes
                        ->where('created_at', '>=', $pivot)
                        ->where('created_at', '<=', $date)
                        ->count();
                    break;
            }
        }
    @endphp

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="preloader">
        <svg class="spinner-grow lds-ripple" width="37" height="48" viewbox="0 0 37 48" fill="none"
            xmlns="http://www.w3.org/2000/svg">
        </svg>
    </div>

    <div class="container">

        {{-- ENCABEZADO --}}
        <div class="row page-titles">
            <div class="col-md-5 col-12 align-self-center">
                <h3 class="text-themecolor mb-0">Dashboard</h3>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>
            <div class="col-md-7 col-12 align-self-center d-none d-md-block">
                <div class="d-flex mt-2 justify-content-end">
                    <div class="d-flex me-3 ms-2">
                        <div class="chart-text me-2">
                            <h6 class="mb-0"><small>Este mes</small></h6>
                            <h4 class="mt-0 text-info">${{ $gananciaActual }}</h4>
                        </div>
                        <div class="spark-chart">
                            <div id="monthchart"></div>
                        </div>
                    </div>
                    <div class="d-flex ms-2">
                        <div class="chart-text me-2">
                            <h6 class="mb-0"><small>Último mes</small></h6>
                            <h4 class="mt-0 text-primary">${{ $gananciaAnterior }}</h4>
                        </div>
                        <div class="spark-chart">
                            <div id="lastmonthchart"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- INFORMACION DE PROSPECTOS, PEDIDOS Y PEDIDOS FINALIZADOS --}}
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-row">
                            <div
                                class="round round-lg text-white d-flex align-items-center justify-content-center rounded-circle bg-success">
                                <i data-feather="user" class="fill-white feather-lg"></i>
                            </div>
                            <div class="ms-2 align-self-center">
                                <h3 class="mb-0">{{ $ConPros }}</h3>
                                <h6 class="text-muted mb-0">Prospectos del mes</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-row">
                            <div
                                class="round round-lg text-white d-flex align-items-center justify-content-center rounded-circle bg-info">
                                <i data-feather="user" class="fill-white feather-lg"></i>
                            </div>
                            <div class="ms-2 align-self-center">
                                <h3 class="mb-0">{{ $ConPed }}</h3>
                                <h6 class="text-muted mb-0">Pedidos exitosos del mes</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-row">
                            <div
                                class="round round-lg text-white d-flex justify-content-center align-items-center rounded-circle bg-primary">
                                <i data-feather="check-circle" class="fill-white feather-lg"></i>
                            </div>
                            <div class="ms-2 align-self-center">
                                <h3 class="mb-0">{{ $pedidosFinalizadosDelMes }}</h3>
                                <h6 class="text-muted mb-0"> Pedidos Finalizados</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- GRAFICA --}}
        <div class="row">
            <div class="col-lg-12 d-flex align-items-stretch">
                <div class="card w-100">
                    <div class="card-body">
                        <div class="d-flex flex-wrap">
                            <div>
                                <h3 class="card-title">AMTI </h3>
                                <h6 class="card-subtitle">Distribución efectiva de venta mensual.</h6>
                            </div>
                            <div class="ms-auto align-self-center">
                                <ul class="list-inline mb-0">
                                    <li class="list-inline-item px-2">
                                        <h6 class="text-success"><i class="fa fa-circle font-10 me-2 "></i>Prospectos
                                        </h6>
                                    </li>
                                    <li class="list-inline-item px-2">
                                        <h6 class="text-info"><i class="fa fa-circle font-10 me-2"></i>Pedidos</h6>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div id="prospectosVSpedidos"></div>
                        <div class="row text-center">
                            <div class="col-lg-4 col-md-4 mt-3">
                                <h1 class="mb-0 fw-light">{{ round($mediaProspecto, 1) }}</h1><small>Prospecto Media
                                    (Mes)</small>
                            </div>
                            <div class="col-lg-4 col-md-4 mt-3">
                                <h1 class="mb-0 fw-light">{{ round($porcentajeExito, 2) }}%</h1><small>% Exito</small>
                            </div>
                            <div class="col-lg-4 col-md-4 mt-3">
                                <h1 class="mb-0 fw-light">{{ round($mediaPedido, 1) }}</h1><small>Pedidos Media
                                    (Mes) </small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- GRAFICAS DE PASTEL (DONA) --}}
        <div class="row">
            <!-- Productos más vendidos -->
            <div class="col-lg-4 d-flex align-items-stretch">
                <div class="card w-100">
                    <div class="card-body">
                        <h3 class="card-title">Productos más vendidos</h3>
                        <h6 class="card-subtitle">Total</h6>
                        <div id="productosMasVendidos" class="mt-4"></div>
                    </div>
                    <div class="card-body text-center border-top">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item px-2">
                                <h6 class="text-info"><i class="fa fa-circle font-10 me-2 "></i>1 año</h6>
                            </li>
                            <li class="list-inline-item px-2">
                                <h6 class=" text-success"><i class="fa fa-circle font-10 me-2"></i>3 años</h6>
                            </li>
                            <li class="list-inline-item px-2">
                                <h6 class=" text-primary"><i class="fa fa-circle font-10 me-2"></i>5 años</h6>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Estatus de pedidos -->
            <div class="col-lg-4 d-flex align-items-stretch">
                <div class="card w-100">
                    <div class="card-body">
                        <h3 class="card-title">Estatus de pedidos</h3>
                        <h6 class="card-subtitle">Todos los pedidos</h6>
                        <div id="estatusPedidos" class="mt-4"></div>
                    </div>
                    <div class="card-body text-center border-top">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item px-2">
                                <h6 class="text-info"><i class="fa fa-circle font-10 me-2 "></i>Exitoso</h6>
                            </li>
                            <li class="list-inline-item px-2">
                                <h6 class=" text-success"><i class="fa fa-circle font-10 me-2"></i>No exitoso</h6>
                            </li>
                            <li class="list-inline-item px-2">
                                <h6 class=" text-primary"><i class="fa fa-circle font-10 me-2"></i>Finalizado</h6>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Envios solicitados -->
            <div class="col-lg-4 d-flex align-items-stretch">
                <div class="card w-100">
                    <div class="card-body">
                        <h3 class="card-title">Envíos más solicitados</h3>
                        <h6 class="card-subtitle">Total</h6>
                        <div id="enviosMasSolicitados" class="mt-4"></div>
                    </div>
                    <div class="card-body text-center border-top">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item px-2">
                                <h6 class="text-info"><i class="fa fa-circle font-10 me-2 "></i>Estandar</h6>
                            </li>
                            <li class="list-inline-item px-2">
                                <h6 class=" text-success"><i class="fa fa-circle font-10 me-2"></i>Express
                                </h6>
                            </li>
                            <li class="list-inline-item px-2">
                                <h6 class=" text-primary"><i class="fa fa-circle font-10 me-2"></i>Recogerla
                                </h6>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>




    <script src="{{ asset('assets/libs/apexcharts/dist/ApexCharts.min.js') }}"></script>
    {{-- TODAS LAS GRAFICAS --}}
    <script>
        /*----------PROSPECTOS VS PEDIDOS----------*/
        var versus = {
            series: [{
                    name: "Prospectos ",
                    data: [0, {{ $prospectosS1 }}, {{ $prospectosS2 }}, {{ $prospectosS3 }}, {{ $prospectosS4 }}, 0],
                },
                {
                    name: "Pedidos ",
                    data: [0, {{ $pedidosS1 }}, {{ $pedidosS2 }}, {{ $pedidosS3 }}, {{ $pedidosS4 }}, 0],
                },
            ],
            chart: {
                fontFamily: 'Poppins,sans-serif',
                height: 270,
                type: "area",
                toolbar: {
                    show: false,
                },
            },
            fill: {
                type: 'gradient',
                gradient: {
                    shadeIntensity: 1,
                    opacityFrom: 0.5,
                    opacityTo: 0.5,
                    stops: [0, 90, 100]
                },
                colors: ['#1e88e5', '#21c1d6']
            },
            grid: {
                show: true,
                strokeDashArray: 3,
                borderColor: "rgba(0,0,0,.1)",
                xaxis: {
                    lines: {
                        show: true,
                    },
                },
                yaxis: {
                    lines: {
                        show: true,
                    },
                },
            },
            colors: ["#21c1d6", "#1e88e5"],
            dataLabels: {
                enabled: false,
            },
            stroke: {
                curve: "smooth",
                width: 2,
            },
            markers: {
                size: 3,
                strokeColors: "transparent",
            },
            xaxis: {
                categories: ["0", "1", "2", "3", "4", "5"],
                labels: {
                    style: {
                        colors: "#a1aab2",
                    },
                },
            },
            yaxis: {
                labels: {
                    style: {
                        colors: "#a1aab2",
                    },
                },
            },
            tooltip: {
                x: {
                    format: "dd/MM/yy HH:mm",
                },
                theme: "dark",
            },
            legend: {
                show: false,
            },
        };

        var chart_area_spline = new ApexCharts(document.querySelector("#prospectosVSpedidos"), versus);
        chart_area_spline.render();


        /*----------VENTAS--------*/
        var sales = {

            series: [{{ $plan1 }}, {{ $plan2 }}, {{ $plan3 }}],
            labels: ["1 año", "3 años", "5 años"],
            chart: {
                type: 'donut',
                height: 250,
                fontFamily: 'Poppins,sans-serif',
            },
            dataLabels: {
                enabled: false,
            },
            stroke: {
                width: 0,
            },
            plotOptions: {
                pie: {
                    expandOnClick: true,
                    donut: {
                        size: '83',
                        labels: {
                            show: true,
                            name: {
                                show: true,
                                offsetY: 7,

                            },
                            value: {
                                show: false,
                            },
                            total: {
                                show: true,
                                color: '#a1aab2',
                                fontSize: '13px',
                                label: 'Productos',
                            }
                        },
                    },
                },
            },
            colors: ['#1e88e5', '#26c6da', '#745af2'],
            tooltip: {
                show: true,
                fillSeriesColor: false,
            },
            legend: {
                show: false
            },
            responsive: [{
                breakpoint: 1025,
                options: {
                    chart: {
                        height: 270,
                    },
                }
            }, {
                breakpoint: 426,
                options: {
                    chart: {
                        height: 250,
                    },
                }
            }]
        };

        var chart_pie_sales = new ApexCharts(document.querySelector("#productosMasVendidos"), sales);
        chart_pie_sales.render();

        /*--------ENVIOS----------*/
        var deliveries = {

            series: [{{ $estandar }}, {{ $express }}, {{ $recoger }}],
            labels: ["Estandar", "Express", "Recogerla"],
            chart: {
                type: 'donut',
                height: 250,
                fontFamily: 'Poppins,sans-serif',
            },
            dataLabels: {
                enabled: false,
            },
            stroke: {
                width: 0,
            },
            plotOptions: {
                pie: {
                    expandOnClick: true,
                    donut: {
                        size: '83',
                        labels: {
                            show: true,
                            name: {
                                show: true,
                                offsetY: 7,

                            },
                            value: {
                                show: false,
                            },
                            total: {
                                show: true,
                                color: '#a1aab2',
                                fontSize: '13px',
                                label: 'Envíos',
                            }
                        },
                    },
                },
            },
            colors: ['#1e88e5', '#26c6da', '#745af2'],
            tooltip: {
                show: true,
                fillSeriesColor: false,
            },
            legend: {
                show: false
            },
            responsive: [{
                breakpoint: 1025,
                options: {
                    chart: {
                        height: 270,
                    },
                }
            }, {
                breakpoint: 426,
                options: {
                    chart: {
                        height: 250,
                    },
                }
            }]
        };

        var chart_pie_deliveries = new ApexCharts(document.querySelector("#enviosMasSolicitados"), deliveries);
        chart_pie_deliveries.render();

        /*--------ESTATUS----------*/
        var statusP = {

            series: [{{ $exitosos }}, {{ $noExitosos }}, {{ $finalizados }}],
            labels: ["Exitoso", "No exitoso", "Finalizado"],
            chart: {
                type: 'donut',
                height: 250,
                fontFamily: 'Poppins,sans-serif',
            },
            dataLabels: {
                enabled: false,
            },
            stroke: {
                width: 0,
            },
            plotOptions: {
                pie: {
                    expandOnClick: true,
                    donut: {
                        size: '83',
                        labels: {
                            show: true,
                            name: {
                                show: true,
                                offsetY: 7,

                            },
                            value: {
                                show: false,
                            },
                            total: {
                                show: true,
                                color: '#a1aab2',
                                fontSize: '13px',
                                label: 'Estatus',
                            }
                        },
                    },
                },
            },
            colors: ['#1e88e5', '#26c6da', '#745af2'],
            tooltip: {
                show: true,
                fillSeriesColor: false,
            },
            legend: {
                show: false
            },
            responsive: [{
                breakpoint: 1025,
                options: {
                    chart: {
                        height: 270,
                    },
                }
            }, {
                breakpoint: 426,
                options: {
                    chart: {
                        height: 250,
                    },
                }
            }]
        };

        var chart_pie_statusP = new ApexCharts(document.querySelector("#estatusPedidos"), statusP);
        chart_pie_statusP.render();
    </script>



</x-app-layout>
