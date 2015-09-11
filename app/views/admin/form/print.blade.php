<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Печать формы пользователя {{$user->email}}</title>
        <link rel="stylesheet" href="/evth/admin/css/print.css">
    </head>
    <body>
    <p class="top center"><strong>Best Freight LLC&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;www.bestfreight.com.ua</strong></p>
	<div class="wrapper">
		<div class="col-2">
			<p><strong>E-Mail:</strong> info@bestfreight.com.ua</p>		
		</div>
		<div class="col-2">
			<p><strong>Тел.</strong> +380676412040</p>
		</div>
	</div>
	<div class="padded">	
	    <p class="center"><strong>Договор-заявка на перевозку груза № {{$form->cargo_number}} от {{date('d.m.Y', strtotime($form->cargo_date))}}<br>
	    к договору № {{$form->agreement_number}} от {{date('d.m.Y', strtotime($form->agreement_date))}}
    </div>
    </strong></p>
    <div class="wrapper">	
<table class="first-table">
<tbody>	
	<tr>
		<td><strong>Перевозчик:</strong></td>
		<td>{{$form->transporter}}</td>
	</tr>
	<tr>
		<td><strong>Контактное лицо:</strong></td>
		<td>{{$form->contact_face}}</td>
	</tr>
	</tbody>
</table>
</div>
<div class="wrapper">	
<table>
<tbody>
	<tr>
		<td><strong>Вид транспорта:</strong></td>
		<td colspan="3">{{$form->kind_of_transport}}</td>
	</tr>
	<tr>
		<td><strong>Наименование груза:</strong></td>
		<td><strong>Кол-во мест</strong></td>
		<td><strong>Объм (м3)</strong></td>
		<td><strong>Вес нетт (т)</strong></td>
	</tr>
	<tr>
		<td>{{$form->cargo_name}}</td>
		<td>{{$form->number_of_seats}}</td>
		<td>{{$form->volume}}</td>
		<td>{{$form->weight}}</td>
	</tr>
	</tbody>
</table>
</div>
<div class="wrapper">
	<div class="col-2">
		<table>
		<tbody>
			<tr>
				<td colspan="2"><strong>Адрес загрузки/Таможенного оформления:</strong></td>
			</tr>
			<tr>
				<td colspan="2">{{$form->load_address}} /<br>{{$form->cc_load_address}}</td>
			</tr>
			<tr>
				<td><strong>Дата загрузки:</strong></td>
				<td><strong>Время загрузки:</strong></td>
			</tr>
			<tr>
				<td class="center">{{date('d.m.Y', strtotime($form->load_datetime))}}</td>
				<td class="center">{{date('H:i:s', strtotime($form->load_datetime))}}</td>
			</tr>
			<tr>
				<td colspan="2"><strong>Организация:</strong></td>
			</tr>
			<tr>
				<td colspan="2">&nbsp;</td>
			</tr>
			<tr>
				<td colspan="2"><strong>Контактное лицо:</strong></td>
			</tr>
			<tr>
				<td colspan="2">&nbsp;</td>
			</tr>
			<tr>
				<td colspan="2"><strong>Контактный телефон</strong></td>
			</tr>
			<tr>
				<td colspan="2">&nbsp;</td>
			</tr>
			</tbody>
		</table>
	</div>
	<div class="col-2">
		<table>
		<tbody>
			<tr>
				<td colspan="2"><strong>Адрес разгрузки/Таможенного оформления:</strong></td>
			</tr>
			<tr>
				<td colspan="2">{{$form->unloading_address}} /<br>{{$form->cc_unloading_address}}</td>
			</tr>
			<tr>
				<td><strong>Дата доставки:</strong></td>
				<td><strong>Время доставки:</strong></td>
			</tr>
			<tr>
				<td class="center">{{date('d.m.Y', strtotime($form->delivery_datetime))}}</td>
				<td class="center">{{date('H:i:s', strtotime($form->delivery_datetime))}}</td>
			</tr>
			<tr>
				<td colspan="2"><strong>Организация:</strong></td>
			</tr>
			<tr>
				<td colspan="2">&nbsp;</td>
			</tr>
			<tr>
				<td colspan="2"><strong>Контактное лицо:</strong></td>
			</tr>
			<tr>
				<td colspan="2">&nbsp;</td>
			</tr>
			<tr>
				<td colspan="2"><strong>Контактный телефон</strong></td>
			</tr>
			<tr>
				<td colspan="2">&nbsp;</td>
			</tr>
			</tbody>
		</table>
	</div>
