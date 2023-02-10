const enviarProspecto = () => {   
    let validate =  $('#register_form').valid();
    if( validate ){
        const data = new FormData();
    
        data.append("fullName", document.getElementById("fullName").value);
        data.append("phone", document.getElementById("phone").value);
        data.append("_token", $('[name="_token"]').val());
    
        fetch("/licencia/prospecto/add", {
            method: "POST",
            body: data,
            procesData: false
        })
        .then(response =>{});

    }
}