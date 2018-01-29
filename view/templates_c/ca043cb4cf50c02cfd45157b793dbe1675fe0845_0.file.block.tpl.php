<?php
/* Smarty version 3.1.32-dev-35, created on 2018-01-29 10:03:14
  from 'C:\xampp\htdocs\gimon\view\templates\user\block.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-35',
  'unifunc' => 'content_5a6e72d27bd8b8_06098378',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ca043cb4cf50c02cfd45157b793dbe1675fe0845' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gimon\\view\\templates\\user\\block.tpl',
      1 => 1517187775,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../template/header-b.tpl' => 1,
    'file:../template/footer.tpl' => 1,
  ),
),false)) {
function content_5a6e72d27bd8b8_06098378 (Smarty_Internal_Template $_smarty_tpl) {
ob_start();
echo $_smarty_tpl->tpl_vars['WEB']->value;
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->_subTemplateRender('file:../template/header-b.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'Blocked','WEB'=>$_prefixVariable1), 0, false);
?>

<div class="uk-container uk-text-center">
  <h3 class="uk-margin-top">Block complete</h3>
  <p>You can't receive questions from people who posted this gimon and those with the same IP address as that person. </p>
  <a href="<?php echo $_smarty_tpl->tpl_vars['WEB']->value;?>
user/main" class="uk-button uk-button-primary">Back</a>
</div>
<?php $_smarty_tpl->_subTemplateRender('file:../template/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
