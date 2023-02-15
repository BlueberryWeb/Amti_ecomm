

let factura = document.getElementById('chkFactura');
let facturaSent = document.getElementById('factura');

factura.addEventListener('change', function(){
    if(factura.checked) facturaSent.setAttribute('value', "Si");
    else facturaSent.setAttribute('value', "No");
});
