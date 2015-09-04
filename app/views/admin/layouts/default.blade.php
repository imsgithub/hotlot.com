@include('admin.layouts.header')
<div class="col-md-3">
@include('admin.layouts.sidebar')
</div>
<div class="col-md-9">
@yield('content')
</div>
@include('admin.layouts.footer')