function validateEmail() {
    if (this.val()==='') return false;
    var regexp = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
    return regexp.test(this.val());
}
function validatePasswords(p, pc) {
    if (p.val()==='') {
        makeMessage(p, 'Пароль не может быть пустым.');
        p.addClass('has-error')
        return false;
    }
    if (p.val().length<6) {
        makeMessage(p, 'Пароль слишком короткий, минимум 6 символов.');
        p.addClass('has-error')
        return false;
    }
    if (p.val()!==pc.val()) {
        makeMessage(p, 'Пароли не совпадают.');
        p.addClass('has-error');
        pc.addClass('has-error');
        return false;
    }
    return true;
}
function makeMessage(el, message) {
    var par;
    if(el.next('span').length===0) {
      el.after('<span class="text-danger">'+message+'</span>');
    } else {
      el.next('span').html(message);
    }

}
function clearMessage(el) {
    el.next('span').remove();
}
function log(message){
  var span = $('<span></span>');
  span.html(message);
  $('#log').prepend(span);
  setTimeout(function(){
    span.addClass('active');
  }, 100);
  setTimeout(function(){
    span.removeClass('active');
    setTimeout(function(){
      span.hide();
    },200);
  }, 5000);
}
$(document).ready(function(){
    var email, password, password_confirm, submit;
    email = $('#email');
    password = $('#password');
    password_confirm = $('#password-confirm');
    submit = $('#submit');
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
    var workgroups = JSON.parse($('#workgroups').html());
    workgroups.el = _.template($('#workgroups-template').html(), {variable: 'workgroups'})(workgroups);
    workgroups.$el = $(workgroups.el);
    $('#workgroups-form').append(workgroups.$el);
    workgroups.$el.on('click', '.workgroup div',  function(){
      // if($(this).hasClass('selected')) return;
      workgroups.$el.find('select option[selected]').removeAttr('selected');
      workgroups.$el.find('select option[value="'+$(this).attr('data-value')+'"]').attr('selected', '');
      $(this).parent().find('.selected').removeClass('selected');
      $(this).addClass('selected');
      var works = {};
      works.el = _.template($('#works-template').html(), {variable: 'works'})(workgroups[$(this).attr('data-value')-1].work);
      works.$el = $(works.el);
      if ($(this).attr('data-selected')!=='0') {
        works.$el.find('.selected').removeClass('selected');
        works.$el.find('span[data-value="'+$(this).attr('data-selected')+'"]').addClass('selected');
        works.$el.find('option:selected').removeAttr('selected');
        works.$el.find('option[value="'+$(this).attr('data-selected')+'"]').attr('selected', '');
      }
      var self = this;
      works.$el.on('click', 'span', function(){
        if($(this).hasClass('selected')) return;
        works.$el.find('select option[selected]').removeAttr('selected');
        works.$el.find('select option[value="'+$(this).attr('data-value')+'"]').attr('selected', '');
        $(this).parent().find('.selected').removeClass('selected');
        $(this).addClass('selected');
        $(self).attr('data-selected', $(this).attr('data-value'));
      });
      $('#works-form').html(works.$el);
    });
    var helpers = $('.helper');
    helpers.on('mousedown', function(){
      $(this).parent().find('input').attr('type', 'text');
    });
    helpers.on('mouseup', function(){
      $(this).parent().find('input').attr('type', 'password');
    });
    function firstStepHandler(){
      if (!validateEmail.call(email)){
          makeMessage(email,'Некорректный email.');
          email.addClass('has-error');
          return;
      } else {
        clearMessage(email);
      }
      if (!validatePasswords(password, password_confirm)) {
        return;
      } else {
        clearMessage(password);
        clearMessage(password_confirm);
      };
      $('.register-content-1').find('.has-error').removeClass('has-error')
      var data = $('.register-content-1 :input').serialize();
      $.ajax({
        url: '/user/ajaxregister',
        // url: '/for_testing_result',
        type: 'post',
        // dataType: 'default: Intelligent Guess (Other values: xml, json, script, or html)',
        data: data,
        beforeSend: function(){
          $('.register-content-1 input').attr('disabled', '');
          $('.step-1-confirm').off('click', firstStepHandler);
          $('.step-1-confirm').addClass('disabled');
        }
      })
      .done(function(response) {
        var respObj;
        if (response!=='') {
          respObj = JSON.parse(response);
        } else {
          respObj = '';
        }
        if (respObj.errors) {
          for (key in respObj.errors) {
            makeMessage($('#'+key),respObj.errors[key][0]);
          }
          $('.register-content-1 input').removeAttr('disabled');
          $('.step-1-confirm').on('click', firstStepHandler);
          $('.step-1-confirm').removeClass('disabled');
          log('Проверьте правильность ввода');
        } else if (respObj.success) {
          log(respObj.success);
          goToStep2();
        }
      })
      .fail(function() {
        log("Ошибка при попытке создания пользователя");
      })
      .always(function() {

      });
    };
    $('.step-1-confirm').on('click', firstStepHandler);
    // $('.step-1-confirm').on('click', goToStep2);
    // $('.workgroup div').on('click', function(){
    //
    // });
    function goToStep2(){
      $('.register-content-1').addClass('finished');
      setTimeout(function(){
        $('.register-content-1').css('display', 'none');
        // $('.register-content-2').css('display', 'block');
        $('.register-content-2').addClass('active');
      },600);
      $('.register-step-2').addClass('active');
      $('.workgroup div:first-child').click();
      $('.curtain').removeClass('active');
      $('.register-wrapper').removeClass('wrapper-step-1').addClass('wrapper-step-2');
      // $('.step-2-confirm').on('click', secondStepHandler);
      // $('.step-2-confirm').removeClass('disabled');
    };
    $('.back-to-step-1').on('click', backToStep1);
    $('.step-2-confirm').on('click', secondStepHandler);
    function secondStepHandler(){
      var data = $('.register-content-2 :input').serialize();
      $.ajax({
        url: '/user/ajaxregister/work',
        // url: '/for_testing_result',
        type: 'post',
        data: data,
        beforeSend: function(){
          // $('.register-content-2 .selected').removeClass('selected');
          $('.step-2-confirm').off('click', secondStepHandler);
          $('.step-2-confirm').addClass('disabled');
          $('.curtain').addClass('active');
        }
      })
      .done(function(response) {
        var respObj;
        if (response!=='') {
          respObj = JSON.parse(response);
        } else {
          respObj = {
            success: 'Настройки пользователя сохранены!'
          };
        }
        if (respObj.errors) {
          log(respObj.errors);
        } else if (respObj.success) {
          log(respObj.success);
          goToStep3();
        }
      })
      .fail(function() {
        log("Ошибка при попытке сохранения группы пользователя");
      })
      .always(function() {

      });
    };
    function goToStep3(){
      $('.register-step-3').addClass('active');
      $('.register-content-2').removeClass('active');
      $('.register-wrapper').removeClass('wrapper-step-2').addClass('wrapper-step-3');
      setTimeout(function(){
        $('.register-content-2').css('display', 'none');
      },300);
      setTimeout(function(){
        // $('.register-content-3').css('display','block');
        $('.register-content-3').addClass('active');
      },300);
    };
    function backToStep1(){
      $('.register-step-2').removeClass('active');
      $('.register-content-2').removeClass('active');
      $('.register-wrapper').removeClass('wrapper-step-2').addClass('wrapper-step-1');
      setTimeout(function(){
        $('.register-content-1').css('display', 'block');
      },200);
      setTimeout(function(){
        $('.register-content-1').removeClass('finished');
      },600);
      $('.register-content-1 input').removeAttr('disabled');
      $('.step-1-confirm').on('click', firstStepHandler);
      $('.step-1-confirm').removeClass('disabled');
    };
    function backToStep2(){
      $('.register-step-3').removeClass('active');
      $('.register-content-3').removeClass('active');
      $('.register-wrapper').removeClass('wrapper-step-3').addClass('wrapper-step-2');
      setTimeout(function(){
        $('.register-content-2').css('display', 'block');
      },200);
      setTimeout(function(){
        $('.register-content-2').addClass('active');
      },600);
      $('.curtain').removeClass('active');
      $('.step-2-confirm').removeClass('disabled');
      $('.step-2-confirm').on('click', secondStepHandler);
    };
    $('.back-to-step-2').on('click', backToStep2);
    $('.step-3-confirm').on('click', lastStep);
    function lastStep() {
      var data = $('.register-content-3 :input').serialize();
      $.ajax({
        url: '/profile/person',
        // url: '/for_testing_result',
        type: 'post',
        data: data,
        beforeSend: function(){
          // $('.register-content-2 .selected').removeClass('selected');
          $('.step-2-confirm').off('click', secondStepHandler);
          $('.step-2-confirm').addClass('disabled');
          $('.curtain').addClass('active');
        }
      })
      .done(function(response) {
        var respObj;
        if (response!=='') {
          respObj = JSON.parse(response);
        } else {
          respObj = {
            success: 'Настройки пользователя сохранены!'
          };
        }
        if (respObj.errors) {
          for (key in respObj.errors) {
            makeMessage($('#'+key),respObj.errors[key][0]);
          }
          log('Проверьте правильность ввода');
        } else if (respObj.success) {
          log(respObj.success);
          $('.register-content-3 input').attr('disabled', '');
          $('.step-3-confirm').off('click', lastStep);
          $('.step-3-confirm').addClass('disabled');
          $('.back-to-step-2').off('click', backToStep2);
          var i = 4;
          // var url = (window.location.href).substr(0,(window.location.href).indexOf(window.location.pathname))+'/profile';
          var interval = setInterval(function(){
            i--;
            if (i===1) {
              window.location.reload();
              clearInterval(interval);
            }
            log('Мы перенаправим вас в личный кабинет через '+i+' с.');
          },1000);
        }
      })
      .fail(function() {
        log("Ошибка при сохранении персональных данных пользователя");
      })
      .always(function() {
        // console.log("complete");
      });
    }
});
