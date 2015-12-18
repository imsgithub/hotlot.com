<?php

class DeliveryFormsController extends \BaseController {
    protected $form, $user_mail, $user_id, $user, $paginate, $url;
    public function __construct(DeliveryForm $form, User $user) {
        $this->form = $form;
        $this->user_mail = Session::get('email');
        $this->user_id = Session::get('id');
        $this->user = $user;
        $this->paginate = 5;
        $this->url = URL::route('forms');
    }

    /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
            // $forms = $this->user->find($this->user_id)->form()->paginate($this->paginate);
            // if (count($forms)==0) {
            //     $url = URL::route('create_form');
            //     return View::make('member.form.empty')->withUrl($url);
            // }
            // $url = $this->url;
            // return View::make('member.form.index')->withUrl($url)->withForms($forms);
            $meta = [
              'title'=>Lang::get('member.forms', ['email'=>$this->user_mail])
            ];
            $forms = $this->user->find($this->user_id)->form()->paginate($this->paginate);
            return View::make('newmember.forms.index')->withForms($forms)->withMeta($meta);
	}
  public function adminIndex()
	{
    $forms = $this->form->paginate(20);
    return View::make('admin.form.showall')->withForms($forms);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
    $meta = [
      'title'=>Lang::get('member.create_form_title')
    ];
    $currencies = Currency::all();
    $cargo_types = CargoType::all();
    return View::make('newmember.forms.create')->withMeta($meta)->withCurrencies($currencies)->withCargotypes($cargo_types);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
            // $form = $this->form;
            // $data = Input::only('kind_of_transport', 'cargo_name', 'number_of_seats', 'volume', 'weight', 'load_address', 'unloading_address', 'load_datetime', 'delivery_datetime', 'method_of_payment');
            // if ($form->is_valid($data)) {
            //     $user = $this->user->find($this->user_id);
            //     $form->kind_of_transport = HTML::entities(Input::get('kind_of_transport'));
            //     $form->cargo_name = HTML::entities(Input::get('cargo_name'));
            //     $form->number_of_seats = HTML::entities(Input::get('number_of_seats'));
            //     $form->volume = HTML::entities(Input::get('volume'));
            //     $form->weight = HTML::entities(Input::get('weight'));
            //     $form->load_address = HTML::entities(Input::get('load_address'));
            //     $form->unloading_address = HTML::entities(Input::get('unloading_address'));
            //     $form->load_datetime = HTML::entities(Input::get('load_datetime'));
            //     $form->delivery_datetime = HTML::entities(Input::get('delivery_datetime'));
            //     $form->method_of_payment = HTML::entities(Input::get('method_of_payment'));
            //     $user->form()->save($form);
            //     return Redirect::route('forms');
            // }
            // return Redirect::back()->withInput()->withErrors(DeliveryForm::$errors);
            $form = $this->form;
            $data = Input::except('_token');
            if ($form->is_valid($data)) {
              $form->price = HTML::entities(Input::get('price'));
              $form->cargo_name = HTML::entities(Input::get('cargo_name'));
              $form->cargo_price = HTML::entities(Input::get('cargo_price'));
              if (Input::get('insurance') == 'on') {
                $form->insurance = 1;
              } else {
                $form->insurance = 0;
              }
              $form->weight = HTML::entities(Input::get('weight'));
              $form->volume = HTML::entities(Input::get('volume'));
              $form->number_of_seats = HTML::entities(Input::get('number_of_seats'));
              $form->requirements = HTML::entities(Input::get('requirements'));
              $form->route_from = HTML::entities(Input::get('route_from'));
              $form->route_where = HTML::entities(Input::get('route_where'));
              $form->load_datetime = HTML::entities(Input::get('load_datetime'));
              $form->load_transporter = HTML::entities(Input::get('load_transporter'));
              $form->load_address = HTML::entities(Input::get('load_address'));
              $form->load_face = HTML::entities(Input::get('load_face'));
              $form->load_phone = HTML::entities(Input::get('load_phone'));
              $form->unload_datetime = HTML::entities(Input::get('unload_datetime'));
              $form->unload_transporter = HTML::entities(Input::get('unload_transporter'));
              $form->unload_address = HTML::entities(Input::get('unload_address'));
              $form->unload_face = HTML::entities(Input::get('unload_face'));
              $form->unload_phone = HTML::entities(Input::get('unload_phone'));
              $form->comment = HTML::entities(Input::get('comment'));
              $form->user_id = Session::get('id');
              $form->cargo_type_id = HTML::entities(Input::get('cargo_type_id'));
              $form->currency_id = HTML::entities(Input::get('currency_id'));
              $form->user_confirmed = 0;
              $form->admin_confirmed = 0;
              $form->save();
              return Redirect::to('/profile/forms');
            } else {
              // return 'errors';
              return Redirect::back()->withInput()->withErrors(DeliveryForm::$errors);
            }
            // return var_dump(Input::all());
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
            $form = $this->user->find($this->user_id)->form()->find($id);
            if ((isset($form->user_id))&&($this->user_id==$form->user_id)) {
                return View::make('member.form.show')->withForm($form)->withUrl($this->url);
            }
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
    $meta = [
      'title'=>Lang::get('member.edit_form_title')
    ];
    $currencies = Currency::all();
    $cargo_types = CargoType::all();
    $form = $this->user->find($this->user_id)->form()->find($id);
    if ((isset($form->user_id))&&($this->user_id==$form->user_id)) {
      if ($form->admin_confirmed == 1) {
        $person = $this->user->find(Session::get('id'))->person;
        if (!$person) {
          return View::make('newmember.forms.editContract')->withForm($form)->withCurrencies($currencies)->withCargotypes($cargo_types)->withMeta($meta);
        } else {
          return View::make('newmember.forms.editContract')->withForm($form)->withCurrencies($currencies)->withCargotypes($cargo_types)->withMeta($meta)->withPerson($person);
        }
      } else {
        return View::make('newmember.forms.edit')->withForm($form)->withCurrencies($currencies)->withCargotypes($cargo_types)->withMeta($meta);
      }


    }
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
            $form = $this->user->find($this->user_id)->form()->find($id);
            $data = Input::except('_token');
            // if ((isset($form->user_id))&&($this->user_id==$form->user_id)) {
            //     $data = Input::only('kind_of_transport', 'cargo_name', 'number_of_seats', 'volume', 'weight', 'load_address', 'unloading_address', 'load_datetime', 'delivery_datetime', 'method_of_payment');
            //     if ($form->is_valid($data)) {
            //         $form->kind_of_transport = HTML::entities(Input::get('kind_of_transport'));
            //         $form->cargo_name = HTML::entities(Input::get('cargo_name'));
            //         $form->number_of_seats = HTML::entities(Input::get('number_of_seats'));
            //         $form->volume = HTML::entities(Input::get('volume'));
            //         $form->weight = HTML::entities(Input::get('weight'));
            //         $form->load_address = HTML::entities(Input::get('load_address'));
            //         $form->unloading_address = HTML::entities(Input::get('unloading_address'));
            //         $form->load_datetime = HTML::entities(Input::get('load_datetime'));
            //         $form->delivery_datetime = HTML::entities(Input::get('delivery_datetime'));
            //         $form->method_of_payment = HTML::entities(Input::get('method_of_payment'));
            //         $form->save();
            //         return Redirect::back()->withErrors(['msg'=>[ 'Сохранено!']]);
            //     }
            //     return Redirect::back()->withInput()->withErrors(DeliveryForm::$errors);
            // }
            if ((isset($form->user_id))&&($this->user_id==$form->user_id)) {
                if ($form->is_valid($data)) {
                  $form->price = HTML::entities(Input::get('price'));
                  $form->cargo_name = HTML::entities(Input::get('cargo_name'));
                  $form->cargo_price = HTML::entities(Input::get('cargo_price'));
                  if (Input::get('insurance') == 'on') {
                    $form->insurance = 1;
                  } else {
                    $form->insurance = 0;
                  }
                  $form->weight = HTML::entities(Input::get('weight'));
                  $form->volume = HTML::entities(Input::get('volume'));
                  $form->number_of_seats = HTML::entities(Input::get('number_of_seats'));
                  $form->requirements = HTML::entities(Input::get('requirements'));
                  $form->route_from = HTML::entities(Input::get('route_from'));
                  $form->route_where = HTML::entities(Input::get('route_where'));
                  $form->load_datetime = HTML::entities(Input::get('load_datetime'));
                  $form->load_transporter = HTML::entities(Input::get('load_transporter'));
                  $form->load_address = HTML::entities(Input::get('load_address'));
                  $form->load_face = HTML::entities(Input::get('load_face'));
                  $form->load_phone = HTML::entities(Input::get('load_phone'));
                  $form->unload_datetime = HTML::entities(Input::get('unload_datetime'));
                  $form->unload_transporter = HTML::entities(Input::get('unload_transporter'));
                  $form->unload_address = HTML::entities(Input::get('unload_address'));
                  $form->unload_face = HTML::entities(Input::get('unload_face'));
                  $form->unload_phone = HTML::entities(Input::get('unload_phone'));
                  $form->comment = HTML::entities(Input::get('comment'));
                  $form->user_id = Session::get('id');
                  $form->cargo_type_id = HTML::entities(Input::get('cargo_type_id'));
                  $form->currency_id = HTML::entities(Input::get('currency_id'));
                  $form->user_confirmed = 0;
                  $form->admin_confirmed = 0;
                  $form->save();
                  return Redirect::to('/profile/forms')->withErrors(['msg'=>[ 'Сохранено!']]);
                }
                return Redirect::back()->withInput()->withErrors(DeliveryForm::$errors);
            }
	}
  public function saveContract($id)
  {
    $rules = [
      'user_email'=>'required',
      'company_name'=>'required',
      'user_name'=>'required',
      'user_surname'=>'required',
      'user_patronymic'=>'required',
      'requisites'=>'required',
      'en_company_name'=>'required',
      'en_user_name'=>'required',
      'en_user_surname'=>'required',
      'en_user_patronymic'=>'required',
      'en_requisites'=>'required',
    ];
    $data = Input::except('_token');
    $validator = Validator::make($data, $rules);
    if ($validator->fails()) {
      return Redirect::back()->withInput()->withErrors($validator->messages());
    }
    $form = $this->user->find($this->user_id)->form()->find($id);
    if ((isset($form->user_id))&&($this->user_id==$form->user_id)) {
      $form->user_email = HTML::entities(Input::get('user_email'));
      $form->company_name = HTML::entities(Input::get('company_name'));
      $form->user_name = HTML::entities(Input::get('user_name'));
      $form->user_surname = HTML::entities(Input::get('user_surname'));
      $form->user_patronymic = HTML::entities(Input::get('user_patronymic'));
      $form->requisites = HTML::entities(Input::get('requisites'));
      $form->en_company_name = HTML::entities(Input::get('en_company_name'));
      $form->en_user_name = HTML::entities(Input::get('en_user_name'));
      $form->en_user_surname = HTML::entities(Input::get('en_user_surname'));
      $form->en_user_patronymic = HTML::entities(Input::get('en_user_patronymic'));
      $form->en_requisites = HTML::entities(Input::get('en_requisites'));
      $form->user_confirmed = 1;
      $form->save();
      return Redirect::to('/profile/forms/edit/'.$id);
    } else {
      return Redirect::to('/login');
    };
  }
  public function showContract($id){
    $form = $this->form->find($id);
    if (($form->user_confirmed == 1)&& ($form->user_id = Session::get('id'))) {
      $meta = [
        'title'=>'Договор №'.$id
      ];
      return View::make('newmember.forms.print')->withForm($form)->withMeta($meta);
    } else {
      return Redirect::to('/profile/forms/edit/'.$id);
    };
  }


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//методы администратора
	}
        public function show_user_forms($id) {
            $user = $this->user->find($id);
            $forms = $user->form()->orderBy('created_at','DESC')->paginate(20);
            return View::make('admin.form.index')->withForms($forms)->withUser($user);
        }
        public function show_user_form($user_id,$form_id) {
            $user = $this->user->find($user_id);
            $form = $this->form->find($form_id);
            $currencies = Currency::all();
            $cargo_types = CargoType::all();
            return View::make('admin.form.show')->withForm($form)->withUser($user)->withCurrencies($currencies)->withCargotypes($cargo_types);
        }
        public function update_user_form($user_id,$form_id) {
            $user = $this->user->find($user_id);
            $form = $this->form->find($form_id);
            $currencies = Currency::all();
            $cargo_types = CargoType::all();
            $data = Input::except('_token');
            if ($form->is_valid($data)) {
                $form->fill($data);
                if (Input::get('insurance') == 'on') {
                  $form->insurance = 1;
                } else {
                  $form->insurance = 0;
                }
                if (Input::get('admin_confirmed') == 'on') {
                  $form->admin_confirmed = 1;
                } else {
                  $form->admin_confirmed = 0;
                }
                $form->save();
                return View::make('admin.form.show')->withForm($form)->withUser($user)->withErrors(['msg'=>[ 'Сохранено!']])->withCurrencies($currencies)->withCargotypes($cargo_types);
            }
            return Redirect::back()->withInput()->withErrors(DeliveryForm::$errors);
        }
        public function printForm($user_id,$form_id) {
            $user = $this->user->find($user_id);
            $form = $this->form->find($form_id);
            return View::make('admin.form.print')->withForm($form)->withUser($user);
        }

}
