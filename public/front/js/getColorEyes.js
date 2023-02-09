const getEyes = (color) => {
    console.log(color);
    let color_ojos = color.textContent;
    let ojosHidden =  document.getElementById('color_ojos');

    ojosHidden.setAttribute('value', color_ojos.trim());

    let previewOjos = document.getElementById('previewOjos');
    previewOjos.innerHTML = color_ojos.trim();
}