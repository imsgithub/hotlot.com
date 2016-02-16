@if (($role=='admin')||($role=='miniadmin'))
<div class="sing-in">
    <a href="/admin" class="sing-in-link"><i class="evth-sing-in"></i> {{Lang::get('mainpage.go_in_admin')}}</a> <a href="/logout" class="sing-in-link"><i class="fa fa-sign-out"></i> {{Lang::get('mainpage.out')}}</a>
</div>
@elseif ($role=='member')
<div class="sing-in">
    <a href="/profile" class="sing-in-link"><i class="fa fa-sign-in"></i> {{Lang::get('mainpage.go_in_private')}}</a> <a href="/logout" class="sing-in-link"><i class="fa fa-sign-out"></i> {{Lang::get('mainpage.out')}}</a>
</div>
@else
<div class="sing-in">
    <a class="sing-in-link" href="/sign-up"><i class="fa fa-user-plus"></i> {{Lang::get('mainpage.reg')}}</a>
    <a href="/login" class="sing-in-link" data-modal="modal-enter"><i class="fa fa-sign-in"></i> {{Lang::get('mainpage.login')}}</a>
</div>
@endif
