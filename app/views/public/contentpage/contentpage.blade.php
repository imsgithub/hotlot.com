@include('public.contentpage.header')
<div class="wrapper">
    <div class="inner section articles">
        @foreach($content as $cont)
            <div class="article-item">
                <span class="article-item__title">{{$cont->title}}</span>
                <a href="/pages/{{$cont->alias}}" class="article-item__link-wrapper">
                    <span class="article-item__link">ПОДРОБНЕЕ</span>
                </a>
            </div>
        @endforeach
            {{$content->links()}}
    </div>

</div>

@include('public.contentpage.footer')