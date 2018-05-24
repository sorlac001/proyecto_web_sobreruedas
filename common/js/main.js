// Aumento y de cremento de letra 

var tam_letra = ["14px", "16px", "18px", "20px", "22px", "24px"];
    var index_tam_letra;
    if (localStorage.getItem('font-size-index') != "") {
        index_tam_letra = localStorage.getItem('font-size-index');
        $('body').css('font-size', tam_letra[index_tam_letra]);
    }
    else{
        index_tam_letra = 0;
    }
    
    $(document).on("click", ".btn_aumento_letra", function() { 
        if (index_tam_letra < (tam_letra.length-1)) {
            index_tam_letra++;
        }
        
        $('body').css('font-size', tam_letra[index_tam_letra]);
        localStorage.setItem('font-size-index', index_tam_letra);
    });

    $(document).on("click", ".btn_decremento_letra", function() { 
        if (index_tam_letra > 0) {
            index_tam_letra--;
        }
        
        $('body').css('font-size', tam_letra[index_tam_letra]);
        localStorage.setItem('font-size-index', index_tam_letra);
    });



/*-----------FIN SECCIÓN PARA AUMENTOS Y DECREMENTOS---------*/

    $( ".btn-carrusel" ).each(function( index ) {
        var index = $(this).attr('data-target');
        $(this).attr('aria-label', $('.element_carrusel_'+index).attr('alt') );
    });


    reproducir();
    
    var intervalo;
    var timer = 7000;
    var total_carrusel = 4;
    var contador_carrusel = 0;
    var pausa = false;

    $(document).on("focus",".control_carrusel",function() {
        var target = $(this).attr('data-target');
        if (target != 'pausa' && target != 'reproducir') {
            $(this).click();
        } 
    });


    function reproducir() {

        clearInterval(intervalo);

        $('.control_carrusel_'+contador_carrusel).removeClass('active');
        $('.element_carrusel_'+contador_carrusel).removeClass('carrusel-active');
        

        if (contador_carrusel == total_carrusel) {
            contador_carrusel = 1;
        }
        else{
            contador_carrusel+=1;
        }

        $('.element_carrusel_'+contador_carrusel).addClass('carrusel-active');
        $('.control_carrusel_'+contador_carrusel).addClass('active');

        intervalo =     setInterval(function() {
                        reproducir();
                    }, timer);

    }

    $( ".btn-carrusel" ).click(function() {

        var target = $(this).attr('data-target');
        clearInterval(intervalo);

        $('.control_carrusel_'+contador_carrusel).removeClass('active');
        $('.element_carrusel_'+contador_carrusel).removeClass('carrusel-active');

        switch(target) {
            case '1':
                contador_carrusel = 1;
                break;
            case '2':
                contador_carrusel = 2;
                break;
            case '3':
                contador_carrusel = 3;
                break;
            case '4':
                contador_carrusel = 4;
                break;
            case 'pausa':
                pausa = true;
                $(this).html('Reproducir');
                $(this).attr('data-target','reproducir');
                break;
            case 'reproducir':
                pausa = false;
                $(this).html('Pausar');
                $(this).attr('data-target','pausa');
                break;
            case 'anterior':
                if (contador_carrusel == 1) {
                    contador_carrusel = 4;
                }
                else {
                    contador_carrusel--;
                }                
                break;
            case 'siguiente':
                if (contador_carrusel == 4) {
                    contador_carrusel = 1;
                }
                else {
                    contador_carrusel++;
                }  
                break;
        }

        $('.element_carrusel_'+contador_carrusel).addClass('carrusel-active');
        $('.control_carrusel_'+contador_carrusel).addClass('active');

        if (!pausa) {
            intervalo =     setInterval(function() {
                            reproducir();
                        }, timer);
        }
        

    });

    // play();
