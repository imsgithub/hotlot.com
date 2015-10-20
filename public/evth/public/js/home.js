var video, top_form, from, where, video_preloader;
video_preloader = document.getElementById('video-preloader');
video = document.getElementById('video');
if (document.querySelector('.top-form')) {
   top_form = document.querySelector('.top-form');
   from = top_form.querySelector('.from input');
   where = top_form.querySelector('.where input');
   from = new google.maps.places.Autocomplete(from);
   where = new google.maps.places.Autocomplete(where);       
};
function isMobile(){
    return $('#mobile-check').css('display')==='none';
}
$(document).ready(function(){
    $('#steps-owl').owlCarousel({
        singleItem: true,        
    });
    if (isMobile()) {
        $('#video').after('<div class="mobile-video-poster"></div>');
        $('#video').remove();
    }
});
