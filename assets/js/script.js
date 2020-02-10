$(document).ready(function(){
    // Search function
    $("header#main-menu nav a#search").on('click', function(){
        $("header#main-menu nav div#search").slideToggle(50);
        $("header#main-menu nav ul").slideToggle(50);
        
//        $(this).toggle(function() {
//            $(this).html('Before');
//        }, function() {
//            $(this).html('After');
//        });
    });
    // Hamburger
    $('#hamburger').click(function(){
        // Open Navigation Panel on Mobile View
        $(this).toggleClass('openNav');
        $("section.header-wrapper").toggleClass("openNav");
    });
    
    // Get random strings from landing.json
    $.getJSON("assets/js/landing.json", function(data){
        var landing = data[Math.floor(Math.random() * data.length)];
        $("#title-wrapper h1").append(landing.h1);
        $("#title-wrapper h3").append(landing.h3);
        $("section#landing").attr("style", "background-image:" + "url(assets/img/" + landing.backgroundUrl) + "); background-attachment: fixed; background-position: center;";
    });
    
    // 
    $.getJSON("https://api.exchangerate-api.com/v4/latest/PHP", function(data){
        
//        var php = parseFloat($(".prices").text());
        var usd = data.rates.USD;
        var cny = data.rates.CNY;
        var krw = data.rates.KRW;
        var aed = data.rates.AED;
        var eur = data.rates.EUR;
        
        $('select#currencies').change(function(){
            if($("option[value=php]").is(':selected')){ // Philippine Peso
                $('.prices').text(php);
            } 
            else if($("option[value=cny]").is(':selected')){ // Chinese Yen
                $('.prices').text(php * cny);
            }
            else if($("option[value=usd]").is(':selected')){ // US Dollars
                $('.prices').text(php * usd);
            }
            else if($("option[value=eur]").is(':selected')){ // Euros
                $('.prices').text(php * eur);
            }else if($("option[value=krw]").is(':selected')){ // Korean Won
                $('.prices').text(php * krw);
            }else if($("option[value=aed]").is(':selected')){ // Dirham
                $('.prices').text(php * aed);
            }
        });
        
    });
})