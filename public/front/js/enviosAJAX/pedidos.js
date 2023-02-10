const agregarPedido = () => {

    let validate = $('#register_form').valid();

    if( validate ){
        document.getElementById("register_form").submit();
    }
}