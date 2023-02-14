

let factura = document.getElementById('chkFactura');
let facturaSent = document.getElementById('factura');
factura.addEventListener('change', function(){
    console.log(factura);
    if(factura.checked) facturaSent.setAttribute('value', "Si");
    else facturaSent.setAttribute('value', "No");
});


let vigencia = document.getElementById('vigencia');
let vigencia2 = document.getElementById('vigencia2');
let vigencia3 = document.getElementById('vigencia3');

let vigenciaSent = document.getElementById('vigenciaSent');

vigencia.addEventListener('change', function(){
    vigenciaSent.setAttribute('value', vigencia.value);
});
vigencia2.addEventListener('change', function(){
    vigenciaSent.setAttribute('value', vigencia2.value);
});
vigencia3.addEventListener('change', function(){
    vigenciaSent.setAttribute('value', vigencia3.value);
});