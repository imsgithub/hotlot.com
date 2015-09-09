@include('member.layouts.header')
<body>
<div class="overlay">
@include('member.layouts.sidebar')
<div class="content">
@yield('content')
</div>
</div>
@include('member.layouts.footer')
</body>