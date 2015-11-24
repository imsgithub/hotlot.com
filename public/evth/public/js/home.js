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
    $('#steps-owl').owlCarousel({
        singleItem: true,        
    });
    $('.cities-gallery').owlCarousel({
        autoPlay: 1500,
          pagination: false,
          items: 6,
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
            console.log('input.val()===""');
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
});
