// Kiro add
$(window).on('load', function(){
  $('.is-loading2').delay(900).fadeOut(800);
  $('.loading2').delay(600).fadeOut(300);
  $('#loading__wrapper').css('display', 'block');
});
$(function () {
// ローディング
  $(function() {
  var h = $(window).height();
   $('#loading__wrapper').css('display','none');
   $('.is-loading2 ,.loading2').height(h).css('display','block');
  });

  $(function(){
  setTimeout('stopload()',10000);
  });

  function stopload(){
   $('#loading__wrapper').css('display','block');
   $('.is-loading2').delay(900).fadeOut(800);
   $('.loading2').delay(600).fadeOut(300);
  }
});
