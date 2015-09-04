<div class="list-group sidebar">
    <a href="/admin" class="list-group-item"><span class="glyphicon glyphicon-home"></span> Страница администратора</strong>
    <a href="/admin/orders" class="list-group-item"><span class="glyphicon glyphicon-euro"></span> Заявки<span class="badge" id="unreviewed"></span></a>
    <a href="/admin/countries" class="list-group-item"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Настройки коэффициентов для стран</a>    
    <a href="/admin/codes" class="list-group-item"><span class="glyphicon glyphicon-barcode"></span> Коды стран</a> 
    <a href="/admin/rules" class="list-group-item"><span class="glyphicon glyphicon-equalizer"></span> Настройка коэффициентов расчета</a> 
</div>
<script>
    var sidebar = document.querySelector('.sidebar');
    var url = document.location.pathname;
    var a_arr = sidebar.getElementsByTagName('a');
    for (var i = 0; i < a_arr.length; i++ ) {
        if (a_arr[i].getAttribute('href')===url) a_arr[i].classList.add('active');
    }
    var badge = document.getElementById('unreviewed');
    function getOrdersByAjax(){
        var xhr = new XMLHttpRequest();
        xhr.open('GET', '/admin/orders/unreviewed/ajax', true);
        xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
        xhr.send();
        xhr.onreadystatechange = function () {
            if (xhr.readyState !== 4) return;
            badge.innerHTML = xhr.responseText;
        };
    };
    getOrdersByAjax();
    setInterval(function (){
        getOrdersByAjax();
    }, 5000);
    
</script>