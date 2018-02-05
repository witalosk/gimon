<?php
/* Smarty version 3.1.32-dev-35, created on 2018-02-05 19:19:55
  from 'C:\xampp\htdocs\gimon\view\templates\gimon\add.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-35',
  'unifunc' => 'content_5a782fcbd0abe3_19346157',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '471a49010dbd4ae16dcef729a65317b1e9d89886' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gimon\\view\\templates\\gimon\\add.tpl',
      1 => 1517825939,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../template/header.tpl' => 1,
    'file:../template/footer.tpl' => 1,
  ),
),false)) {
function content_5a782fcbd0abe3_19346157 (Smarty_Internal_Template $_smarty_tpl) {
ob_start();
echo $_smarty_tpl->tpl_vars['WEB']->value;
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->_subTemplateRender('file:../template/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'Ask Gimons','WEB'=>$_prefixVariable1), 0, false);
?>

<div id="content" class="uk-container uk-text-center">
  <br>
  <div class="uk-card uk-card-default uk-card-small">
    <div class="uk-card-header">
      <h3>Gimon for <?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</h3>
      <p class="uk-text-meta"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</p>
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
    <a class="uk-button uk-button-default"  href="<?php echo $_smarty_tpl->tpl_vars['WEB']->value;?>
">Sign up / Sign in<br><span class="uk-text-meta">新規登録 / ログイン</span></a>
  </div>
  <hr>
  <h3>Answers of <?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</h3>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['answers']->value, 'answer');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['answer']->value) {
?>
  <div class="uk-card uk-card-default uk-card-small" uk-scrollspy="cls: uk-animation-fade; repeat: true">
    <div class="uk-card-body">
      <p><?php echo $_smarty_tpl->tpl_vars['answer']->value;?>
</p>
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
<?php ob_start();
echo $_smarty_tpl->tpl_vars['WEB']->value;
$_prefixVariable2 = ob_get_clean();
$_smarty_tpl->_subTemplateRender('file:../template/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('WEB'=>$_prefixVariable2), 0, false);
?>

<?php }
}