</div>
<div class="wrapper">	
	<table>
	<tbody>
		<tr>
			<td><strong>Стоимость перевозки:</strong></td>
			<td>{{$form->price}}</td>
		</tr>
		<tr>
			<td><strong>Форма оплаты</strong></td>
			<td>{{$form->method_of_payment}}</td>
		</tr>
		<tr>
			<td><strong>Условия оплаты:</strong></td>
			<td>{{$form->payment_term}}</td>
		</tr>
		<tr>
			<td><strong>Дополнительные условия</strong></td>
			<td>{{$form->additional_conditions}}</td>
		</tr>
		</tbody>
	</table>
</div>
<div class="wrapper">
	<h1>Прочие условия</h1>
	<ol class="incremented">
		<li>Международные автомобильные перевозки грузов выполняются в соответствии с положениями действующих Конвенций о международных перевозках (Конвенция КДПГ с изменениями, внесенными Протоколом от 5 июля 1978, Конвенция МДП, Конвенция ДППНВ (ADR), действующих на террирории Украины нормативных актов, а также в соответвии с настоящим Договором.</li>
		<li>Экспедитор обеспечивает загрузку и таможенное оформление автотранспотного средства в течение 48 часов на территории СНГ. Свыше указанного времени простой автомобиля оплачивается, исходя из ствки простоя, указанной в договоре.</li>
		<li>Экспедитор обеспечивает разгрузку и таможенное оформление автотрас\нспортного средтсва в течение 48 часов на территории СНГ. Свыше указанного времени простой автомобиля оплачивается, исходя из ставки простоя, указанной в договоре.</li>
		<li>В случае перегруза втомобиля свыше допустимымх норм по пути следования автопоезда, Экспедитор оплачивает Перевозчику расходы только при своевременном информировании, согласовании формы и размеров штрафов, и после предъявления соответствующих квитанций.</li>
		<li>Стороны могут отказаться от выполнения обязательств по утвержденной (подписанной) ими заявке без несения материальной ответственности не позднее 48 часов до загрузки.</li>
		<li>Экспедитор не несет ответственность за действия Перевозчика, не согласованные с предствителем Экспедитора.</li>
		<li>Перевозчик несет ответственность за неподачу машины или срыв загрузки и штрафуется, исходя из ставки, указанной в договоре</li>
		<li>За несвоевременную подачу машины и нарушение сроков доствки Перевозчик штрфуется исходя из ставки, указанной в договоре</li>
		<li>Перевозчик несет полную материальную ответственность за сохранность груза</li>
	</ol>
</div>
<div class="wrapper">
	<table>
	<tbody>
		<tr>
			<td><strong>Марка, №а/м, №п/п</strong></td>
			<td><strong class="romaned">{{$form->car_brand}}</strong></td>
			<td><strong class="romaned">{{$form->number_am}}</strong></td>
			<td><strong class="romaned">{{$form->number_pp}}</strong></td>
		</tr>
		<tr>
			<td><strong>Ф.И.О. водителя:</strong></td>
			<td colspan="3"><strong class="romaned">{{$form->driver_name}}</strong></td>
		</tr>
		<tr>
			<td><strong>Паспотные данные</strong></td>
			<td colspan="3"><strong class="romaned">{{$form->driver_passport}}</strong></td>
		</tr>
		<tr>
			<td><strong>Способ связи</strong></td>
			<td colspan="3"><strong class="romaned">{{$form->driver_phone}}</strong></td>
		</tr>
		</tbody>
	</table>
</div>
    </body>
</html>        