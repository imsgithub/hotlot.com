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
    $works = Work::all();
    $workgroups = Workgroup::all();
    $json = [];
    foreach ($workgroups as $workgroup) {
      $workgroup->work = $workgroup->work->toArray();
      $json[] = $workgroup->toArray();
    };
    $work = $user->work()->first();
    $view->withUser($user)->withJson($json)->withWork($work);
});
