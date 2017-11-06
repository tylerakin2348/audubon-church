
$(".hamburger-icon").on('click',function(){
    // This function controls the opening and closing of the mobile menu
    $('.hamburger-icon').toggleClass('open');
    $('span.hamburger-bar').toggleClass('open');
    $('.main-navigation').toggleClass('open');
});


$(window).resize(function(e){
    var screenWith = $(window).width();

    if (screenWith >= 800) {
        // This if statement is intended to reflect the small breakpoint
        $('.main-navigation, .hamburger-icon, .hamburger-bar').removeClass('open');
    }
});


$("img").each(function(i, elem) {
  var img = $(elem);
  var div = $("<div />").css({
    background: "url(" + img.attr("src") + ") no-repeat center",
    width: img.width() + "px",
    height: img.height() + "px"
  });
  div.addClass('bg-image');
  img.replaceWith(div);
});
