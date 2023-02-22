// const accordionEnvio = () => {
//     let envio1 = document.getElementById('tipoEnvio1')
//     console.log(envio1);
// }

// window.addEventListener('load', accordionEnvio);

$('#tipoEnvio1').on('click', function(){

    if( $('#tipoEnvio1').prop('checked') ){

        $('#panelEnvio2').collapse('hide');
        $('#panelEnvio').collapse('show');
    }
    else{
        $('#panelEnvio').collapse('hide');
    }
});

$('#tipoEnvio2').on('click', function(){
    if( $('#tipoEnvio2').prop('checked') ){

        $('#panelEnvio2').collapse('hide');
        $('#panelEnvio').collapse('show');
    }
    else{
        $('#panelEnvio').collapse('hide');
    }
});

$('#tipoEnvio3').on('click', function(){
    if( $('#tipoEnvio3').prop('checked') ){
        
        $('#panelEnvio').collapse('hide');
        $('#panelEnvio2').collapse('show');
    }
    else{
        $('#panelEnvio2').collapse('hide');
    } 
});