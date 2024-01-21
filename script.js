"use strict";


$(document).ready(function () {
    
    $("#btn1").click(function () {
        $("#parrafo2, #parrafo3, #mapa").slideUp(1000);
        $("#parrafo").slideToggle(1000);
    });
});


$(document).ready(function () {
    $("#btn2").click(function () {
        $("#parrafo, #parrafo3, #mapa").slideUp(1000);
        $("#parrafo2").slideToggle(1000);
    });
});


$(document).ready(function () {
    $("#btn3").click(function () {
        $("#parrafo, #parrafo2, #mapa").slideUp(1000);
        $("#parrafo3").slideToggle(1000);
    });
});


$(document).ready(function () {
    $("#btn4").click(function () {
        $("#parrafo, #parrafo2, #parrafo3").slideUp(1000);
        $("#mapa").slideToggle(1000);
    });
});


$(document).ready(function () {
    $(".cambio").mouseenter(function () {
        let originalSrc = $(this).data("original-src");
        let newSrc = "fotos/lavanda.png"; 
        let originalText = $(this).data("original-text");
        let newText = "Foto de nuestro logo"; 
        $(this).find("img").attr("src", newSrc);
        $(this).find(".overlay-text").text(newText);
    }).mouseleave(function () {
        let originalSrc = $(this).data("original-src");
        let originalText = $(this).data("original-text");
        $(this).find("img").attr("src", originalSrc);
        $(this).find(".overlay-text").text(originalText);
    });
});

let patronNombre = "^[a-zA-ZáéíóúüÁÉÍÓÚÜ\\s]{4,30}$";
let patronEmail = "^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\\.[a-zA-Z]{2,4}$";

function generarNumerosAleatorios() {
    let num1 = Math.floor(Math.random() * 10) + 1;
    let num2 = Math.floor(Math.random() * 10) + 1;
    let sumaCaptcha = num1 + num2;
    return { num1, num2, sumaCaptcha };
}

let { num1, num2, sumaCaptcha } = generarNumerosAleatorios();

$("#num1").text(num1);
$("#num2").text(num2);





$("#captcha-display").text(`Captcha: ¿Cuánto es ${num1} + ${num2}?`);

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
$(function () {
    validarFormulario("#contacto");
});

$(document).ready(function () {
    $(" input,  textarea").on("focusin", function () {
        $(this).addClass("bg-warning"); 
    });

    $(" input, textarea").on("focusout", function () {
        $(this).removeClass("bg-warning"); 
    });
});

$(document).ready(function(){
    $("#boton").click(function(){
        $("#explicacion").toggle();
    });
});

$(document).ready(function() {
    $(window).scroll(function() {
      if ($(this).scrollTop() > 0) {
        $('#header').addClass('fixed');
      } else {
        $('#header').removeClass('fixed');
      }
    });
  });

  $(document).ready(function() {
    $("#github").click(function() {
       
        $(this).css("color", "red"); 

        $("#githubMessage").show();
    });
});


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

