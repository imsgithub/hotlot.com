@include('public.contentpage.header')
<div class="wrapper wrapper-cont">
    <div class="inner section">
        <div class="col-md-4">
            <div class="side-bar">
                <div class="side-bar-title"><a href="/pages"> {{ Lang::get('contentpages.articles_list') }} </a></div>
                    <ul class="side-bar-list">
                        @foreach($content as $cont)
                            <li><a href="/pages/{{$cont->alias}}">{{$cont->title}}</a></li>
                        @endforeach
                    </ul>
            </div>

        <div class="google-plus-wrapper">
                <!-- Вставьте этот тег в заголовке страницы или непосредственно перед закрывающим тегом основной части. -->
                <script src="https://apis.google.com/js/platform.js" async defer>
                    {lang: 'ru'}
                </script>
                <!-- Поместите этот тег туда, где должна отображаться кнопка +1. -->
                <div class="g-plusone" data-size="tall" data-annotation="inline" data-width="300" data-href="http://rate-and-go.com/"></div>
        </div>
    </div>
        <div class="col-md-8 h1 page-content">
            @foreach($pages as $page)
                <h1>{{ $page->title }}</h1>
                {{ $page->content }}
            @endforeach
        </div>
</div>
</div>
@include('public.contentpage.footer')