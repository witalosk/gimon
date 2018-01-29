<?php
/* Smarty version 3.1.32-dev-35, created on 2018-01-29 11:16:59
  from 'C:\xampp\htdocs\gimon\view\templates\user\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-35',
  'unifunc' => 'content_5a6e841b37e2a9_36103810',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '01ef35db5b4fa6f42f956c73c0a9301cef2f3bd5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gimon\\view\\templates\\user\\main.tpl',
      1 => 1517192210,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../template/header.tpl' => 1,
    'file:../template/footer.tpl' => 1,
  ),
),false)) {
function content_5a6e841b37e2a9_36103810 (Smarty_Internal_Template $_smarty_tpl) {
ob_start();
echo $_smarty_tpl->tpl_vars['WEB']->value;
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->_subTemplateRender('file:../template/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'Gimons','WEB'=>$_prefixVariable1), 0, false);
?>

<div class="uk-container uk-text-center">
  <h3 class="uk-margin-top">Gimons for <?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</h3>
  <p>Your URL for posting gimons: <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" class="uk-button uk-button-text"><?php echo $_smarty_tpl->tpl_vars['url']->value;?>
</a>　　<a href="#menu" class="uk-button uk-button-default" uk-scroll>To bottom</a></p>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['gimons']->value, 'gimon');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['gimon']->value) {
?>
  <div class="uk-card uk-card-default uk-card-small">
    <div class="uk-card-body">
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
      <div uk-dropdown="mode: click">
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


  <hr>
  <div id="menu">
    <button uk-toggle="target: #tweet" type="button" class="uk-button uk-button-primary uk-margin-bottom">Tweet URL for posting gimons</button>
    <button type="button" class="uk-button uk-button-default uk-margin-bottom" onClick='copyText("<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
");'>Copy the URL to Clipboard</button>
    <a href="<?php echo $_smarty_tpl->tpl_vars['WEB']->value;?>
user/logout" class="uk-button uk-button-default uk-margin-bottom">Logout</a>
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
#<?php echo $_smarty_tpl->tpl_vars['screen_name']->value;?>
Gimon
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
  document.body.appendChild(ta)
  ta.select()
  document.execCommand("copy")
  ta.parentElement.removeChild(ta)
  UIkit.notification('Copyed!');
}



<?php echo $_smarty_tpl->tpl_vars['script']->value;?>

<?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender('file:../template/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
