$(document).ready(function() {



    /*==========================================*/
    /*================== AOS ===================*/
    /*==========================================*/
    AOS.init();



    /*==========================================*/
    /*================ Img Fluid ===============*/
    /*==========================================*/
    $(".imgLiquidFill").imgLiquid({
        verticalAlign: 'center'
    });



    /*==========================================*/
    /*================== Zoom ==================*/
    /*==========================================*/
    $('.zoom').zoom({
        magnify: 1.5
    });



    /*==========================================*/
    /*============= SIMPLE PARALLAX =============*/
    /*==========================================*/
    // var image1 = document.getElementsByClassName('parallax1');
    // new simpleParallax(image1, {
    //     delay: .5,
    //     transition: 'cubic-bezier(0,0,0,2)',
    //     scale: 1.2
    // });



    /*==========================================*/
    /*================ Sliders =================*/
    /*==========================================*/
    $("#carrusel_banners_main").owlCarousel({
        loop: true,
        margin: 0,
        nav: true,
        items: 1,
        autoplay: false,
        animateIn: 'fadeIn'
    });


    $("#carrusel-colores").owlCarousel({
        loop: true,
        margin: 0,
        nav: true,
        items: 1,
        autoplay: false,
        animateIn: 'fadeIn',
        thumbs: false,
        thumbsPrerendered: false
    });


    $('#carrusel_exterior').owlCarousel({
        thumbs: true,
        thumbsPrerendered: true,
        thumbImage: false,
        items: 1,
        nav: false,
        dots: false
    });


    $('#carrusel_interior').owlCarousel({
        thumbs: true,
        thumbsPrerendered: true,
        thumbImage: false,
        items: 1,
        nav: false,
        dots: false
    });



    /*==========================================*/
    /*== Cambiar slider (exterior - interior) ==*/
    /*==========================================*/
    let $count = 0;

    $('.btn-toggle-slider').click(() => {

        if ($count % 2 == 0) {

            console.log($count);

            $('.container-slider-exterior').fadeOut(100);
            $('.container-slider-interior').fadeIn(100);

            $count += 1;

        } else {

            console.log($count);

            $('.container-slider-exterior').fadeIn(100);
            $('.container-slider-interior').fadeOut(100);

            $count += 1;

        }

    });



    /*=========================================================*/
    /*======= IGUALAR TAMAÑOS DE CAJAS (Equal Height) =========*/
    /*=========================================================*/
    function equalHeight(group) {

        tallest = 0;

        group.each(function() {

            thisHeight = $(this).height();

            if (thisHeight > tallest) {
                tallest = thisHeight;
            }

        });

        group.height(tallest);

    };

    equalHeight($("#seccion-servicios .box-service"));



    /*=========================================================*/
    /*=================== CIFRAS ANIMADAS =====================*/
    /*=========================================================*/
    var i = 0;

    $(".count").each(function() {

        var idCounter = "counter" + ++i;
        var cifra1 = $(this).text(); // Cifra ingresada back
        var primerCaracter = cifra1.charAt(0); // Primer caracter de la cifra
        var ultimoCaracter = cifra1.charAt(cifra1.length - 1); // último carácter de la cifra
        var cifraClean = cifra1.replace(/[^0-9]/g, ''); // Cifra sanitizada (solo números)
        var CifraConPunto = cifra1.replace(/,/g, '.'); // Cifra con coma pasada a puntos
        var StrAfterComa = cifra1.substr(cifra1.indexOf(",") + 1); // string despues de la coma
        var StrAfterComaClean = StrAfterComa.replace(/[^0-9]/g, ''); // string sanitizado después de la coma
        var decimalPlaces = StrAfterComaClean.replace(/ /g, '').length // número de digitos después de la coma

        //Si el primer caracter es numerico pasa a ser prefijo :
        if ($.isNumeric(primerCaracter)) {
            var prefix = "";
        } else {
            var prefix = primerCaracter;
        }

        //Si el úlltimo caracter es numerico pasa a ser sufijo :
        if ($.isNumeric(ultimoCaracter)) {
            var sufix = "";
        } else {
            var sufix = ultimoCaracter;
        }

        //Si la cifra contiene una coma :
        if (cifra1.indexOf(',') !== -1) {
            var separator = "";
            var numeroDecimales = decimalPlaces;
            var decimal = ","
            var CifraFinal = CifraConPunto
                // tiene ,
        } else {
            var separator = ".";
            var numeroDecimales = "";
            var decimal = "";
            var CifraFinal = cifraClean
        }

        // counter, cifrainicial, cifrafinal, numerodecimales, duración :
        var c = new CountUp(this, 0, CifraFinal, numeroDecimales, 0, {
            separator: separator,
            decimal: decimal,
            prefix: prefix,
            suffix: sufix

        });

        $(this).one('inview', function(event, isInView) {
            if (isInView) {
                c.start();
            } //endif
        });

    });



});