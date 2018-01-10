$( document ).ready(function() {
        // This function adds the images as background images for 1/3 class.
        $(".three-column-layout").find('.column_primary-content img').each(function() {
            var image = $(this);
            var parentColumn = $(this).closest('.three-column-layout .column');

          parentColumn.css({
            background: "url(" + image.attr("src") + ")",
            backgroundSize: "cover",
          });

          image.remove();

          parentColumn.addClass('bg-image');

        });

        // // This function adds the images as background images for 1/2 class.
        // $(".half-and-half-layout img").each(function(i, elem) {
        //   var img = $(elem);
        //   var div = $("<div />").css({
        //     background: "url(" + img.attr("src") + ")",
        //     width: img.width() + "px",
        //     height: img.height() + "px"
        //   });
        //   div.addClass('bg-image');
        //   img.replaceWith(div);
        // });

    });
    $(".hamburger-icon").on('click',function(){
        // This function controls the opening and closing of the mobile menu
        $('.hamburger-icon').toggleClass('open');
        $('span.hamburger-bar').toggleClass('open');
        $('.main-navigation').toggleClass('open');
    });


    $(window).resize(function(e){
        var screenWith = $(window).width();

        if (screenWith >= 600) {
            // This if statement is intended to reflect the small breakpoint
            $('.main-navigation, .hamburger-icon, .hamburger-bar').removeClass('open');
        }
    });

    // This function adds the header image as a background image
    $(".header-image img").each(function() {
      var img = $(this);
      var parentdiv = $(".header-content");
      parentdiv.css({
        background: "url(" + img.attr("src") + ")",
        width: img.width() + "px",
        height: img.height() + "px"
      });
      parentdiv.addClass('bg-image');
    });



    $('.to-top').on('click', function() {
        jQuery('html,body').animate({scrollTop:0},800);
        return false;
    });
