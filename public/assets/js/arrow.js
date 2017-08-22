

      $(window).scroll(function(){
        posScroll = $(document).scrollTop();
        console.log(posScroll);
        if(posScroll >=550)
          $('#arrow-top').fadeIn(600);
        else
          $('#arrow-top').fadeOut(600);
        });
