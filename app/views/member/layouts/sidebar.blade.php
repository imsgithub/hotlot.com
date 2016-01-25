<div class="burger-button" data-sidebar=".sidebar">
    <div class="burger-layer-1"></div>
    <div class="burger-layer-2"></div>
    <div class="burger-layer-3"></div>
</div>
<aside class="sidebar">
    <div class="logo">
        <a title="На главную" href="/"><img src="/evth/public/img/logo.png" alt="Rate&Go!"></a>
    </div>
    <a href="{{$urls['profile']}}"><i class="fa fa-home"></i> {{Lang::get('profilepage.private_cab')}}</a>
    <a href="{{$urls['map']}}"><i class="fa fa-calculator"></i> {{Lang::get('profilepage.calc')}}</a>
    <a href="{{$urls['person']}}"><i class="fa fa-user"></i> {{Lang::get('profilepage.personal_data')}}</a>
    <a href="{{$urls['forms']}}"><i class="fa fa-list-alt"></i> {{Lang::get('profilepage.forms')}}</a>    
    <a href="/logout"><i class="fa fa-sign-out"></i> {{Lang::get('profilepage.out')}}</a>
    <div class="sidebar-footer">
        <a href="http://imsmedia.net.ua/" target="_blanc">&COPY; IMS MEDIA <?php date('Y')?></a>
    </div>
</aside>
<script>
    var sidebar = document.querySelector('aside');
    var url = document.location.href;
    var a_arr = sidebar.getElementsByTagName('a');
    for (var i = 0; i < a_arr.length; i++ ) {
        if (a_arr[i].getAttribute('href')===url) a_arr[i].classList.add('active');
    }
</script>

