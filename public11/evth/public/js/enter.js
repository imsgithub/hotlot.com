function enter(data) {
    var xhr, url;
    url = '/user/login';
    xhr = new XMLHttpRequest();
    xhr.open('POST', url, true);
    xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
    xhr.send('email='+data.email.value+'&password='+data.password.value);
    xhr.onreadystatechange = function (){
        if (xhr.readyState !== 4) return;
        var response;
//        console.log(xhr.responseText);
        response = JSON.parse(xhr.responseText);
        console.log(response);
        if (response.valid === true) {
            location.reload();
        } else {
            $(data.email).parent().addClass('has-error');
            $(data.password).parent().addClass('has-error');
        }
    };
    
};