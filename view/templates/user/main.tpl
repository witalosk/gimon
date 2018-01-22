{include file='../template/header.tpl' title='Gimons' WEB={$WEB}}
<div class="uk-container uk-text-center">
  <h3 class="uk-margin-top">Gimons for {$username}</h3>
  <p>Your URL for posting gimons: <a href="{$url}" class="uk-button uk-button-text">{$url}</a></p>
  {foreach from=$gimons item=gimon}
  <div class="uk-card uk-card-default uk-card-small">
    <div class="uk-card-body">
      <p>{$gimon.text}</p>
      <p class="uk-text-meta uk-margin-remove-top"><time>{$gimon.created_at}</time></p>
    </div>
    <div class="uk-card-footer">
      <a href="{$WEB}gimon/tweet/{$gimon.id}" class="uk-button uk-button-primary">Share with Comment</a>
      <button class="uk-button uk-button-default uk-icon-link" uk-icon="icon: more" type="button"></button>
      <div uk-dropdown="mode: click">
        <ul class="uk-nav uk-dropdown-nav">
          <!--<li><a href="#">Block this user</a></li>-->
          <li><a href="{$WEB}gimon/delete/{$gimon.id}">Delete this gimon</a></li>
        </ul>
      </div>
    </div>
  </div>
  <br>
  {/foreach}

  <hr>
  <a class="uk-button uk-button-primary uk-margin-bottom"  href="https://twitter.com/hashtag/{$screen_name}Gimon">Check Answers(#{$screen_name}Gimon)</a>
  <button uk-toggle="target: #tweet" type="button" class="uk-button uk-button-primary uk-margin-bottom">Tweet URL for posting gimons</button>
  <button type="button" class="uk-button uk-button-default uk-margin-bottom" onClick='copyText("{$url}");'>Copy the URL to Clipboard</button>
  <a href="{$WEB}user/logout" class="uk-button uk-button-default uk-margin-bottom">Logout</a>
</div>

<!-- This is the modal -->
<div id="tweet" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
        <h2 class="uk-modal-title">Tweet</h2>
        <form action="" method="post">
          <textarea name="text" class="uk-textarea" rows="4">
#gimon
#{$screen_name}Gimon
{$url}
          </textarea>
          <input type="submit" class="uk-button uk-button-primary uk-margin" value="Tweet">
          <button class="uk-modal-close uk-button uk-button-danger" type="button">Cancel</button>
        </form>
    </div>
</div>

<script>
{literal}
function copyText(text){
	var ta = document.createElement("textarea")
	ta.value = text
	document.body.appendChild(ta)
	ta.select()
	document.execCommand("copy")
	ta.parentElement.removeChild(ta)
  UIkit.notification('Copyed!');
}
{/literal}
{$script}
</script>
{include file='../template/footer.tpl'}
