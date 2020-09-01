$(document).ready(function(){
    $('.contact-btn').click(function() {
        let value = $('.contact-input').val();
        if (value.length == 0) {
            $(this).closest('.contact-us-items-input-btn').find('.jq-fill-in-input').addClass('active');
        }
    });
    $(document).ready(function(){
       $("#menu").on("click","a", function (event) {
           event.preventDefault();
           let id  = $(this).attr('href'),
               top = $(id).offset().top;
           $('body,html').animate({scrollTop: top}, 1500);
       });
   });
   
   $('#form').validate({
    rules: {
        email: {
            required: true,
            email: true
        },
        name: {
            required: true,
            minlength: 3
        },
        number: {
            required: true
        },
        brand: {
            required: true
        }
    },
    messages: {
        email: 'Введите корректный Email',
        name: 'Введите Ваше имя',
        number: 'Введите номер',
        brand: 'Введите названи компании'
    }
   });
});