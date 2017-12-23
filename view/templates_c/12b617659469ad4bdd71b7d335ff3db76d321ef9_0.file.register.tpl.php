<?php
/* Smarty version 3.1.32-dev-35, created on 2017-12-21 01:55:49
  from 'C:\xampp\htdocs\gimon\view\templates\user\register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-35',
  'unifunc' => 'content_5a3a96159c5622_54460590',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '12b617659469ad4bdd71b7d335ff3db76d321ef9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gimon\\view\\templates\\user\\register.tpl',
      1 => 1513788942,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../template/header-b.tpl' => 1,
    'file:../template/footer.tpl' => 1,
  ),
),false)) {
function content_5a3a96159c5622_54460590 (Smarty_Internal_Template $_smarty_tpl) {
ob_start();
echo $_smarty_tpl->tpl_vars['WEB']->value;
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->_subTemplateRender('file:../template/header-b.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'NEW ACCOUNT','WEB'=>$_prefixVariable1), 0, false);
?>

  <div class="uk-container">
      <div class="uk-panel uk-text-center">
        <br>
        <p>All fields are required.</p>
        <form action="" method="post">
          <div>
            <label>E-mail</label>
            <input class="uk-input" type="text" name="email">
          </div>
          <div>
            <label>Password</label>
            <input class="uk-input" type="password" name="password">
          </div>
          <div>
            <label>Password(confirm)</label>
            <input class="uk-input" type="password" name="password2">
          </div>
          <div>
            <label>Username</label>
            <input class="uk-input" type="text" name="name">
          </div>
          <br>
          <input class="uk-button uk-button-primary" type="submit" value="Register" style="cursor: pointer;">
        </form>
      </div>
    </div>
  </div>
<?php $_smarty_tpl->_subTemplateRender('file:../template/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
