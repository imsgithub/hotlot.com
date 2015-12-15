$(document).ready(function() {
  var activeNavLink = $('.nav__link--active');
  var activeIcon = activeNavLink.find('.nav__icon');
  activeIcon.attr('class', activeIcon.attr('class')+'-hover');
  $('nav a').hover(function(e) {
    if ($(this).hasClass('nav__link--active') || $(this).hasClass('nav__link--disabled')) return;
    var icon = $(this).find('.nav__icon');
    var clas = icon.attr('class');
    clas = clas.split(' ');
    clas[1] = clas[1]+'-hover';
    clas = clas.join(' ');
    icon.attr('class', clas);
  },
  function(e){
    if ($(this).hasClass('nav__link--active') || $(this).hasClass('nav__link--disabled')) return;
    var icon = $(this).find('.nav__icon');
    var clas = icon.attr('class');
    clas = clas.split(' ');
    clas[1] = clas[1].substring(0,10);
    clas = clas.join(' ');
    icon.attr('class', clas);
  });
  $('.calc').on('click', function(){
    var url = (window.location.href).substr(0,(window.location.href).indexOf(window.location.pathname))+'/map';
    window.open(url,'_self');
  });
  $('.news-gal').owlCarousel({
    singleItem: true,
  });
  if ($('#route_from').length!==0) {
    new google.maps.places.Autocomplete(document.getElementById('route_from'));
    new google.maps.places.Autocomplete(document.getElementById('route_where'));
    new google.maps.places.Autocomplete(document.getElementById('load_address'));
    new google.maps.places.Autocomplete(document.getElementById('unload_address'));
    $('#load_datetime, #unload_datetime').datetimepicker({
        format: 'Y-m-d H:i:s',
        minDate:new Date(),
        lang:'ru'
    });
  }
  $('.text-success .close').on('click', function(){
    $(this).parent().css({
      marginTop: '-400px'
    })
  });
  setTimeout(function(){
      $('.text-success').css({
        marginTop: '-400px'
      },400);
  }, 3000);

});
