var badge = document.getElementById('order-badge');
var formsBadge = document.getElementById('form-orders-badge');
function getOrdersByAjax(){
  var xhr = new XMLHttpRequest();
  xhr.open('GET', '/admin/orders/unreviewed/ajax', true);
  xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
  xhr.send();
  xhr.onreadystatechange = function () {
    if (xhr.readyState !== 4) return;
    var resp = JSON.parse(xhr.responseText);
    badge.innerHTML = resp.orders;
    formsBadge.innerHTML = resp.forms;
  };
};
$(document).ready(function() {
  var activeNavLink = $('.nav__link--active');
  var activeIcon = activeNavLink.find('.nav__icon');
  activeIcon.attr('class', activeIcon.attr('class')+'-hover');
  $('nav a, nav>span').hover(function(e) {
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
    clas[1] = clas[1].substring(0,16);
    clas = clas.join(' ');
    icon.attr('class', clas);
  });

  getOrdersByAjax();
  setInterval(function (){
      getOrdersByAjax();
  }, 5000);
});
