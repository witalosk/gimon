{include file='../template/header-b.tpl' title='Share with comment' WEB={$WEB}}
<div id="content" class="uk-container uk-text-center">
  <br>
  <div class="uk-card uk-card-default uk-card-small">
    <div class="uk-card-header">
      <p>{$gimon.text}</p>
      <p class="uk-text-meta uk-margin-remove-top"><time>{$gimon.created_at}</time></p>
    </div>
    <div class="uk-card-body">
      <form action="" method="post">
        <textarea name="text" class="uk-textarea" rows="4" placeholder="Your comment:"></textarea>
        <p class="uk-text-meta"><span id="now">0</span> / <span id="all">{$all}</span></p>
        <input type="submit" class="uk-button uk-button-primary uk-margin" value="Tweet">
      </form>
    </div>
  </div>
  <br>
  <div class="uk-card uk-card-default uk-card-small">
    <div class="uk-card-header">
      <h3>あなたの回答ツイート</h3>
      <p class="ms-mini">Your answer tweet</p>
    </div>
    <div class="uk-card-body">
      {$answer}
    </div>
  </div>
</div>
<script>
function bytes2(str) {
  len = 0;
  str = escape(str);
  for (i=0;i<str.length;i++,len++) {
    if (str.charAt(i) == "%") {
      if (str.charAt(++i) == "u") {
        i += 3;
        len++;
      }
      i++;
    }
  }
  return len;
}

$(function(){
  $('textarea').keyup(function(){
    $('#now').text(bytes2($(this).val()));
    if ( Number($('#now').text()) > Number($('#all').text()) ) {
      $('#now').removeClass('uk-text-meta');
      $('#now').addClass('uk-text-danger');
    } else {
      $('#now').removeClass('uk-text-danger');
      $('#now').addClass('uk-text-meta');

    }
  });
});
inAnime = 'uk-animation-fade';
outAnime = 'uk-animation-fade';
{$script}
</script>
{include file='../template/footer.tpl' WEB={$WEB}}
