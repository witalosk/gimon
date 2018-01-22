<?php
/* Smarty version 3.1.32-dev-35, created on 2018-01-22 10:14:06
  from 'C:\xampp\htdocs\gimon\view\templates\gimon\added.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-35',
  'unifunc' => 'content_5a653adeac9595_34707348',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6eeac8a0e7cc1e6d4e04ec24f34e6c8b4bd362b6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gimon\\view\\templates\\gimon\\added.tpl',
      1 => 1516583499,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../template/header.tpl' => 1,
    'file:../template/footer.tpl' => 1,
  ),
),false)) {
function content_5a653adeac9595_34707348 (Smarty_Internal_Template $_smarty_tpl) {
ob_start();
echo $_smarty_tpl->tpl_vars['WEB']->value;
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->_subTemplateRender('file:../template/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'Ask Gimons','WEB'=>$_prefixVariable1), 0, false);
?>

<div class="uk-container uk-text-center">
  <br>
  <div class="uk-card uk-card-default uk-card-small">
    <div class="uk-card-header">
      <h3>Gimoned to <?php echo $_smarty_tpl->tpl_vars['username']->value;?>
!</h3>
      <p>The question to <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 was completed.</p>
    </div>
    <div class="uk-card-body">
      <p class="uk-text-meta">If you are blocked, this question may not be delivered.</p>
      <a class="uk-button" href="<?php echo $_smarty_tpl->tpl_vars['WEB']->value;?>
gimon/add/<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
">More gimon</a>
    </div>
  </div>
</div>
<?php $_smarty_tpl->_subTemplateRender('file:../template/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
