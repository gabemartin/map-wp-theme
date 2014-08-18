$(function() {
// DOM is ready
  $('.menu-toggle').click(function(){
    $('body').toggleClass('menu-on');
  });

  $('i i:nth-child(1)').hover(function(){
    $(this).closest('li').addClass('t');
    setTimeout(function() {
      $('.r').removeClass('r').addClass('t');
      $('.b').removeClass('b').addClass('t');
      $('.l').removeClass('l').addClass('t');
    }, 0);
  }).click(function(){
    $(this).closest('li').addClass('clicked');
  });
  $('i i:nth-child(2)').hover(function(){
    $(this).closest('li').addClass('r');
    setTimeout(function() {
      $('.t').removeClass('t').addClass('r');
      $('.b').removeClass('b').addClass('r');
      $('.l').removeClass('l').addClass('r');
    }, 0);
  }).click(function(){
    $(this).closest('li').addClass('clicked');
  });
  $('i i:nth-child(3)').hover(function(){
    $(this).closest('li').addClass('b');
    setTimeout(function() {
      $('.t').removeClass('t').addClass('b');
      $('.r').removeClass('r').addClass('b');
      $('.l').removeClass('l').addClass('b');
    }, 0);
  }).click(function(){
    $(this).closest('li').addClass('clicked');
  });
  $('i i:nth-child(4)').hover(function(){
    $(this).closest('li').addClass('l');
    setTimeout(function() {
      $('.t').removeClass('t').addClass('l');
      $('.r').removeClass('r').addClass('l');
      $('.b').removeClass('b').addClass('l');
    }, 0);
  }).click(function(){
    $(this).closest('li').addClass('clicked');
  });
});