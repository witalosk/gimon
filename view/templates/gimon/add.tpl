{include file='../template/header.tpl' title='Ask Gimons' WEB={$WEB}}
<div id="content" class="uk-container uk-text-center">
  <br>
  <div class="uk-card uk-card-default uk-card-small">
    <div class="uk-card-header">
      <h3>Gimon for {$username}</h3>
      <p class="uk-text-meta">{$name}</p>
    </div>
    <div class="uk-card-body">
      <form action="" method="post">
        <textarea name="text" class="uk-textarea" rows="4"></textarea>
        <input type="submit" class="uk-button uk-button-primary uk-margin" value="ASK">
      </form>
    </div>
  </div>
  <br>
  <div class="uk-panel">
    <a class="uk-button uk-button-default"  href="{$WEB}">Sign up / Sign in<br><span class="uk-text-meta">新規登録 / ログイン</span></a>
  </div>
  <hr>
  <h3>Answers of {$username}</h3>
  {foreach from=$answers item=answer}
  <div class="uk-card uk-card-default uk-card-small" uk-scrollspy="cls: uk-animation-fade; repeat: true">
    <div class="uk-card-body">
      <p>{$answer}</p>
    </div>
  </div>
  <br>
  {/foreach}
  <br>
  <a href="#" uk-totop uk-scroll></a>
  <br>
  <br>
</div>
{include file='../template/footer.tpl' WEB={$WEB}}
