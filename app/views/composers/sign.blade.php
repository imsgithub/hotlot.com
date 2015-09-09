@if ($role=='admin')
<div class="sing-in">
    <a href="/admin" class="sing-in-link"><i class="evth-sing-in"></i> Перейти на страницу администратора</a> <a href="/logout" class="sing-in-link"><i class="fa fa-sign-out"></i> Выйти</a>
</div> 
@elseif ($role=='member')
<div class="sing-in">
    <a href="/profile" class="sing-in-link"><i class="fa fa-sign-in"></i> В личный кабинет</a> <a href="/logout" class="sing-in-link"><i class="fa fa-sign-out"></i> Выйти</a> 
</div> 
@else
<div class="sing-in">
    <span class="sing-in-link modal-toggle" data-modal="modal-enter"><i class="fa fa-sign-in"></i> Войти</span>
</div>
@endif