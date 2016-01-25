<?php
$table = 'en_blocks';
$datas = DB::table($table)->get();
foreach ($datas as $data) {
	$name = $data->name;
	$$name = $data;
}
return[
	'coast1' => 'calculation of cost and order transportation <br> in 30 seconds',
	'coast2' => 'in 30 seconds',
	'belay' => 'insurance for the goods as a gift',
	'route' => 'Select a route',
	'select_a_route' => 'Select a route',
	'from_whence' => 'From whence',
	'where' => 'Where',
	'your_phone' => 'Your phone number',
	'calculate' => 'Calculate',
	'how_it_works' => 'How it works?',
	'login' => 'Login',
	'login_btn' => '/login',
	'reg' => 'Sign up',
	'reg_btn' => '/sing-up',
	'world_delivery' => 'Transports worldwide',//part two
	'ww_content' => $worldwide1->content,
	'ww_content2' => $worldwide2->content,
	'trust' => 'who trust us',
	'how_we_work' => 'How we are working',
	'price_calc' => 'The calculation of the cost',
	'checkout' => 'Ordering',
	'delivery' => 'Delivery',
	'payment' => 'Payment',
	'happy_client' => 'A satisfied customer',
	'price_calc_content' => $price_calc->content,
	'checkout_content' => $checkout->content,
	'delivery_content' => $delivery->content,
	'payment_content' => $payment->content,
	'happy_client_content' => $happy_client->content,
	'we_transport' => 'WE SHIP',
	'we_transport2' => '155,000 tons annually',
	'work_in' => 'WORK IN',
	'work_in2' => '190 countries',
	'peranent_clients' => 'Regular',
	'peranent_clients2' => 'CLIENTS over 120',
	'covers' => 'COVERED',
	'covers2' => 'more than 34,000 cities',

	'calculate_price' => 'Рассчитайте стоимость',
	'per_30_secoonds' => 'перевозки за 30 секунд',
	'phone' => 'Телефон',

	'popular_route' => 'Popular routes',
	'Hamburg' => 'Hamburg',
	'Lviv' => 'Lviv',
	'Milan' => 'Milan',
	'Kyiv' => 'Kiev', /// проверить Киев!!!!
	'Warsaw' => 'Warsaw',
	'Odessa' => 'Odessa',
	'Moscow' => 'Moscow',
	'Berlin' => 'Berlin',
	'Praga' => 'Prague',
	'Kharkiv' => 'Kharkiv',
	'St_Peterburg' => 'St. Petersburg',
	'Turin' => 'Turin',
	'Novosibirsk' => 'Novosibirsk',
	'Frankfurt' => 'Frankfurt',
	'Stambul' => 'Istanbul',
	'Dusseldorf' => 'Düsseldorf',
	'Ashhabad' => 'Ashgabat',
	'Neapol' => 'Naples',
	'Irkutsk' => 'Irkutsk',
	'Konstanca' => 'Constance',
	'Almati' => 'Almaty',
	'Orhus' => 'Aarhus',
	'Debrecen' => 'Debrecen',
	'Zebrugge' => 'Zeebrugge',
	'Munhen' => 'Munich',
	'Paris' => 'Paris',
	'Budapest' => 'Budapest',
	'Samara' => 'Samara',
	'Oslo' => 'Oslo',
	'Krasnodar' => 'Krasnodar',
	'Brno' => 'Brno',
	'Riga' => 'Riga',
	'Minsk' => 'Minsk',
	'Astana' => 'Astana',
	'Dortmund' => 'Dortmund',
	'Rotterdam' => 'Rotterdam',
	'Kazan' => 'Kazan',
	'Bologna' => 'Bologna',
	'Parma' => 'Parma',
	'Tashkent' => 'Tashkent',
	'Koper' => 'Koper',
	'Stutgart' => 'Stuttgart',
	'Vroclav' => 'Wroclaw',
	'Gomel' => 'Gomel',
	'Zhitomir' => 'Zhitomir',///// проверить Житомир!!!
	'Poznan' => 'Poznan',
	'Dnepropetrovsk' => 'Dnepropetrovsk',
	'Teheran' => 'Tehran',
	'Hannover' => 'Hanover',
	'Az_Baku' => 'Azerbaijan, Baku',
	'Kotka' => 'Kotka',
	'Rostov_na_Donu' => 'Rostov-on-Don', /// проверить Ростов на дону
	'Tallin' => 'Tallinn',
	'Koshice' => 'Kosice',
	'London' => 'London',
	'Shimket' => 'Shymkent',

	'services' => 'Services',
	/*'Automobile_int_trans_title' => $automobile_int_trans->title,
	'Automobile_int_trans' => $automobile_int_trans->content,
	'container_shipping_title' => $container_shipping->title,
	'container_shipping' => $container_shipping->content,
	'groupage_cargo_title' => $groupage_cargo->title,
	'groupage_cargo' => $groupage_cargo->content,
	'multimodal_transportation_title' => $multimodal_transportation->title,
	'multimodal_transportation' => $multimodal_transportation->content,
	'brokerage_services_title' => $brokerage_services->title,
	'brokerage_services' => $brokerage_services->content,
	'insurance_title' => $insurance->title,
	'insurance' => $insurance->content,
	'oversized_transport_title' => $oversized_transport->title,
	'oversized_transport' => $oversized_transport->content,
	'storage_title' => $storage->title,
	'storage' => $storage->content,
	'contacts_title' => $contacts->title,
	'contacts' => $contacts->content,*/

	'how_it_worked' => 'Как это работает?',
	'choose_route' => 'Выбираете маршрут',
	'calc_coast' => 'Расчитываете стоимость',
	'order_confirm' => 'Подтверждаете заказ',
	'get_load' => 'Получаете груз',
	'choose_point' => 'Указываете точку отправки и точку назначения и тип перевозки.',
	'get_order' => 'Получаете предварительную оценку доставки.',
	'contact_to_you' => 'Мы связываемся с Вами для подтверждения заказа.',
	'delivery_to_you' => 'Доставляем Ваш груз в назначенное место.',

	'gallery_cargo_params' => 'weight 20 т, volume 86 m<sup>3</sup>.',

	'' => '',
	'' => '',
	'' => '',
];