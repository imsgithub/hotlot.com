@extends('newmember.layouts.default')
@section('content')
<div class="content-row">
	<div class="print-contract">
		<table>
			<tbody>
				<tr>
					<td class="center"><strong>ДОГОВОР №{{$form->id}}</strong></td>
					<td class="center"><strong>CONTRACT №{{$form->id}}</strong></td>
				</tr>
				<tr>
					<td class="center"><strong>транспортного экспедирования</strong></td>
					<td class="center"><strong>of a freight forwarding</strong></td>
				</tr>
				<tr>
					<td class="center"><strong class="left"><em>Меквон, США</em></strong><strong class="right"><em>{{date('d.m.Y',strtotime($form->updated_at))}}</em></strong></td>
					<td class="center"><strong class="left"><em>Mequon, USA</em></strong><strong class="right"><em>{{date('d M Y',strtotime($form->updated_at))}}</em></strong></td>
				</tr>
				<tr>
					<td>{{$form->company}} в лице директора {{$form->user_surname.' '.$form->user_name.' '.$form->user_patronymic}} действующая на основании Устава, в дальнейшем <strong>"Заказчик"</strong>, который является  плательщиком налога на прибыль на общих основаниях, с одной стороны, и</td>
					<td>{{$form->en_company}} in person of Director  {{$form->en_user_surname.' '.$form->en_user_name.' '.$form->en_user_patronymic}} acting on the basis of the Articles, hereinafter referred to as the <strong>Contractee</strong>, payer of the profit tax under the standard procedure, on one part, and</td>
				</tr>
				<tr>
					<td><strong>BEST FREIGHT LLC</strong>, в лице директора Ушакова Евгения Евгеньевича, действующего  на основании Устава, в дальнейшем <strong>"Экспедитор"</strong>, который является  плательщиком налога на прибыль на общих основаниях, согласно Законодательства, с другой стороны,</td>
					<td><strong>BEST FREIGHT LLC</strong>, in person of Director Yevgen Ushakov acting on the basis of the Articles of Association, hereinafter referred to as the <strong>Contractor</strong>, the payer of the profit tax under the standard procedure according to the legislation, on another part,</td>
				</tr>
				<tr>
					<td>в дальнейшем вместе именуемые как Стороны, а по отдельности как Сторона, подписали настоящий Договор о нижеследующем:</td>
					<td>hereinafter together referred to as the Parties, with each one separately referred to as a Party, has signed this Contract about the following:</td>
				</tr>
				<tr>
					<td class="center"><strong>ТЕРМИНЫ, ИСПОЛЬЗУЕМЫЕ В ДОГОВОРЕ</strong></td>
					<td class="center"><strong>TERMS AND DEFINITIONS USED IN THE CONTRACT</strong></td>
				</tr>
				<tr>
					<td>Стороны определили использование терминов Договора в следующем значении:</td>
					<td>The Parties agreed that the terms used in this Contract shall have the following definitions:</td>
				</tr>
				<tr>
					<td>Заказчик — грузоотправитель/грузополучатель;</td>
					<td>Contractee – consignor / consignee;</td>
				</tr>
				<tr>
					<td>Экспедитор — лицо, предоставляющее транспортно-экспедиционные услуги при перевозке грузов Заказчика;</td>
					<td>Contractor – entity rendering freight forwarding services in the course of transportation of cargoes of Contractee;</td>
				</tr>
				<tr>
					<td>Перевозчик — лицо, непосредственно осуществляющее перевозку груза Заказчика по параметрам, согласованным в заказе (заявке);</td>
					<td>Carrier – entity directly providing transportation of cargoes of Contractee according to specifications indicated in the order;</td>
				</tr>
				<tr>
					<td>Третьи лица — иные участники транспортно-экспедиторской деятельности: транспортные агенты, порты, железнодорожные станции, объединения и специализированные предприятия железнодорожного, авиационного, автомобильного, речного и морского транспорта, таможенные брокеры и другие лица, выполняющие работы (оказывающие услуги) при перевозке грузов.</td>
					<td>Third parties – other participants of freight forwarding process: transport agents, ports, railroad stations, associations and special enterprises of railroad, aviation, road, river and sea transport, customs brokers and other persons executing works (providing services) in the course of transportation of cargoes,</td>
				</tr>
				<tr>
					<td>Документооборот — установленный Договором порядок оформления и передачи документов между Сторонами в рамках его выполнения;</td>
					<td>Document flow – procedure of execution and transfer of the documents between the Parties established by the Contract within the framework of its execution;</td>
				</tr>
				<tr>
					<td>Оригинал письменного документа — какие-либо документы, которыми обмениваются Стороны при заключении Договора и в рамках исполнения его условий, включая копии таких документов, изготовленные и переданные с помощью электронных, технических средств передачи, копирования;</td>
					<td>Original of printed document – any document exchanged by the Parties in the course of conclusion of the Contract and within the framework of execution of its provisions, including copies of such documents made and transferred using electronic, technical communication means and copying;</td>
				</tr>
				<tr>
					<td>Уполномоченные лица —  представители Сторон, осуществляющие Документооборот в порядке, форме и на условиях, определённых Договором;</td>
					<td>Authorized persons – representatives of the Parties providing with the document flow according to the procedure and in form set forth in the Contract;</td>
				</tr>
				<tr>
					<td>Транспортно-экспедиторские услуги — предоставляемые по поручению Заказчика услуги экспедитора по организации международной перевозки грузов, в порядке  предусмотренном настоящим Договором;</td>
					<td>Freight forwarding services – services rendered by the freight forwarding agent upon request from the Contractee related to arrangement of international transportation of cargoes according to the procedure set forth in this Contract;</td>
				</tr>
				<tr>
					<td>Заказ (заявка) на организацию перевозки грузов — согласованные Сторонами параметры перевозки, в рамках выполнения которых необходимо предоставить транспортно-экспедиторские услуги.</td>
					<td>Order for transportation of cargoes – transportation data agreed by the Parties within the framework of which it is required to render freight forwarding services.</td>
				</tr>
				<tr>
					<td class="center"><strong>1. ПРЕДМЕТ ДОГОВОРА</strong></td>
					<td class="center"><strong>1. SUBJECT OF THE CONTRACT</strong></td>
				</tr>
				<tr>
					<td>1.1. Настоящий Договор регулирует и определяет порядок взаимоотношений Экспедитора и Заказчика, связанные с осуществлением транспортно-экспедиционного обслуживания (ТЭО) по организации перевозок экспортно-импортных и транзитных грузов в международном и междугороднем сообщении автомобильным транспортом, с предоставлением других услуг, согласованных в заявке / дополнении к настоящему Договору.</td>
					<td>1.1. This contract regulates and determines the protocol for liaison between the Contractor and the Contractee that is related to the implementation of freight forwarding service (FFS) on the organization of the international and intercity transportations of export-import and transit cargoes by means of auto transport, as well as provision of other services agreed upon in Orders / Supplements to this Contract, which are an integral part of the Contract.</td>
				</tr>
				<tr>
					<td class="center"><strong>2. ПОРЯДОК ОФОРМЛЕНИЯ ЗАКАЗА НА УСЛУГИ</strong></td>
					<td class="center"><strong>2. PROCEDURE FOR MAKING ORDRS FOR RENDERING SERVICES</strong></td>
				</tr>
				<tr>
					<td>2.1. Экспедитор заблаговременно уведомляет Заказчика о местонахождении своих транспортных средств и времени их готовности к загрузкам.</td>
					<td>2.1	The Contractor must notify the Contractee in advance about the location of his vehicles and its loading up-time.</td>
				</tr>
				<tr>
					<td>2.2. Заказчик обрабатывает полученную информацию, учитывая существующий в наличии заказ и сообщает Экспедитору свои предложения.</td>
					<td>2.2	The Contractee processes the given information considering existing orders and informs the Contractor of his propositions.</td>
				</tr>
				<tr>
					<td>2.3. После согласования, Заказчик передаёт Экспедитору любым способом, предусмотренным Договором заявку на организацию перевозки грузов (далее по тексту - заявка). Заявка должна включать следующие данные:</td>
					<td>2.3	After coming to an agreement with the Contractor, the Contractee sends the Contractor the order for transportation of cargoes (hereinafter referred to in the text as the “Order”) using means provided for in the Contract. Orders must contain the following information:</td>
				</tr>
				<tr>
					<td>место загрузки и место таможенного оформления;</td>
					<td>- loading place and customs clearance place;</td>
				</tr>
				<tr>
					<td>место разгрузки и место таможенного оформления;</td>
					<td>- unloading place and customs clearance place;</td>
				</tr>
				<tr>
					<td>наименование груза;</td>
					<td>- description of the cargo;</td>
				</tr>
				<tr>
					<td>вес, габариты, количество мест;</td>
					<td>- weight, size, number of packages;</td>
				</tr>
				<tr>
					<td>дата и время загрузки</td>
					<td>- date and time of the loading</td>
				</tr>
				<tr>
					<td>сроки доставки;</td>
					<td>- delivery time;</td>
				</tr>
				<tr>
					<td>стоимость фрахта за перевозку;</td>
					<td>- freight costs;</td>
				</tr>
				<tr>
					<td>фамилия и телефоны контактных лиц со стороны грузоотправителя / грузополучателя и / или Заказчика;</td>
					<td>- names and phone numbers of contact persons on the side of the consignor / consignee and /or the Contractee;</td>
				</tr>
				<tr>
					<td>порядок обмена информацией в ходе перевозки;</td>
					<td>- data interchange procedure during the transportation;</td>
				</tr>
				<tr>
					<td>дополнительные условия по перевозке в случае наличия таковых.</td>
					<td>- additional conditions for the transportations if any.</td>
				</tr>
				<tr>
					<td>2.4. После получения заявки Экспедитор в течение 8 часов с момента её получения акцептует либо отклоняет её. Передача принятой в работу заявки производится в порядке и способом, предусмотренным Договором для документооборота между Сторонами. Экспедитором в заявке должны указываться следующие данные:</td>
					<td>2.4	The Contractor shall accept or decline order not later than within 8 hours following its receipt. Confirmed order shall be accepted according to the procedure and using means set forth in the Contract for the document flow between the Parties. The Contractor must include in the Order the following information:</td>
				</tr>
				<tr>
					<td>государственный номер предоставляемого под загрузку транспортного средства;</td>
					<td>- license plate number of the vehicle used for transportation;</td>
				</tr>
				<tr>
					<td>фамилия водителя;</td>
					<td>- surname of the driver;</td>
				</tr>
				<tr>
					<td>номера Carnet TIR и CMR</td>
					<td>- Carnet TIR and CMR numbers;</td>
				</tr>
				<tr>
					<td>контактное лицо со стороны Экспедитора, отвечает за выполнение данного рейса.</td>
					<td>- a contact person on the side of the Contractor that is responsible for the realization of this haul.</td>
				</tr>
				<tr>
					<td>2.5. Любые изменения, вносимые в заявку, должны быть оформлены по форме и переданы способом, предусмотренными Договором. Принятая в работу (акцептированная) заявка является неотъемлемой частью настоящего Договора. В случае возникновения противоречий, различий в толковании обязательств, условия Договора являются приоритетными по отношению к условиям каждой конкретной заявки.</td>
					<td>2.5. 	Any amendments introduced into the order should be made up according to the form and transferred using means provided for in the Contract. Accepted and confirmed order shall be the integral part of this Contract. In case of any discrepancies in interpretation of responsibilities, provisions of the Contract shall have priority over the conditions of each individual order.</td>
				</tr>
				<tr>
					<td>2.6. Экспедитор гарантирует организовать подачу автомобиля под погрузку в сроки и по цене, указанной в заявке, если заказ был подан и оформлен надлежащим образом и все условия Договора выполняются.</td>
					<td>2.6.	The Contractor guarantees the supply of the vehicle for the loading within time and at the price specified in the order, if the order has been submitted and drawn up in the right way and all the conditions of the Contract are being carried out.</td>
				</tr>
				<tr>
					<td>2.7. Экспедитор информирует Заказчика о ходе выполнения принятой заявки. Все проблемы, возникающие в ходе выполнения рейса, Экспедитор решает исключительно с Заказчиком или через контактное лицо, указанное в заявке.</td>
					<td>2.7.	Contractor informs the customer about the implementation of the adopted order. The Contractor shall resolve all the problems that arise in the course of transportation exclusively solely with the Contractee or through the contact person specified in the order.</td>
				</tr>
				<tr>
					<td>2.8. В случае замены транспортного средства, предоставляемого под загрузку, Экспедитор обязан заблаговременно, но не позднее, чем за два часа до момента загрузки сообщить о данном факте Заказчику.</td>
					<td>2.8.	In case of the vehicle used for the transportation being replaced, the Contractor is obliged to notify the Contractee of this fact in advance, but not later than two hours prior to the loading.</td>
				</tr>
				<tr>
					<td class="center"><strong>3. ПРАВА И ОБЯЗАННОСТИ ЭКСПЕДИТОРА</strong></td>
					<td class="center"><strong>3. RIGHTS AND RESPONSIBILITIES OF THE CONTRACTOR</strong></td>
				</tr>
				<tr>
					<td>3.1. Организовать перевозку экспортно-импортных и транзитных грузов автомобильным транспортом в соответствии с заявкой Заказчика.</td>
					<td>3.1.	Arranging transportations of export-import and transit cargoes by means of auto transport in accordance with the orders of the Contractee.</td>
				</tr>
				<tr>
					<td>3.2. Организовать выполнение условий, указанных в заявке на организацию перевозки грузов автомобильным транспортом. </td>
					<td>3.2.	Arranging for the execution of conditions indicated in order for transportation of cargoes by road transport.</td>
				</tr>
				<tr>
					<td>3.3. За свой счет получать все необходимые разрешения, лицензии, необходимые для своевременного выполнения заявок Заказчика.</td>
					<td>3.3	At his own cost and expense, obtaining all necessary permits, licenses required for the timely execution of the Contractee’s Orders.</td>
				</tr>
				<tr>
					<td>3.4. Организовывать выполнение международных автомобильных перевозок исправным транспортом, оснащенным соответствующим образом, со всеми необходимыми документами (Карнет ТИР и ЦМР, сертификат соответствия транспортного средства для перевозки грузов под таможенными пломбами, страхование ответственности по Carnet Tir, страхование ответственности CMR а также другие необходимые для выполнения каждой конкретной перевозки документы). </td>
					<td>3.4.	Carrying out international road carriages on a serviceable transport, equipped appropriately and with all necessary documents (TIR Carnet and CMR, Vehicle Freightage Conformity Certificate under the customs seal, TIR Carnet liability insurance, CMR liability insurance, as well as all other documents needed for every haulage).</td>
				</tr>
				<tr>
					<td>3.5. Сообщать о факте загрузки и отправки груза, высылать по факсимильной связи или электронной почте Заказчику копии товарно-транспортных документов, необходимых для оформления предварительного уведомления таможенных органов (при переходе границы автотранспортным средством с грузом Заказчика). </td>
					<td>3.5.	Notifying the Contractee about the loading and dispatch of the cargo, send the copy of the goods shipping documents, which are required for issuing a prior notification to the customs authorities, to the Contractee via facsimile or e-mail (in case of the vehicle loaded with the cargo of the Contractee crossing the border).</td>
				</tr>
				<tr>
					<td>3.6. С помощью своих средств связи сообщить водителю номер предварительного уведомления, в случае пересечения границы в нерабочие, выходные и праздничные дни.</td>
					<td>3.6.	Via his own means of communication, informing the driver of the number of the prior notification in case of the vehicle having to cross the border on weekend or a holiday.</td>
				</tr>
				<tr>
					<td>3.7. С прибытием автотранспорта в конечный пункт назначения, своевременно организовать передачу уполномоченному представителю грузополучателя или другому лицу, указанному Заказчиком, все необходимые сопроводительные документы, касающиеся выполненной перевозки.</td>
					<td>3.7.	When the transportation vehicle arrives at its final destination, the Contractor must give all required accompanying documentation that is related to the performed transportation without undue delay to the duly authorized representative of the consignee or another person specified by the Contractee.</td>
				</tr>
				<tr>
					<td>3.8. В срок, оговоренный с Заказчиком, организовать доставку груза для выполнения таможенного оформления, согласно заявок Заказчика, которые являются неотъемлемой частью настоящего Договора.</td>
					<td>3.8.	Delivering the cargo within a time period specified by the Contractee in order to complete customs formalities according to the Order of the Contractee, which are an integral part of this Contract.</td>
				</tr>
				<tr>
					<td>3.9. В случае если уполномоченным на это государственным органом осуществлялся отбор образцов или другое подобное мероприятие, привел к несоответствию количества доставленного груза, в количестве, указанном в инвойсе, требовать от такого государственного органа официального документального засвидетельствования этого факта с точным указанием отобранного количества и предъявлять их Заказчику.</td>
					<td>3.9.	In case if an authorized state body conducted a selection of samples or some other similar measure, which resulted in the number of delivered goods not matching the number stated in the invoice, the Contractor must demand from such state body an official receipt containing the exact number of the expropriated goods, and bring it to the Contractee.</td>
				</tr>
				<tr>
					<td>3.10. Представлять интересы Заказчика во взаимоотношениях с третьими лицами по вопросам, которые возникают во время перевозок и ТЭО (ТЭО предусматривает организацию перевозок) Заказчика.</td>
					<td>3.10.	Representing the interests of the Contractee in dealings with third parties on matters arising during transportation and FFS (FFS provides for the organization of the transportation) of the Contractee.</td>
				</tr>
				<tr>
					<td>3.11. По требованию заказчика предоставлять любую актуальную и достоверную информацию о ходе перевозки.</td>
					<td>3.11.	Rendering any current and accurate information on the course of the transportation upon request from the Contractee.</td>
				</tr>
				<tr>
					<td>3.12. В отношениях с третьими лицами, Перевозчиками считается что Экспедитор действует на основании поручения и от имени Заказчика, которым выступает настоящий Договор и согласованная в соответствии с его условиями заявка.</td>
					<td>3.12.	In relations with third parties and carriers – acting on the basis of instructions from the Contractee, being this Contract and the order agreed upon according to the terms and provisions of this Contract.</td>
				</tr>
				<tr>
					<td>3.13. Привлекать к выполнению заявок других лиц, Перевозчиков, при этом считается, что Экспедитор действует от имени и по согласованию с Заказчиком, которым выступает данный Договор и заявка.</td>
					<td>3.13.	Involving other persons, carriers to execute orders, in this case the Contractor shall be deemed to act on behalf and in concurrence with the Contractee, being this Contract and the order.</td>
				</tr>
				<tr>
					<td>3.14. Охранять интересы Заказчика. Соблюдать нейтралитет и не разглашать информацию в отношении клиентов Заказчика.</td>
					<td>3.14.	Protecting interests of the Contractee, uphold neutralityand not to disclose the information regarding the customers of the Contractee.</td>
				</tr>
				<tr>
					<td class="center"><strong>4. ПРАВА И ОБЯЗАННОСТИ ЗАКАЗЧИКА</strong></td>
					<td class="center"><strong>4. RIGHTS AND RESPONSIBILITIES OF THE CONTRACTEE</strong></td>
				</tr>
				<tr>
					<td>4.1. Предоставить Экспедитору всю необходимую информацию по организации перевозок экспортно-импортных грузов автомобильным транспортом. </td>
					<td>4.1	Providing the Contractor with all the necessary information on the organization of the transportations of export-import cargoes by means of auto transport.</td>
				</tr>
				<tr>
					<td>4.2. В срок, оговоренный условиями Договора, предоставить Экспедитору грузы для организации международных перевозок.</td>
					<td>4.2	Providing the Contractor within a time period specified by the conditions of the Contract with carriages for international haulage.</td>
				</tr>
				<tr>
					<td>4.3. Подготовить груз и правильно оформить сопроводительные документы (инвойсы, сертификаты происхождения и прочее).</td>
					<td>4.3	Preparing the cargo and correctly draw up accompanying documentation (invoices, certificates of origin, etc.).</td>
				</tr>
				<tr>
					<td>4.4. Обеспечить загрузку, разгрузку и размещение груза на транспортном средстве своими силами, в таре и  упаковке, предназначенной для перевозки грузов автотранспортом.</td>
					<td>4.4	Ensuring loading, unloading and placing of the cargo on the vehicle using his own resources, in a container and packaging that is designed for road haulages.</td>
				</tr>
				<tr>
					<td>4.5. Обеспечить водителю транспортного средства, организованного для перевозки Экспедитором, возможность контролировать процесс загрузки / разгрузки. Грузоотправитель по требованию водителя обязан изменить неправильное размещение и крепление груза.</td>
					<td>4.5	Providing the driver of the vehicle of the Contractor with the power to control the process of loading / unloading. Under the request of the driver, the consignor is obliged to change the placing and strapping of the cargo.</td>
				</tr>
				<tr>
					<td>4.6. Обеспечить правильное использование грузоподъемности и нагрузки на оси автотранспорта, организованного для перевозки Экспедитором, с учетом весовых и габаритных ограничений стран, через территорию которых проходит маршрут движения автотранспорта.</td>
					<td>4.6	Ensuring the proper use of the load limit and the axial load on the vehicle of the Contractor on the basis of weight restrictions and space limitations of the countries, territories of which the vehicle has to cross.</td>
				</tr>
				<tr>
					<td>4.7. До прибытия автомобиля, организованного для перевозки Экспедитором на загрузку, подготовить груз к транспортировке.</td>
					<td>4.7	Before the vehicle of the Contractor arrives to be loaded, the Contractee must prepare the cargo for haulage.</td>
				</tr>
				<tr>
					<td>4.8. В течение 48 рабочих часов после отгрузки товара и отправки товарно-транспортных документов Заказчик обязан оформить предварительное уведомление и сообщить его номер Экспедитору или водителю автомобиля, выполняющего перевозку.</td>
					<td>4.8	Within the first 48 hours after dispatching the cargo and sending goods shipping documents, the Contractee is obliged to draw up the prior notification and inform the Contractor or the Contractor’s driver of its number.</td>
				</tr>
				<tr>
					<td>4.9. В случае изменения даты или места погрузки / выгрузки, или отмены загрузки, уведомить Экспедитора дополнительно факсимильным сообщением или по электронной почте,  не позднее 2-х суток до даты запланированного изменения, а также согласовать с Экспедитором дополнительную стоимость перевозки.</td>
					<td>4.9	In case of the date or the place of loading / unloading being changed, or the loading being cancelled, the Contractee must notify the Contractor of this fact by phone or additionally by fax or e-mail, no later than 2 days before the planned date of the change, as well as make with the Contractor an additional agreement as for the cost of transportation.</td>
				</tr>
				<tr>
					<td>4.10. Решить все претензии, которые возникли во время выполнения перевозки и возместить дополнительные расходы Экспедитора.</td>
					<td>4.10	Solving all claims arising during transportation and reimburse additional expenses of the Contractor.</td>
				</tr>
				<tr>
					<td>4.11. Выполнить все расчеты с Экспедитором в полном объеме и в срок, предусмотренный условиями настоящего Договора.</td>
					<td>4.11	Settle all accounts with the Contractor in full and within the time specified by conditions of this Contract.</td>
				</tr>
				<tr>
					<td class="center"><strong>5. ПЛАТЕЖИ И ВЗАИМНЫЕ РАСЧЕТЫ</strong></td>
					<td class="center"><strong>5. PAYMENTS AND MUTUAL SETTLEMENT OF ACCOUNTS</strong></td>
				</tr>
				<tr>
					<td>5.1. Стоимость услуг Экспедитора его расходов на оплату услуг третьих лиц, Перевозчика (плата за перевозку) устанавливается в заявке.</td>
					<td>5.1	Cost of services to be rendered by the Contractor, its expenses to cover services rendered by third parties and the carrier (cost of transportation) shall be determined in the order.</td>
				</tr>
				<tr>
					<td>5.2. Цены являются договорными и определяются исключительно исходя из конкретной ситуации на транспортном рынке.</td>
					<td>5.2	The prices are negotiable and are determined solely on the basis of the specific transport market situation.</td>
				</tr>
				<tr>
					<td>5.3. Расчет осуществляется по 100% предоплате по факту погрузки транспортного средства, организованного для перевозки Экспедитором.</td>
					<td>5.3	Calculations of prices are conducted for 100% prepayment in a fact of loading cargo on the vehicle  the Contractor</td>
				</tr>
				<tr>
					<td>5.4. Предоплата за услуги Экспедитора производится на основании счёта Экспедитора в день выставления.</td>
					<td>5.4	Advance payment for services to be rendered by the Contractor shall be transferred according to the invoice from the Contractor on the day of its issue. </td>
				</tr>
				<tr>
					<td>5.5. Оплата стоимости каждой организованной Экспедитором международной автомобильной перевозки производится Заказчиком в валюте Доллар США, в безналичной форме в банк и на расчетный счет, указанный в Договоре, если иное не предусмотрено в заявке. </td>
					<td>5.5. 	Payment for all international road transport performed by the Contractee shall be transferred in the USD, in the cashless form to the bank and the current account that is specified in the Contract, unless otherwise provided in the Order.</td>
				</tr>
				<tr>
					<td>5.6. За несвоевременную оплату транспортных услуг Заказчик уплачивает Экспедитору пеню в размере 0,2% за каждый день просрочки платежа.</td>
					<td>5.6. 	For late payment of transport services Contractee pays a penalty in the amount of 0,2% on outstanding amounts for each day of delay to Contractor.</td>
				</tr>
				<tr>
					<td>5.7. Все расчеты с третьими лицами, Перевозчиками, привлеченными Экспедитором для выполнения Договора и заявки к нему, осуществляются Экспедитором за счет Заказчика.</td>
					<td>5.7. 	All settlements with third parties and the carriers involved by the Contractor to execute the Contract shall be covered by the Contractor at the expense of the Contractee.</td>
				</tr>
				<tr>
					<td>5.8. Экспедитор имеет право самостоятельно удержать из полученных от Заказчика средств свое вознаграждение. Средства, поступившие на счет Экспедитора для оплаты услуг третьих лиц, Перевозчика, являются транзитными. Транзитные средства, полученные от Заказчика, не являются собственностью Экспедитора. Вознаграждение услуг Экспедитора складывается из разницы сумм полученных  средств от Заказчика и уплаченных Экспедитором привлеченным для выполнения Договора третьим лицам, Перевозчику.</td>
					<td>5.8. 	The Contractor shall be entitled to independently withhold the amount of its remuneration from the amount received from the Contractee. Amounts credited to the Contractor’s amount for payment for services rendered by third parties and the carrier shall be deemed as transit amounts. Transit amounts received from the Contractee shall not belong to the Contractor. Remuneration for the services rendered by the Contractor shall be equal to the difference between the amounts received from the Contractee and amounts paid by the Contractor to third persons and the carrier involved by the Contractor.</td>
				</tr>
				<tr>
					<td class="center"><strong>6. ОТВЕТСТВЕННОСТЬ СТОРОН</strong></td>
					<td class="center"><strong>6. LIABILITY OF THE PARTIES</strong></td>
				</tr>
				<tr>
					<td><strong>6.1. Общие положения:</strong></td>
					<td><strong>6.1 General terms:</strong></td>
				</tr>
				<tr>
					<td>6.1.1. Стороны несут взаимную ответственность за неисполнение или ненадлежащее исполнение обязательств по настоящему Договору.</td>
					<td>6.1.1	The Parties are mutually responsible for failure or improper performance of duties specified by this Contract.</td>
				</tr>
				<tr>
					<td>6.1.2. Взаимная ответственность Сторон настоящего Договора регулируется законодательством о транспортно – экспедиторской деятельности и настоящим Договором.</td>
					<td>6.1.2	Mutual responsibility of the Parties of this Contract is determined by the legislation on transport-forwarding activity and by this Contract.</td>
				</tr>
				<tr>
					<td>6.1.3. В случае причинения убытков по вине одной из сторон, виновная сторона обязана возместить убытки другой стороне в соответствии с действующим законодательством.</td>
					<td>6.1.3	In case of losses due to the fault of either party, the guilty party shall indemnify the other party in accordance with the current legislation.</td>
				</tr>
				<tr>
					<td><strong>6.2. Ответственность сторон:</strong></td>
					<td><strong>6.2	Liability of the Parties:</strong></td>
				</tr>
				<tr>
					<td>6.2.1. Стороны договорились о следующем нормативном времени  при выполнении международной перевозки на загрузку и таможенное оформление груза:</td>
					<td>6.2.1	The Parties has agreed on the following standard time for the loading and the customs clearing of the cargo during execution of international freight:</td>
				</tr>
				<tr>
					<td>- 48 Часов на территории СНГ и Средней Азии.</td>
					<td>- 48 hours on the territory of CIS and Central Asia;</td>
				</tr>
				<tr>
					<td>-24 Часа на территории других стран. Если иное не оговорено в заявке.</td>
					<td>- 24 hours on the territory of other countries. Unless stated otherwise in the order.</td>
				</tr>
				<tr>
					<td>На разгрузку и таможенное оформление груза:</td>
					<td>for the unloading and customs clearance of the cargo:</td>
				</tr>
				<tr>
					<td>- 48 Часов на территории СНГ и Средней Азии.</td>
					<td>- 48 hours on the territory of CIS and Central Asia;</td>
				</tr>
				<tr>
					<td>- 24 Часа на территории других стран. Если иное не оговорено в заявке. </td>
					<td>- 24 hours on the territory of other countries. Unless stated otherwise in the order.</td>
				</tr>
				<tr>
					<td>При выполнении перевозки грузов по территории Европы, не подлежащих таможенному оформлению, нормативное время на погрузку / разгрузку составляет 8:00.</td>
					<td>In case of transporting a cargo, that doesn’t need to go through the customs clearing, on the territory of Europe, the standard time for loading / unloading is 8 hours.</td>
				</tr>
				<tr>
					<td>6.2.2. В случае возникновения простоев в ходе рейса, под загрузкой и разгрузкой свыше указанных в п. 6.2.1. сроков Заказчик выплачивает Экспедитору плату вне зависимости от наличия или отсутствия его вины в таком простое, исходя из следующего:</td>
					<td>6.2.2	In case of a downtime happening through the Contractee’s fault during the transportation, during the time of loading or unloading of the cargo, the term of which is longer than the terms specified in the Paragraph 6.2.1 of this Contract, the Contractee shall pay to the Contractor the penalty based on the following:</td>
				</tr>
				<tr>
					<td>при выполнении международной перевозки</td>
					<td>during an international transportation</td>
				</tr>
				<tr>
					<td>- 140 Долларов в случае простоев на территории стран СНГ, Восточной, Центральной и Западной Европы, Средней Азии. Если иное не оговорено заявке.</td>
					<td>- 140 USD  if the downtime happens on the territory of CIS, Eastern, Central and Western Europe, Central Asia. Unless stated otherwise in the order.</td>
				</tr>
				<tr>
					<td>Штрафные суммы уплачиваются в денежной валюте Договора.</td>
					<td>Penalties are paid in the currency of Contract.</td>
				</tr>
				<tr>
					<td>Выходные и праздничные дни входят в простой, если транспортное средство прибыло на место загрузки / разгрузки, или таможенное оформление за 48 часов до наступления этих дней.</td>
					<td>Weekend and holidays count for downtime if the vehicle arrived to the place of loading / unloading or customs clearance 48 hours prior to such days.</td>
				</tr>
				<tr>
					<td>6.2.3. В случае возникновения простоев при переходе границы автотранспортным средством, более чем 24 часа, Заказчик выплачивает Экспедитору плату вне зависимости от наличия или отсутствия его вины в таком простое, исходя из следующего<br>- 140 Долларов в случае простоев на территории стран СНГ, Восточной, Центральной и Западной Европы, Средней Азии. Если иное не оговорено заявке.</td>
					<td>6.2.3. In case of a downtime happening during vehicle crossing the border,  more than 24 hours, the Contractee shall pay to the Contractor the penalty based on the following:<br>- 140 USD  if the downtime happens on the territory of CIS, Eastern, Central and Western Europe, Central Asia. Unless stated otherwise in the order.</td>
				</tr>
				<tr>
					<td>6.2.4. Подсчет времени простоя начинается с момента получения Заказчиком письменного уведомления Экспедитора. Претензии по фактам простоя принимаются при наличии заполненного листа простой.</td>
					<td>6.2.4	The downtime starts to be counted from the moment the Contractee receives the written notice from the Contractor. Complaints in relation to facts of downtimes are accepted if presented with a truck downtime record.</td>
				</tr>
				<tr>
					<td>6.2.5. При возникновении простоя в ходе рейса, на месте загрузки / разгрузки по вине Экспедитора, Экспедитор уплачивает Заказчику штрафные суммы аналогично суммам, указанным в п.6.2.2. настоящего Договора.</td>
					<td>6.2.5	In case of a downtime happening through the Contractor’s fault during the transportation, during the time of loading or unloading of the cargo, the Contractor shall pay to the Contractee the penalty in the same amounts which are specified in Paragraph 6.2.2 of this Contract.</td>
				</tr>
				<tr>
					<td>6.2.6. В случае возникновения перегруза общей массы и на оси, Заказчик обязуется возместить штраф, который подтвержден соответствующими документами, выданными на пограничном переходе (квитанция об уплате штрафа).</td>
					<td>6.2.6	In case of an overload of the GVM or of the axial load, which happened thought the Contractee’s fault, the Contractee agrees to pay a fine, confirmed by relevant documents issued at the border crossing (receipt of payment of a fine).</td>
				</tr>
				<tr>
					<td>6.2.7. В случае изменения места загрузки / разгрузки в стоимость платы за перевозку добавляется сумма в размере 1,40 Доллар за 1 км дополнительного пробега.</td>
					<td>6.2.7	If the place of loading / unloading is changed the cost of the freight is added with the sum of 1,40 USD per 1 km of an added haulage</td>
				</tr>
				<tr>
					<td>6.2.8. Все дополнительные расходы, возникшие при перевозке и связанные с характером груза, оплачиваются Заказчиком при предъявлении Экспедитором соответствующих финансовых документов.</td>
					<td>6.2.8	Any additional costs incurred during transportation that are related to the nature of the cargo is paid by the Contractee upon being presented with the relevant financial documentation by the Contractor.</td>
				</tr>
				<tr>
					<td>6.2.9. В случае отказа от загрузки предоставленного грузоотправителю транспортного средства менее, чем за 48ч до даты загрузки, Заказчик платит Экспедитору штраф в размере 140 USD.</td>
					<td>6.2.9	If the loading of the vehicle provided by the consignor is refused to be loaded less than 48h before the date of loading, the Contractee a  fine of 140 USD.</td>
				</tr>
				<tr>
					<td>6.2.10. В случае не предоставления транспортного средства под загрузку без уважительной причины и предварительного уведомления от Экспедитора и своевременной замены транспортного средства, при подтвержденной заявке, Экспедитор уплачивает штраф Заказчику в размере 140 USD.</td>
					<td>6.2.10	If the vehicle for loading is not provided without a viable reason and a prior notice from the Contractor, and without a timely substitution of the vehicle, if the claim is confirmed, the Contractor pays to the Contractee a fine in the amount of 140 USD.</td>
				</tr>
				<tr>
					<td>6.2.11. Заказчик возмещает любые убытки, причиненные Экспедитору в связи с нарушением обязательства по предоставлению информации и документов на груз при перемещении, а также при перемещении товаров через таможенную границу.</td>
					<td>6.2.11	The Contractee shall reimburse all the damage caused to the Contractor in relation to the breach of duties as for the supplementation with the information and documentation on the cargo during transportation, as well as during the transportation of cargos through the customs border.</td>
				</tr>
				<tr>
					<td class="center"><strong>7. ПРЕТЕНЗИИ И РАЗРЕШЕНИЕ СПОРОВ</strong></td>
					<td class="center"><strong>7. CLAIMS AND ARGUMENTS SOLVING</strong></td>
				</tr>
				<tr>
					<td>7.1. Все споры, возникающие из настоящего Контракта или связанные с ним, решаются путем переговоров между Сторонами. При этом Стороны договорились, что в случае возникновения спора между Сторонами из настоящего Договора, они его будут решать в досудебном претензионном порядке.</td>
					<td>7.1.	In case of disputes arising from this Contract the Parties will seek to resolve them through negotiations. The Parties have agreed that in the event of a dispute between the Parties of the present Agreement, they will solve it in pre-complaint procedure.</td>
				</tr>
				<tr>
					<td>7.2. Сторона - получатель претензии обязана предоставить письменный ответ. При этом Стороны установили, что срок рассмотрения претензии по настоящему Договору не должен превышать 7 (семь) дней с момента получения / передачи претензии любым способом предусмотренным Договором. Письменный ответ на претензию является позицией Стороны - получателя в споре. В случае отказа от обязательства предоставить письменный ответ на претензию и / или превышение сроков ее рассмотрения, установленных Договором Сторона - получатель претензии считается согласившимся со всеми требованиями, выдвинутыми в претензии.</td>
					<td>7.2	The Party presented with a claim must render printed reply. The Parties agreed that the term of consideration of the claim according to this Contract should not exceed 7 (seven) days from the day of receipt / submission of the claim using any means provided for in this Contract. Printed reply to the claim shall be considered as the position of the Party presented with a claim. In the case where the Party presented with the claim waives the obligation to render printed reply to the claim or exceeds the terms of its consideration provided for in this Contract, such Party shall be deemed as agreed upon all requirements set forth in the claim.</td>
				</tr>
				<tr>
					<td>7.3. Если соответствующий спор невозможно решить путем переговоров, он решается в судебном порядке в соответствии с действующим в Украине законодательством. В случае невыполнения решения суда, должностные лица Стороны, которая не выполняет решение суда,  считаются предупрежденными об административной, уголовной ответственности в связи с таким невыполнением. Применимое к данному Договору право является  материальное право Украины.</td>
					<td>7.3. 	In case the relevant dispute is failed to be solved by negotiations, it shall be settled through the court in accordance with the current Ukrainian legislation. In the case where the court decision is not executed, officials of the Party failed to execute the court decision shall be deemed as notified in advance on administrative and criminal responsibility in connection with such failure. Ukrainian material law shall govern this Contract.</td>
				</tr>
				<tr>
					<td class="center"><strong>8. ОГОВОРКА О ПОРЯДКЕ ОФОРМЛЕНИЯ И ПЕРЕДАЧЕ ДОКУМЕНТОВ</strong></td>
					<td class="center"><strong>8. RESERVATION ON PROCEDURE OF DRAWING UP AND TRANSFER OF DOCUMENTS</strong></td>
				</tr>
				<tr>
					<td>8.1. Стороны определили, что способами обмена, передачи документов, платежных документов, счетов, предоставление любых текущих инструкций, изменений в условиях, сообщения о событиях, осуществления другой переписки, по настоящему Договору являются:<br>1) почтовое отправление; 2) курьерская доставка; 3) факсимильная связь; 4) электронная почта.</td>
					<td>8.1. The Parties determined that the means of exchange and transfer of documents, payment orders, invoices, providing any current regulations, changes in conditions, event messages, other correspondence under this Contract shall be the following:<br>1) mail; 2) express delivery; 3) facsimile; 4) e-mail.</td>
				</tr>
				<tr>
					<td>8.2. Стороны установили, что документооборот от имени Сторон Договора осуществляют уполномоченные лица. Все негативные последствия несанкционированных действий третьих лиц несет Сторона, от имени которой были осуществлены такие действия. При этом считается, что документы, переданные любым из способов, предусмотренных настоящей Оговоркой и подписанные собственноручно и / или электронной подписью и / или с использованием факсимильной копирования и / или средств иного копирования, являются экземплярами оригинала письменного документа, подписанного уполномоченным лицом Сторон (ны),  надлежащим и допустимым доказательством в суде, арбитраже и не могут признаваться недействительными на основании отсутствия оригинала и подписания документов неуполномоченным лицом.</td>
					<td>8.2. Parties agreed that the document flow on behalf of the Parties to the Contract shall be carried on by authorized persons. All the negative consequences of unauthorized actions of third parties shall be borne by the Party on behalf of which such actions have been carried out. It is deemed that the documents submitted by any of the means provided for in this Reservation and signed personally and / or with a digital signature and / or using a facsimile copy and / or other means of copying are copies of the original printed document signed by an authorized person of the Party (Parties), shall be due and admissible evidence in court, arbitration and cannot be recognized as invalid on the ground of absence of the original documents and the signing by an unauthorized person.</td>
				</tr>
				<tr>
					<td>8.3. Любая из Сторон имеет право требовать, в любой форме и способом, предусмотренным Договором, от другой Стороны передачи оригиналов письменных документов, а другая сторона обязана предоставить (направить) такие оригиналы течение 3-х дней с момента получения такой требования. Все негативные последствия невыполнения этого обязательства возлагаются на обязанную Сторону.</td>
					<td>8.3. Either Party shall be entitled to demand, in any form and manner provided for by the Contract, from the other Party to transmit the original printed documents, and the other Party shall be obliged to provide (submit) such originals within 3 days following receipt of such request. All negative consequences of the failure to discharge this obligation shall be imposed on the obliged Party.</td>
				</tr>
				<tr>
					<td>8.4. Стороны по настоящему Договору установили, что электронный документооборот будет осуществляться по следующим электронным адресам с доменом:<br>
							Заказчика: {{$form->user_email}};<br>
							Экспедитора: info@rate-and-go.com;<br>
							При этом Стороны договорились о том, что электронной подписью - идентификацией Стороны, как автора и / или подписанта электронного документа выступает ее электронный адрес, указанный в п.п. 8.4. указанный в реквизитах письма и/или отдельно в тексте. Информация, инструкции, сканкопии документов, другие уведомления, оферты, акцепты  отправляемые с электронных адресов с доменом, указанных в п.п. 8.4. отражают действительное волеизъявление Стороны в рамках данного Договора, при этом считается, что такое волеизъявление, выражено уполномоченным представителем Стороны,  а все негативные последствия несанкционированных действий третьих лиц несет Сторона, от имени которой были осуществлены такие действия.
