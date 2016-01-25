(function($){
    $.fn.burger = function(){
        var sidebar = $($(this).attr('data-sidebar'));
        $(this).on('click', function(){
            $(this).toggleClass('active');
            sidebar.toggleClass('active');
        });
    };
})(jQuery);