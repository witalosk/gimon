{include file='../template/header.tpl' title='Ask Gimons' WEB={$WEB}}
<div class="uk-container uk-text-center">
  <br>
  <div class="uk-card uk-card-default uk-card-small">
    <div class="uk-card-header">
      <h3>Gimon to {$username}</h3>
      <p class="uk-text-meta">{$name}</p>
    </div>
    <div class="uk-card-body">
      <form action="" method="post">
        <textarea name="text" class="uk-textarea" rows="4"></textarea>
        <input type="submit" class="uk-button uk-button-primary uk-margin" value="ASK">
      </form>
    </div>
  </div>
</div>
{include file='../template/footer.tpl'}
