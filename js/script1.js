$('#menu-center a[href*="#"]').on('click', function (e) {
  e.preventDefault()

  $('html, body').animate(
    {
      scrollTop: $($(this).attr('href')).offset().top,
    },
    600,
    'linear'
  )
});



$(window).scroll(function() {
  var scrollDistance = $(window).scrollTop()+100;

  $('section').each(function(i) {
      if ($(this).position().top <= scrollDistance) {
          $('ul a.active1').addClass('btn-outline-danger');
          $('ul a.active1').removeClass('active1');
          

          $('ul a').eq(i).addClass('active1');
          $('ul a').eq(i).removeClass('btn-outline-danger');
          
      }
  });
}).scroll();




// carousel - About section
$('.carousel.carousel-multi-item.v-2 .carousel-item').each(function() {
  var next = $(this).next();
  if (!next.length) {
      next = $(this).siblings(':first');
  }
  next.children(':first-child').clone().appendTo($(this));

  for (var i = 0; i < 4; i++) {
      next = next.next();
      if (!next.length) {
          next = $(this).siblings(':first');
      }
      next.children(':first-child').clone().appendTo($(this));
  }
});


// navbar size changing on scroll.
$(document).ready(function(){
  $('.nav-button').click(function(){
    $('.nav-button').toggleClass('change');
  });

  $(window).scroll(function(){
    var position = $(this).scrollTop();
    if(position >= 50) {
      $('.nav-menu').addClass('custom-navbar');
      $('nav').addClass('white');
    } else {
      $('.nav-menu').removeClass('custom-navbar');
      $('nav').removeClass('white');
      $('nav').addClass('white1');

    }
  });
});



$("#products .card").hover(function(){
  $(this).removeClass('border-0');
},function(){
  $(this).addClass('border-0');
});

$("#wcu .my-2 .card").hover(function(){
  $(this).removeClass('border-0');
},function(){
  $(this).addClass('border-0');
});

$("#wcu .center").hover(function(){
  $(this).removeClass('border-0');
},function(){
  $(this).addClass('border-0');
});


// fade in and out - of contents on scrolling

$(window).on("load",function() {
  $(window).scroll(function() {
    var windowBottom = $(this).scrollTop() + $(this).innerHeight();
    $(".fade").each(function() {
      /* Check the location of each desired element */
      var objectBottom = $(this).offset().top + $(this).outerHeight();
      
      /* If the element is completely within bounds of the window, fade it in */
      if (objectBottom < windowBottom) { //object comes into view (scrolling down)
        if ($(this).css("opacity")==0) {$(this).fadeTo(400,1);}
      } else { //object goes out of view (scrolling up)
        if ($(this).css("opacity")==1) {$(this).fadeTo(400,0);}
      }
    });
  }).scroll(); //invoke scroll-handler on page-load
});



