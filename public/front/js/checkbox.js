const resetCheckBox = () => {
    let checkbox = this.document.getElementsByName('vigencia');
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