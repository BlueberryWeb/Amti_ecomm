
// --> Precargar Nombre <-- //
let nombre =  document.getElementById('fullName')
let previewName = document.getElementById('previewName');
let previewName2 = document.getElementById('previewName2');
let nombreEnvio = document.getElementById('nombreEnvio');

nombre.addEventListener('keyup', () => {
    previewName.innerHTML = nombre.value;
    previewName2.innerHTML = nombre.value;
    nombreEnvio.innerHTML = nombre.value;
});

// --> Precargar Dirección <-- //
let calle = document.getElementById('calle');
let colonia = document.getElementById('colonia');
let numExterior = document.getElementById('numExterior');
let numInterior = document.getElementById('numInterior');
let previewDireccion = document.getElementById('previewDireccion');
let previewDireccion2 = document.getElementById('previewDireccion2');

const previewAddres = () => {
    let interior = numInterior.value === '' ? '' : ' Int. ' + numInterior.value;
    previewDireccion.innerHTML = calle.value + ' ' + colonia.value + ' #' + numExterior.value + (numInterior === '' ? '' : interior);
    previewDireccion2.innerHTML = calle.value + ' ' + colonia.value + ' #' + numExterior.value + (numInterior === '' ? '' : interior);
};

// --> Precargar País <--//
let pais = document.getElementById('pais');
let previewPais = document.getElementById('previewPais');

pais.addEventListener('change', () => {
    previewPais.innerHTML = pais.options[pais.selectedIndex].text;
});

// --> Precargar Sexo <-- //
let sexo = document.getElementById('sexo');
let previewSexo = document.getElementById('previewSexo');

sexo.addEventListener('change', () => {
    previewSexo.innerHTML = sexo.options[sexo.selectedIndex].text;
});

// --> Precargar Estatura <-- //
let estatura = document.getElementById('estatura');
let previewEstatura = document.getElementById('previewEstatura')

estatura.addEventListener('keyup', () => {
    previewEstatura.innerHTML = estatura.value
});

// --> Cargar Color de Cabello <-- //
let colorCabello = document.getElementById('colorCabello');
let previewCabello = document.getElementById('previewCabello');

colorCabello.addEventListener('change', () => {
    previewCabello.innerHTML = colorCabello.options[colorCabello.selectedIndex].text;
});

// --> Precargar Fotografía Personal <-- //
let imgPersonal = document.getElementById('imgPersonalFrente');
let previewImgPersonal = document.getElementById('previewImgPersonal');

imgPersonal.addEventListener('change', () => {

    if( imgPersonal.files && imgPersonal.files[0] ){
        let reader = new FileReader();

        reader.onload = (e) => {
            $('#previewImgPersonal').attr('src', e.target.result);
        }

        reader.readAsDataURL(imgPersonal.files[0]);
    }
});

// --> Precargar Fotografía de Firma <-- //
let imgFirma = document.getElementById('imgFirma');
let previewFirma = document.getElementById('previewImgFirma');

imgFirma.addEventListener('change', () => {
console.log('object');
    if( imgFirma.files && imgFirma.files[0] ){
        let reader = new FileReader();

        reader.onload = (e) => {
            $('#previewImgFirma').attr('src', e.target.result);
        }

        reader.readAsDataURL(imgFirma.files[0]);
    }
});
