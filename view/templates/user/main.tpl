{include file='../template/header.tpl' title='Gimons' WEB={$WEB}}
<div class="uk-container uk-text-center">
  <h3 class="uk-margin-top">Gimons for {$username}</h3>
  <p>Your URL for posting gimons: <a href="{$url}" class="uk-button uk-button-text">{$url}</a>　　<a href="#menu" class="uk-button uk-button-default" uk-scroll>To bottom</a></p>
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
          <li><a href="{$WEB}gimon/delete/{$gimon.id}"><span uk-icon="icon: trash"></span> Delete this gimon</a></li>
          <li><a id="block{$gimon.id}" data-num="{$gimon.id}" href="#"><span uk-icon="icon: minus-circle"></span> Block this user</a></li>
        </ul>
        <script>{literal}
        $(function(){
          $('{/literal}#block{$gimon.id}{literal}').click(function(){
            $('#id').attr('value', '{/literal}{$gimon.id}{literal}');
            UIkit.modal('#block').show();
          });
        }); {/literal}
        </script>
      </div>
    </div>
  </div>
  <br>
  {/foreach}

  <hr>
  <div id="menu">
    <button uk-toggle="target: #tweet" type="button" class="uk-button uk-button-primary uk-margin-bottom">Tweet URL for posting gimons</button>
    <button type="button" class="uk-button uk-button-default uk-margin-bottom" onClick='copyText("{$url}");'>Copy the URL to Clipboard</button>
    <a href="{$WEB}user/logout" class="uk-button uk-button-default uk-margin-bottom">Logout</a>
  </div>
  <br>
  <a href="#" uk-totop uk-scroll></a>
  <br>
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

<!-- This is the modal#2 -->
<div id="block" uk-modal>
  <div class="uk-modal-dialog uk-modal-body">
    <h2 class="uk-modal-title">Block user</h2>
    <p>Are you sure to block this user?</p>
    <p class="uk-text-meta">You will not be able to receive questions from people who posted this gimon and those with the same IP address as that person. This operation cannot be undone.</p>
    <form id="blockform" method="post" action="{$WEB}user/block">
      <input type="hidden" id="id" name="id" value="">
      <input type="submit" id="blockbtn" class="uk-button uk-button-danger" value="Block">
      <button class="uk-modal-close uk-button uk-button-secondary" type="button">Cancel</button>
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
