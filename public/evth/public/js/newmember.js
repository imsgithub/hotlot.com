function makeMessage(el, message) {
    var par = el.parent();
    par.addClass('has-error');
    if(el.next('span').length===0) {
      el.after('<span class="text-danger">'+message+'</span>');
    } else {
      el.next('span').html(message);
    }
}
$(document).ready(function() {
  var activeNavLink = $('.nav__link--active');
  var activeIcon = activeNavLink.find('.nav__icon');
  activeIcon.attr('class', activeIcon.attr('class')+'-hover');
  $('nav a').hover(function(e) {
    if ($(this).hasClass('nav__link--active') || $(this).hasClass('nav__link--disabled')) return;
    var icon = $(this).find('.nav__icon');
    var clas = icon.attr('class');
    clas = clas.split(' ');
    clas[1] = clas[1]+'-hover';
    clas = clas.join(' ');
    icon.attr('class', clas);
  },
  function(e){
    if ($(this).hasClass('nav__link--active') || $(this).hasClass('nav__link--disabled')) return;
    var icon = $(this).find('.nav__icon');
    var clas = icon.attr('class');
    clas = clas.split(' ');
    clas[1] = clas[1].substring(0,10);
    clas = clas.join(' ');
    icon.attr('class', clas);
  });
  $('.calc').on('click', function(){
    var url = (window.location.href).substr(0,(window.location.href).indexOf(window.location.pathname))+'/map';
    window.open(url,'_self');
  });
  $('.news-gal').owlCarousel({
    singleItem: true,
  });
  sendConfirmationMail = function(e) {
    var self = this;
    $.ajax({
      url: '/profile/confirmagain',
      type: 'POST',
      data: {},
      beforeSend: function(){
        $(self).html('Секунду...');
      }
    })
    .done(function() {
      $(self).html('Письмо отправлено!');
    })
    .fail(function() {
      $(self).html('Что-то пошло не так...');
    })
    .always(function() {
      $(self).off('click', sendConfirmationMail);
    });
  };
  if($('#confirm-user-mail').length!==0) {
      var confirmUserMail = document.getElementById('confirm-user-mail');
      $(confirmUserMail).on('click', sendConfirmationMail);
  }
  if ($('#route_from').length!==0) {
    new google.maps.places.Autocomplete(document.getElementById('route_from'));
    new google.maps.places.Autocomplete(document.getElementById('route_where'));
    new google.maps.places.Autocomplete(document.getElementById('load_address'));
    new google.maps.places.Autocomplete(document.getElementById('unload_address'));
    $('#load_datetime, #unload_datetime').datetimepicker({
        format: 'Y-m-d H:i:s',
        minDate:new Date(),
        lang:'ru'
    });
  }
  $('.text-success .close').on('click', function(){
    $(this).parent().css({
      marginTop: '-400px'
    })
  });
  var cog = document.querySelector('.user-block__settings');
  var settings = document.querySelector('.user-block__settings-layout');
  var curtain = document.querySelector('.spin-curtain');
  var responseCurtain = document.querySelector('.response-curtain');
  var responseMessage = document.querySelector('.response-curtain .response');
  var title = document.querySelector('.user-block__settings-title');
  var editUser = settings.querySelector('.edit');
  var cancelEditUser = settings.querySelector('.cancel')
  var workgroupsBlock = document.querySelector('#workgroups-block');
  var worksBlock = document.querySelector('#works-block');
  var workgroups = JSON.parse($('#workgroups-json').html());//все рабочие группы и работы
  var userWorkgroup = parseInt($('#workgroup-id').html());//рабочая группа пользователя
  var userWork = parseInt($('#work-id').html());//работа пользователя
  var workgroupsSelect = {};
  var worksSelect = {};


  function makeSelects(){
    workgroupsSelect.el = _.template($('#workgroups-template').html(), {variable: 'workgroups'})(workgroups);
    workgroupsSelect.$el = $(workgroupsSelect.el);
    var opts = workgroupsSelect.$el.find('option');
    $(workgroupsBlock).html(workgroupsSelect.$el);
    if (userWorkgroup!==0) {
      for (i=0; i<opts.length;i++){
        if($(opts[i]).val()==userWorkgroup) $(opts[i]).attr('selected', 'selected');
      };
      worksSelect.el = _.template($('#works-template').html(), {variable: 'works'})(workgroups[userWorkgroup-1].work);
      worksSelect.$el = $(worksSelect.el);
      var opts = worksSelect.$el.find('option');
      for (i=0; i<opts.length;i++){
        if($(opts[i]).val()==userWork) $(opts[i]).attr('selected', 'selected');
      };
    } else {
      worksSelect.el = _.template($('#works-template').html(), {variable: 'works'})(workgroups[0].work);
      worksSelect.$el = $(worksSelect.el);
    };
    $(worksBlock).html(worksSelect.$el);
    $(workgroupsSelect.$el).on('change', function(){
      worksSelect.el = _.template($('#works-template').html(), {variable: 'works'})(workgroups[$(this).find(':selected').val()-1].work);
      $(worksBlock).html(worksSelect.el);
    });
  };
  makeSelects();
  $(settings).find(':input').attr('disabled', 'disabled');
  $(settings).on('click', function(e){
    e.stopPropagation();
  });
  $('html, body').on('click', function(){
    $(settings).css('display', 'none');
    $(cog).removeClass('active');
  });
  $(cog).on('click', function(e) {
    e.stopPropagation();
    if ($(settings).is(':visible')) {
      $(this).removeClass('active')
      $(settings).css('display', 'none');
    } else {
      $(this).addClass('active')
      $(settings).css('display', 'block');
    }
  });
  function disableInputs(e) {
    if (e) e.preventDefault();
    inputs = $(settings).find('input');
    _.each(inputs, function(el) {
      $(el).val($(el).attr('data-old-value'));
    });
    $('.user-block__settings-layout .text-danger').remove();
    $('.user-block__settings-layout .has-error').removeClass('has-error');
    makeSelects();
    $(settings).find(':input').attr('disabled', 'disabled');
    $(editUser).html('Редактировать');
    $(editUser).off('click', saveUser);
    $(editUser).on('click', enableInputs);
    $(cancelEditUser).css('display', 'none');
  };
  function enableInputs(e) {
    e.preventDefault();
    $(settings).find(':input').removeAttr('disabled');
    $(this).html('Сохранить');
    $(cancelEditUser).css('display', 'block');
    $(this).off('click', enableInputs);
    $(this).on('click', saveUser);
  };
  function saveUser(e){
    e.preventDefault();
    data = $(settings).find(':input').serialize();
    // console.log(data);
    $.ajax({
      url: '/profile/person',
      type: 'POST',
      data: data,
      beforeSend: function(){
        $('.user-block__settings-layout .text-danger').remove();
        $('.user-block__settings-layout .has-error').removeClass('has-error');
        $(curtain).css('display', 'block');
      }
    })
    .done(function(response) {
      var respObj;
      console.log(response);
      if (response!=='') {
        respObj = JSON.parse(response);
      } else {
        respObj = {
          success: 'Настройки пользователя сохранены!'
        };
      };
      if (respObj.errors) {
        for (key in respObj.errors) {
          makeMessage($('#user-settings-'+key),respObj.errors[key][0]);
        }
      } else if (respObj.success) {
        $(responseCurtain).css('display','block');
        $(responseMessage).html(respObj.success);
        setTimeout(function(){
          $(responseCurtain).css('display', 'none');
          inputs = $(settings).find('input');
          _.each(inputs, function(el) {
            $(el).attr('data-old-value', $(el).val());
          });
          userWorkgroup = parseInt($('#user-settings-workgroup').val());
          userWork = parseInt($('#user-settings-work').val());
          disableInputs();
          // $(editUser).off('click', saveUser);
          // $(editUser).html('Редактировать');
          // $(editUser).on('click', enableInputs);
          // $(cancel).css('display', 'none');
        }, 3000);
      }
    })
    .fail(function() {
      console.log("error");
    })
    .always(function() {
      $(curtain).css('display', 'none');
    });
  }
  $(editUser).on('click', enableInputs);
  $(cancelEditUser).on('click', disableInputs);
  setTimeout(function(){
      $('.text-success').css({
        marginTop: '-400px'
      },400);
  }, 3000);
});
