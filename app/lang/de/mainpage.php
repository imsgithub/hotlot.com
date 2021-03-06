<?php
$table = 'de_blocks';

$content_table = 'content_pages';
$datas = DB::table($table)->get();
foreach ($datas as $data) {
	$name = $data->name;
	$$name = $data;
}
$content_datas = DB::table($content_table)->where('language','=','de')->get();
foreach ($content_datas as $data) {
	$name = $data->data_name;
	$$name = $data;
}
return[
	'title' => 'Международные перевозки. Международные грузоперевозки в Европу, Азию, Россию с компанией Rate&Go',
	'coast1' => 'PREISBERECHNUNG UND DIE  <br> GÜTERLIEFERUNG WELTWEIT!',
	'coast2' => '',
	'belay' => 'GÜTERVERSICHERUNG KOSTENLOS',
	'route' => 'Wählen Sie eine Route',
	'select_a_route' => 'Wählen Sie eine Route',
	'from_whence' => 'Woher',
	'where' => 'Wohin',
	'your_phone' => 'Ваш телефон',
	'calculate' => 'BERECHNEN',
	'how_it_works' => 'Wie funktioniert das?',

	'main_menu' => 'HOME',
	'services_menu' => 'DIENSTLEISTUNGEN',
	'pages_menu' => 'ARTIKEL',
	'how_we_work_menu' => 'WIR ÜBER UNS',
	'contacts_menu' => 'KONTAKTE',
	'profile_menu' => '',

	'login' => 'Войти',
	'reg' => 'Зарегистрироваться',
	'out' => 'Выйти',
	'go_in_admin' => 'Перейти на страницу администратора',
	'go_in_private' => 'Privatbüro',
//	'go_in_private' => 'ZUM PERSÖNLICHEN KONTO',

	'world_delivery' => 'WIR FÜHREN DIE TRANSPORTE WELTWEIT DURCH',//part two
	'ww_content' => $worldwide1->content,
	'ww_content2' => $worldwide2->content,
	'trust' => 'WER VERTRAUT UNS',
	'how_we_work' => 'WIE ARBEITEN WIR',
	'price_calc' => 'Preisberechnung',
	'checkout' => 'Auftragsausfertigung',
	'delivery' => 'Lieferung',
	'payment' => 'Bezahlung',
	'happy_client' => 'Der zufriedene Kunde',
	'price_calc_content' => $price_calc->content,
	'checkout_content' => $checkout->content,
	'delivery_content' => $delivery->content,
	'payment_content' => $payment->content,
	'happy_client_content' => $happy_client->content,

	'we_transport' => 'WIR TRANSPORTIEREN',
	'we_transport2' => '155.000 Tonnen pro Jahr',
	'work_in' => 'Wir arbeiteten in',
	'work_in2' => '190 Ländern',
	'peranent_clients' => 'STAMMKUNDEN',
	'peranent_clients2' => 'über 120',
	'covers' => 'WIR UMFASSEN',
	'covers2' => 'über 34.000 Städte',
	'calculate_price' => 'BERECHNEN SIE DIE ',
	'per_30_secoonds' => 'TRANSPORTKOSTEN IN 30 SEKUNDEN',
	'phone' => 'Telefon',

	'popular_route' => 'BELIEBTE ROUTEN',
	'Hamburg' => 'Гамбург',
	'Lviv' => 'Львов',
	'Milan' => 'Милан',
	'Kyiv' => 'Киев',
	'Warsaw' => 'Варшава',
	'Odessa' => 'Одесса',
	'Moscow' => 'Москва',
	'Berlin' => 'Берлин',
	'Praga' => 'Прага',
	'Kharkiv' => 'Харьков',
	'St_Peterburg' => 'Санкт-Петербург',
	'Turin' => 'Турин',
	'Novosibirsk' => 'Новосибирск',
	'Frankfurt' => 'Франкфурт',
	'Stambul' => 'Стамбул',
	'Dusseldorf' => 'Дюссельдорф',
	'Ashhabad' => 'Ашхабад',
	'Neapol' => 'Неаполь',
	'Irkutsk' => 'Иркутск',
	'Konstanca' => 'Констанца',
	'Almati' => 'Алматы',
	'Orhus' => 'Орхус',
	'Debrecen' => 'Дебрецен',
	'Zebrugge' => 'Зебрюгге',
	'Munhen' => 'Мюнхен',
	'Paris' => 'Париж',
	'Budapest' => 'Будапешт',
	'Samara' => 'Самара',
	'Oslo' => 'Осло',
	'Krasnodar' => 'Краснодар',
	'Brno' => 'Брно',
	'Riga' => 'Рига',
	'Minsk' => 'Минск',
	'Astana' => 'Астана',
	'Dortmund' => 'Дортмунд',
	'Rotterdam' => 'Роттердам',
	'Kazan' => 'Казань',
	'Bologna' => 'Болонья',
	'Parma' => 'Парма',
	'Tashkent' => 'Ташкент',
	'Koper' => 'Копер',
	'Stutgart' => 'Штутгарт',
	'Vroclav' => 'Вроцлав',
	'Gomel' => 'Гомель',
	'Zhitomir' => 'Житомир',
	'Poznan' => 'Познань',
	'Dnepropetrovsk' => 'Днепропетровск',
	'Teheran' => 'Тегеран',
	'Hannover' => 'Ганновер',
	'Az_Baku' => 'Азербайджан, Баку',
	'Kotka' => 'Котка',
	'Rostov_na_Donu' => 'Ростов-на-Дону',
	'Tallin' => 'Таллин',
	'Koshice' => 'Кошице',
	'London' => 'Лондон',
	'Shimket' => 'Шымкент',

	'Automobile_int_trans_title' => $automobile_int_trans->title,
	'Automobile_int_trans' => $automobile_int_trans->content,
	'Automobile_int_trans_alias' => $auto_perevozki->alias,
	'container_shipping_title' => $container_shipping->title,
	'container_shipping' => $container_shipping->content,
	'container_shipping_alias' => $morskie_perevozki->alias,
	'groupage_cargo_title' => $groupage_cargo->title,
	'groupage_cargo' => $groupage_cargo->content,
	'groupage_cargo_alias' => $perevozka_sbornih_gruzov->alias,
	'multimodal_transportation_title' => $multimodal_transportation->title,
	'multimodal_transportation' => $multimodal_transportation->content,
	'multimodal_transportation_alias' => $multimodalnie_perevozki->alias,
	'brokerage_services_title' => $brokerage_services->title,
	'brokerage_services' => $brokerage_services->content,
	'brokerage_services_alias' => $brokerskie_uslugi->alias,
	'insurance_title' => $insurance->title,
	'insurance' => $insurance->content,
	'insurance_alias' => $insurance->alias,
	'oversized_transport_title' => $oversized_transport->title,
	'oversized_transport' => $oversized_transport->content,
	'oversized_transport_alias' => $negabaritnie_gruzoperevozki->alias,
	'storage_title' => $storage->title,
	'storage' => $storage->content,
	'storage_alias' => $storage->alias,
	'contacts_title' => $contacts->title,
	'contacts' => $contacts->content,

	'how_it_worked' => 'Wie funktioniert das?',
	'choose_route' => 'SIE WÄHLEN EINE ROUTE',
	'calc_coast' => 'SIE BERECHNEN DEN PREIS',
	'order_confirm' => 'SIE BESTÄTIGEN DEN AUFTRAG',
	'get_load' => 'SIE EMPFANGEN IHR FRACHTGUT',
	'choose_point' => 'Sie geben den Anfangs- und Zielpunkt und die Beförderungsart an',
	'get_order' => 'Sie erhalten den vorläufigen Beförderungspreis.',
	'contact_to_you' => 'Wir kontaktieren Sie zur Auftragsbestätigung.',
	'delivery_to_you' => 'Wir liefern Ihr Gut an das angegebene Ort.',

	'gallery_cargo_params' => 'вес 20 т, объем 86 м<sup>3</sup>.',
	'content_on_main_title' => $content_on_main->title,
	'content_on_main_content' => $content_on_main->content,
	'' => '',
	'' => '',
	'' => '',
];
