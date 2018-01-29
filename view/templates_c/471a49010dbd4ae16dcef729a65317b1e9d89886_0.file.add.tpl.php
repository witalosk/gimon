<?php
/* Smarty version 3.1.32-dev-35, created on 2018-01-29 10:15:22
  from 'C:\xampp\htdocs\gimon\view\templates\gimon\add.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-35',
  'unifunc' => 'content_5a6e75aa3b94d6_27172438',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '471a49010dbd4ae16dcef729a65317b1e9d89886' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gimon\\view\\templates\\gimon\\add.tpl',
      1 => 1517188519,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../template/header.tpl' => 1,
    'file:../template/footer.tpl' => 1,
  ),
),false)) {
function content_5a6e75aa3b94d6_27172438 (Smarty_Internal_Template $_smarty_tpl) {
ob_start();
echo $_smarty_tpl->tpl_vars['WEB']->value;
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->_subTemplateRender('file:../template/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'Ask Gimons','WEB'=>$_prefixVariable1), 0, false);
?>

<div class="uk-container uk-text-center">
  <br>
  <div class="uk-card uk-card-default uk-card-small">
    <div class="uk-card-header">
      <h3>Gimon to <?php echo $_smarty_tpl->tpl_vars['username']->value;?>
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
</div>
<?php $_smarty_tpl->_subTemplateRender('file:../template/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
