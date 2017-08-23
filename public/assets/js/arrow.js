$(document).ready(function(){ $('#arrow-top').click(function(){ $('html,body').animate({scrollTop: 0},'slow'); }); }); 

      $(window).scroll(function(){
        posScroll = $(document).scrollTop();
        console.log(posScroll);
        if(posScroll >=300)
          $('#arrow-top').fadeIn(600);
        else
          $('#arrow-top').fadeOut(600);
        });
