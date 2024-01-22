"use strict";

$(document).ready(function () {

// Ocultar elementos al cargar la página
    $("#parrafo, #parrafo2, #parrafo3, #mapa").hide();
// Controla clics en botones para mostrar/ocultar párrafos
    $("#btn1").click(function () {

        $("#parrafo2, #parrafo3, #mapa").slideUp(1000);

        $("#parrafo").slideToggle(1000);
    });

    $("#btn2").click(function () {
        $("#parrafo, #parrafo3, #mapa").slideUp(1000);
        $("#parrafo2").slideToggle(1000);
    });

    $("#btn3").click(function () {
        $("#parrafo, #parrafo2, #mapa").slideUp(1000);
        $("#parrafo3").slideToggle(1000);
    });

    $("#btn4").click(function () {
        $("#parrafo, #parrafo2, #parrafo3").slideUp(1000);
        $("#mapa").slideToggle(1000);
    });
});


// Cambios en imagen y texto al pasar el ratón
$(document).ready(function () {
       // Cambios al pasar el ratón
    $(".cambio").mouseenter(function () {
        let originalSrc = $(this).data("original-src");
        let newSrc = "fotos/lavanda.png"; 
        let originalText = $(this).data("original-text");
        let newText = "Foto de nuestro logo"; 
        $(this).find("img").attr("src", newSrc);
        $(this).find(".overlay-text").text(newText);
    }).mouseleave(function () {
                // Cambios al retirar el ratón

        let originalSrc = $(this).data("original-src");
        let originalText = $(this).data("original-text");
        $(this).find("img").attr("src", originalSrc);
        $(this).find(".overlay-text").text(originalText);
    });
});

// Patrones para validación
let patronNombre = "^[a-zA-ZáéíóúüÁÉÍÓÚÜ\\s]{4,30}$";
let patronEmail = "^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\\.[a-zA-Z]{2,4}$";
// Genera números aleatorios para el Captcha
function generarNumerosAleatorios() {
    let num1 = Math.floor(Math.random() * 10) + 1;
    let num2 = Math.floor(Math.random() * 10) + 1;
    let sumaCaptcha = num1 + num2;
    return { num1, num2, sumaCaptcha };
}
// Muestra los números generados en la página
let { num1, num2, sumaCaptcha } = generarNumerosAleatorios();

$("#num1").text(num1);
$("#num2").text(num2);



// Muestra la pregunta del Captcha en la página

$("#captcha-display").text(`Captcha: ¿Cuánto es ${num1} + ${num2}?`);

// Funciones de control y validación del formulario 

function controlInputs(id, patron) {
    if ($(id).val().match(patron)) {
        $(id).removeClass("error");
        $("#error-" + id.replace("#", "")).css("visibility", "hidden");
        return true;
    } else {
        $(id).addClass("error");
        $("#error-" + id.replace("#", "")).css("color", "red");
        $("#error-" + id.replace("#", "")).css("visibility", "visible");
        return false;
    }
}

function controlTextArea(id) {
    if ($(id).val().length > 10) {
        $(id).removeClass("error");
        $("#error-" + id.replace("#", "")).css("visibility", "hidden");
        return true;
    } else {
        $(id).addClass("error");
        $("#error-" + id.replace("#", "")).css("color", "red");
        $("#error-" + id.replace("#", "")).css("visibility", "visible");
        return false;
    }
}

function controlCheckBox(id) {
    if ($(id).is(":checked")) {
        $(id).removeClass("error");
        $("#error-" + id.replace("#", "")).css("visibility", "hidden");
        return true;
    } else {
        $(id).addClass("error");
        $("#error-" + id.replace("#", "")).css("color", "red");
        $("#error-" + id.replace("#", "")).css("visibility", "visible");
        return false;
    }
}

function habilitarBtn(idFormulario) {
    $(idFormulario + " button.btn-primary").removeAttr("disabled");
}

function deshabilitarBtn(idFormulario) {
    $(idFormulario + " button.btn-primary").attr("disabled", "disabled");
}

function validarFormulario(idFormulario) {
    $(idFormulario).on("input", ":input", function () {
        let resultadoCaptcha = parseInt($("#captcha-entrada").val());
        let sumaCorrecta = resultadoCaptcha === sumaCaptcha;

        if (
            controlInputs("#nombre", patronNombre) &&
            controlInputs("#email", patronEmail) &&
            controlTextArea("#comentario") &&
            controlCheckBox("#legal") &&
            sumaCorrecta
        ) {
            habilitarBtn(idFormulario);
        } else {
            deshabilitarBtn(idFormulario);
        }
    });
}

// Llama a la función de validación para el formulario con ID "#contacto"
$(function () {
    validarFormulario("#contacto");
});

// Cambia el fondo de los inputs y textareas al enfocar y desenfocar

$(document).ready(function () {
    $(" input,  textarea").on("focusin", function () {
        $(this).addClass("bg-warning"); 
    });

    $(" input, textarea").on("focusout", function () {
        $(this).removeClass("bg-warning"); 
    });
});
// Mostrar/ocultar una sección al hacer clic en un botón
$(document).ready(function(){
    $("#boton").click(function(){
        $("#explicacion").toggle();
    });
});
// Mantener fijo el header al hacer desplazar la web hacia abajo
$(document).ready(function() {
    $(window).scroll(function() {
      if ($(this).scrollTop() > 0) {
        $('#header').addClass('fixed');
      } else {
        $('#header').removeClass('fixed');
      }
    });
  });
// Cambia el color del icono de github y añadir un texto al pulsarlo
  $(document).ready(function() {
    $("#github").click(function() {
       
        $(this).css("color", "red"); 

        $("#githubMessage").show();
    });
});
// Animación de cambio de tamaño del logo al pasar el ratón por encima

    $(document).ready(function () {
        
        $(".col-md-3 img").mouseenter(function () {
            $(this).animate({
                width: "60%", 
                height: "60%"  
            }, 500); 
        });

  
        $(".col-md-3 img").mouseleave(function () {
            $(this).animate({
                width: "65px",  
                height: "75px"  
            }, 500); 
        });
    });

   // Agrega elementos antes y después de  elementos en la página

    $(document).ready(function () {
   $("<p>Pulsa los botones para saber mas sobre nosotros</p>").insertBefore("#encabezado");
    $(".caja").prepend("<h3>Menú desplegable</h3>");
        
   let nuevoElemento = $("<h5>Aquí tienes fotos de nuestras oficinas</h5>");

        $("h3.mb-5").after(nuevoElemento);
    });

// Asigna colores a elementos de una lista
    
    $(document).ready(function () {
        let colors = ['#ff9999', '#66b3ff', '#99ff99', '#ffcc99']; 

        $("#servicios-lista li").each(function (index) {
            let color = colors[index % colors.length];
            $(this).addClass("list-item-color").css("background-color", color);
        });
    });
// Ajusta el tamaño de texto de las label  en función del tamaño de la ventana
    $(document).ready(function () {
 
        function aumentarTamano() {
            let windowWidth = $(window).width();
            let labelFontSize = windowWidth < 768 ? '25px' : '14px'; 
    
     
            $('form label.form-label').css('font-size', labelFontSize);
        }

        aumentarTamano();
    

        $(window).resize(function () {
            aumentarTamano();
        });
    });
    