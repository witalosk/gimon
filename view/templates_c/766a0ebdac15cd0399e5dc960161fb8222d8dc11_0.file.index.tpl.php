<?php
/* Smarty version 3.1.32-dev-35, created on 2018-01-22 17:04:44
  from 'C:\xampp\htdocs\gimon\view\templates\index\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-35',
  'unifunc' => 'content_5a659b1c6286b7_41565767',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '766a0ebdac15cd0399e5dc960161fb8222d8dc11' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gimon\\view\\templates\\index\\index.tpl',
      1 => 1516606222,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../template/header.tpl' => 1,
    'file:../template/footer.tpl' => 1,
  ),
),false)) {
function content_5a659b1c6286b7_41565767 (Smarty_Internal_Template $_smarty_tpl) {
ob_start();
echo $_smarty_tpl->tpl_vars['WEB']->value;
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->_subTemplateRender('file:../template/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'LOGIN','WEB'=>$_prefixVariable1), 0, false);
?>

<div class="uk-container uk-text-center">
  <br>
  <div class="uk-card uk-card-default uk-card-body">
    <h3 class="">匿名質問サービス<br>「gimon.noyatsu」</h3>
    <a class="uk-button uk-button-primary" href="user/login">Login with Twitter</a>
  </div>
</div>
<?php $_smarty_tpl->_subTemplateRender('file:../template/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
