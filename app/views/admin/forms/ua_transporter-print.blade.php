@extends('admin.layouts.default')
@section('content')
<div class="content-row">
	<div class="print-contract">
    <h1>ДОГОВІР № {{$form->id}}</h1>
		<h1>транспортного експедирування</h1>
		<h1><span class="left">Україна  м. Київ</span><span class="right">{{date('d.m.Y',strtotime($form->updated_at))}}р.</span></h1>
    <p class="indent"><strong>ТОВ «БЕСТ ФРЕЙТ»</strong>, в особі директора Ушакова Євгена Євгеновича, діючого на підставі Статуту, надалі  <strong>"Експедитор"</strong>, що є платником  податку на додану вартість на загальних умовах, згідно Законодавства,</p>
		<p class="indent">{{ucfirst($form->company_name)}} , в особі директора {{$form->user_surname.' '.$form->user_name.' '.$form->user_patronymic}}, діючого на підставі Статуту, надалі  <strong>" Перевізник "</strong>, що є платником  податку на додану вартість на загальних умовах, згідно Законодавства, з іншої сторони , надалі разом  названі як Сторони, а кожен окремо як Сторона, підписали цей Договір про наступне::</p>
		<p><strong>Терміни, що використовуються в Договорі</strong></p>
		<p>Сторони визначили використання термінів Договору в наступному значенні:
		<p><strong>Замовник</strong> - вантажовідправник / вантажоодержувач;</p>
		<p><strong>Експедитор</strong> - особа, яка надає транспортно-експедиторські послуги під час перевезення вантажів Замовника;</p>
		<p><strong>Перевізник</strong> - особа, яка безпосередньо здійснює перевезення вантажу Замовника за параметрами, узгодженими в замовленні (заявці);</p>
		<p><strong>Треті особи</strong> - інші учасники транспортно-експедиторської діяльності, транспортні агенти, порти, залізничні станції, об'єднання та спеціалізовані підприємства залізничного, авіаційного, автомобільного, річкового та морського транспорту, митні брокери та інші особи, які виконують роботи (надають послуги) при перевезенні вантажів;</p>
		<p><strong>Документообіг</strong> - взаємодія між Сторонами за допомогою обміну документами в порядку, способом і формою, встановленими Договором;</p>
		<p><strong>Оригінал письмового документа</strong> - будь-які документи, якими обмінюються Сторони при укладенні Договору і в рамках виконання його умов, включаючи  копії таких документів, виготовлені та передані за допомогою електронних, технічних засобів передачі/копіювання до моменту обміну їх оригіналів;</p>
		<p><strong>Уповноважені особи</strong> - представники Сторін, відповідальні за підписання та передачу письмових документів при укладенні Договору і в рамках виконання його умов;</p>
		<p><strong>Транспортно-експедиторські послуги</strong> — послуги експедитора, що надаються за дорученням Замовника;</p>
		<p><strong>Замовлення (заявка) на перевезення</strong> - погоджені Сторонами параметри перевезення, в рамках виконання якої необхідно надати транспортно - експедиторські послуги.</p>
		<h1 class="sans-serif">1. ПРЕДМЕТ ДОГОВОРУ</h1>
		<p><strong>1.1.</strong> Згідно з цим Договором та погоджених Заявок до нього, Перевізник  за плату бере на себе зобов'язання виконувати перевезення та експедирування вантажів.</p>
		<h1 class="sans-serif">2. ПОРЯДОК ОФОРМЛЕННЯ ЗАМОВЛЕННЯ НА ПОСЛУГИ</h1>
		<p><strong>2.1.</strong> Перевізник завчасно повідомляє Експедитора про місцезнаходження своїх транспортних засобів і часу їх готовності до завантажень.</p>
		<p><strong>2.2.</strong> Експедитор обробляє отриману інформацію, враховуючи існуючі в наявності замовлення і повідомляє Перевізнику свої пропозиції.</p>
		<p><strong>2.3.</strong> Після узгодження, Експедитор передає Перевізнику будь-яким способом, передбаченим Договором заявку на організацію перевезення вантажів (далі по тексту - заявка). Заявка повинна включати наступні дані:</p>
		<p>-місце завантаження і місце митного оформлення;</p>
		<p>-місце розвантаження та місце митного оформлення;</p>
		<p>-найменування вантажу;</p>
		<p>-вага, габарити, кількість місць;</p>
		<p>-дата та час завантаження</p>
		<p>-строки доставки;</p>
		<p>-вартість фрахту за перевезення;</p>
		<p>-прізвище та телефони контактних осіб з боку вантажовідправника / вантажоодержувача та / або Експедитора;</p>
		<p>-порядок обміну інформацією в ході перевезення;</p>
		<p>-Додаткові умови з перевезення у разі наявності таких.</p>
		<p><strong>2.4.</strong> Після отримання заявки Перевізник протягом 8 годин з моменту її отримання акцептує або відхиляє її. Передача прийнятої в роботу заявки здійснюється в порядку і способом, передбаченим Договором для документообігу між Сторонами. Перевізником в заявці повинні зазначатися такі дані:</p>
		<p>-державний номер наданого під завантаження транспортного засобу;</p>
		<p>-прізвище водія;</p>
		<p>-номери Carnet TIR і CMR</p>
		<p>-контакта особа з боку Перевізника, що відповідає за виконання даного рейсу.</p>
		<p><strong>2.5.</strong> Будь-які зміни, що вносяться в заявку, повинні бути оформлені за формою і передані способом, що передбачений Договором. Прийнята в роботу (акцептована) заявка є невід'ємною частиною цього Договору. У разі виникнення суперечності, розходжень у тлумаченні зобов'язань, умови Договору є пріоритетними по відношенню до умов кожної конкретної заявки.</p>
		<p><strong>2.6.</strong> Перевізник гарантує організувати подачу автомобіля під навантаження у строки та за ціною, вказаною в заявці, якщо замовлення було подано і оформлено належним чином і всі умови Договору виконуються.</p>
		<p><strong>2.7.</strong> Перевізник інформує Експедитора про хід виконання прийнятої заявки. Всі проблеми, що виникають в ході виконання рейсу, Перевізник вирішує виключно з Експедитором або через контактну особу, вказану у заявці.</p>
		<p><strong>2.8.</strong> У разі заміни транспортного засобу, наданого під завантаження, Перевізник зобов'язаний завчасно, але не пізніше, ніж за дві години до моменту завантаження повідомити про даний факт Експедитору.</p>
		<h1 class="sans-serif">3. ПРАВА ТА ОБОВ'ЯЗКИ ПЕРЕВІЗНИКА</h1>
		<p><strong>3.1.</strong> Виконувати  перевезення експортно-імпортних і транзитних вантажів автомобільним транспортом відповідно до заявки Експедитора на умовах, зазначених у заявці на організацію перевезення вантажів автомобільним транспортом.</p>
		<p><strong>3.2.</strong> За свій рахунок отримувати всі необхідні дозволи, ліцензії, необхідні для своєчасного виконання заявок Експедитора.</p>
		<p><strong>3.3.</strong> Виконувати міжнародні автомобільні перевезення справним транспортом, оснащеним відповідним чином, з усіма необхідними документами (Карнет ТІР і ЦМР, сертифікат відповідності транспортного засобу для перевезення вантажів під митними пломбами, страхування відповідальності за Carnet Tir, страхування відповідальності CMR а також інші необхідні для виконання кожного конкретного перевезення документи).</p>
		<p><strong>3.4.</strong> Повідомляти про факт завантаження і відправки вантажу, висилати по факсимільному зв'язку або електронною поштою Експедитору копії товарно-транспортних документів, необхідних для оформлення попереднього повідомлення митних органів (при переході кордону автотранспортним засобом з вантажем Експедитора).</p>
		<p><strong>3.5.</strong> За допомогою своїх засобів зв'язку повідомити водієві номер попереднього повідомлення, у разі перетину кордону в неробочі, вихідні та святкові дні.</p>
		<p><strong>3.6.</strong> З прибуттям автотранспорту в кінцевий пункт призначення, своєчасно передавати уповноваженому представнику вантажоодержувача або іншій особі, зазначеній Експедитором, всі необхідні супровідні документи, що стосуються виконаного перевезення.</p>
		<p><strong>3.7.</strong> У термін, обумовлений із Експедитором, доставляти вантаж для виконання митного оформлення, згідно заявок Експедитора, які є невід'ємною частиною цього Договору.</p>
		<p><strong>3.8.</strong> У разі якщо уповноваженим на це державним органом здійснювався відбір зразків або інший подібний захід, привів до невідповідності кількості доставленого вантажу, у кількості, зазначеному в інвойсі, вимагати від такого державного органу офіційного документального засвідчення цього факту з точним зазначенням відібраної кількості і пред'являти їх Експедитору.</p>
		<p><strong>3.9.</strong> На вимогу Експедитора надавати будь-яку актуальну і достовірну інформацію щодо ходу перевезення.</p>
		<p><strong>3.10.</strong> Передавати права та обов’язки за цим договором іншим особам виключно за окремим письмовим погодженням такої передачі із Експедитором.</p>
		<p><strong>3.11.</strong> Охороняти інтереси Експедитора. Дотримуватися нейтралітету і не розголошувати інформацію щодо клієнтів Експедитора.</p>
		<h1 class="sans-serif">4. ПРАВА ТА ОБОВ'ЯЗКИ ЕКСПЕДИТОРА</h1>
		<p><strong>4.1.</strong> Надати Перевізнику всю необхідну інформацію з організації перевезень експортно-імпортних вантажів автомобільним транспортом.</p>
		<p><strong>4.2.</strong> У термін, обумовлений умовами Договору, надати Перевізнику вантажі для організації міжнародних перевезень.</p>
		<p><strong>4.3.</strong> Підготувати вантаж і правильно оформити супровідні документи (інвойси, сертифікати походження та інше).</p>
		<p><strong>4.4.</strong> Забезпечити завантаження, розвантаження та розміщення вантажу на транспортному засобі своїми силами, в тарі та упаковці, призначеної для перевезення вантажів автотранспортом.</p>
		<p><strong>4.5.</strong> Забезпечити водію транспортного засобу, організованого для перевезення Перевізником, можливість контролювати процес завантаження / розвантаження. Вантажовідправник на вимогу водія зобов'язаний змінити неправильне розміщення та кріплення вантажу.</p>
		<p><strong>4.6.</strong> Забезпечити правильне використання вантажопідйомності і навантаження на осі автотранспорту, організованого для перевезення Перевізником, з урахуванням вагових і габаритних обмежень країн, через територію яких проходить маршрут руху автотранспорту.</p>
		<p><strong>4.7.</strong> До прибуття автомобіля, організованого для перевезення Перевізником на завантаження, підготувати вантаж до транспортування.</p>
		<p><strong>4.8.</strong> Протягом 48 робочих годин після відвантаження товару і відправлення товарно-транспортних документів Експедитор зобов'язаний оформити попереднє повідомлення і повідомити його номер Перевізнику або водію автомобіля, що виконує перевезення.</p>
		<p><strong>4.9.</strong> У разі зміни дати або місця завантаження / розвантаження, або скасування завантаження, повідомити Перевізника додатково факсимільним повідомленням або електронною поштою, не пізніше 2-х діб до дати запланованої зміни, а також узгодити з Перевізником додаткову вартість перевезення.</p>
		<p><strong>4.10.</strong> Вирішити всі претензії, які виникли під час виконання перевезення і відшкодувати додаткові витрати Перевізника.</p>
		<p><strong>4.11.</strong> Виконати всі розрахунки з Перевізником в повному обсязі і в строк, передбачений умовами цього Договору.</p>
		<h1 class="sans-serif">5. ПЛАТЕЖІ І ВЗАЄМНІ РОЗРАХУНКИ</h1>
		<p><strong>5.1.</strong> Вартість перевезення встановлюється в заявці.</p>
		<p><strong>5.2.</strong> Ціни є договірними і визначаються виключно виходячи з конкретної ситуації на транспортному ринку.</p>
		<p><strong>5.3.</strong> Розрахунок здійснюється по факту розвантаження транспортного засобу, якщо інше не обумовлено в заявці.</p>
		<p><strong>5.5.</strong> Оплата вартості кожного організованого Перевізником міжнародного або внутрішного автомобільного перевезення  проводиться Експедитором в національній грошовій одиниці України, або виходячи з гривневого еквівалента до долара США в перерахунку за офіційним курсом НБУ на момент виставлення рахунку,у безготівковій формі в банк і на розрахунковий рахунок, який вказаний в Договорі, якщо інше не обумовлено в заявці.</p>
		<h1 class="sans-serif">6. ВІДПОВІДАЛЬНІСТЬ СТОРІН</h1>
		<p><strong>6.1. Загальні положення:</strong></p>
		<p><strong>6.1.1.</strong> Сторони несуть взаємну відповідальність за невиконання або неналежне виконання зобов'язань за цим Договором.</p>
		<p><strong>6.1.2.</strong> Взаємна відповідальність Сторін цього Договору регулюється положеннями Конвенції КДПВ, законодавчими та нормативними актами, і цим Договором.</p>
		<p><strong>6.1.3.</strong> У разі заподіяння збитків з вини однієї зі сторін, винна сторона зобов'язана відшкодувати збитки іншій стороні згідно з чинним законодавством.</p>
		<p><strong>6.1.4.</strong> У випадку втрати, пошкодження, псування вантажу під час перевезення Перевізник несе відповідальність перед Експедитором за завдані такою втратою, пошкодженням, псуванням збитки якими виступають як реальні витрати так і ті що Експедитор мусить зробити, не зважаючи на обставину того  чи провів Експедитор фактичну сплату таких збитків безпосередньому замовнику (вантажовідправнику/вантажоодержувачу). При цьому достатнім та безспірним доказом того, що Експедитор мусить зробити такі витрати є встановлений законодавством, Конвенцією КДПВ обов’язок Перевізника відшкодувати (компенсувати) збитки, завдані втратою, пошкодженням, псуванням вантажу під час перевезення.</p>
		<p><strong>6.1.5.</strong> Передача прав та обов'язків Перевізника за даним договором, заявками до нього допускається виключно за окремою письмовою згодою Експедитора. При цьому Перевізник несе відповідальність за дії залучених ним до виконання Договору осіб, водіїв як за свої власні і не може посилатися на відсутність в його діях вини, з причини дій залучених ним третіх осіб, на відсутність належно оформлених договірних відносин з такими третіми особами, водіями будь-які інші обставини, оскільки вважається, що така третя особа, водій діяла від імені та за рахунок Перевізника.</p>
		<p><strong>6.2. Відповідальність сторін:</strong></p>
		<p><strong>6.2.1.</strong> Сторони домовилися про наступний нормативний час при виконанні міжнародного перевезення на завантаження і митне оформлення вантажу:</p>
		<p>- 48 годин  на теріторії  СНД і Середньої Азії.</p>
		<p>-24 години на теріторії  інших країн. Якщо інше не обумовлено в заявці.</p>
		<p>На розвантаження  і митне оформлення вантажу:</p>
		<p>- 48 годин  на теріторії  СНД і Середньої Азії.</p>
		<p>-24 години на теріторії  інших країн. Якщо інше не обумовлено в заявці.</p>
		<p>При виконанні перевезення вантажів по території  України, що не підлягають митному оформленню, нормативний час на завантаження / розвантаження становить 8:00.</p>
		<p><strong>6.2.2.</strong> У разі виникнення простоїв у ході рейсу, під завантаженням і розвантаженням понад зазначених у п. 6.2.1. термінів Експедитор виплачує Перевізнику штрафні санкції за понаднормовий простій, незалежно від наявності або відсутності його вини у такому простої, виходячи з наступного:</p>
		<p>при виконанні міжнародного перевезення</p>
		<p>- 50 Доларів США по курсу НБУ в разі простоїв на території України</p>
		<p>- 100 Доларів США по курсу НБУ в разі простоїв на території країн СНД, Східної, Центральної та Західної Європи, Середньої Азії. Якщо інше не обумовлено заявці.</p>
		<p>Штрафні санкції за понаднормовий простій  сплачуються в національній грошовій одиниці України.</p>
		<p>Вихідні  та святкові  дні  входять до  простою, якщо транспортний засіб прибув на місце завантаження/  розвантаження, чи митне оформлення за 48 годин до настання цих днів.</p>
		<p><strong>6.2.3.</strong> У разі виникнення простоїв з вини Експедитора при переході кордону автотранспортним засобом, більш ніж 24 години, Експедитор виплачує Перевізнику штрафні санкції за понаднормовий простій, виходячи з наступного</p>
		<p>- 50 Доларів США по курсу НБУ в разі простоїв на території країн СНД, Східної, Центральної та Західної Європи, Середньої Азії. Якщо інше не обумовлено заявці.</p>
		<p><strong>6.2.4.</strong> Підрахунок часу простою починається з моменту отримання Експедитором письмового повідомлення Перевізника. Претензії за фактами простою приймаються при наявності заповненого листа простою.</strong>
		<p><strong>6.2.5.</strong> При затриманні прибуття транспортного засобу на місце завантаження/розвантаження, Перевізник  сплачує Експедитору  штрафні суми аналогічно сумам вказаним в п.6.2.2. даного Договору.</strong>
		<p><strong>6.2.6.</strong> У разі виникнення перевантаження загальної маси і на осі, Експедитор зобов'язується відшкодувати штраф, який підтверджений відповідними документами, виданими на прикордонному переході (квитанція про сплату штрафу).</strong>
		<p><strong>6.2.7.</strong> У разі зміни місця завантаження / розвантаження у вартість плати за перевезення додається сума в розмірі 1,00 Долар за 1 км додаткового пробігу.</strong>
		<p><strong>6.2.8.</strong> Всі додаткові витрати, що виникли при перевезенні та пов'язані з характером вантажу, оплачуються Експедитором при пред'явленні Перевізником відповідних фінансових документів.</strong>
		<p><strong>6.2.9.</strong> У разі відмови від завантаження наданого вантажовідправнику транспортного засобу менш, ніж за 48годин до дати завантаження, Експедитор сплачує Перевізнику штраф у розмірі 100 USD.</strong>
		<p><strong>6.2.10.</strong> У випадку ненадання транспортного засобу під завантаження без поважної причини і попереднього повідомлення від Перевізника і своєчасної заміни транспортного засобу, при підтвердженої заявці, Перевізник сплачує штраф Експедитору у розмірі 100 USD.</strong>
		<p><strong>6.2.11.</strong> Експедитор відшкодовує будь-які збитки, завдані Перевізнику у зв'язку з порушенням зобов'язання з надання інформації та документів на вантаж при переміщенні, а також при переміщенні товарів через митний кордон.</strong>
		<h1 class="sans-serif">7. ПРЕТЕНЗІЇ ТА ВИРІШЕННЯ СПОРІВ</h1>
		<p><strong>7.1.</strong> Усі спори, що виникають з цього Договору або пов'язані з ним, вирішуються шляхом переговорів між Сторонами. При цьому Сторони домовилися, що у разі виникнення спору між Сторонами за цим Договором, вони його будуть вирішувати в досудовому претензійному порядку.</p>
		<p><strong>7.2.</strong> Сторона - одержувач претензії зобов'язана надати письмову відповідь. При цьому Сторони встановили, що термін розгляду претензії за цим Договором не повинен перевищувати 7 (сім) днів з моменту отримання/передачі претензії будь-яким способом передбаченим Договором. Письмова відповідь на претензію є позицією Сторони - одержувача в суперечці. У разі відмови від зобов'язання надати письмову відповідь на претензію і / або перевищення строків її розгляду, встановлених Договором, Сторона - одержувач претензії вважається такою, що погодилася з усіма вимогами, висунутими в претензії.</p>
		<p><strong>7.3.</strong> Якщо відповідний спір неможливо вирішити шляхом переговорів, він вирішується в судовому порядку відповідно до чинного в Україні законодавства. У разі невиконання рішення суду, посадові особи Сторони, що не виконує рішення суду, вважаються попередженими про адміністративну, кримінальну відповідальність у зв'язку з таким невиконанням. Застосоване до даного Договору право є матеріальне право України.</p>
		<h1 class="sans-serif">8. ОГОВОРКА ПРО ПОРЯДОК ОФОРМЛЕННЯ І ПЕРЕДАЧУ ДОКУМЕНТІВ</h1>
		<p><strong>8.1.</strong> Сторони визначили, що способами обміну, передачі документів, платіжних документів, рахунків, надання будь-яких поточних інструкцій, змін в умовах, повідомлення про події, здійснення іншої переписки, за цим Договором є:</p>
		<p>1) поштове відправлення; 2) кур'єрська доставка; 3) факсимільний зв'язок; 4) електронна пошта.</p>
		<p><strong>8.2.</strong> Сторони встановили, що документообіг від імені Сторін Договору здійснюють уповноважені особи. Всі негативні наслідки несанкціонованих дій третіх осіб несе сторона, від імені якої були здійснені такі дії. При цьому вважається, що документи, передані будь-яким із способів, передбачених цим Застереженням і підписані власноруч і / або електронним підписом і / або з використанням факсимільного копіювання та / або засобів іншого копіювання, є екземплярами оригіналу письмового документа, підписаного уповноваженою особою Сторін (ни) , належним і допустимим доказом у суді, арбітражі і не можуть визнаватися недійсними на підставі відсутності оригіналу і підписання документів уповноваженою особою.</p>
		<p><strong>8.3.</strong> Кожна із Сторін має право вимагати, у будь-якій формі і способом, передбаченим Договором, від іншої Сторони передачі оригіналів письмових документів, а інша сторона зобов'язана надати (надіслати) такі оригінали протягом 3-х днів з моменту отримання такої вимоги. Всі негативні наслідки невиконання цього зобов'язання покладаються на зобов'язану Сторону.</p>
		<p><strong>8.4.</strong> Сторони за даним Договором встановили, що електронний документообіг буде здійснюватися за такими електронними адресами з доменом:</p>
		<p>Експедитора: info@rate-and-go.com;</p>
		<p>Перевізника: {{$form->user_email}};</p>
		<p>При цьому Сторони домовилися про те, що електронним підписом - ідентифікацією Сторони, як автора та / або підписувача електронного документа виступає її електронна адреса, вказана в п.п. 8.4. вказаний у реквізитах листа та / або окремо в тексті.  Інформація, інструкції, сканкопіі документів, інші повідомлення, оферти, акцепти відправляються з електронних адрес з доменом, зазначеним у п.п. 8.4. відображають дійсне волевиявлення Сторони в рамках даного Договору, при цьому вважається, що таке волевиявлення, виражене уповноваженим представником Сторони, а всі негативні наслідки несанкціонованих дій третіх осіб несе сторона, від імені якої були здійснені такі дії.</p>
		<p><strong>8.5.</strong> Паперове відтворення (роздруківка) листування електронною поштою (Прінтскрін) може використовуватися як належне і допустимий доказ в суді, арбітражі.</p>
		<h1 class="sans-serif">9. ФОРС –МАЖОР</h1>
		<p><strong>9.1.</strong> Сторони не несуть відповідальності за невиконання або неналежне виконання зобов'язань за цим Договором, якщо воно викликано дією обставин непереборної сили: військовими діями, пожежею, повені, іншим стихійним лихом, повідомленим в належному порядку мораторієм, зміною законодавства, діями і постановами державних органів, що робить неможливим належне виконання обов'язків.</p>
		<p><strong>9.2.</strong> Сторона, для якої склались умови дії непереборної сили, повинна повідомити у письмовій формі іншу сторону не пізніше 24-х годин з моменту настання таких обставин. При цьому за домовленістю Сторін, термін виконання обов'язків за Договором продовжується до призупинення дій невизначеної сили або сторони підписують домовленість про припинення дії Договору. Достатнім доказом виникнення чи продовження дій форс-мажорних обставин є сертифікат, виданий Торговою Палатою країни, на території якої виникли форс-мажорні обставини.</p>
		<h1 class="sans-serif">10. ІНШІ УМОВИ</h1>
		<p><strong>10.1.</strong> Договір набуває чинності з моменту підписання його сторонами і діє до 31.12.2015р.</p>
		<p><strong>10.2.</strong> Всі зміни та доповнення до умов цього Договору вважаються дійсними, якщо вони оформлені письмово у вигляді доповнень до Договору і підписані обома сторонами в порядку та у спосіб, передбаченому Договором.</p>
		<p><strong>10.3.</strong> Даний Договір складено українською мовою, в 2-х примірниках по одному для кожної із Сторін. Примірник Договору як і заявки та доповнення до нього, передані / отримані факсом, електронною поштою, мають юридичну силу.</p>
		<h1 class="sans-serif">11. ПІДПИСИ ТА РЕКВІЗИТИ СТОРІН:</h1>
		<table>
			<tbody>
				<tr>
					<tr>
						<td class="center"><p><strong>Експедитор</strong></p></td>
						<td class="center"><p><strong>Перевізник</strong></p></td>
					</tr>
					<td class="relative">
						<strong>ТОВ «БЕСТ ФРЕЙТ»</strong>
						Юр. Адреса:  Україна, 04073, м. Київ,<br>
						провулок Куренівський, буд. 4/8, офіс 7<br>
						Пошт. Адреса: Україна, 04071, м. Київ,<br>
						Вул. Верхній Вал, 4А (цокольний поверх)<br>
						<br>
						Р/Р 26007014560592 <br>
						У Філіі АТ “Укрексімбанк” в м. Києві, <br>
						МФО 380333 <br>
						ЄДРПОУ – 39405218<br>
						ІПН 394052126541<br>
						<br>
						<br>
						<strong class="bottom">______________________ Ушаков Є.Є.</strong>
					</td>
					<td class="relative">
						{{nl2br($form->requisites)}}<br>
					</td>
				</tr>
			</tbody>
		</table>
  </div>
</div>
@stop
