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
        let newText = "Foto de nuestro logo"; // Cambia esto con el nuevo texto
        $(this).find("img").attr("src", newSrc);
        $(this).find(".overlay-text").text(newText);
    }).mouseleave(function () {
        let originalSrc = $(this).data("original-src");
        let originalText = $(this).data("original-text");
        $(this).find("img").attr("src", originalSrc);
        $(this).find(".overlay-text").text(originalText);
    });
});