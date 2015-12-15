<?php $nav = Lang::get('member.nav'); ?>
<nav class="nav">
 <a href="/profile/forms" class="nav__link"><span class="nav__icon icon-nav-1"></span><span class="nav__text">{{$nav['orders']}}</span></a>
 <a href="#" class="nav__link--disabled"><span class="nav__icon icon-nav-2"></span><span class="nav__text">{{$nav['documents']}}</span></a>
 <a href="/map" class="nav__link"><span class="nav__icon icon-nav-3"></span><span class="nav__text">{{$nav['calculator']}}</span></a>
 <a href="#" class="nav__link--disabled"><span class="nav__icon icon-nav-4"></span><span class="nav__text">{{$nav['info']}}</span></a>
 <a href="#" class="nav__link siteheart-init"><span class="nav__icon icon-nav-5"></span><span class="nav__text">{{$nav['manager']}}</span></a>
 <a href="#" class="nav__link--disabled"><span class="nav__icon icon-nav-6"></span><span class="nav__text">{{$nav['billing']}}</span></a>
 <a href="#" class="nav__link--disabled"><span class="nav__icon icon-nav-7"></span><span class="nav__text">{{$nav['news']}}</span></a>
</nav>
