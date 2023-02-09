let inputsText = document.querySelectorAll('input.text');

for(let i=0; i< inputsText.length; i++){
    inputsText[i].addEventListener('keypress', function (e){
        if ( !justText(e) ) { e.preventDefault(); }
    });
}

const  justText = (e) => {
    let  key = String.fromCharCode(e.charCode)
    const expression = "^[ a-zA-ZñÑáéíóúÁÉÍÓÚ]+$";

    if( key.match(expression)  ) return true; 
}