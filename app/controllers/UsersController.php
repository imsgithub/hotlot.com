<?php
use \Evth\ConfirmationMailer;
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
        $forms = $user->form()->orderBy('updated_at')->limit(4)->get();
        // var_dump($forms->isEmpty());
        // return View::make('member.index')->withUser($user);
        $meta = [];
        $meta['title'] = Lang::get('member.profile_title', ['email'=>$user->email]);
        return View::make('newmember.index')->withMeta($meta)->withForms($forms);
    }
    public function person_edit(){
        $user = $this->user->whereId(Session::get('id'))->first();
        return View::make('member.person.index')->withUser($user);
    }
    public function person_save() {
      if (Request::ajax()) {
        $person = $this->person;
        $inputs = Input::except('_token');
        if (!$person->is_valid($inputs)) {
            return '{"errors":'.Person::$errors.'}';
        } else {
          $user = $this->user->find(Session::get('id'));
          $person->name = HTML::entities(Input::get('name'));
          $person->surname = HTML::entities(Input::get('surname'));
          $person->patronymic = HTML::entities(Input::get('patronymic'));
          $person->phone = HTML::entities(Input::get('phone'));
          if (!$user->person) {
            $user->person()->save($person);
          } else {
            $person = $this->person->where('user_id', '=', $user->id)->first();
            $person->name = HTML::entities(Input::get('name'));
            $person->surname = HTML::entities(Input::get('surname'));
            $person->patronymic = HTML::entities(Input::get('patronymic'));
            $person->phone = HTML::entities(Input::get('phone'));
            $person->save();
          }
          if (Input::get('work')!='') {
            if ($user->work()->first()) {
              $user->work()->detach();
              $user->work()->attach(Input::get('work'));
            } else {
              $user->work()->attach(Input::get('work'));
            }
          }

          return '{"success":"Персональные данные пользователя успешно сохранены"}';
        }
      }
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
      $users = User::whereHas('roles', function($q){ //выборка всех пользователей с ролью member
        $q->where('name','member');
      })->orderBy('id', 'DESC')->paginate(5);
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
    public function newUserRegister() {
      if (Session::get('id')!='') {
        if (Input::get('frommap')==1) {
          return Redirect::to('/map');
        }
        return Redirect::to('/profile');
      }
      
      $works = Work::all();
      $workgroups = Workgroup::all();
      $json = [];
      foreach ($workgroups as $workgroup) {
        $workgroup->work = $workgroup->work->toArray();
        $json[] = $workgroup->toArray();
      }
      return View::make('public.pages.singup')->withJson($json);
    }
    public function userAjaxRegister(){
      if (Session::get('id')!='') {                       //Если пользователь уже зарегестировался, но вернулся на шаг назад
        $user = $this->user->find(Session::get('id'));    //Находим его по сессии
        if (Session::get('email')==Input::get('email')) { //Если он не поменял email
          if ((Input::get('password')!='')&&(strlen(Input::get('password'))>=6)) { //Проверяем длину пароля
            $user->password = Hash::make(Input::get('password'));
            //$user->language = Session::get('lang');
            if(!empty(Session::get('lang'))){
			  	$user->language = Session::get('lang');
			  }else{
			  	$user->language = App::getLocale();
			  }
            $user->save();
            return '{"success":"Настройки пользователя успешно обновлены"}';
          } else {
            return '{"errors":{"password":["Пароль должен быть минимум 6 символов"]}}';
          }
        }
        $data = Input::only('email', 'password');
        if (!$user->is_valid($data)) {
            return '{"errors":'.User::$errors.'}';
        }
        $user->email = Input::get('email');
        $user->password = Hash::make(Input::get('password'));
        //$user->language = Session::get('lang');
        if(!empty(Session::get('lang'))){
		  	$user->language = Session::get('lang');
		  }else{
		  	$user->language = App::getLocale();
		  }
        Session::put('email',$user->email);
        $user->save();
        return '{"success":"Настройки пользователя успешно обновлены"}';
      }
      $user = $this->user;
      $data = Input::only('email', 'password');
      if (!$user->is_valid($data)) {
          return '{"errors":'.User::$errors.'}';
      }
      $user->email = Input::get('email');
      $user->password = Hash::make(Input::get('password'));
      if(!empty(Session::get('lang'))){
	  	$user->language = Session::get('lang');
	  }else{
	  	$user->language = App::getLocale();
	  }
      $user->save();
      $role = Role::whereName('member')->first();
      $user->roles()->attach($role->id);
      Session::put('role', 'member');
      Session::put('email',$user->email);
      Session::put('id',$user->id);
      Session::put('confirmed', 0);
      ConfirmationMailer::send($user);
      return '{"success":"Пользователь успешно создан! Вам на почту отправлено письмо с подтверждением, проверьте &laquo;Спам&raquo; на всякий случай."}';
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
                Session::put('confirmed', $user->confirmed);
            } else {
                return Redirect::back()->withInput()->withErrors(['msg'=>[ 'Неверно указан email или пароль']]);
            }
            $lang = $user->language;
            Session::put('lang',$lang);
            return Redirect::to('/profile');
            
        } elseif ($role->name=='miniadmin') {
          if (Auth::attempt(Input::only('email','password'))) {
            Session::put('role', 'miniadmin');
            Session::put('email',$user->email);
            Session::put('id',$user->id);
            return Redirect::to('/admin');
          }
        }
    }
    public function userWorkAjaxRegister() {
      // return Session::get('id');
      $work_id = Session::get('work_id');
      $new_work_id = Input::get('work');
      $user = $this->user->find(Session::get('id'));
      if ( ($work_id != '') && ($work_id != $new_work_id) ) { //Если id работы юзера обновилось
        $user->work()->detach($work_id);
        $user->work()->attach($new_work_id);
        Session::put('work_id', $new_work_id);
        return '{"success":"Настройки пользователя сохранены."}';
      } elseif ($work_id == $new_work_id) { //Если id работы юзера осталось неизменным
        return '{"success":"Настройки пользователя сохранены."}';
      }
      $user = $this->user->find(Session::get('id'));
      $user->work()->attach($new_work_id);
      Session::put('work_id', $new_work_id);
      return '{"success":"Настройки пользователя сохранены."}';
    }
    public function indexMiniAdmin() {
      $users = User::all();
      $miniadmins = [];
      foreach ($users as $user) {
        $role = $user->roles()->first();
        if ($role->name === 'miniadmin') {
          $miniadmins[] = $user;
        }
      }
      return View::make('admin.user.miniadmin.index')->withUsers($miniadmins);
    }
    public function createMiniAdmin() {
      return View::make('admin.user.miniadmin.create');
    }
    public function storeMiniAdmin(){
      $user = $this->user;
      $data = Input::only('email', 'password');
      if (!$user->is_valid($data)) {
          return Redirect::back()->withInput()->withErrors(User::$errors);
      }
      $user->email=Input::get('email');
      $user->password = Hash::make(Input::get('password'));
      $user->save();
      $role = Role::whereName('miniadmin')->first();
      $user->roles()->attach($role->id);
      return Redirect::to('/admin/miniadmin');
    }
    public function deleteMiniAdmin($id) {
      $user = $this->user->find($id);
      $user->roles()->detach();
      $user->delete();
      return Redirect::to('/admin/miniadmin')->withErrors(['msg'=>['Пользователь удалён!']]);
    }
    public function confirmUser($content){
      $confirmation = Confirmation::whereContent($content)->first();
      if (!$confirmation) {
        App::abort(404);
      }
      $user = $confirmation->user()->first();
      $user->confirmed = 1;
      $user->save();
      Session::put('confirmed',1);
      $confirmation->delete();
      $meta = [
        'title'=>Lang::get('member.confirmed_title')
      ];
      return View::make('newmember.confirmed')->withUser($user)->withMeta($meta);
    }
    public function sendConfirmationMail(){
      $user = $this->user->find(Session::get('id'));
      ConfirmationMailer::send($user);
      return '{"success":"Письмо отправлено"}';
    }
    public function testCM() {
      // $view = new View();
      // print_r($view);
      // $user = User::find(79);
      // return ConfirmationMailer::send($user);
    }
}
