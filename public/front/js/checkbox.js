
const reset_checbox = (selected, className) => {
  let checks = document.getElementsByClassName(className);

  for(let check of checks){
    let id = '#' + check.id;
    $(id).prop('checked', false);
  }

  let idSelected = '#' + selected.id
  $( idSelected ).prop('checked', true)
}

