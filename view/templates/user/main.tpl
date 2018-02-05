{include file='../template/header.tpl' title='Gimons' WEB={$WEB}}
<!-- menu -->
<div class="uk-offcanvas-content">
    <div id="offcanvas-flip" uk-offcanvas="flip: true; overlay: false" class="ms-z9999">
        <div class="uk-offcanvas-bar">
            <button class="uk-offcanvas-close" type="button" uk-close></button>
            <h3>Menu</h3>
            <div id="menu">
              <button uk-toggle="target: #tweet" type="button" class="uk-button uk-button-primary uk-margin-bottom uk-width-1-1">Tweet my URL</button>
              <button type="button" class="uk-button uk-button-default uk-margin-bottom uk-width-1-1" onClick='copyText("{$url}");'>Copy my URL to Clipboard</button>
              <a href="{$WEB}user/logout" class="uk-button uk-button-default uk-margin-bottom uk-width-1-1">Logout</a>
            </div>
        </div>
    </div>

</div>
<div class="uk-position-fixed uk-position-medium uk-position-top-right ms-z999">
  <button class="uk-button uk-button-primary uk-light default-primary-color" type="button" uk-toggle="target: #offcanvas-flip"><span uk-icon="icon: menu"></span> Menu</button>
</div>


<div id="content" class="uk-container uk-text-center">
  <h3 class="uk-margin-top">Gimons for {$username}</h3>
  <p>Your URL to post gimons: <a href="{$url}">{$url}</a></p>
  <p>DMで通知を受け取るには <a href="https://twitter.com/gimon_noyatsu">@gimon_noyatsu をフォロー</a>してください。<br>
  <span class="ms-mini">You must <a href="https://twitter.com/gimon_noyatsu">follow @gimon_noyatsu</a> to receive notifications in DM.</span></p>

  {foreach from=$gimons item=gimon}
  <div class="uk-card uk-card-default uk-card-small">
    <div class="uk-card-body">
      {$gimon.answer}
      <p>{$gimon.text}</p>
      <p class="uk-text-meta uk-margin-remove-top"><time>{$gimon.created_at}</time></p>
    </div>
    <div class="uk-card-footer">
      <a href="{$WEB}gimon/tweet/{$gimon.id}" class="uk-button uk-button-primary">Share with Comment</a>
      <button class="uk-button uk-button-default uk-icon-link" uk-icon="icon: more" type="button"></button>
      <div class="ms-z9999" uk-dropdown="mode: click">
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

  <br>
  <a href="#" uk-totop uk-scroll></a>
  <br>
  <br>
</div>

<!-- This is the modal -->
<div id="tweet" uk-modal>
  <div class="uk-modal-dialog uk-modal-body">
    <h2 class="uk-modal-title">Tweet</h2>
    <form action="" method="post">
      <textarea name="text" class="uk-textarea" rows="4">
#gimon
#gimon{$screen_name}
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
  $('#menu').append(ta)
  ta.select()
  document.execCommand("copy")
  ta.parentElement.removeChild(ta)
  UIkit.notification('Copyed!');
}
{/literal}
{$script}
</script>
{include file='../template/footer.tpl' WEB={$WEB}}
