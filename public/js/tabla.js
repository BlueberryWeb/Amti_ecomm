$(document).ready(function () {
    var table = $('#tabla').DataTable({
        autoWidth: false,
        dom: 'Bfrtip',
        "paging": true,
        "drawCallback": function( settings ) {
            $('ul.pagination').addClass("pagination-sm");
       },
        buttons: [
            
            {
                extend: 'excel',
                className: 'btn btn-sm btn-dark glyphicon glyphicon-list-alt'
            },
            {
                extend: 'pdf',
                className: 'btn btn-sm btn-dark glyphicon glyphicon-file'
            },
            {
                extend: 'print',
                className: 'btn btn-sm btn-dark glyphicon glyphicon-print'
            }
            
            
        ],
        "language": {
            "lengthMenu": "Mostrar MENU registros por pagina",
            "zeroRecords": "No se encontró ningún resultado",
            "info": "",
            "infoEmpty": "No se encontró ningún resultado",
            "infoFiltered": "(Filtrado de MAX registros totales)",
            'search': "Buscar:"
        },
        "drawCallback": function (settings) {
            $('ul.pagination').addClass("pagination-sm");
        }
    });
    $('.filter-input').keyup(function () {
        table.column($(this).data('column'))
            .search($(this).val())
            .draw();
    });
    $('.filter-select').change(function () {
        table.column($(this).data('column'))
            .search($(this).val())
            .draw();
    });
});