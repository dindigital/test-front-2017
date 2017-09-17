$('#nav-icon').attr('data-ativo', '0');

$('#nav-icon').click(function(event) {
      $(this).toggleClass('open');
      var access = $(this).attr('data-ativo');
      if (access == 0) {
        $(this).addClass('active');
        $('#nav-icon').attr('data-ativo', '1');
        $('.offcanvas-transform').addClass('access-left');
      };

      if (access == 1) {
          $(this).removeClass('active');
          $('#nav-icon').attr('data-ativo', '0');
          $('.offcanvas-transform').removeClass('access-left')
      };
});



$(document).ready(function(){
    
    $("#touch-slider").owlCarousel({
        autoPlay : 6000,
        stopOnHover : false,
        navigation:false,
        pagination:true,
        paginationSpeed :800,
        goToFirstSpeed : 1500,
        singleItem : true,
        addClassActive: true,
        items : 1,
        autoHeight : false,
        responsive: true,
        transitionStyle : "fade"
    });

});



$(window).scroll(function(){
    
    var tamTela = $(window).height() -250;

    //Variaveis ScrollTop
    var puxaScrolTop = $(document).scrollTop();
    var altTopo = $(".top-headerf.fixed").attr("alt");
    if(puxaScrolTop < tamTela){

      if (altTopo == "1") {

        $(".top-headerf.fixed").attr("alt","0");
        $(".top-headerf.fixed").removeClass('visible');
         
      };

    }

    if(puxaScrolTop > tamTela){

      if(altTopo == "0"){

        $(".top-headerf.fixed").attr("alt","1");
        $(".top-headerf.fixed").addClass('visible');
        
      }

    }

});
