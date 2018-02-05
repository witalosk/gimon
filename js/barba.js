$(function(){
  var inAnime = 'uk-animation-slide-left-small';
  var outAnime = 'uk-animation-slide-left-medium';
  var target = $('#content');
  target.addClass(inAnime);
  $('a').click(function(e){
    e.preventDefault();
    var action = $(this).attr('href');
    if (action != null && action.indexOf('#')){
      target.removeClass(inAnime);
      target.addClass(outAnime);
      target.addClass('uk-animation-reverse');

      window.location.href = action;
    }
  });
});
