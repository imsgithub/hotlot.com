<?php

class CurrenciesController extends \BaseController {

    protected $currency;
    public function __construct(Currency $currency) {
        $this->currency = $currency;
    }

    /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
            $currencies = $this->currency->orderBy('name', 'ASC')->get();
            return View::make('admin.currencies.index')->withCurrencies($currencies);
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
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
            $currency = $this->currency;
            $currency->name = Input::get('name');
            $currency->value = Input::get('value');
            $currency->save();
            return $currency;
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
            $currency = $this->currency->find($id);
            $currency->name = Input::get('name');
            $currency->value = Input::get('value');
            $currency->save();
            return $currency;
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


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
            $currency = $this->currency->find($id);
            $currency->delete();
            return;
	}


}