</td>
					<td>8.4. The Parties to the Contract established that the electronic document flow will be provided using the following email address with the domain:<br>
Contractee: {{$form->user_email}};<br>
Contractor: info@rate-and-go.com;<br>
The Parties agreed that the electronic signature - identification of the Parties, as the author and / or the signatory of an electronic document shall be its email address with the domain specified in paragraph 8.4., mentioned in the requisites of the letters and / or separately in the text. Information, instructions, scanned copies of documents, other notifications, offers, acceptances sent from the email address specified in paragraph 8.4. shall reflect the true will of the Parties under this Contract, and it shall be deemed that such a will is expressed by the authorized representative of the Party and all the negative consequences of unauthorized actions of third parties shall be borne by the Party on behalf of which such actions have been carried out.
</td>
				</tr>
				<tr>
					<td>8.5. Бумажное воспроизведение (распечатка) переписки по электронной почте (принтскрин) может использоваться как надлежащее и допустимое доказательство в суде, арбитраже.</td>
					<td>8.5. Paper reproduction (printing) of e-mail correspondence (printscreen) can be used as due and admissible evidence in court, arbitration.</td>
				</tr>
				<tr>
					<td class="center"><strong>9. ФОРС –МАЖОР</strong></td>
					<td class="center"><strong>9. FORCE-MAJEURE</strong></td>
				</tr>
				<tr>
					<td>9.1. Стороны не несут ответственности за неисполнение или ненадлежащее исполнение обязательств по настоящему Договору, если оно вызвано действием обстоятельств непреодолимой силы: военные действия, пожаром, наводнения, другим стихийным бедствием, сообщенным в надлежащем порядке мораторием, изменением законодательства, действиями и постановлениями государственных органов, что делает невозможным надлежащее исполнение обязанностей.</td>
					<td>9.1	The Parties will not be liable for non-fulfillment or improper fulfillment of obligations under this Contract if it is caused by actions of force majeure: war, fire, flood, other natural disaster duly reported by the moratorium, changes in laws, acts and regulations of public authorities, which make it impossible to properly perform the obligations specified in this Contract.</td>
				</tr>
				<tr>
					<td>9.2. Сторона, для которой сложились условия действия непреодолимой силы, должна сообщить в письменной форме другую сторону не позднее 24-х часов с момента наступления таких обстоятельств. При этом по договоренности Сторон, срок выполнения обязанностей по Договору продолжается до приостановления действий неопределенной силы или стороны подписывают договоренность о прекращении действия Договора. Достаточным доказательством возникновения или продолжения действий форс-мажорных обстоятельств является сертификат, выданный Торговой Палатой страны, на территории которой возникли форс-мажорные обстоятельства.</td>
					<td>9.2	The Party, which has had to face the force-majeure, must notify the other Party in written form no longer than within 24 hours from the moment such situation occurred. In this case, as were agreed by the Parties, the obligations are to be carried out until the cessation of the force-majeure, or the Parties are to sign an agreement about suspension of the Contract. A sufficient evidence of the occurrence or continuation of the force majeure is a certificate issued by the Chamber of Business and Commerce of the country in which the force-majeure has occurred.</td>
				</tr>
				<tr>
					<td class="center"><strong>10. ДРУГИЕ УСЛОВИЯ</strong></td>
					<td class="center"><strong>10. OTHER CONDITIONS</strong></td>
				</tr>
				<tr>
					<td>10.1. Договор вступает в силу с момента подписания его сторонами и действует до 31.12.2015р.</td>
					<td>10.1	This Contract enters into force from the moment of it being signed by the Parties and is valid until December 31, 2015.</td>
				</tr>
				<tr>
					<td>10.2. Все изменения и дополнения к условиям настоящего Договора считаются действительными, если они оформлены письменно в виде дополнений к Договору и подписаны обеими сторонами в порядке и способом, предусмотренном Договором.</td>
					<td>10.2	All the amendments and additions to the terms and conditions of this Contract are to be considered valid, if written in form of supplements to the Contract and signed by both Parties. </td>
				</tr>
				<tr>
					<td>10.3. Настоящий Договор составлен в двух экземплярах на русском и английском языках, которые имеют одинаковую юридическую силу, по одному для каждой из сторон. В случае возникновения конфликта в трактовке условий Договора их окончательное значение определяется исходя из русского языка.   Экземпляр Договора как и заявки и дополнения к нему, переданные / полученные по факсу, электронной почте, имеют юридическую силу.</td>
					<td>10.3	This Contract is drawn up in two copies in Russian and English languages, which have equal legal force, each for every Party. In the case of conflict in interpretation of the terms and conditions of this Contract, their final meaning shall be determined using Russian text. A copy of the Contract, as well as its supplements, sent / received via fax, e-mail have legal power.</td>
				</tr>
				<tr>
					<td class="center"><strong>11.ПОДПИСИ И РЕКВИЗИТЫ СТОРОН:</strong></td>
					<td class="center"><strong>11. LEGAL ADDRESSES OF THE PARTIES</strong></td>
				</tr>
				<tr>
					<td class="center"><strong>Заказчик</strong></td>
					<td class="center"><strong>Contractee</strong></td>
				</tr>
				<tr>
					<td class="relative">{{nl2br($form->requisites)}}<br><strong class="bottom">Директор__________________ {{--$form->user_surname--}} {{--$form->user_name--}} {{--$form->user_patronymic--}}</strong></td>
					<td class="relative">{{nl2br($form->en_requisites)}}<br><strong class="bottom">Директор__________________ {{--$form->user_surname--}} {{--$form->user_name--}} {{--$form->user_patronymic--}}</strong></td>
				</tr>
				<tr>
					<td>
						<strong>BEST FREIGHT LLC</strong><br>
						53092 Wisconsin, Mequon<br>
						9801 N Old Barn Rd, USA<br>
						account :6325494349<br>
						The name of the bank: Wells Fargo Bank<br>
						11350  N Port Washington Rd<br>
						Mequon, WI 53092 USA <br>
						swift code: WFBIUS6S<br>
						+12626174339<br>
					</td>
					<td>
						<strong>BEST FREIGHT LLC</strong><br>
						53092 Wisconsin, Mequon<br>
						9801 N Old Barn Rd, USA<br>
						account :6325494349<br>
						The name of the bank: Wells Fargo Bank<br>
						11350  N Port Washington Rd<br>
						Mequon, WI 53092 USA <br>
						swift code: WFBIUS6S<br>
						+12626174339<br>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>
@stop
