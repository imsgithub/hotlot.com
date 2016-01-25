@extends('admin.layouts.default')
@section('content')
<div class="content-row">
	<div class="print-contract">
		<table>
			<tbody>
				<tr>
					<td class="center"><strong>ДОГОВІР №{{$form->id}}</strong></td>
					<td class="center"><strong>CONTRACT №{{$form->id}}</strong></td>
				</tr>
				<tr>
					<td class="center"><strong>транспортного експедирування</strong></td>
					<td class="center"><strong>of a freight forwarding</strong></td>
				</tr>
				<tr>
					<td class="center"><strong class="left"><em>Меквон, США</em></strong><strong class="right"><em>{{date('d.m.Y',strtotime($form->updated_at))}}</em></strong></td>
					<td class="center"><strong class="left"><em>Mequon, USA</em></strong><strong class="right"><em>{{date('d M Y',strtotime($form->updated_at))}}</em></strong></td>
				</tr>
				<tr>
					<td><strong>ТОВ «БЕСТ ФРЕЙТ»</strong>, в особі директора Ушакова Євгена Євгеновича, діючого на підставі Статуту, надалі  <strong>"Екпедитор"</strong>, що є платником  податку на додану вартість на загальних умовах, згідно Законодавства,</td>
					<td><strong>BEST FREIGHT LLC</strong>, in person of Director Yevgen Ushakov acting on the basis of the Articles of Association, hereinafter referred to as the <strong>“Contractor”</strong>, the payer of the profit tax under the standard procedure according to the legislation, on another part</td>
				</tr>
				<tr>
					<td>{{$form->company}}, в особі директора {{$form->user_surname.' '.$form->user_name.' '.$form->user_patronymic}}, діючого на підставі Статуту, надалі  <strong>"Перевізник"</strong>, що є платником  податку на додану вартість на загальних умовах, згідно Законодавства, з іншої сторони,</td>
					<td>{{$form->en_company}}, in person of Director {{$form->en_user_surname.' '.$form->en_user_name.' '.$form->en_user_patronymic}} acting on the basis of the Articles of Association, hereinafter referred to as the “Carrier”, the payer of the profit tax under the standard procedure according to the legislation, on another part,</td>
				</tr>
				<tr>
					<td>надалі разом  названі як Сторони, а кожен окремо як Сторона, підписали цей Договір про наступне:</td>
					<td>hereinafter together referred to as the Parties, with each one separately referred to as a Party, has signed this Contract about the following:</td>
				</tr>
				<tr>
					<td class="center"><strong>Терміни, що використовуються в Договорі</strong></td>
					<td class="center"><strong>TERMS AND DEFINITIONS USED IN THE CONTRACT</strong></td>
				</tr>
				<tr>
					<td>Сторони визначили використання термінів Договору в наступному значенні:</td>
					<td>The Parties agreed that the terms used in this Contract shall have the following definitions:</td>
				</tr>
				<tr>
					<td><strong>Замовник</strong> - вантажовідправник / вантажоодержувач;</td>
					<td><strong>Contractee</strong> – consignor / consignee;</td>
				</tr>
				<tr>
					<td><strong>Експедитор</strong> - особа, яка надає транспортно-експедиторські послуги під час перевезення вантажів Замовника;</td>
					<td><strong>Contractor</strong> – entity directly providing transportation of cargoes of Contractee according to specifications indicated in the order;</td>
				</tr>
				<tr>
					<td><strong>Перевізник</strong> - особа, яка безпосередньо здійснює перевезення вантажу Замовника за параметрами, узгодженими в замовленні (заявці);</td>
					<td><strong>Carrier</strong> – entity directly providing transportation of cargoes of Contractee according to specifications indicated in the order;</td>
				</tr>
				<tr>
					<td><strong>Треті особи</strong> - інші учасники транспортно-експедиторської діяльності, транспортні агенти, порти, залізничні станції, об'єднання та спеціалізовані підприємства залізничного, авіаційного, автомобільного, річкового та морського транспорту, митні брокери та інші особи, які виконують роботи (надають послуги) при перевезенні вантажів;</td>
					<td><strong>Third parties</strong> – other participants of freight forwarding process: transport agents, ports, railroad stations, associations and special enterprises of railroad, aviation, road, river and sea transport, customs brokers and other persons executing works (providing services) in the course of transportation of cargoes,</td>
				</tr>
				<tr>
					<td><strong>Документообіг</strong> - взаємодія між Сторонами за допомогою обміну документами в порядку, способом і формою, встановленими Договором;</td>
					<td><strong>Document flow</strong> – procedure of execution and transfer of the documents between the Parties established by the Contract within the framework of its execution;</td>
				</tr>
				<tr>
					<td><strong>Оригінал письмового документа</strong> - будь-які документи, якими обмінюються Сторони при укладенні Договору і в рамках виконання його умов, включаючи  копії таких документів, виготовлені та передані за допомогою електронних, технічних засобів передачі/копіювання до моменту обміну їх оригіналів;</td>
					<td><strong>Original of printed document</strong> – any document exchanged by the Parties in the course of conclusion of the Contract and within the framework of execution of its provisions, including copies of such documents made and transferred using electronic, technical communication means and copying;</td>
				</tr>
				<tr>
					<td><strong>Уповноважені особи</strong> - представники Сторін, відповідальні за підписання та передачу письмових документів при укладенні Договору і в рамках виконання його умов;</td>
					<td><strong>Authorized persons</strong> – representatives of the Parties providing with the document flow according to the procedure and in form set forth in the Contract;</td>
				</tr>
				<tr>
					<td><strong>Транспортно-експедиторські послуги</strong> — послуги експедитора, що надаються за дорученням Замовника;</td>
					<td><strong>Freight forwarding services</strong> – services rendered by the freight forwarding agent upon request from the Contractee related to arrangement of international transportation of cargoes according to the procedure set forth in this Contract;</td>
				</tr>
				<tr>
					<td><strong>Замовлення (заявка) на перевезення</strong> - погоджені Сторонами параметри перевезення, в рамках виконання якої необхідно надати транспортно - експедиторські послуги.</td>
					<td><strong>Order for transportation of cargoes</strong> – transportation data agreed by the Parties within the framework of which it is required to render freight forwarding services.</td>
				</tr>
				<tr>
					<td class="center"><strong>1. ПРЕДМЕТ ДОГОВОРУ</strong></td>
					<td class="center"><strong>1. SUBJECT OF THE CONTRACT</strong></td>
				</tr>
				<tr>
					<td>1.1. Згідно з цим Договором та погоджених Заявок до нього, Перевізник  за плату бере на себе зобов'язання виконувати перевезення та експедирування вантажів.</td>
					<td>1.1. According to this Contract and agreed Orders to it, the Carrier shall commit itself to provide with carriage and freight forwarding services of cargoes on a paying basis</td>
				</tr>
				<tr>
					<td class="center"><strong>2. ПОРЯДОК ОФОРМЛЕННЯ ЗАМОВЛЕННЯ НА ПОСЛУГИ</strong></td>
					<td class="center"><strong>2. PROCEDURE FOR MAKING ORDRS FOR RENDERING SERVICES</strong></td>
				</tr>
				<tr>
					<td>2.1. Перевізник завчасно повідомляє Експедитора про місцезнаходження своїх транспортних засобів і часу їх готовності до завантажень.</td>
					<td>2.1	The Carrier must notify the Contractor in advance about the location of his vehicles and its loading up-time.</td>
				</tr>
				<tr>
					<td>2.2. Експедитор обробляє отриману інформацію, враховуючи існуючі в наявності замовлення і повідомляє Перевізнику свої пропозиції.</td>
					<td>2.2	The Contractor processes the given information considering existing orders and informs the Carrier of his propositions.</td>
				</tr>
				<tr>
					<td>2.3. Після узгодження, Експедитор передає Перевізнику будь-яким способом, передбаченим Договором заявку на організацію перевезення вантажів (далі по тексту - заявка). Заявка повинна включати наступні дані:</td>
					<td>2.3	After coming to an agreement with the Carrier, the Contractor sends the Carrier the order for transportation of cargoes (hereinafter referred to in the text as the “Order”) using means provided for in the Contract. Orders must contain the following information:</td>
				</tr>
				<tr>
					<td>-місце завантаження і місце митного оформлення;</td>
					<td>- loading place and customs clearance place;</td>
				</tr>
				<tr>
					<td>-місце розвантаження та місце митного оформлення;</td>
					<td>- unloading place and customs clearance place;</td>
				</tr>
				<tr>
					<td>-найменування вантажу;</td>
					<td>- description of the cargo;</td>
				</tr>
				<tr>
					<td>-вага, габарити, кількість місць;</td>
					<td>- weight, size, number of packages;</td>
				</tr>
				<tr>
					<td>-дата та час завантаження</td>
					<td>- date and time of the loading</td>
				</tr>
				<tr>
					<td>-строки доставки;</td>
					<td>- delivery time;</td>
				</tr>
				<tr>
					<td>-вартість фрахту за перевезення;</td>
					<td>- freight costs;</td>
				</tr>
				<tr>
					<td>-прізвище та телефони контактних осіб з боку вантажовідправника / вантажоодержувача та / або Експедитора;</td>
					<td>- names and phone numbers of contact persons on the side of the consignor / consignee and /or the Contractor;</td>
				</tr>
				<tr>
					<td>-порядок обміну інформацією в ході перевезення;</td>
					<td>- data interchange procedure during the transportation;</td>
				</tr>
				<tr>
					<td>-Додаткові умови з перевезення у разі наявності таких..</td>
					<td>- additional conditions for the transportations if any.</td>
				</tr>
				<tr>
					<td>2.4. Після отримання заявки Перевізник протягом 8 годин з моменту її отримання акцептує або відхиляє її. Передача прийнятої в роботу заявки здійснюється в порядку і способом, передбаченим Договором для документообігу між Сторонами. Перевізником в заявці повинні зазначатися такі дані:</td>
					<td>2.4	The Carrier shall accept or decline order not later than within 8 hours following its receipt. Confirmed order shall be accepted according to the procedure and using means set forth in the Contract for the document flow between the Parties. The Carrier must include in the Order the following information:</td>
				</tr>
				<tr>
					<td>-державний номер наданого під завантаження транспортного засобу;</td>
					<td>- license plate number of the vehicle used for transportation;</td>
				</tr>
				<tr>
					<td>-прізвище водія;</td>
					<td>- surname of the driver;</td>
				</tr>
				<tr>
					<td>-номери Carnet TIR і CMR</td>
					<td>- Carnet TIR and CMR numbers;</td>
				</tr>
				<tr>
					<td>-контакта особа з боку Перевізника, що відповідає за виконання даного рейсу.</td>
					<td>- a contact person on the side of the Carrier that is responsible for the realization of this haul.</td>
				</tr>
				<tr>
					<td>2.5. Будь-які зміни, що вносяться в заявку, повинні бути оформлені за формою і передані способом, що передбачений Договором. Прийнята в роботу (акцептована) заявка є невід'ємною частиною цього Договору. У разі виникнення суперечності, розходжень у тлумаченні зобов'язань, умови Договору є пріоритетними по відношенню до умов кожної конкретної заявки.</td>
					<td>2.5. 	Any amendments introduced into the order should be made up according to the form and transferred using means provided for in the Contract. Accepted and confirmed order shall be the integral part of this Contract. In case of any discrepancies in interpretation of responsibilities, provisions of the Contract shall have priority over the conditions of each individual order.</td>
				</tr>
				<tr>
					<td>2.6. Перевізник гарантує організувати подачу автомобіля під навантаження у строки та за ціною, вказаною в заявці, якщо замовлення було подано і оформлено належним чином і всі умови Договору виконуються.</td>
					<td>2.6.	The Carrier guarantees the supply of the vehicle for the loading within time and at the price specified in the order, if the order has been submitted and drawn up in the right way and all the conditions of the Contract are being carried out.</td>
				</tr>
				<tr>
					<td>2.7. Перевізник інформує Експедитора про хід виконання прийнятої заявки. Всі проблеми, що виникають в ході виконання рейсу, Перевізник вирішує виключно з Експедитором або через контактну особу, вказану у заявці.</td>
					<td>2.7.	Carrier informs the Contractor about the implementation of the adopted order. The Carrier shall resolve all the problems that arise in the course of transportation exclusively solely with the Contractor or through the contact person specified in the order.</td>
				</tr>
				<tr>
					<td>2.8. У разі заміни транспортного засобу, наданого під завантаження, Перевізник зобов'язаний завчасно, але не пізніше, ніж за дві години до моменту завантаження повідомити про даний факт Експедитору.</td>
					<td>2.8.	In case of the vehicle used for the transportation being replaced, the Carrier is obliged to notify the Contractor of this fact in advance, but not later than two hours prior to the loading.</td>
				</tr>
				<tr>
					<td class="center"><strong>3. ПРАВА ТА ОБОВ'ЯЗКИ ПЕРЕВІЗНИКА</strong></td>
					<td class="center"><strong>3. RIGHTS AND RESPONSIBILITIES OF THE CARRIER</strong></td>
				</tr>
				<tr>
					<td>3.1. Виконувати  перевезення експортно-імпортних і транзитних вантажів автомобільним транспортом відповідно до заявки Експедитора на умовах, зазначених у заявці на організацію перевезення вантажів автомобільним транспортом.</td>
					<td>3.1.	Implement transportations of export-import and transit cargoes by means of auto transport in accordance with the orders of the Contractor.</td>
				</tr>
				<tr>
					<td>3.2. За свій рахунок отримувати всі необхідні дозволи, ліцензії, необхідні для своєчасного виконання заявок Експедитора.</td>
					<td>3.2	At his own cost and expense, obtaining all necessary permits, licenses required for the timely execution of the Contractor’s Orders.</td>
				</tr>
				<tr>
					<td>3.3. Виконувати міжнародні автомобільні перевезення справним транспортом, оснащеним відповідним чином, з усіма необхідними документами (Карнет ТІР і ЦМР, сертифікат відповідності транспортного засобу для перевезення вантажів під митними пломбами, страхування відповідальності за Carnet Tir, страхування відповідальності CMR а також інші необхідні для виконання кожного конкретного перевезення документи).</td>
					<td>3.3.	Implement international road carriages on a serviceable transport, equipped appropriately and with all necessary documents (TIR Carnet and CMR, Vehicle Freightage Conformity Certificate under the customs seal, TIR Carnet liability insurance, CMR liability insurance, as well as all other documents needed for every haulage).</td>
				</tr>
				<tr>
					<td>3.4. Повідомляти про факт завантаження і відправки вантажу, висилати по факсимільному зв'язку або електронною поштою Експедитору копії товарно-транспортних документів, необхідних для оформлення попереднього повідомлення митних органів (при переході кордону автотранспортним засобом з вантажем Експедитора).</td>
					<td>3.4.	Notifying the Contractor about the loading and dispatch of the cargo, send the copy of the goods shipping documents, which are required for issuing a prior notification to the customs authorities, to the Contractor via facsimile or e-mail (in case of the vehicle loaded with the cargo of the Contractor crossing the border).</td>
				</tr>
				<tr>
					<td>3.5. За допомогою своїх засобів зв'язку повідомити водієві номер попереднього повідомлення, у разі перетину кордону в неробочі, вихідні та святкові дні.</td>
					<td>3.5.	Via his own means of communication, informing the driver of the number of the prior notification in case of the vehicle having to cross the border on weekend or a holiday.</td>
				</tr>
				<tr>
					<td>3.6. З прибуттям автотранспорту в кінцевий пункт призначення, своєчасно організувати передачу уповноваженому представнику вантажоодержувача або іншій особі, зазначеній Експедитором, всі необхідні супровідні документи, що стосуються виконаного перевезення.</td>
					<td>3.6.	When the transportation vehicle arrives at its final destination, the Carrier must give all required accompanying documentation that is related to the performed transportation without undue delay to the duly authorized representative of the consignee or another person specified by the Contractor.</td>
				</tr>
				<tr>
					<td>3.7. У термін, обумовлений із Експедитором, організувати доставку вантажу для виконання митного оформлення, згідно заявок Експедитора, які є невід'ємною частиною цього Договору.</td>
					<td>3.7.	Delivering the cargo within a time period specified by the Contractor in order to complete customs formalities according to the Order of the Contractor, which are an integral part of this Contract.</td>
				</tr>
				<tr>
					<td>3.8. У разі якщо уповноваженим на це державним органом здійснювався відбір зразків або інший подібний захід, привів до невідповідності кількості доставленого вантажу, у кількості, зазначеному в інвойсі, вимагати від такого державного органу офіційного документального засвідчення цього факту з точним зазначенням відібраної кількості і пред'являти їх Експедитору.</td>
					<td>3.8.	In case if an authorized state body conducted a selection of samples or some other similar measure, which resulted in the number of delivered goods not matching the number stated in the invoice, the Carrier must demand from such state body an official receipt containing the exact number of the expropriated goods, and bring it to the Contractor.</td>
				</tr>
				<tr>
					<td>3.9. На вимогу Експедитора надавати будь-яку актуальну і достовірну інформацію щодо ходу перевезення..</td>
					<td>3.9.	Rendering any current and accurate information on the course of the transportation upon request from the Contractor.</td>
				</tr>
				<tr>
					<td>3.10. Передавати права та обов’язки за цим договором іншим особам виключно за окремим письмовим погодженням такої передачі із Експедитором.</td>
					<td>3.10.	Transmit rights and obligations under this Contract to Third parties only under a individual written agreement such transfer of freight forwarders.</td>
				</tr>
				<tr>
					<td>3.11. Охороняти інтереси Експедитора. Дотримуватися нейтралітету і не розголошувати інформацію щодо клієнтів Експедитора.</td>
					<td>3.11.	Protecting interests of the Contractor, uphold neutralityand not to disclose the information regarding the customers of the Contractor.</td>
				</tr>
				<tr>
					<td class="center"><strong>4. ПРАВА ТА ОБОВ'ЯЗКИ ЕКСПЕДИТОРА</strong></td>
					<td class="center"><strong>4. RIGHTS AND RESPONSIBILITIES OF THE CONTRACTOR</strong></td>
				</tr>
				<tr>
					<td>4.1. Надати Перевізнику всю необхідну інформацію з організації перевезень експортно-імпортних вантажів автомобільним транспортом.</td>
					<td>4.1	Providing the Carrier with all the necessary information on the organization of the transportations of export-import cargoes by means of auto transport.</td>
				</tr>
				<tr>
					<td>4.2. У термін, обумовлений умовами Договору, надати Перевізнику вантажі для організації міжнародних перевезень.</td>
					<td>4.2	Providing the Carrier within a time period specified by the conditions of the Contract with carriages for international haulage.</td>
				</tr>
				<tr>
					<td>4.3. Підготувати вантаж і правильно оформити супровідні документи (інвойси, сертифікати походження та інше).</td>
					<td>4.3	Preparing the cargo and correctly draw up accompanying documentation (invoices, certificates of origin, etc.).</td>
				</tr>
				<tr>
					<td>4.4. Забезпечити завантаження, розвантаження та розміщення вантажу на транспортному засобі своїми силами, в тарі та упаковці, призначеної для перевезення вантажів автотранспортом.</td>
					<td>4.4	Ensuring loading, unloading and placing of the cargo on the vehicle using his own resources, in a container and packaging that is designed for road haulages.</td>
				</tr>
				<tr>
					<td>4.5. Забезпечити водію транспортного засобу, організованого для перевезення Перевізником, можливість контролювати процес завантаження / розвантаження. Вантажовідправник на вимогу водія зобов'язаний змінити неправильне розміщення та кріплення вантажу</td>
					<td>4.5	Providing the driver of the vehicle of the Carrier with the power to control the process of loading / unloading. Under the request of the driver, the consignor is obliged to change the placing and strapping of the cargo.</td>
				</tr>
				<tr>
					<td>4.6.. Забезпечити правильне використання вантажопідйомності і навантаження на осі автотранспорту, організованого для перевезення Перевізником, з урахуванням вагових і габаритних обмежень країн, через територію яких проходить маршрут руху автотранспорту.</td>
					<td>4.6	Ensuring the proper use of the load limit and the axial load on the vehicle of the Carrier on the basis of weight restrictions and space limitations of the countries, territories of which the vehicle has to cross.</td>
				</tr>
				<tr>
					<td>4.7. До прибуття автомобіля, організованого для перевезення Перевізником на завантаження, підготувати вантаж до транспортування</td>
					<td>4.7	Before the vehicle of the Carrier arrives to be loaded, the Contractor must prepare the cargo for haulage.</td>
				</tr>
				<tr>
					<td>4.8. Протягом 48 робочих годин після відвантаження товару і відправлення товарно-транспортних документів Експедитор зобов'язаний оформити попереднє повідомлення і повідомити його номер Перевізнику або водію автомобіля, що виконує перевезення.</td>
					<td>4.8	Within the first 48 hours after dispatching the cargo and sending goods shipping documents, the Contractor is obliged to draw up the prior notification and inform the Carrier or the Carrier’s driver of its number.</td>
				</tr>
				<tr>
					<td>4.9. У разі зміни дати або місця завантаження / розвантаження, або скасування завантаження, повідомити Перевізника додатково факсимільним повідомленням або електронною поштою, не пізніше 2-х діб до дати запланованої зміни, а також узгодити з Перевізником додаткову вартість перевезення.</td>
					<td>4.9	In case of the date or the place of loading / unloading being changed, or the loading being cancelled, the Contractor must notify the Carrier of this fact by phone or additionally by fax or e-mail, no later than 2 days before the planned date of the change, as well as make with the Carrier an additional agreement as for the cost of transportation.</td>
				</tr>
				<tr>
					<td>4.10. Вирішити всі претензії, які виникли під час виконання перевезення і відшкодувати додаткові витрати Перевізника.</td>
					<td>4.10	Solving all claims arising during transportation and reimburse additional expenses of the Carrier.</td>
				</tr>
				<tr>
					<td>4.11. Виконати всі розрахунки з Перевізником в повному обсязі і в строк, передбачений умовами цього Договору.</td>
					<td>4.11	Settle all accounts with the Carrier in full and within the time specified by conditions of this Contract.</td>
				</tr>
				<tr>
					<td class="center"><strong>5. ПЛАТЕЖІ І ВЗАЄМНІ РОЗРАХУНКИ</strong></td>
					<td class="center"><strong>5. PAYMENTS AND MUTUAL SETTLEMENT OF ACCOUNTS</strong></td>
				</tr>
				<tr>
					<td>5.1. Вартість перевезення встановлюється в заявці.</td>
					<td>5.1	Cost of transportation shall be determined in the order.</td>
				</tr>
				<tr>
					<td>5.2. Ціни є договірними і визначаються виключно виходячи з конкретної ситуації на транспортному ринку.</td>
					<td>5.2	The prices are negotiable and are determined solely on the basis of the specific transport market situation.</td>
				</tr>
				<tr>
					<td>5.3.. Розрахунок здійснюється по факту розвантаження транспортного засобу, якщо інше не обумовлено в заявці.</td>
					<td>5.3	Calculations of prices are conducted in a fact of unloading, unless otherwise provided in the Order.</td>
				</tr>
				<tr>
					<td>5.4. Оплата вартості кожного організованого Перевізником міжнародного автомобільного перевезення  проводиться Експедитором у валюті Долар США, ,у безготівковій формі в банк і на розрахунковий рахунок, який вказаний в Договорі, якщо інше не обумовлено в заявці.</td>
					<td>5.4. 	Payment for all international road transport performed by the Carrier, shall be transferred in the USD, in the cashless form to the bank and the current account that is specified in the Contract, unless otherwise provided in the Order.</td>
				</tr>
				<tr>
					<td class="center"><strong>6. ВІДПОВІДАЛЬНІСТЬ СТОРІН</strong></td>
					<td class="center"><strong>6. LIABILITY OF THE PARTIES</strong></td>
				</tr>
				<tr>
					<td>6.1.1. Сторони несуть взаємну відповідальність за невиконання або неналежне виконання зобов'язань за цим Договором.</td>
					<td>6.1.1	The Parties are mutually responsible for failure or improper performance of duties specified by this Contract.</td>
				</tr>
				<tr>
					<td>6.1.2. Взаємна відповідальність Сторін цього Договору регулюється положеннями Конвенції КДПВ, законодавчими та нормативними актами, і цим Договором.</td>
					<td>6.1.2	Mutual responsibility of the Parties of this Contract is governed by the provisions of the CMR Convention, by laws and regulations and by this Contract.</td>
				</tr>
				<tr>
					<td>6.1.3. У разі заподіяння збитків з вини однієї зі сторін, винна сторона зобов'язана відшкодувати збитки іншій стороні згідно з чинним законодавством.</td>
					<td>6.1.3	In case of losses due to the fault of either party, the guilty party shall indemnify the other party in accordance with the current legislation.</td>
				</tr>
				<tr>
					<td>6.1.4. У випадку втрати, пошкодження, псування вантажу під час перевезення Перевізник несе відповідальність перед Експедитором за завдані такою втратою, пошкодженням, псуванням збитки якими виступають як реальні витрати так і ті що Експедитор мусить зробити, не зважаючи на обставину того  чи провів Експедитор фактичну сплату таких збитків безпосередньому замовнику(вантажовідправнику/ вантажоодержувачу). При цьому достатнім та безспірним доказом того, що Експедитор мусить зробити такі витрати є встановлений законодавством, Конвенцією КДПВ обов’язок Перевізника відшкодувати (компенсувати) збитки, завдані втратою, пошкодженням, псуванням вантажу під час перевезення.</td>
					<td>6.1.4. In case of losses, damages and spoilage of cargo during transport the Carrier shall be liable to the Contractor for real costs caused by such actions and those that the Carrier is going to make despite the fact whether the Carrier has made an actual payment of such damages to the direct contractee (consigner / consignee) or not. Herewith, a sufficient and indisputable proof that the  Contractor  must make these costs is the responsibility of the Carrier set by the law, the CMR Convention to refund (compensate) costs caused by losses, damages and spoilage of the cargo during transport.</td>
				</tr>
				<tr>
					<td>6.1.5.Передача прав та обов'язків Перевізника за даним договором, заявками до нього допускається виключно за окремою письмовою згодою Експедитора. При цьому Перевізник несе відповідальність за дії залучених ним до виконання Договору осіб, водіїв як за свої власні і не може посилатися на відсутність в його діях вини, з причини дій залучених ним третіх осіб, на відсутність належно оформлених договірних відносин з такими третіми особами, водіями будь-які інші обставини, оскільки вважається, що така третя особа, водій діяла від імені та за рахунок Перевізника.</td>
					<td>6.1.5. Transfer of rights and responsibilities of the Carrier under this contract and its orders, is allowed only after a separate written agreement with the Contractor. The Carrier is always responsible for the actions of persons, drivers involved in the execution of this agreement and cannot rely on the absence of fault in such actions, because they are done by third parties engaged by the Carrier. In addition to this, the Carrier cannot rely on the absence of a valid contractual relationship with third parties, drivers and on any other circumstances, as it is believed that such third party acted on behalf of the Carrier.</td>
				</tr>
				<tr>
					<td><strong>6.2. Відповідальність сторін:</strong></td>
					<td><strong><em>6.2	Liability of the Parties:</em></strong></td>
				</tr>
				<tr>
					<td>6.2.1. Сторони домовилися про наступний нормативний час при виконанні міжнародного перевезення на завантаження і митне оформлення вантажу:</td>
					<td>6.2.1	The Parties has agreed on the following standard time for the loading and the customs clearing of the cargo during execution of international freight:</td>
				</tr>
				<tr>
					<td>- 48 годин  на теріторії  СНД і Середньої Азії.</td>
					<td>- 48 hours on the territory of CIS and Central Asia;</td>
				</tr>
				<tr>
					<td>-24 години на теріторії  інших країн. Якщо інше не обумовлено в заявці.</td>
					<td>- 24 hours on the territory of other countries. Unless stated otherwise in the order.</td>
				</tr>
				<tr>
					<td>На розвантаження  і митне оформлення вантажу:</td>
					<td>for the unloading and customs clearance of the cargo:</td>
				</tr>
				<tr>
					<td>- 48 годин  на теріторії  СНД і Середньої Азії.</td>
					<td>- 48 hours on the territory of CIS and Central Asia;</td>
				</tr>
				<tr>
					<td>- 48 годин  на теріторії  СНД і Середньої Азії.</td>
					<td>- 24 hours on the territory of other countries. Unless stated otherwise in the order.</td>
				</tr>
				<tr>
					<td>При виконанні перевезення вантажів по території  Європи, що не підлягають митному оформленню, нормативний час на завантаження / розвантаження становить 8:00.</td>
					<td>In case of transporting a cargo, that doesn’t need to go through the customs clearing, on the territory of Europe, the standard time for loading / unloading is 8 hours.</td>
				</tr>
				<tr>
					<td>6.2.2. У разі виникнення простоїв у ході рейсу, під завантаженням і розвантаженням понад зазначених у п. 6.2.1. термінів Експедитор виплачує Перевізнику штрафні санкції за понаднормовий простій, незалежно від наявності або відсутності його вини у такому простої, виходячи з наступного:</td>
					<td>6.2.2	In case of a downtime happening through the Contractor’s fault during the transportation, during the time of loading or unloading of the cargo, the term of which is longer than the terms specified in the Paragraph 6.2.1 of this Contract, the Contractor shall pay to the Carrier the penalty based on the following:</td>
				</tr>
				<tr>
					<td>при виконанні міжнародного перевезення</td>
					<td>during an international transportation</td>
				</tr>
				<tr>
					<td>- 50 Доларів США в разі простоїв на території України<br>- 100 Доларів США в разі простоїв на території країн СНД, Східної, Центральної та Західної Європи, Середньої Азії. Якщо інше не обумовлено заявці.</td>
					<td>- 50 USD  if the downtime happens on the territory of Ukraine<br>- 100 USD  if the downtime happens on the territory of CIS, Eastern, Central and Western Europe, Central Asia. Unless stated otherwise in the order.</td>
				</tr>
				<tr>
					<td>Штрафні санкції за понаднормовий простій сплачуються в грошовій одиниці Договору</td>
					<td>Penalties are paid in the  currency of Contract.</td>
				</tr>
				<tr>
					<td>Вихідні  та святкові  дні  входять до  простою, якщо транспортний засіб прибув на місце завантаження/  розвантаження, чи митне оформлення за 48 годин до настання цих днів.</td>
					<td>Weekend and holidays count for downtime if the vehicle arrived to the place of loading / unloading or customs clearance 48 hours prior to such days.</td>
				</tr>
				<tr>
					<td>6.2.3.  У разі виникнення простоїв з вини Експедитора при переході кордону автотранспортним засобом, більш ніж 24 години, Експедитор виплачує Перевізнику штрафні санкції за понаднормовий простій, виходячи з наступного<br>- 50 Доларів США в разі простоїв на території країн СНД, Східної, Центральної та Західної Європи, Середньої Азії. Якщо інше не обумовлено заявці.</td>
					<td>6.2.3. In case of a downtime happening through the Contractor’s fault during vehicle crossing the border,  more than 24 hours, the Contractor shall pay to the Carrier the penalty based on the following:<br>- 50 USD  if the downtime happens on the territory of CIS, Eastern, Central and Western Europe, Central Asia. Unless stated otherwise in the order.</td>
				</tr>
				<tr>
					<td>6.2.4. Підрахунок часу простою починається з моменту отримання Експедитором письмового повідомлення Перевізника. Претензії за фактами простою приймаються при наявності заповненого листа простою.</td>
					<td>6.2.4	The downtime starts to be counted from the moment the Contractor receives the written notice from the Carrier. Complaints in relation to facts of downtimes are accepted if presented with a truck downtime record.</td>
				</tr>
				<tr>
					<td>6.2.5. При затриманні прибуття транспортного засобу на місце завантаження/розвантаження, Перевізник  сплачує Експедитору  штрафні суми аналогічно сумам вказаним в п.6.2.2. даного Договору.</td>
					<td>6.2.5	In case of delay of arrival of the vehicle at the place of loading / unloading the Contractor shall pay to the Contractee the penalty in the same amounts which are specified in Paragraph 6.2.2 of this Contract.</td>
				</tr>
				<tr>
					<td>6.2.6. У разі виникнення перевантаження загальної маси і на осі, Експедитор зобов'язується відшкодувати штраф, який підтверджений відповідними документами, виданими на прикордонному переході (квитанція про сплату штрафу).</td>
					<td>6.2.6	In case of an overload of the GVM or of the axial load, which happened thought the Contractor’s fault, the Contractor agrees to pay a fine, confirmed by relevant documents issued at the border crossing (receipt of payment of a fine).</td>
				</tr>
				<tr>
					<td>6.2.7. У разі зміни місця завантаження / розвантаження у вартість плати за перевезення додається сума в розмірі 1,00 Долар за 1 км додаткового пробігу.</td>
					<td>6.2.7.	If the place of loading / unloading is changed the cost of the freight is added with the sum of 1,00 USD per 1 km of an added haulage</td>
				</tr>
				<tr>
					<td>6.2.8. Всі додаткові витрати, що виникли при перевезенні та пов'язані з характером вантажу, оплачуються Експедитором при пред'явленні Перевізником відповідних фінансових документів.</td>
					<td>6.2.8.	Any additional costs incurred during transportation that are related to the nature of the cargo is paid by the Contractor upon being presented with the relevant financial documentation by the Carrier.</td>
				</tr>
				<tr>
					<td>6.2.9. У разі відмови від завантаження наданого вантажовідправнику транспортного засобу менш, ніж за 48годин до дати завантаження, Експедитор сплачує Перевізнику штраф у розмірі 100 USD.</td>
					<td>6.2.9.	If the loading of the vehicle provided by the consignor is refused to be loaded less than 48h before the date of loading, the Contractor a  fine of 140 USD.</td>
				</tr>
				<tr>
					<td>6.2.10. У випадку ненадання транспортного засобу під завантаження без поважної причини і попереднього повідомлення від Перевізника і своєчасної заміни транспортного засобу, при підтвердженої заявці, Перевізник сплачує штраф Експедитору у розмірі 100 USD.</td>
					<td>6.2.10	If the vehicle for loading is not provided without a viable reason and a prior notice from the Carrier, and without a timely substitution of the vehicle, if the claim is confirmed, the Carrier pays to the Contractor a fine in the amount of 140 USD.</td>
				</tr>
				<tr>
					<td>6.2.11. Експедитор відшкодовує будь-які збитки, завдані Перевізнику у зв'язку з порушенням зобов'язання з надання інформації та документів на вантаж при переміщенні, а також при переміщенні товарів через митний кордон</td>
					<td>6.2.11	The Contractor shall reimburse all the damage caused to the Carrier in relation to the breach of duties as for the supplementation with the information and documentation on the cargo during transportation, as well as during the transportation of cargos through the customs border.</td>
				</tr>
				<tr>
					<td class="center"><strong>7. ПРЕТЕНЗІЇ ТА ВИРІШЕННЯ СПОРІВ</strong></td>
					<td><strong>7. CLAIMS AND ARGUMENTS SOLVING</strong></td>
				</tr>
				<tr>
					<td>7.1. Усі спори, що виникають з цього Договору або пов'язані з ним, вирішуються шляхом переговорів між Сторонами. При цьому Сторони домовилися, що у разі виникнення спору між Сторонами за цим Договором, вони його будуть вирішувати в досудовому претензійному порядку.</td>
					<td>7.1.	In case of disputes arising from this Contract the Parties will seek to resolve them through negotiations. The Parties have agreed that in the event of a dispute between the Parties of the present Agreement, they will solve it in pre-complaint procedure.</td>
				</tr>
				<tr>
					<td>7.2. Сторона - одержувач претензії зобов'язана надати письмову відповідь. При цьому Сторони встановили, що термін розгляду претензії за цим Договором не повинен перевищувати 7 (сім) днів з моменту отримання/передачі претензії будь-яким способом передбаченим Договором. Письмова відповідь на претензію є позицією Сторони - одержувача в суперечці. У разі відмови від зобов'язання надати письмову відповідь на претензію і / або перевищення строків її розгляду, встановлених Договором, Сторона - одержувач претензії вважається такою, що погодилася з усіма вимогами, висунутими в претензії.</td>
					<td>7.2	The Party presented with a claim must render printed reply. The Parties agreed that the term of consideration of the claim according to this Contract should not exceed 7 (seven) days from the day of receipt / submission of the claim using any means provided for in this Contract. Printed reply to the claim shall be considered as the position of the Party presented with a claim. In the case where the Party presented with the claim waives the obligation to render printed reply to the claim or exceeds the terms of its consideration provided for in this Contract, such Party shall be deemed as agreed upon all requirements set forth in the claim.</td>
				</tr>
				<tr>
					<td>7.3. Якщо відповідний спір неможливо вирішити шляхом переговорів, він вирішується в судовому порядку відповідно до чинного в Україні законодавства. У разі невиконання рішення суду, посадові особи Сторони, що не виконує рішення суду, вважаються попередженими про адміністративну, кримінальну відповідальність у зв'язку з таким невиконанням. Застосоване до даного Договору право є матеріальне право України.</td>
					<td>7.3. 	In case the relevant dispute is failed to be solved by negotiations, it shall be settled through the court in accordance with the current Ukrainian legislation. In the case where the court decision is not executed, officials of the Party failed to execute the court decision shall be deemed as notified in advance on administrative and criminal responsibility in connection with such failure. Ukrainian material law shall govern this Contract.</td>
				</tr>
				<tr>
					<td class="center"><strong>8. ЗАСТЕРЕЖЕННЯ ПРО ПОРЯДОК ОФОРМЛЕННЯ І ПЕРЕДАЧУ ДОКУМЕНТІВ</strong></td>
					<td class="center"><strong>8. RESERVATION ON PROCEDURE OF DRAWING UP AND TRANSFER OF DOCUMENTS</strong></td>
				</tr>
				<tr>
					<td>8.1. Сторони визначили, що способами обміну, передачі документів, платіжних документів, рахунків, надання будь-яких поточних інструкцій, змін в умовах, повідомлення про події, здійснення іншої переписки, за цим Договором є:<br>1) поштове відправлення; 2) кур'єрська доставка; 3) факсимільний зв'язок; 4) електронна пошта.</td>
					<td>8.1. The Parties determined that the means of exchange and transfer of documents, payment orders, invoices, providing any current regulations, changes in conditions, event messages, other correspondence under this Contract shall be the following:<br>1) mail; 2) express delivery; 3) facsimile; 4) e-mail.</td>
				</tr>
				<tr>
					<td>8.2. Сторони встановили, що документообіг від імені Сторін Договору здійснюють уповноважені особи. Всі негативні наслідки несанкціонованих дій третіх осіб несе сторона, від імені якої були здійснені такі дії. При цьому вважається, що документи, передані будь-яким із способів, передбачених цим Застереженням і підписані власноруч і / або електронним підписом і / або з використанням факсимільного копіювання та / або засобів іншого копіювання, є екземплярами оригіналу письмового документа, підписаного уповноваженою особою Сторін (ни) , належним і допустимим доказом у суді, арбітражі і не можуть визнаватися недійсними на підставі відсутності оригіналу і підписання документів уповноваженою особою.</td>
					<td>8.2. Parties agreed that the document flow on behalf of the Parties to the Contract shall be carried on by authorized persons. All the negative consequences of unauthorized actions of third parties shall be borne by the Party on behalf of which such actions have been carried out. It is deemed that the documents submitted by any of the means provided for in this Reservation and signed personally and / or with a digital signature and / or using a facsimile copy and / or other means of copying are copies of the original printed document signed by an authorized person of the Party (Parties), shall be due and admissible evidence in court, arbitration and cannot be recognized as invalid on the ground of absence of the original documents and the signing by an unauthorized person.</td>
				</tr>
				<tr>
					<td>8.3. Кожна із Сторін має право вимагати, у будь-якій формі і способом, передбаченим Договором, від іншої Сторони передачі оригіналів письмових документів, а інша сторона зобов'язана надати (надіслати) такі оригінали протягом 3-х днів з моменту отримання такої вимоги. Всі негативні наслідки невиконання цього зобов'язання покладаються на зобов'язану Сторону.</td>
					<td>8.3. Either Party shall be entitled to demand, in any form and manner provided for by the Contract, from the other Party to transmit the original printed documents, and the other Party shall be obliged to provide (submit) such originals within 3 days following receipt of such request. All negative consequences of the failure to discharge this obligation shall be imposed on the obliged Party.</td>
				</tr>
				<tr>
					<td>8.4. Сторони за даним Договором встановили, що електронний документообіг буде здійснюватися за такими електронними адресами з доменом:<br>Експедитора: info@rate-and-go.com;<br>Перевізника: {{$form->user_email}};<br>При цьому Сторони домовилися про те, що електронним підписом - ідентифікацією Сторони, як автора та / або підписувача електронного документа виступає її електронна адреса, вказана в п.п. 8.4. вказаний у реквізитах листа та / або окремо в тексті.  Інформація, інструкції, сканкопіі документів, інші повідомлення, оферти, акцепти відправляються з електронних адрес з доменом, зазначеним у п.п. 8.4. відображають дійсне волевиявлення Сторони в рамках даного Договору, при цьому вважається, що таке волевиявлення, виражене уповноваженим представником Сторони, а всі негативні наслідки несанкціонованих дій третіх осіб несе сторона, від імені якої були здійснені такі дії.</td>
					<td>8.4. The Parties to the Contract established that the electronic document flow will be provided using the following email address with the domain:<br>Contractor: info@rate-and-go.com;<br>Carrier: {{$form->user_email}};<br>The Parties agreed that the electronic signature - identification of the Parties, as the author and / or the signatory of an electronic document shall be its email address with the domain specified in paragraph 8.4., mentioned in the requisites of the letters and / or separately in the text. Information, instructions, scanned copies of documents, other notifications, offers, acceptances sent from the email address specified in paragraph 8.4. shall reflect the true will of the Parties under this Contract, and it shall be deemed that such a will is expressed by the authorized representative of the Party and all the negative consequences of unauthorized actions of third parties shall be borne by the Party on behalf of which such actions have been carried out.</td>
				</tr>
				<tr>
					<td>8.5. Паперове відтворення (роздруківка) листування електронною поштою (Прінтскрін) може використовуватися як належне і допустимий доказ в суді, арбітражі.</td>
					<td>8.5. Paper reproduction (printing) of e-mail correspondence (printscreen) can be used as due and admissible evidence in court, arbitration.</td>
				</tr>
				<tr>
					<td class="center"><strong>9. ФОРС –МАЖОР</strong></td>
					<td class="center"><strong>9. FORCE-MAJEURE</strong></td>
				</tr>
				<tr>
					<td>9.1. Сторони не несуть відповідальності за невиконання або неналежне виконання зобов'язань за цим Договором, якщо воно викликано дією обставин непереборної сили: військовими діями, пожежею, повені, іншим стихійним лихом, повідомленим в належному порядку мораторієм, зміною законодавства, діями і постановами державних органів, що робить неможливим належне виконання обов'язків.</td>
					<td>9.1	The Parties will not be liable for non-fulfillment or improper fulfillment of obligations under this Contract if it is caused by actions of force majeure: war, fire, flood, other natural disaster duly reported by the moratorium, changes in laws, acts and regulations of public authorities, which make it impossible to properly perform the obligations specified in this Contract.</td>
				</tr>
				<tr>
					<td>9.2. Сторона, для якої склались умови дії непереборної сили, повинна повідомити у письмовій формі іншу сторону не пізніше 24-х годин з моменту настання таких обставин. При цьому за домовленістю Сторін, термін виконання обов'язків за Договором продовжується до призупинення дій невизначеної сили або сторони підписують домовленість про припинення дії Договору. Достатнім доказом виникнення чи продовження дій форс-мажорних обставин є сертифікат, виданий Торговою Палатою країни, на території якої виникли форс-мажорні обставини.</td>
					<td>9.2	The Party, which has had to face the force-majeure, must notify the other Party in written form no longer than within 24 hours from the moment such situation occurred. In this case, as were agreed by the Parties, the obligations are to be carried out until the cessation of the force-majeure, or the Parties are to sign an agreement about suspension of the Contract. A sufficient evidence of the occurrence or continuation of the force majeure is a certificate issued by the Chamber of Business and Commerce of the country in which the force-majeure has occurred.</td>
				</tr>
				<tr>
					<td class="center"><strong>10. ІНШІ УМОВИ</strong></td>
					<td class="center"><strong>10. OTHER CONDITIONS</strong></td>
				</tr>
				<tr>
					<td>10.1. Договір набуває чинності з моменту підписання його сторонами і діє до 31.12.2016р.</td>
					<td>10.1	This Contract enters into force from the moment of it being signed by the Parties and is valid until December 31, 2016.</td>
				</tr>
				<tr>
					<td>10.2. Всі зміни та доповнення до умов цього Договору вважаються дійсними, якщо вони оформлені письмово у вигляді доповнень до Договору і підписані обома сторонами в порядку та у спосіб, передбаченому Договором.</td>
					<td>10.2	All the amendments and additions to the terms and conditions of this Contract are to be considered valid, if written in form of supplements to the Contract and signed by both Parties. </td>
				</tr>
				<tr>
					<td>10.3. Даний Договір складений в двох екземплярах українською мовою, які мають рівну юридичну силу, по одному у кожної із сторін. У разі виникнення конфлікту в трактуванні умов Договору їх остаточне значення визначається виходячи з української мови. Екземпляр Договору так як і заявки та  доповнення до нього, що передані/отримані факсимільним зв’язком, електронною поштою, мають юридичну силу.</td>
					<td>10.3	This Contract is drawn up in two copies in Ukranian and English languages, which have equal legal force, each for every Party. In the case of conflict in interpretation of the terms and conditions of this Contract, their final meaning shall be determined using Ukranian text. A copy of the Contract, as well as its supplements, sent / received via fax, e-mail have legal power.</td>
				</tr>
				<tr>
					<td class="center"><strong>11. ПІДПИСИ ТА РЕКВІЗИТИ СТОРІН::</strong></td>
					<td class="center"><strong>11. LEGAL ADDRESSES OF THE PARTIES</strong></td>
				</tr>
				<tr>
					<td class="center"><strong>Експедитор</strong></td>
					<td class="center"><strong>Contractor</strong></td>
				</tr>
				<tr>
					<td class="relative">
						<strong>BEST FREIGHT LLC</strong><br>
						53092 Wisconsin, Mequon<br>
						9801 N Old Barn Rd, USA<br>
						account :6325494349<br>
						The name of the bank: Wells Fargo Bank<br>
						11350  N Port Washington Rd<br>
						Mequon, WI 53092 USA <br>
						swift code: WFBIUS6S<br>
						+12626174339<br>
						<strong class="bottom">Директор_____________ Ушаков Є.Є.</strong>
					</td>
					<td class="relative">
						<strong>BEST FREIGHT LLC</strong><br>
						53092 Wisconsin, Mequon<br>
						9801 N Old Barn Rd, USA<br>
						account :6325494349<br>
						The name of the bank: Wells Fargo Bank<br>
						11350  N Port Washington Rd<br>
						Mequon, WI 53092 USA <br>
						swift code: WFBIUS6S<br>
						+12626174339<br>
						<strong class="bottom">Director ____________________Ushakov Yevgen</strong>
					</td>
				</tr>
			</tbody>
		</table>
		<table>
			<tbody>
				<div style="page-break-before:always;">
					<tr>
						<tr>
							<td><strong>Перевізник:</strong></td>
							<td><strong>Carrier</strong></td>
						</tr>
						<td class="relative">{{nl2br($form->requisites)}}<br><strong class="bottom">Директор__________________ {{--$form->user_surname--}} {{--$form->user_name--}} {{--$form->user_patronymic--}}</strong></td>
						<td class="relative">{{nl2br($form->en_requisites)}}<br><strong class="bottom">Директор__________________ {{--$form->user_surname--}} {{--$form->user_name--}} {{--$form->user_patronymic--}}</strong></td>
					</tr>
				</div>
			</tbody>
		</table>
	</div>
</div>
@stop
