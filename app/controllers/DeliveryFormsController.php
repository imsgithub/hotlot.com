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
            $forms = $this->user->find($this->user_id)->form()->paginate($this->paginate);            
            if (count($forms)==0) {    
                $url = URL::route('create_form');
                return View::make('member.form.empty')->withUrl($url);
            }
            $url = $this->url;
            return View::make('member.form.index')->withUrl($url)->withForms($forms);
            
//            var_dump(!empty($this->user->find(2)->form));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
            return View::make('member.form.create')->withUrl($this->url);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
            $form = $this->form;
            $data = Input::only('kind_of_transport', 'cargo_name', 'number_of_seats', 'volume', 'weight', 'load_address', 'unloading_address', 'load_datetime', 'delivery_datetime', 'method_of_payment');
            if ($form->is_valid($data)) {
                $user = $this->user->find($this->user_id);
                $form->kind_of_transport = Input::get('kind_of_transport');
                $form->cargo_name = Input::get('cargo_name');
                $form->number_of_seats = Input::get('number_of_seats');
                $form->volume = Input::get('volume');
                $form->weight = Input::get('weight');
                $form->load_address = Input::get('load_address');
                $form->unloading_address = Input::get('unloading_address');
                $form->load_datetime = Input::get('load_datetime');
                $form->delivery_datetime = Input::get('delivery_datetime');
                $form->method_of_payment = Input::get('method_of_payment');
                $user->form()->save($form);
                return Redirect::route('forms');
            }
            return Redirect::back()->withInput()->withErrors(DeliveryForm::$errors);
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
            $form = $this->user->find($this->user_id)->form()->find($id);
            if ((isset($form->user_id))&&($this->user_id==$form->user_id)) {
                return View::make('member.form.edit')->withForm($form)->withUrl($this->url);
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
            if ((isset($form->user_id))&&($this->user_id==$form->user_id)) {
                $data = Input::only('kind_of_transport', 'cargo_name', 'number_of_seats', 'volume', 'weight', 'load_address', 'unloading_address', 'load_datetime', 'delivery_datetime', 'method_of_payment');
                if ($form->is_valid($data)) {                    
                    $form->kind_of_transport = Input::get('kind_of_transport');
                    $form->cargo_name = Input::get('cargo_name');
                    $form->number_of_seats = Input::get('number_of_seats');
                    $form->volume = Input::get('volume');
                    $form->weight = Input::get('weight');
                    $form->load_address = Input::get('load_address');
                    $form->unloading_address = Input::get('unloading_address');
                    $form->load_datetime = Input::get('load_datetime');
                    $form->delivery_datetime = Input::get('delivery_datetime');
                    $form->method_of_payment = Input::get('method_of_payment');
                    $form->save();
                    return Redirect::back()->withErrors(['msg'=>[ 'Сохранено!']]);
                }
                return Redirect::back()->withInput()->withErrors(DeliveryForm::$errors);
            }
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}
        public function show_user_forms($id) {
            $user = $this->user->find($id);
            $forms = $user->form()->orderBy('created_at','DESC')->paginate(20);
            return View::make('admin.form.index')->withForms($forms)->withUser($user);
        }
        public function show_user_form($user_id,$form_id) {
            $user = $this->user->find($user_id);
            $form = $this->form->find($form_id);
            return View::make('admin.form.show')->withForm($form)->withUser($user);
        }
        public function update_user_form($user_id,$form_id) {
            $user = $this->user->find($user_id);
            $form = $this->form->find($form_id);
            $data = Input::except('_token');
            if ($form->is_valid($data)) {
                $form->fill($data);
                $form->save();
                return View::make('admin.form.show')->withForm($form)->withUser($user)->withErrors(['msg'=>[ 'Сохранено!']]);
            }
            return Redirect::back()->withInput()->withErrors(DeliveryForm::$errors);
        }
        public function printForm($user_id,$form_id) {
            $user = $this->user->find($user_id);
            $form = $this->form->find($form_id);
            return View::make('admin.form.print')->withForm($form)->withUser($user);
        }

}
