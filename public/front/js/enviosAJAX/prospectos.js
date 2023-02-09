const enviarProspecto = () => {   
    // if( !$('#register_form').valid() ) return false
    
    const data = new FormData();

    data.append("fullName", document.getElementById("fullName").value);
    data.append("phone", document.getElementById("phone").value);
    data.append("_token", $('[name="_token"]').val());

    console.log(data);
    fetch("/licencia/prospecto/add", {
        method: "POST",
        body: data,
        procesData: false
    })
    .then(response =>{
        console.log(response.text);
    });
}