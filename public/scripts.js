//Starrr



ScrollReveal().reveal('.aparece', {
    distance: '10%',
    origin: 'top',
    opacity: 0,
    delay: 200,
    easing: 'cubic-bezier(1, 1, 1, 1)'

});



ScrollReveal().reveal('.aparece2', {
    distance: '20%',
    origin: 'top',
    opacity: 0,

    delay: 300,
    easing: 'cubic-bezier(1, 1, 1, 1)'

});
ScrollReveal().reveal('.aparece3', {
    distance: '50%',
    origin: 'right',
    opacity: 0,

    delay: 300,
    easing: 'cubic-bezier(1, 1, 1, 1)'

});

ScrollReveal().reveal('.aparece5', {
    distance: '0%',
    origin: 'right',
    opacity: 0,

    delay: 300,
    easing: 'cubic-bezier(1, 1, 1, 1)'

});


ScrollReveal().reveal('.aparece4', {
    distance: '50%',
    origin: 'left',
    opacity: 0,

    delay: 300,
    easing: 'cubic-bezier(1, 1, 1, 1)'

});

const progressBar = document.querySelector("#progressBar");
let totalPageHeight = document.body.scrollHeight - window.innerHeight;
let ubicacionPrincipal = window.pageYOffset;
window.onscroll = function() {
    let Desplazamiento_Actual = window.pageYOffset;
    if (ubicacionPrincipal >= Desplazamiento_Actual) {
        document.getElementById('menu').style.top = '0px';
    } else {
        document.getElementById('menu').style.top = '-1000px';
    }
    ubicacionPrincipal = Desplazamiento_Actual;

    let newProgressHeight = (window.pageYOffset / totalPageHeight) * 100;
    progressBar.style.height = `${newProgressHeight}%`;
    progressBar.style.opacity = `${newProgressHeight}%`;
}









//scroll

var scrollPos = 0;

var lastScrollTop = 0;
$(window).scroll(function(event) {

    var windowHeight = $(window).scrollTop();
    var windowHeight2 = $(window).scrollTop();
    var windowHeight3 = $(window).scrollTop();
    var windowHeight4 = $(window).scrollTop();

    var golden = $("#textograndegolden").offset().top;
    var carruselvairo = $("#carruselvairo >.slick-list").offset().top;
    var carruselreleigh = $("#carruselreleigh >.slick-list").offset().top;
    windowHeight2 = windowHeight2 - golden + 150;
    windowHeight3 = windowHeight3 - carruselvairo + 150;
    windowHeight4 = windowHeight4 - carruselreleigh + 150;
    $('#textograndegolden').css('transform', 'translateX(' + windowHeight2 * 0.50 + 'px)');

    $('#carruselvairo >.slick-list').css('transform', 'translateX(' + windowHeight3 * -0.15 + 'px)');

    $('#carruselreleigh >.slick-list').css('transform', 'translateX(' + windowHeight4 * 0.15 + 'px)');



    windowHeight = windowHeight - 1250;
    var st = $(this).scrollTop();

    if (st > lastScrollTop) {



        $('.slider .slide-track').css('transform', 'translateX(' + windowHeight * 1.4 + 'px)');




    } else {

        $('.slider .slide-track').css('transform', 'translateX(' + windowHeight * 1.4 + 'px)');

    }





    lastScrollTop = st;
});




$(".capital").mouseover(function() {


    let elementoModificado = document.querySelector(".mapas > .letraverti > h1");
    elementoModificado.innerHTML = "Capital Federal";
    $("#gbanor").css("visibility", "visible");

});


$(".capital").mouseout(function() {

    $("#gbanor").css("visibility", "hidden");

});


$(".norte").mouseover(function() {

    let elementoModificado = document.querySelector(".mapas > .letraverti > h1");
    elementoModificado.innerHTML = "GBA Norte";
    $("#gbanor").css("visibility", "visible");
});


$(".norte").mouseout(function() {


    $("#gbanor").css("visibility", "hidden");

});


$(".sur").mouseover(function() {

    let elementoModificado = document.querySelector(".mapas > .letraverti > h1");
    elementoModificado.innerHTML = "GBA Sur";
    $("#gbanor").css("visibility", "visible");
});


$(".sur").mouseout(function() {


    $("#gbanor").css("visibility", "hidden");

});


$(".provincia").mouseover(function() {
    let elementoModificado = document.querySelector(".mapas > .letraverti > h1");
    elementoModificado.innerHTML = "Pcia. de Bs. As.";
    $("#gbanor").css("visibility", "visible");
});


$(".provincia").mouseout(function() {


    $("#gbanor").css("visibility", "hidden");

});


$(".oeste").mouseover(function() {

    let elementoModificado = document.querySelector(".mapas > .letraverti > h1");
    elementoModificado.innerHTML = "Gba Oeste";
    $("#gbanor").css("visibility", "visible");
});


$(".oeste").mouseout(function() {


    $("#gbanor").css("visibility", "hidden");

});