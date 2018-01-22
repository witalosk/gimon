<?php
/* Smarty version 3.1.32-dev-35, created on 2018-01-22 17:54:46
  from 'C:\xampp\htdocs\gimon\view\templates\index\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-35',
  'unifunc' => 'content_5a65a6d6d84403_89256329',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '766a0ebdac15cd0399e5dc960161fb8222d8dc11' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gimon\\view\\templates\\index\\index.tpl',
      1 => 1516611285,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../template/header.tpl' => 1,
    'file:../template/footer.tpl' => 1,
  ),
),false)) {
function content_5a65a6d6d84403_89256329 (Smarty_Internal_Template $_smarty_tpl) {
ob_start();
echo $_smarty_tpl->tpl_vars['WEB']->value;
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->_subTemplateRender('file:../template/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'LOGIN','WEB'=>$_prefixVariable1), 0, false);
?>

<div class="uk-container uk-text-center">
  <br>
  <div class="uk-card uk-card-default uk-card-body">
    <h3 class="">Anonymous Questioning Service<br>「gimon.noyatsu」</h3>
    <p class="uk-meta">匿名質問サービス「gimon.noyatsu」</p>
    <a class="uk-button uk-button-primary" href="user/login">Login with Twitter</a>
  </div>
  <br>
  <div class="uk-card uk-card-default uk-card-body">
    <h3 class="">Information / おしらせ</h3>
    <p>We are currently in beta testing. The administrator shall be able to correct, add, suspend, delete, etc. any information posted on this site without notice at any time. Moreover, even if some inconvenience or damage occurs to the user by using this site or the contents, this site does not take any responsibility.</p>
    <p>現在ベータテスト中です。当サイトのコンテンツの内容が正確であるかどうか、最新のものであるかどうか、安全なものであるか等について保証をすることはなく、何らの責任を負うものではありません。また、管理者は通知することなく当サイトに掲載した情報の訂正、修正、追加、中断、削除等をいつでも行うことができるものとします。また、当サイト、またはコンテンツのご利用により、万一、ご利用者様に何らかの不都合や損害が発生したとしても、当サイトは何らの責任を負うものではありません。</p>
  </div>

</div>
<?php $_smarty_tpl->_subTemplateRender('file:../template/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
