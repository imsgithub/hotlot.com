<?php

View::composer('composers.sign', function($view){
    $role = Session::get('role');
    $view->withRole($role);
});