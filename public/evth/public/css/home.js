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
    var homePage = document.getElementById('home');
    if(!!homePage) {
        $('.scroll-arrow').on('click', function(){
            $('html,body').animate({
                scrollTop: $(this).offset().top+$(this).height()+25
            }, 1000);
        });
        $('#steps-owl').owlCarousel({
            singleItem: true,
        });
        if (isMobile()) {
            $('#video').after('<div class="mobile-video-poster"></div>');
            $('#video').remove();
        }
        $('input[name="phone"]').on('click', function(){
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
        //var services = document.querySelectorAll('.service-row .display');
        //for (var i = 0; i< services.length; i++) {
        //    var str = services[i].innerHTML;
        //    services[i].innerHTML = services[i].textContent.substring(0, 75) + '&#8230;<br><a href="#">Подробнее</a>';
        //    $(services[i]).after('<div class="hide">'+str+'</div>');
        //    var a = services[i].querySelector('a');
        //    var icon = services[i].parentNode.parentNode.querySelector('[class^="icon"]');
        //    var titles = services[i].parentNode.parentNode.querySelector('h3');
        //    var target = services[i].parentNode.parentNode.parentNode;
        //    a.addEventListener('click', showService.bind(target));
        //    icon.addEventListener('click', showService.bind(target));
        //    titles.addEventListener('click', showService.bind(target));
        //};
    }

    $('.cities-gallery').owlCarousel({
        autoPlay: 2500,
          pagination: false,
          items: 6,
          stopOnHover: true
    });
    // $('.cities-gallery__price').after('');
    $('.cities-gallery__item').on('click', function(){
        var start = $(this).find('.cities-gallery__city--start').html(),
            end = $(this).find('.cities-gallery__city--end').html(),
            url = document.location.href;
        document.location.href = url + '/map?start=' + start +'&end='+ end;
    });




    if ($('#abform').length !== 0) {
      // $('#abform').on('submit', function(e){
      //   e.preventDefault();
      //   var from = $(this).find('input[name="start"]'),
      //       where = $(this).find('input[name="end"]'),
      //       phone = $(this).find('input[name="phone"]');
      //   if (phone.val()==='') {
      //       phone.parent().addClass('has-error');
      //       return;
      //   };
      //   var regexp = /\+*\d+[\d-( ).^+]*/g;
      //   match = phone.val().match(regexp);
      //   if (!match || match.length === 0) {
      //       phone.parent().addClass('has-error');
      //       console.log('!match || match.length === 0');
      //       return;
      //   };
      //   var x = match[0];
      //   if (x.length < phone.val().length) {
      //       phone.parent().addClass('has-error');
      //       console.log('x.length < input.val()');
      //       return;
      //   };
      //   if (x.length < 7) {
      //       phone.parent().addClass('has-error');
      //       console.log('x.length < 7');
      //       return;
      //   };
      //   var xhr = new XMLHttpRequest();
      //   var par = $(this);
      //   xhr.open('POST', '/sendmessage', true);
      //   xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
      //   xhr.send('abtest=abtest&from='+from.val()+'&where='+where.val()+'&phone='+phone.val());
      //   xhr.onreadystatechange = function(){
      //       if (xhr.readyState !== 4) return;
      //       var url = document.location.href;
      //       document.location.href = url + 'map?start=' + from.val() +'&end='+ where.val();
      //       par.html('<span class="works-form__response">Одну секунду, мы перенаправим вас на страницу рассчета...</span>')
      //   };
      //   $(this).html('<span class="works-form__response">Отправляем...</span>');
      // })
    }
    var mainMenuButton = document.getElementById('main-menu-button');
    if(!!mainMenuButton) {
        $(mainMenuButton).on('click', function(){
            $('.header-wrapper').toggleClass('active');
        });
    }

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
}
