$(document).ready(function() {
  $('.spiner__btn').click(function() {
    $(this).closest('.header').find('.spiner__roll').addClass('active_popup1');
    function popup1() {
      $('.popup1').addClass('active');
    }
    setTimeout( popup1, 4000);

    $('.try').text(1);

  });
  
  $('.popup1__btn').click(function() {
    $('.popup1').removeClass('active');
    $('.spiner__roll').removeClass('active_popup1');
    $(this).closest('.header').find('.spiner__roll').addClass('active_popup2');
    function popup2() {
      $('.popup2__wrappe').addClass('active');
    }
    setTimeout( popup2, 4000);
    $('.try').text(0);
  });


});