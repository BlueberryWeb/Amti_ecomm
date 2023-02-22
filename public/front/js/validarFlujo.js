let actual = 1;

const changeAttribute = (component) => {
    let attributeList = document.querySelector('.nav-tabs li.active');

    attributeList.setAttribute('class', 'disabled');

    component.querySelector('a').setAttribute('data-toggle', 'tab');
    component.setAttribute('class', 'active');
}

const validateFlujo = (selected) => {

    // let validacion = $('#register_form').valid();

    // if( !validacion ){
    //     let error = document.querySelectorAll('div.wizard label[class="error"]');
    
    //     error.forEach(element => {
    //         element.innerHTML = 'Este campo es requerido.';
    //     });
    // }

    // let step = selected.querySelector('a').href;
    // let numberStep;

    // switch (step) {
    //     case 'http://amti_ecomm.test/procesoCompra#step1':
    //         numberStep = 1;
    //     break;

    //     case 'http://amti_ecomm.test/procesoCompra#step2':
    //         numberStep = 2;
    //     break;

    //     case 'http://amti_ecomm.test/procesoCompra#step3':
    //         numberStep = 3;
    //     break;

    //     case 'http://amti_ecomm.test/procesoCompra#step4':
    //         numberStep = 4;
    //     break;

    //     case 'http://amti_ecomm.test/procesoCompra#step5':
    //         numberStep = 5;
    //     break;

    //     case 'http://amti_ecomm.test/procesoCompra#step6':
    //         numberStep = 6;
    //     break;

    //     case 'http://amti_ecomm.test/procesoCompra#step7':
    //         numberStep = 7;
    //     break;
    // }
    // if( numberStep == (actual + 1) ){
    //     if( !validacion ){
    //         selected.querySelector('a').setAttribute('data-toggle', '');
    //         setTimeout(() => {
    //             selected.querySelector('a').setAttribute('data-toggle', 'tab');
    //         }, 300);
    //     }
    //     else{
    //         actual = numberStep;
    //         changeAttribute(selected);
    //         if( numberStep == 2) enviarProspecto();
    //     }
    // }
    // else if( numberStep > (actual +1) ){
    //     selected.querySelector('a').setAttribute('data-toggle', '');
    // }
    // else if( numberStep < actual ){
    //     actual = numberStep;
    //     changeAttribute(selected);
    // }
}
