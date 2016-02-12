@include('public.contentpage.header')
<div class="wrapper">
    <div class="inner section">
        <div class="col-md-1"></div>
        <div class="articles-m col-md-10">
            <ul>
            @foreach($content as $cont)

                    <div class="order-articles">
                        <div class="col-md-8 col-sm-8">
                    <li type="disc">   <span class="cut-text">{{$cont->title}}</span></li>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <a href="/pages/{{$cont->alias}}" class="link-s pos-right"><button type="submit" class="btn btn-danger btn-xs articles-button"> ПОДРОБНЕЕ </button></a>
                        </div>
                    </div>
                    <br>
                    <br>
                    <hr class="some-hr" align="center">
            @endforeach
            </ul>
        </div>
        <div class="col-md-1"></div>
    </div>
</div>

@include('public.contentpage.footer')