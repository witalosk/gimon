{include file='../template/header.tpl' title='Ask Gimons' WEB={$WEB}}
<div id="content" class="uk-container uk-text-center">
  <br>
  <div class="uk-card uk-card-default uk-card-small">
    <div class="uk-card-header">
      <h3>Gimoned to {$username}!</h3>
      <p>The question to {$name} was completed.</p>
    </div>
    <div class="uk-card-body">
      <p class="uk-text-meta">If you are blocked, this question may not be delivered.</p>
      <a class="uk-button" href="{$WEB}gimon/add/{$username}">More gimon</a>
    </div>
  </div>
</div>
{include file='../template/footer.tpl' WEB={$WEB}}
