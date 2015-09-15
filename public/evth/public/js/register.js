function validateEmail() {
    if (this.val()==='') return false;
    var regexp = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
    return regexp.test(this.val());
}
function validatePasswords(p, pc) {
    if (p.val()==='') {
        makeMessage(p, 'Пароль не может быть пустым.');
        return false;
    }         
    if (p.val().length<6) {       
        makeMessage(p, 'Пароль слишком короткий, минимум 6 символов.');
        return false;
    }
    if (p.val()!==pc.val()) {
        makeMessage(p, 'Пароли не совпадают.');
        return false;
    }
    return true;
}
function makeMessage(el, message) {
    var par;
    el.after('<span class="text-danger">'+message+'</span>')
}
function clearMessages() {
    $('.text-danger').remove();
}
$(document).ready(function(){
    var email, password, password_confirm, submit, inputs;
    email = $('#email');
    password = $('#password');
    password_confirm = $('#password-confirm');
    submit = $('#submit');
    inputs = $('input');
    submit.on('click', function(e){
        clearMessages();
        if (!validateEmail.call(email)){
            e.preventDefault();
            makeMessage(email,'Некорректный email.');
        };
        if (!validatePasswords(password, password_confirm)) {
            e.preventDefault();
        }
    });
    inputs.on('click', function(){
        clearMessages(); 
    });
});