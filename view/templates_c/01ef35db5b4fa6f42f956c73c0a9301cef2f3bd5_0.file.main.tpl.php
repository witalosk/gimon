<?php
/* Smarty version 3.1.32-dev-35, created on 2018-01-09 11:25:30
  from 'C:\xampp\htdocs\gimon\view\templates\user\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-35',
  'unifunc' => 'content_5a54281a25d161_09713877',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '01ef35db5b4fa6f42f956c73c0a9301cef2f3bd5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gimon\\view\\templates\\user\\main.tpl',
      1 => 1515464728,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../template/header.tpl' => 1,
    'file:../template/footer.tpl' => 1,
  ),
),false)) {
function content_5a54281a25d161_09713877 (Smarty_Internal_Template $_smarty_tpl) {
ob_start();
echo $_smarty_tpl->tpl_vars['WEB']->value;
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->_subTemplateRender('file:../template/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'Gimons','WEB'=>$_prefixVariable1), 0, false);
?>

<div class="uk-container uk-text-center">
  <h3>Gimons for <?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</h3>
  <br>
  <div class="uk-card uk-card-default uk-card-small">
    <div class="uk-card-body">
      <p>なんとかなんですか？</p>
      <p class="uk-text-meta uk-margin-remove-top"><time>2018-01-09 11:21:34</time></p>
    </div>
    <div class="uk-card-footer">
      <a href="#" class="uk-button uk-button-text">Share with Comment</a>
    </div>
  </div>
  <br>
  <div class="uk-card uk-card-default uk-card-small">
    <div class="uk-card-body">
      <p>なんとかなんですか？</p>
      <p class="uk-text-meta uk-margin-remove-top"><time>2018-01-09 11:21:34</time></p>
    </div>
    <div class="uk-card-footer">
      <a href="#" class="uk-button uk-button-text">Share with Comment</a>
    </div>
  </div>
  <br>
  <div class="uk-card uk-card-default uk-card-small">
    <div class="uk-card-body">
      <p>なんとかなんですか？</p>
      <p class="uk-text-meta uk-margin-remove-top"><time>2018-01-09 11:21:34</time></p>
    </div>
    <div class="uk-card-footer">
      <a href="#" class="uk-button uk-button-text">Share with Comment</a>
    </div>
  </div>
  <br>


</div>
<?php $_smarty_tpl->_subTemplateRender('file:../template/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
