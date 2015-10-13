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
//$(window).load(function(){
//    video.style.display = 'block';
//    video_preloader.style.display = 'none';
//});
