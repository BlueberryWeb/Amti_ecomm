const resetCheckBox = () => {
    let checkbox = this.document.getElementsByClassName('checks');
    let Checked = null;
    
    for (let CheckBox of checkbox){
        CheckBox.onclick = function(){
          if(Checked!=null){
          Checked.checked = false;
          Checked = CheckBox;
        }
        Checked = CheckBox;
      }
    }
}

window.addEventListener('load', resetCheckBox);