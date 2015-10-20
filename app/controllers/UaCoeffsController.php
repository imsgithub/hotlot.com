<?php

class UaCoeffsController extends \BaseController {
    
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
            $areas = UaArea::all();
            return View::make('admin.uaareas.index')->withAreas($areas);
	}
        
        public function addArea() {
            $area = new UaArea(['name'=>Input::get('name')]);
            $area->save();
            return Redirect::back();
        }
        
        public function indexCoeffs() {
            $areas = UaArea::all();
            return View::make('admin.uacoeffs.index')->withAreas($areas);
        }
        public function editCoeffs($id) {
            $coeffs = UaCoeff::whereStartId($id)->get();
            $areas = UaArea::all();
            $values = []; $names = [];
            $currentArea = UaArea::find($id);            
            foreach ($areas as $area) {        
                foreach ($coeffs as $coeff) {
                    if ( $coeff->end_id == $area->id) {
                        $values[$area->id]=$coeff->value;
                        $names[$area->id] = 'old'.$coeff->id;
                    }
                }        
            }
            return View::make('admin.uacoeffs.show')->withCurrent($currentArea)->withAreas($areas)->withNames($names)->withValues($values);
        }
        
        public function storeCoeffs($id){
            $old_coeffs = [];
            $new_coeffs = [];
            $inputs = Input::except('_token');
            foreach ($inputs as $key => $value) {        
                if(strpos($key, 'old')!==false){            
                    $old_coeffs[substr($key, 3)] = $value;
                } else {
                    $new_coeffs[substr($key, 3)] = $value;
                }
            }
            foreach ($old_coeffs as $key => $value) {
                $coeff = UaCoeff::find($key);
                $coeff->value = $value;
                $data = [
                    'start_id' => $coeff->start_id,
                    'end_id' => $coeff->end_id,
                    'value' => $coeff->value
                ];        
                if ($coeff->isValid($data)) {
                    $coeff->save();
                }
                unset($data);
            }    
            foreach ($new_coeffs as $key => $value) {
                $data = [
                    'start_id' => $id,
                    'end_id' => $key,
                    'value' => $value
                ];
                $coeff = new UaCoeff($data);
                if ($coeff->isValid($data)) {
                    $coeff->save();
                } 
                unset($data);
            }
            return Redirect::back()->withErrors(['msg'=>['Сохранено!']]);
        }
        
        public function destroyArea()
	{
            $id = Input::get('id');
            $area = UaArea::find($id);
            $area->delete();
            return Redirect::back();
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
	
	}


}
