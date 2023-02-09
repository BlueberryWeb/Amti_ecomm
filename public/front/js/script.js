//animaciones
AOS.init();

//VALIDACIONES DEL FORMULARIO

// Ejemplo de JavaScript inicial para deshabilitar el envío de formularios si hay campos no válidos
(function () {
    'use strict'
    // Obtener todos los formularios a los que queremos aplicar estilos de validación de Bootstrap personalizados
    var forms = document.querySelectorAll('.needs-validation')
  
    // Bucle sobre ellos y evitar el envío
    Array.prototype.slice.call(forms)
      .forEach(function (form) {
        form.addEventListener('submit', function (event) {
          if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
          }
  
          form.classList.add('was-validated')
        }, false)
      })
  })()

// FLUJO DE COMPRA

// ------------step-wizard-------------
$(document).ready(function () {
  $('.nav-tabs > li a[title]').tooltip();
  
  //Wizard
  $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
      
      var target = $(e.target);
  
      if (target.parent().hasClass('disabled')) {
          return false;
      }
  });

  $(".next-step").click(function (e) {
    
    // if( !$('#register_form').valid() ) return false
    
      var active = $('.wizard .nav-tabs li.active');
      active.next().removeClass('disabled');
      nextTab(active);

  });
  
  $(".prev-step").click(function (e) {
      var active = $('.wizard .nav-tabs li.active');
      prevTab(active);

  });
});

function nextTab(elem) {
  $(elem).next().find('a[data-toggle="tab"]').click();
}

function prevTab(elem) {
  $(elem).prev().find('a[data-toggle="tab"]').click();
}


$('.nav-tabs').on('click', 'li', function() {
  $('.nav-tabs li.active').removeClass('active');
  $(this).addClass('active');
});

//Drop de color de ojos
$(document).ready(function() {
  $(".drop-image").each(function() {
    $(".option-image").click(function() {
      var val = $(this).attr("data-value"),
          $drop = $(".drop-image"),
          prevActive = $(".drop-image .option-image.active").attr("data-value"),
          options = $(".drop-image .option-image").length;

      $drop.toggleClass("visible");
      $drop.removeClass("withBG");
      $(this).css("top");
      $drop.toggleClass("opacity");
      
      if ($drop.hasClass("visible")) {
        setTimeout(function() {
          $drop.addClass("withBG");
        }, 400 + options * 100);
      }
      if (val !== "placeholder" || prevActive === "placeholder") {
        $(".drop-image .option-image").removeClass("active");
        $(this).addClass("active");
      }
    });
  });
});

//ACCORDION DE FAQ'S
var accord = document.getElementsByClassName("accordionFaqs-btn");
var i;

for (i = 0; i < accord.length; i++) {
    accord[i].onclick = function() {
        this.classList.toggle("active");
        this.nextElementSibling.classList.toggle("show");
    }
}

//CARROUSEL DE OPINIONES
let x = 0;
let p = -10;
// /*let i = 1;*/
let doom = document.getElementsByClassName('item');
let confr = (doom.length - 3)*(-350);
let confl = 0;
//left
document.getElementById("l").addEventListener("click", function(){
       x += 350;
       if (x > confl){x = confr - 350}else{
    document.getElementById("move").style.marginLeft = x + "px";}
});
//right
document.getElementById("r").addEventListener("click", function(){
    x += -350;
    p += -10;
    if (x < confr){x = 350}else{
    document.getElementById("move").style.marginLeft = x + "px";}
});

// Obtener el valor del checkbox de la factura //
