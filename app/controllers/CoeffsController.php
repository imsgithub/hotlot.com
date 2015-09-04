<?php

class CoeffsController extends \BaseController {
    
    protected $coeff, $rule;
    public function __construct(Coeff $coeff, Rule $rule) {
        $this->coeff = $coeff;
        $this->rule = $rule;
    }

    /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
            $coeffs = $this->coeff->all();
            return View::make('admin.coeffs.index')->withCoeffs($coeffs);
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
            $inputs = Input::all();            
            foreach ($inputs as $key=>$value) {
                if ($this->rule->find($key)) {
                    $rule = $this->rule->find($key);
                    $rule->value = $value;
                    $rule->save();
                }
            };
            return $this->index();
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
		//
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
		//
	}


}
