$(document).ready(function () {

  $("#form1").validate({
    rules: {
      name: "required",
      phone: "required",
      email: {
        required: true,
        email: true
      }
    },
    messages: {
      name: "Введите свое имя",
      phone: "Введите свой телефон",
      email: {
        required: "Нам нужен Ваш почтовый адрес",
        email: "Введите почту в формате name@domain.com"
      }
    }
  });

  $("#form2").validate({
    rules: {
      name: "required",
      email: {
        required: true,
        email: true
      }
    },
    messages: {
      name: "Введите свое имя",
      email: {
        required: "Нам нужен Ваш почтовый адрес",
        email: "Введите почту в формате name@domain.com"
      }
    }
  });

  $("a[href^='#']").click(function () {
    var _href = $(this).attr("href");
    $("html, body").animate({
      scrollTop: $(_href).offset().top + "px"
    });
    return false;
  });

  $(window).scroll(function () {
    if ($(this).scrollTop() > 1600) {
      $('.scroll').css("display", "block");
    } else {
      $('.scroll').css("display", "none");
    }
  });



  $('.menu').click(function () {
    $('.menu').toggleClass('menu__active');
    $('.ul__menu').toggleClass('ul__menu_active');
  });









});