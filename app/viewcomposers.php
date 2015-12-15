<?php

View::composer('composers.sign', function($view){
    $role = Session::get('role');
    $view->withRole($role);
});
View::composer('member.layouts.sidebar', function($view){
    $urls = [
        'map'=>URL::route('map'),
        'person'=>URL::route('person'),
        'profile'=>URL::route('profile'),
        'forms'=>URL::route('forms')
    ];
    $view->withUrls($urls);
});
View::composer('newmember.layouts.header', function($view){
    $user = User::find(Session::get('id'));
    $view->withUser($user);
});
