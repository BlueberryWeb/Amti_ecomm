
function sales(plan1, plan2, plan3){
    var sales = {

        series: [plan1, plan2, plan3],
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
}

export { sales };