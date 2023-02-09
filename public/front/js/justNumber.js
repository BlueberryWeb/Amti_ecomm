let inputsNumber = document.querySelectorAll('input.number');

for(let i=0; i< inputsNumber.length; i++){
    inputsNumber[i].addEventListener('keypress', function (e){
        if (!justNumber(e)){ e.preventDefault(); }
    });
}

const  justNumber = (e) => {
    let  key = String.fromCharCode(e.charCode)
    const expression = '^[0-9]+$';

    if( key.match(expression)  ) return true; 
}