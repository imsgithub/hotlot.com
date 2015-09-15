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
    <a class="sing-in-link" href="/sing-up"><i class="fa fa-user-plus"></i> Зарегестрироваться</a>
    <a href="/login" class="sing-in-link" data-modal="modal-enter"><i class="fa fa-sign-in"></i> Войти</a>
</div>
@endif