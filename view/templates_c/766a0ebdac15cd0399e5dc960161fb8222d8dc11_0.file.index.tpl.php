<?php
/* Smarty version 3.1.32-dev-35, created on 2017-12-21 01:54:12
  from 'C:\xampp\htdocs\gimon\view\templates\index\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-35',
  'unifunc' => 'content_5a3a95b4c879e3_36978236',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '766a0ebdac15cd0399e5dc960161fb8222d8dc11' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gimon\\view\\templates\\index\\index.tpl',
      1 => 1513788848,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../template/header.tpl' => 1,
    'file:../template/footer.tpl' => 1,
  ),
),false)) {
function content_5a3a95b4c879e3_36978236 (Smarty_Internal_Template $_smarty_tpl) {
ob_start();
echo $_smarty_tpl->tpl_vars['WEB']->value;
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->_subTemplateRender('file:../template/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'LOGIN','WEB'=>$_prefixVariable1), 0, false);
?>

<div class="uk-container uk-text-center">
  <div class="uk-card uk-card-default uk-card-body">
    <h3 class="">匿名質問サービス<br>「gimon.noyatsu」</h3>
    <form action="user/login" method="post">
      <div>
        <label>E-mail</label>
        <input class="uk-input" type="text" name="email">
      </div>
      <div>
        <label>Password</label>
        <input class="uk-input" type="password" name="pass">
      </div>
      <input class="uk-button uk-button-primary uk-margin" type="submit" value="Login" style="cursor: pointer;">
    </form>
    <a class="uk-button" href="user/register">New account</a>
  </div>
</div>
<?php $_smarty_tpl->_subTemplateRender('file:../template/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
