<?php

class UsersController extends \BaseController {
    
    public function show_login_page() {//показать страницу входа админа
        if(Session::get('role')=='admin'){// Если пользователь уже залогинен, то его редиректит на /admin           
            return Redirect::to('/admin');
        }
        return View::make('admin.login');
    }

    public function login() {        
        $user = User::whereName(Input::get('name'))->first();//Ищется пользователь с таким именем
        if (!isset($user->name)) {//проверяется его существование, если такого имени нет, то в топку
            return Redirect::back()->withInput();
        }
        $role = $user->roles->first();//имя есть, определяем роль    
        if ($role->name=='admin') {//Это админ, значит записываем его роль в сессию и редиректим на /admin
            if(Auth::attempt(Input::only('name','password'))) {
                Session::put('role', 'admin');
                return Redirect::to('/admin');
            } else {
                return Redirect::back()->withInput();
            }
        } else {//это обычный пользователь, значит записываем роль в сессию и отправляем на главную страницу
            if(Auth::attempt(Input::only('name','password'))) {
                Session::put('role', 'member');
                return Redirect::to('/');
            }
        }  
    }
    public function admin_index() {
        return View::make('admin.index');
    }

//	public function index() 
//	{
//		$user = Auth::user();
//		return View::make('users.index')->withUser($user);
//	}
//	public function create()
//	{
//		if (Auth::check()) {
//			return Redirect::to('/admin/index');
//		}
//		return View::make('users.login');
//	}
//	public function store() {
//		if (Auth::attempt(Input::only('name', 'password'))) {
//			return Redirect::to('admin/messages');
//		};
//		return Redirect::back()->withInput();
//	}
//	public function destroy() {
//		Auth::logout();
//		return Redirect::to('/admin');
//	}

}
