<?php

class OrdersController extends \BaseController {

    public function __construct(Order $order, Condition $condition) {
        $this->order = $order;
        $this->condition = $condition;
        $this->perPage = 15;
    }

    /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
            $orders = $this->order->orderBy('created_at','desc')->paginate($this->perPage);
            return View::make('admin.orders.index')->withOrders($orders)->withTitle('Все');
	}

        public function indexByCondition($condition)
	{
            $conditions = $this->condition->whereName($condition)->first();
            $orders = $conditions->order()->orderBy('created_at','desc')->paginate($this->perPage);
            return View::make('admin.orders.index')->withOrders($orders)->withTitle($conditions->ru_name);
	}

        public function indexUnreviewed() {
            $orders = $this->order->whereViewed('0')->orderBy('created_at', 'desc')->paginate($this->perPage);
            return View::make('admin.orders.index')->withOrders($orders)->withTitle('Непросмотренные');
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
            $order = $this->order;
            $order->content = Input::get('content');
            $order->phone = Input::get('phone');
            $order->condition_id = 1;
            if ($order->save()) {
                return 'saved';
            } else {
                return 'not saved';
            }
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
            $order= $this->order->find($id);
            $order->viewed = 1;
            $order->save();
            $conditions = $this->condition->all();
            return View::make('admin.orders.show')->withOrder($order)->withConditions($conditions);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
            $order = $this->order->find($id);
            $order->condition_id = Input::get('condition_id');
            $order->save();
            $conditions = $this->condition->all();
            return Redirect::back()->withOrder($order)->withConditions($conditions);
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
        public function unreviewed() {
            $forms = DeliveryForm::where('admin_confirmed','=','0')->get();
            $order = $this->order->where('viewed','=','0')->get();
            return '{"orders":"'.count($order).'", "forms":"'.count($forms).'"}';
        }

}
