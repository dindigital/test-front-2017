//JS por Liniquer Fractucello
// A ideia for nao usar nenhuma lib alem do jquery, pois era mais pra mostrar a minha lógica, e um pouco do meu conhecimento.

$(function() {
    "use strict";
  
    //MENU Mobile
    $(".ico-menu-mobile").click(function() {
      if( $(this).hasClass("open")) {
        $(".menu").slideUp(400);
        $(this).removeClass("open");
      } else {
        $(".menu").slideDown(400);
        $(this).addClass("open");
      }
    });

    //carrega o JSON
    $.getJSON("data/content.json", function(data) {
      function getItem(objId) {
              var id = data.steps[objId].id;
              var title = data.steps[objId].title;
              var img = data.steps[objId].img;
              var text = data.steps[objId].text;

          $("#titleSlider").html(title);
          $("#imgSlider").attr("src", img);
          $("#textSlider").html(text);

        //anima apos carregar o conteudo
        $("#imgSlider").stop().animate({opacity: "1"}, 500);
        $("#titleSlider").stop().delay(300).animate({opacity: "1"}, 500);
        $("#textSlider").stop().delay(600).animate({opacity: "1"}, 500);
        $("#btnSlider").stop().delay(900).animate({opacity: "1"}, 500);
      }

      //Carrega o conteudo do 1 slider
      getItem(0);

      //muda o conteudo do slider
      $(".slider-control ul li").click(function() {
        var itemId = $(this).attr("rel");

        if($(this).hasClass("active")) {
          return;

        } else {
          $(".slider-control ul li").removeClass("active");
          $(this).addClass("active");


          $("#imgSlider").stop().animate({opacity: "0"}, 500);
          $("#titleSlider").stop().delay(300).animate({opacity: "0"}, 500);
          $("#textSlider").stop().delay(600).animate({opacity: "0"}, 500);
          $("#btnSlider").stop().delay(900).animate({
            opacity: "0"
          }, {
            duration: 500,
            complete: function() {
              getItem(itemId);
            }
        });
        }


      });
    })
    .fail(function( jqxhr, textStatus, error ) {
        var err = textStatus + ", " + error;
        console.log( "Request Failed: " + err );
    });
});
