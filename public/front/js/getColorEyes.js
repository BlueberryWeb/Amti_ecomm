const getEyes = (color) => {
    let color_ojos = color.textContent;
    let ojosHidden =  document.getElementById('color_ojos');

    ojosHidden.setAttribute('value', color_ojos.trim());

    let previewOjos = document.getElementById('previewOjos');
    previewOjos.innerHTML = color_ojos.trim();
}

// const validateColor = () => {
//     let color = document.getElementById('color_ojos').value;
//     console.log(color);
//     if( color === '') return false
// }