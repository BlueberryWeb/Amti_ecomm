function getFactura(factura){

    facturaSent = document.getElementById('factura');
    
    factura.addEventListener('change', function(){
        if(this.checked) facturaSent.setAttribute('value', "Si");
        else facturaSent.setAttribute('value', "No");
    });
}