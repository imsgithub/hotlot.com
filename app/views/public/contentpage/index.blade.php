@include('public.contentpage.header')
@foreach($pages as $page)
@endforeach
<div class="wrapper">
    <div class="inner section">
        <div class="col-md-4">
        <div class="articles-menu">
        <div class="title-center"> <a href="/pages" class="color-h2" > СПИСОК СТАТЕЙ </a></div>
            <p>
            <ul>
            @foreach($content as $cont)
                <p><a href="/pages/{{$cont->alias}}" class="link-s"><li >{{$cont->title}}</li></a></p>
            @endforeach
            </ul>
            </p>
        </div>
<br>
<br>
<br>
            <!-- Вставьте этот тег в заголовке страницы или непосредственно перед закрывающим тегом основной части. -->
            <script src="https://apis.google.com/js/platform.js" async defer>
                {lang: 'ru'}
            </script>

            <!-- Поместите этот тег туда, где должна отображаться кнопка +1. -->
            <div class="g-plusone" data-size="tall" data-annotation="inline" data-width="300" data-href="http://rate-and-go.com/"></div>
        </div>
        <div class="col-md-8 h1 title-content">
            <h1>{{ $page->title }}</h1>
            <p>
              {{ $page->content }}
            </p>
        </div>

    </div>
</div>

@include('public.contentpage.footer')