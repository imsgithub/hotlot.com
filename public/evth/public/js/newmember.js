$(document).ready(function() {
  var activeNavLink = $('.nav__link--active');
  var activeIcon = activeNavLink.find('.nav__icon');
  activeIcon.attr('class', activeIcon.attr('class')+'-hover');
  $('nav a').hover(function(e) {
    if ($(this).hasClass('nav__link--active')) return;
    var icon = $(this).find('.nav__icon');
    var clas = icon.attr('class');
    clas = clas.split(' ');
    clas[1] = clas[1]+'-hover';
    clas = clas.join(' ');
    icon.attr('class', clas);
  },
  function(e){
    if ($(this).hasClass('nav__link--active')) return;
    var icon = $(this).find('.nav__icon');
    var clas = icon.attr('class');
    clas = clas.split(' ');
    clas[1] = clas[1].substring(0,10);
    clas = clas.join(' ');
    icon.attr('class', clas);
  });
  $('.news-gal').owlCarousel({
    singleItem: true,
  });
});
