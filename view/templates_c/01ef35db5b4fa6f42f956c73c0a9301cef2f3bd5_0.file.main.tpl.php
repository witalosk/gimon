<?php
/* Smarty version 3.1.32-dev-35, created on 2018-02-05 19:23:16
  from 'C:\xampp\htdocs\gimon\view\templates\user\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-35',
  'unifunc' => 'content_5a783094852ee1_50416634',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '01ef35db5b4fa6f42f956c73c0a9301cef2f3bd5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gimon\\view\\templates\\user\\main.tpl',
      1 => 1517826195,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../template/header.tpl' => 1,
    'file:../template/footer.tpl' => 1,
  ),
),false)) {
function content_5a783094852ee1_50416634 (Smarty_Internal_Template $_smarty_tpl) {
ob_start();
echo $_smarty_tpl->tpl_vars['WEB']->value;
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->_subTemplateRender('file:../template/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'Gimons','WEB'=>$_prefixVariable1), 0, false);
?>

<!-- menu -->
<div class="uk-offcanvas-content">
    <div id="offcanvas-flip" uk-offcanvas="flip: true; overlay: false" class="ms-z9999">
        <div class="uk-offcanvas-bar">
            <button class="uk-offcanvas-close" type="button" uk-close></button>
            <h3>Menu</h3>
            <div id="menu">
              <button uk-toggle="target: #tweet" type="button" class="uk-button uk-button-primary uk-margin-bottom uk-width-1-1">Tweet my URL</button>
              <button type="button" class="uk-button uk-button-default uk-margin-bottom uk-width-1-1" onClick='copyText("<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
");'>Copy my URL to Clipboard</button>
              <a href="<?php echo $_smarty_tpl->tpl_vars['WEB']->value;?>
user/logout" class="uk-button uk-button-default uk-margin-bottom uk-width-1-1">Logout</a>
            </div>
        </div>
    </div>

</div>
<div class="uk-position-fixed uk-position-medium uk-position-top-right ms-z999">
  <button class="uk-button uk-button-primary uk-light default-primary-color" type="button" uk-toggle="target: #offcanvas-flip"><span uk-icon="icon: menu"></span> Menu</button>
</div>


<div id="content" class="uk-container uk-text-center">
  <h3 class="uk-margin-top">Gimons for <?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</h3>
  <p>Your URL to post gimons: <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['url']->value;?>
</a></p>
  <p>DMで通知を受け取るには <a href="https://twitter.com/gimon_noyatsu">@gimon_noyatsu をフォロー</a>してください。<br>
  <span class="ms-mini">You must <a href="https://twitter.com/gimon_noyatsu">follow @gimon_noyatsu</a> to receive notifications in DM.</span></p>

  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['gimons']->value, 'gimon');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['gimon']->value) {
?>
  <div class="uk-card uk-card-default uk-card-small">
    <div class="uk-card-body">
      <?php echo $_smarty_tpl->tpl_vars['gimon']->value['answer'];?>

      <p><?php echo $_smarty_tpl->tpl_vars['gimon']->value['text'];?>
</p>
      <p class="uk-text-meta uk-margin-remove-top"><time><?php echo $_smarty_tpl->tpl_vars['gimon']->value['created_at'];?>
</time></p>
    </div>
    <div class="uk-card-footer">
      <a href="<?php echo $_smarty_tpl->tpl_vars['WEB']->value;?>
gimon/tweet/<?php echo $_smarty_tpl->tpl_vars['gimon']->value['id'];?>
" class="uk-button uk-button-primary">Share with Comment</a>
      <button class="uk-button uk-button-default uk-icon-link" uk-icon="icon: more" type="button"></button>
      <div class="ms-z9999" uk-dropdown="mode: click">
        <ul class="uk-nav uk-dropdown-nav">
          <li><a href="<?php echo $_smarty_tpl->tpl_vars['WEB']->value;?>
gimon/delete/<?php echo $_smarty_tpl->tpl_vars['gimon']->value['id'];?>
"><span uk-icon="icon: trash"></span> Delete this gimon</a></li>
          <li><a id="block<?php echo $_smarty_tpl->tpl_vars['gimon']->value['id'];?>
" data-num="<?php echo $_smarty_tpl->tpl_vars['gimon']->value['id'];?>
" href="#"><span uk-icon="icon: minus-circle"></span> Block this user</a></li>
        </ul>
        <?php echo '<script'; ?>
>
        $(function(){
          $('#block<?php echo $_smarty_tpl->tpl_vars['gimon']->value['id'];?>
').click(function(){
            $('#id').attr('value', '<?php echo $_smarty_tpl->tpl_vars['gimon']->value['id'];?>
');
            UIkit.modal('#block').show();
          });
        }); 
        <?php echo '</script'; ?>
>
      </div>
    </div>
  </div>
  <br>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>


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
#gimon<?php echo $_smarty_tpl->tpl_vars['screen_name']->value;?>

<?php echo $_smarty_tpl->tpl_vars['url']->value;?>

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
    <form id="blockform" method="post" action="<?php echo $_smarty_tpl->tpl_vars['WEB']->value;?>
user/block">
      <input type="hidden" id="id" name="id" value="">
      <input type="submit" id="blockbtn" class="uk-button uk-button-danger" value="Block">
      <button class="uk-modal-close uk-button uk-button-secondary" type="button">Cancel</button>
    </form>
  </div>
</div>

<?php echo '<script'; ?>
>


function copyText(text){
  var ta = document.createElement("textarea")
  ta.value = text
  $('#menu').append(ta)
  ta.select()
  document.execCommand("copy")
  ta.parentElement.removeChild(ta)
  UIkit.notification('Copyed!');
}

<?php echo $_smarty_tpl->tpl_vars['script']->value;?>

<?php echo '</script'; ?>
>
<?php ob_start();
echo $_smarty_tpl->tpl_vars['WEB']->value;
$_prefixVariable2 = ob_get_clean();
$_smarty_tpl->_subTemplateRender('file:../template/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('WEB'=>$_prefixVariable2), 0, false);
?>

<?php }
}
