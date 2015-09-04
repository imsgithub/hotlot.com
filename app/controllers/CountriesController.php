<?php

class CountriesController extends \BaseController {

    protected $country;
    protected $code;
    public function __construct(Country $country, Code $code) {            
            $this->country = $country;
            $this->code = $code;
    }

        /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
            $code = $this->code->orderBy('code', 'ASC')->get();            
            return View::make('admin.countries.index')->withCodes($code);
	}
        
        /**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit()
	{
            $codes = $this->code->all();
            $code = $this->code->find(Input::get('id'));
//            $countries_old = [];
            $countries_new = [];
            foreach ($codes as $c) {
                if (isset($code->countries()->where('end', '=', $c->code)->first()->value)) {
                    $old_country = $code->countries()->where('end', '=', $c->code)->first();
                    $old_country->value = Input::get($c->code);
                    $old_country->save();                                         
                } 
                else {
                    $countries_new[] = new Country([
                        'end'=>$c->code,
                        'value'=>Input::get($c->code)
                    ]);  
                }
            }                        
            $code->countries()->saveMany($countries_new);            
            return Redirect::back();            
	}
        /**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
        
	public function destroy()
	{
            $id = Input::get('id');
            $country = $this->country->find($id);
            $country->delete();
            return;
	}
        /**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
            $country = $this->country;
            $country->start = Input::get('start');
            $country->end = Input::get('end');
            $country->value = Input::get('value');
            if ($country->save()) {
                return View::make('admin.countries.add')->withCountry($country);
            } else {
                return 'Не сохранено';
            }
        }
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
            $code = $this->code->find($id);
            $codes = $this->code->orderBy('code','ASC')->get();
            $values = [];          
            foreach ($codes as $c) {
                if (isset($code->countries()->where('end', '=', $c->code)->first()->value)) {
                    $values[$c->code] = $code->countries()->where('end', '=', $c->code)->first()->value;
                }
            }
            return View::make('admin.countries.show')->withCode($code)->withCodes($codes)->withValues($values);
	}


	


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	


}
