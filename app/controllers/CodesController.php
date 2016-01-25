<?php

class CodesController extends \BaseController {

    protected $code, $coeff, $currency, $cargotype;
    public function __construct(Code $code, Coeff $coeff, Currency $currency, CargoType $cargotype, UaCoeff $uacoeffs, UaArea $uaareas) {
        $this->code = $code;
        $this->coeff = $coeff;
        $this->currency = $currency;
        $this->cargotype = $cargotype;
        $this->uacoeffs = $uacoeffs;
        $this->uaareas = $uaareas;
    }

    //Функции для пользователей
    public function showMap(){
        $code = $this->code->all();
        return View::make('public.map')->withCodes($code);
    }
    //тест инпутов для гет запроса
    public function showNiceMap(){
        $code = $this->code->all();
        $coeff = $this->coeff->all();
        $currency = $this->currency->all();
        $cargotype = $this->cargotype->all();
        $ua = ['coeffs'=>$this->uacoeffs->all(), 'areas'=>$this->uaareas->all()];
        $inputs = array(
            'start'=>Input::get('start'),
            'end'=>Input::get('end')
        );
        if (Session::get('role')==='admin') {
          return View::make('public.nicemapAdmin')->withCodes($code)->withCoeffs($coeff)->withInputs($inputs)->withCurrencies($currency)->withCargotypes($cargotype)->withUa($ua);;
        }
        return View::make('public.nicemap')->withCodes($code)->withCoeffs($coeff)->withInputs($inputs)->withCurrencies($currency)->withCargotypes($cargotype)->withUa($ua);
    }
    /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
            $code = $this->code->orderBy('code', 'ASC')->get();
            return View::make('admin.codes.index')->withCodes($code);
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
            $code = $this->code;
            $code->name = Input::get('name');
            $code->code = Input::get('code');
            $code->save();
            $country = new Country([
                'end'=>$code->code,
                'value'=>1
            ]);
            $code->countries()->save($country);
            return View::make('admin.codes.json')->withCode($code);
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
	public function destroy()
	{
            $code = $this->code->find(Input::get('id'));
            $code->delete();
            return 'Удалено';
	}


}
