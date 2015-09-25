<?php

class CargoTypesController extends \BaseController {

    protected $cargotype;
    public function __construct(CargoType $cargotype) {
        $this->cargotype = $cargotype;
    }

    /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
            $cargotypes = $this->cargotype->all();
            return View::make('admin.cargotypes.index')->withCargotypes($cargotypes);
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
            $cargotype = $this->cargotype;            
            $cargotype->name = Input::get('name');
            $cargotype->value = Input::get('value');
            $cargotype->save();
            return $cargotype;
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
            $cargotype = $this->cargotype->find($id);
            $cargotype->name = Input::get('name');
            $cargotype->value = Input::get('value');
            $cargotype->save();
            return $cargotype;
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
            $cargotype = $this->cargotype->find($id);
            $cargotype->delete();
            return;
	}


}
