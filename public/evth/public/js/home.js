var video, top_form, from, where, video_preloader;
video_preloader = document.getElementById('video-preloader');
video = document.getElementById('video');
if (document.querySelector('.top-form')) {
   top_form = document.querySelector('.top-form');
   from = top_form.querySelector('.from input');
   where = top_form.querySelector('.where input');
   from = new google.maps.places.Autocomplete(from);
   where = new google.maps.places.Autocomplete(where);   
   new google.maps.places.Autocomplete(document.querySelector('.works-start-city'));
   new google.maps.places.Autocomplete(document.querySelector('.works-end-city'));
};
function isMobile(){
    return $('#mobile-check').css('display')==='none';
}
$(document).ready(function(){
    $('.scroll-arrow').on('click', function(){
       $('html,body').animate({
            scrollTop: $(this).offset().top+$(this).height()+25
        }, 1000);
    });
    $('#steps-owl').owlCarousel({
        singleItem: true,        
    });
    $('.cities-gallery').owlCarousel({
        autoPlay: 2500,
          pagination: false,
          items: 6,
          stopOnHover: true
    });
    $('.cities-gallery__price').after('<span class="cities-gallery__cargo-params">вес 20 т, объем 86 м<sup>3</sup>.</span>');
    $('.cities-gallery__item').on('click', function(){
        var start = $(this).find('.cities-gallery__city--start').html(),
            end = $(this).find('.cities-gallery__city--end').html(),
            url = document.location.href;
        document.location.href = url + 'map?start=' + start +'&end='+ end;
    });
    if (isMobile()) {
        $('#video').after('<div class="mobile-video-poster"></div>');
        $('#video').remove();
    }
    $('[name="phone"].works-form__input').on('click', function(){
        $(this).parent().removeClass('has-error');
    });
    $('.works-form__button').on('click', function(){
        var from = $('[name="from"].works-form__input'),
            where = $('[name="where"].works-form__input'),
            input = $('[name="phone"].works-form__input');        
        if(input.val()==='') {
            input.parent().addClass('has-error');            
            return;
        }
        var regexp = /\+*\d+[\d-( ).^+]*/g;
        match = input.val().match(regexp);
        if (!match || match.length === 0) {
            input.parent().addClass('has-error');
            console.log('!match || match.length === 0');
            return;
        };
        var x = match[0];
        if (x.length < input.val().length) {
            input.parent().addClass('has-error');
            console.log('x.length < input.val()');
            return;
        };
        if (x.length < 7) {
            input.parent().addClass('has-error');
            console.log('x.length < 7');
            return;
        };
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'sendmessage', true);
        xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
        xhr.send('from='+from.val()+'&where='+where.val()+'&phone='+input.val());
        xhr.onreadystatechange = function(){
            if (xhr.readyState !== 4) return;            
            var par = $('.works-form__inputs-wrapper');            
            par.html('<span class="works-form__response">Заявка отправлена! Наш менеджер Вам перезвонит в ближайшее время.</span>')
        };
        $(this).html('Отправляем...');
        $('.works-form__title').css('opacity', '0');
        $('.works-form__dummy-arrow').css('opacity', '0');
    });
    var services = document.querySelectorAll('.service-row .display');
    for (var i = 0; i< services.length; i++) {
        var str = services[i].innerHTML;
        services[i].innerHTML = services[i].innerHTML.substring(0, 75) + '&#8230;<br><a href="#">Подробнее</a>';
        $(services[i]).after('<p class="hide">'+str+'</p>');
        var a = services[i].querySelector('a');
        var icon = services[i].parentNode.parentNode.querySelector('[class^="icon"]');
        var titles = services[i].parentNode.parentNode.querySelector('h3');
        var target = services[i].parentNode.parentNode.parentNode;
        a.addEventListener('click', showService.bind(target));
        icon.addEventListener('click', showService.bind(target));
        titles.addEventListener('click', showService.bind(target));
    };
});
function showService(e){
    e.preventDefault();
    $(this).parent().parent().find('.hidden').removeClass('hidden');
    $(this).parent().parent().find('.down').removeClass('down');
    console.log(this);
    this.classList.add('hidden');
    var row = this.parentNode;
    $(row).find('.col-4:not(.hidden)').addClass('down');
    $('#serviceTarget').addClass('active');
    $('#serviceTarget').html($(this).html());
//    e.preventDefault();
//    $('.inner-extended .extended')
//        .removeClass('extended')
//        .find('.down').removeClass('down')
//        .parent().find('.deployed').removeClass('deployed')
//        .find('.hide').css('display','none')
//        .parent().find('.display').css('display','inline');
//    var par = this.parentNode.parentNode.parentNode;//col-4
//    var superPar = par.parentNode;//service-row
//    par.classList.add('deployed');
//    par.classList.remove('down');    
//    superPar.classList.add('extended');    
//    $(this).next('.hide').css('display','inline');
//    $(this).css('display', 'none');
//    console.log(par);
//    console.log($(par).height());
//    var others = superPar.querySelectorAll('.col-4:not(.deployed)');
//    for (var i=0; i < others.length; i++ ) {
//        others[i].classList.add('down');
//    }
}