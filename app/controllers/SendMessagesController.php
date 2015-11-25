<?php

class SendMessagesController extends \BaseController {

    public function __construct(Order $order, Condition $condition) {
        $this->order = $order;
        $this->condition = $condition;
    }
        public function messageFromHomePage() {
            $from = Input::get('from');
            $where = Input::get('where');
            $phone = Input::get('phone');
            Mail::send('emails.message', ['from'=>$from, 'where'=>$where, 'phone'=>$phone], function($message)
            {
                $message->to('info@rate-and-go.com')->subject('Новая заявка на сайте rate-and-go.com');                
            });
            $order = $this->order;
            $order->content = 'Заявка с главной страницы:<br>Откуда: '.Input::get('from').'<br>Куда: '.Input::get('where');
            $order->phone = Input::get('phone');
            $order->condition_id = 1;
            $order->save();
        }
	public function index()
	{
		
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
	public function destroy($id)
	{
		//
	}


}
