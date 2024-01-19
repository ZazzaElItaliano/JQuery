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
