<?php

class UsersController extends \BaseController {
    protected $user, $person;
    public function __construct(User $user, Person $person) {
        $this->user = $user;
        $this->person = $person;
    }

        public function show_login_page() {//показать страницу входа админа
        if(Session::get('role')=='admin'){// Если пользователь уже залогинен, то его редиректит на /admin
            return Redirect::to('/admin/orders');
        }
        return View::make('admin.login');
    }

    public function login() {
        $user = User::whereEmail(Input::get('email'))->first();//Ищется пользователь с таким именем
        if (!isset($user->email)) {//проверяется его существование, если такого имени нет, то в топку
            return Redirect::back()->withInput();
        }
        $role = $user->roles->first();//имя есть, определяем роль
        if ($role->name=='admin') {//Это админ, значит записываем его роль в сессию и редиректим на /admin
            if(Auth::attempt(Input::only('email','password'))) {
                Session::put('role', 'admin');
                return Redirect::to('/admin/orders');
            } else {
                return Redirect::back()->withInput();
            }
        } else {//это обычный пользователь, значит записываем роль в сессию и отправляем на главную страницу
            if(Auth::attempt(Input::only('email','password'))) {
                Session::put('role', 'member');
                return Redirect::to('/');
            } else {
                return Redirect::back()->withInput();
            }
        }
    }
    public function admin_index() {
        return View::make('admin.index');
    }

    public function user_login() {
        $user = User::whereEmail(Input::get('email'))->first();//Ищется пользователь с таким именем
        if (!isset($user->email)) {//проверяется его существование, если такого имени нет, то в топку
            $response = ['valid'=>false];
            return $response;
        }
        $role = $user->roles->first();
        if ($role->name=='member') {
            if (Auth::attempt(Input::only('email','password'))) {
                Session::put('role', 'member');
                Session::put('email',$user->email);
                Session::put('id',$user->id);
                $response = ['valid'=>true];
            } else {
                $response = ['valid'=>false];
            }
            return $response;
        }
    }
    public function show_profile() {
        $user = $this->user->whereId(Session::get('id'))->first();
        return View::make('member.index')->withUser($user);
    }
    public function person_edit(){
        $user = $this->user->whereId(Session::get('id'))->first();
        return View::make('member.person.index')->withUser($user);
    }
    public function person_save() {
        $inputs = Input::except('_token');
        $person = $this->person;
        $person->name = Input::get('name');
        $person->surname = Input::get('surname');
        $person->patronymic = Input::get('patronymic');
        $person->phone = Input::get('phone');
        if (!$person->is_valid($inputs)) {
            return Redirect::back()->withInput()->withErrors(Person::$errors);
        }
        $user = $this->user->whereEmail(Session::get('email'))->first();
        if (!isset($user->person->name)) {
            $person = $this->person;
            $person->name = HTML::entities(Input::get('name'));
            $person->surname = HTML::entities(Input::get('surname'));
            $person->patronymic = HTML::entities(Input::get('patronymic'));
            $person->phone = HTML::entities(Input::get('phone'));
            $user->person()->save($person);
            return Redirect::back()->withUser($user);
        } else {
            $person = $this->person->where('user_id', '=', $user->id)->first();
            $person->name = HTML::entities(Input::get('name'));
            $person->surname = HTML::entities(Input::get('surname'));
            $person->patronymic = HTML::entities(Input::get('patronymic'));
            $person->phone = HTML::entities(Input::get('phone'));
            $person->save();
            return Redirect::back()->withUser($user)->withErrors(['success-msg'=>['Персональные данные сохранены!']]);
        }
    }
    public function show_users(){
        $users = $this->user->all();
        return View::make('admin.user.index')->withUsers($users);
    }
    public function user_register() {
        $user = $this->user;
        $data = Input::only('email', 'password');
        if (!$user->is_valid($data)) {
            return Redirect::back()->withInput()->withErrors(User::$errors);
        }
        $user->email = Input::get('email');
        $user->password = Hash::make(Input::get('password'));
        $user->save();
        $role = Role::whereName('member')->first();
        $user->roles()->attach($role->id);
        Session::put('role', 'member');
        Session::put('email',$user->email);
        Session::put('id',$user->id);
        return Redirect::to('/');
    }
    public function notAjaxLogin(){
        $user = User::whereEmail(Input::get('email'))->first();//Ищется пользователь с таким именем
        if (!isset($user->email)) {//проверяется его существование, если такого имени нет, то в топку
            return Redirect::back()->withInput()->withErrors(['msg'=>[ 'Неверно указан email или пароль']]);
        }
        $role = $user->roles->first();
        if ($role->name=='member') {
            if (Auth::attempt(Input::only('email','password'))) {
                Session::put('role', 'member');
                Session::put('email',$user->email);
                Session::put('id',$user->id);
            } else {
                return Redirect::back()->withInput()->withErrors(['msg'=>[ 'Неверно указан email или пароль']]);
            }
            return Redirect::to('/');
        }
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
