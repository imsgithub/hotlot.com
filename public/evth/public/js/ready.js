function doTabs(params) {
    var tabs = document.getElementById(params.id);
    var nav = tabs.querySelector('.tabs-nav');
    var navLis = nav.getElementsByTagName('li');
    var content = tabs.querySelector('.tabs-content');
    var contentLis = content.getElementsByTagName('li');
    navLis[0].classList.add('active');
    contentLis[0].classList.add('active');
    for (var i = 0; i < navLis.length; i++) {
        navLis[i].classList.add('tab-nav-'+i);
        contentLis[i].classList.add('tab-content-'+i);
    };
    for (var i = 0; i < navLis.length; i++) {
        navLis[i].addEventListener('click', function(e){
            var data = this.getAttribute('class');
            var index = data.indexOf('tabs-nav-');
            data = parseInt(data.substr(index));
            var contentLi = contentLis[data];
            contentLi.classList.add('active');
            this.classList.add('active');
            for (var i = 0; i < navLis.length; i++) {
                if (this !== navLis[i]) navLis[i].classList.remove('active');
                if (contentLi !== contentLis[i]) contentLis[i].classList.remove('active');
            };
        });
    };
};
function doModal(data) {
    var modal = document.getElementById(data.id);
    var mw = modal.querySelector('.modal-wrapper');    
    var mi = modal.querySelector('.modal-inner');
    var close = modal.querySelector('.close');
    //Показываем окно
    modal.style.display = 'block';       
    $(mw).animate({'opacity':1}, 400);
    console.log(data);
    mw.addEventListener('click', function(){
        hideModal(data);
    });
    mi.addEventListener('click', function(e){
        e.stopPropagation();
    });
    close.addEventListener('click', function(){
        hideModal(data);
    });
}
function hideModal(data){
    var modal = document.getElementById(data.id);
    var mw = modal.querySelector('.modal-wrapper');    
    $(mw).animate({'opacity':0}, 200, function(){
        modal.style.display = 'none';
    });
}
$(document).ready(function(){
    if (document.getElementById('language')) {
        $( "#language" ).selectmenu({
            width:58       
        });
    };   
   if (document.getElementById('tabs')) doTabs({id:"tabs"});
   var mts = document.getElementsByClassName('modal-toggle');
   for (var i = 0; i < mts.length; i++){
       mts[i].addEventListener('click', function(){
            doModal({id:this.getAttribute('data-modal')});
       });
   };   
   if (document.getElementById('cargo_type')) {
       $('#cargo_type').selectmenu({});
   };
   if (document.getElementById('currency')) {
       $('#currency').selectmenu({
           width: 100
       });
   };
});