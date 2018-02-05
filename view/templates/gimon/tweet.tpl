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
inAnime = 'uk-animation-fade';
outAnime = 'uk-animation-fade';
{$script}
</script>
{include file='../template/footer.tpl' WEB={$WEB}}
