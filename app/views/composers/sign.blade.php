@if ($role=='admin')
<div class="sing-in">
    <a href="/admin" class="sing-in-link"><i class="evth-sing-in"></i> Перейти на страницу администратора</a>
</div> 
@elseif ($role=='member')
<div class="sing-in">
    <a href="/profile" class="sing-in-link"><i class="evth-sing-in"></i> Перейти в личный кабинет</a>
</div> 
@else
<div class="sing-in">
    <span class="sing-in-link modal-toggle" data-modal="modal-enter"><i class="evth-sing-in"></i> Войти</span>
</div>
@endif